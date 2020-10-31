use serde::{Deserialize};
use std::time::Instant;
use std::fs::File;
use std::io::BufReader;

#[derive(PartialEq, Deserialize)]
struct Node {
    pub left: Option<Box<Node>>,
    pub right: Option<Box<Node>>,
    pub value: u64,
}

impl Node {
    fn num_nodes(&self) -> u64 {
        let mut count = 1;

        if let Some(left) = &self.left {
            count = count + left.num_nodes();
        }

        if let Some(right) = &self.right {
            count = count + right.num_nodes();
        }

        count
    }
}

fn binary_trees_equal(tree1: Node, tree2: Node) -> bool {
    if tree1.value != tree2.value {
        return false;
    }

    match (tree1.left, tree2.left, tree1.right, tree2.right) {
        (None, None, None, None) => true,
        (Some(_), None, None, None) => false,
        (None, Some(_), None, None) => false,
        (None, None, Some(_), None) => false,
        (None, None, None, Some(_)) => false,
        (Some(_), None, Some(_), None) => false,
        (Some(_), None, None, Some(_)) => false,
        (None, Some(_), Some(_), None) => false,
        (None, Some(_), None, Some(_)) => false,
        (Some(_), Some(_), Some(_), None) => false,
        (Some(_), Some(_), None, Some(_)) => false,
        (Some(_), None, Some(_), Some(_)) => false,
        (None, Some(_), Some(_), Some(_)) => false,
        (Some(one_left), Some(two_left), None, None) => binary_trees_equal(*one_left, *two_left),
        (None, None, Some(one_right), Some(two_right)) => {
            binary_trees_equal(*one_right, *two_right)
        }
        (Some(one_left), Some(two_left), Some(one_right), Some(two_right)) => {
            if binary_trees_equal(*one_left, *two_left) {
                return binary_trees_equal(*one_right, *two_right);
            }

            false
        }
    }
}

fn fetch_tree(path: &str) -> Node {
    let file = File::open(path).unwrap();
    let reader = BufReader::new(file);
    serde_json::from_reader(reader).unwrap()
}

fn main() {
    let tree_1: Node = fetch_tree("tree_1.json");
    let tree_2: Node = fetch_tree("tree_2.json");

    let count = tree_1.num_nodes();

    let now = Instant::now();
    let is_equal = binary_trees_equal(tree_1, tree_2);
    let elapsed = now.elapsed().as_micros();

    println!("The trees are equal: {}\nExecution: {} microseconds for {} nodes", is_equal, elapsed, count);
}
