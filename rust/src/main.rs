use std::fs::File;
use std::io::BufReader;
use std::time::Instant;

mod node;

use node::{binary_trees_equal, Node};

fn fetch_tree(path: &str) -> Node {
    let file = File::open(path).unwrap();
    let reader = BufReader::new(file);
    serde_json::from_reader(reader).unwrap()
}

fn main() {
    let tree_1: Node = fetch_tree("../tree_1.json");
    let tree_2: Node = fetch_tree("../tree_2.json");

    let count = tree_1.num_nodes();

    let now = Instant::now();
    let is_equal = binary_trees_equal(tree_1, tree_2);
    let elapsed = now.elapsed().as_micros();

    println!(
        "
        Equal:      {}
        Time (μs):  {}
        Node count: {}
    ",
        is_equal, elapsed, count
    );
}
