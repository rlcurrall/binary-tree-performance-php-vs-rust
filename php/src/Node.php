<?php

namespace Acme;

class Node
{
    public int $value;
    public Node|null $left;
    public Node|null $right;

    public function __construct(int $value, Node|null $left, Node|null $right)
    {
        $this->value = $value;
        $this->left = $left;
        $this->right = $right;
    }

    public function num_nodes(): int
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

    public static function from_object(object $data): self
    {
        $left = $data->left ? static::from_object($data->left) : null;
        $right = $data->right ? static::from_object($data->right) : null;

        return new static($data->value, $left, $right);
    }
}

function binary_trees_equal(Node $tree1, Node $tree2): bool
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
