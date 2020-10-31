<?php

class Node
{
    public $left;
    public $right;
    public $value;

    public function __construct($value, $left, $right)
    {
        $this->value = $value;
        $this->left = $left;
        $this->right = $right;
    }

    public function num_nodes()
    {
        $count = 1;
        if ($this->left) {
            $count += $this->left->num_nodes();
        }
        if ($this->right) {
            $count += $this->right->num_nodes();
        }
        return $count;
    }

    public static function from_object(object $data)
    {
        $left = $data->left ? static::from_object($data->left) : null;
        $right = $data->right ? static::from_object($data->right) : null;

        return new static($data->value, $left, $right);
    }
}

function binary_trees_equal($tree1, $tree2)
{
    if ($tree1->value !== $tree2->value) {
        return false;
    }

    if (
        !isset($tree1->left) &&
        !isset($tree1->right) &&
        !isset($tree2->left) &&
        !isset($tree2->right)
    ) {
        return true;
    }

    if ((isset($tree1->left) && !isset($tree2->left)) ||
        (!isset($tree1->left) && isset($tree2->left)) ||
        (isset($tree1->right) && !isset($tree2->right)) ||
        (!isset($tree1->right) && isset($tree2->right))
    ) {
        return false;
    }

    $left_equal = true;
    $right_equal = true;

    if (isset($tree1->left) && isset($tree2->left)) {
        $left_equal = binary_trees_equal($tree1->left, $tree2->left);
    }

    if (isset($tree1->right) && isset($tree2->right)) {
        $right_equal = binary_trees_equal($tree1->right, $tree2->right);
    }

    return $left_equal && $right_equal;
}

// Main
$tree1 = Node::from_object(json_decode(file_get_contents(dirname(__DIR__, 1) . "/tree_1.json")));
$tree2 = Node::from_object(json_decode(file_get_contents(dirname(__DIR__, 1) . "/tree_2.json")));

$count = $tree1->num_nodes();

$start = microtime(true);
$is_equal = binary_trees_equal($tree1, $tree2);
$end = microtime(true);

$is_equal = $is_equal ? 'true' : 'false';
$time = ($end - $start) * 1000 * 1000;

echo "Trees are equal: {$is_equal}\nProcess took {$time} microseconds for {$count} nodes";
