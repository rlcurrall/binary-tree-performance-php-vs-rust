use serde::Deserialize;

#[derive(PartialEq, Deserialize)]
pub struct Node {
    pub left: Option<Box<Node>>,
    pub right: Option<Box<Node>>,
    pub value: u64,
}

impl Node {
    pub fn num_nodes(&self) -> u64 {
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

pub fn binary_trees_equal(tree1: Node, tree2: Node) -> bool {
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
