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
$tree1 = new Node(
    1,
    new Node(
        2,
        new Node(
            3,
            new Node(
                1,
                new Node(
                    2,
                    new Node(
                        3,
                        null,
                        null
                    ),
                    new Node(
                        1,
                        new Node(
                            2,
                            new Node(
                                3,
                                null,
                                null
                            ),
                            null
                        ),
                        new Node(
                            2,
                            null,
                            new Node(
                                1,
                                new Node(
                                    2,
                                    new Node(
                                        3,
                                        new Node(
                                            1,
                                            new Node(
                                                2,
                                                new Node(
                                                    3,
                                                    null,
                                                    null
                                                ),
                                                null
                                            ),
                                            new Node(
                                                2,
                                                new Node(
                                                    2,
                                                    new Node(
                                                        3,
                                                        new Node(
                                                            1,
                                                            new Node(
                                                                2,
                                                                new Node(
                                                                    3,
                                                                    null,
                                                                    null
                                                                ),
                                                                null
                                                            ),
                                                            new Node(
                                                                2,
                                                                null,
                                                                new Node(
                                                                    2,
                                                                    new Node(
                                                                        3,
                                                                        new Node(
                                                                            1,
                                                                            new Node(
                                                                                2,
                                                                                new Node(
                                                                                    3,
                                                                                    null,
                                                                                    null
                                                                                ),
                                                                                null
                                                                            ),
                                                                            new Node(
                                                                                2,
                                                                                new Node(
                                                                                    2,
                                                                                    new Node(
                                                                                        3,
                                                                                        new Node(
                                                                                            1,
                                                                                            new Node(
                                                                                                2,
                                                                                                new Node(
                                                                                                    3,
                                                                                                    null,
                                                                                                    new Node(
                                                                                                        2,
                                                                                                        new Node(
                                                                                                            3,
                                                                                                            new Node(
                                                                                                                1,
                                                                                                                new Node(
                                                                                                                    2,
                                                                                                                    new Node(
                                                                                                                        3,
                                                                                                                        new Node(
                                                                                                                            2,
                                                                                                                            new Node(
                                                                                                                                3,
                                                                                                                                new Node(
                                                                                                                                    1,
                                                                                                                                    new Node(
                                                                                                                                        2,
                                                                                                                                        new Node(
                                                                                                                                            3,
                                                                                                                                            null,
                                                                                                                                            new Node(
                                                                                                                                                2,
                                                                                                                                                new Node(
                                                                                                                                                    3,
                                                                                                                                                    new Node(
                                                                                                                                                        1,
                                                                                                                                                        new Node(
                                                                                                                                                            2,
                                                                                                                                                            new Node(
                                                                                                                                                                3,
                                                                                                                                                                null,
                                                                                                                                                                null
                                                                                                                                                            ),
                                                                                                                                                            null
                                                                                                                                                        ),
                                                                                                                                                        new Node(
                                                                                                                                                            2,
                                                                                                                                                            new Node(
                                                                                                                                                                2,
                                                                                                                                                                new Node(
                                                                                                                                                                    3,
                                                                                                                                                                    new Node(
                                                                                                                                                                        1,
                                                                                                                                                                        new Node(
                                                                                                                                                                            2,
                                                                                                                                                                            new Node(
                                                                                                                                                                                3,
                                                                                                                                                                                null,
                                                                                                                                                                                null
                                                                                                                                                                            ),
                                                                                                                                                                            null
                                                                                                                                                                        ),
                                                                                                                                                                        new Node(
                                                                                                                                                                            2,
                                                                                                                                                                            null,
                                                                                                                                                                            new Node(
                                                                                                                                                                                2,
                                                                                                                                                                                new Node(
                                                                                                                                                                                    3,
                                                                                                                                                                                    new Node(
                                                                                                                                                                                        1,
                                                                                                                                                                                        new Node(
                                                                                                                                                                                            2,
                                                                                                                                                                                            new Node(
                                                                                                                                                                                                3,
                                                                                                                                                                                                new Node(
                                                                                                                                                                                                    2,
                                                                                                                                                                                                    new Node(
                                                                                                                                                                                                        3,
                                                                                                                                                                                                        new Node(
                                                                                                                                                                                                            1,
                                                                                                                                                                                                            new Node(
                                                                                                                                                                                                                2,
                                                                                                                                                                                                                new Node(
                                                                                                                                                                                                                    3,
                                                                                                                                                                                                                    null,
                                                                                                                                                                                                                    null
                                                                                                                                                                                                                ),
                                                                                                                                                                                                                null
                                                                                                                                                                                                            ),
                                                                                                                                                                                                            new Node(
                                                                                                                                                                                                                2,
                                                                                                                                                                                                                new Node(
                                                                                                                                                                                                                    2,
                                                                                                                                                                                                                    new Node(
                                                                                                                                                                                                                        3,
                                                                                                                                                                                                                        new Node(
                                                                                                                                                                                                                            1,
                                                                                                                                                                                                                            new Node(
                                                                                                                                                                                                                                2,
                                                                                                                                                                                                                                new Node(
                                                                                                                                                                                                                                    3,
                                                                                                                                                                                                                                    new Node(
                                                                                                                                                                                                                                        3,
                                                                                                                                                                                                                                        null,
                                                                                                                                                                                                                                        new Node(
                                                                                                                                                                                                                                            3,
                                                                                                                                                                                                                                            null,
                                                                                                                                                                                                                                            null
                                                                                                                                                                                                                                        )
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    null
                                                                                                                                                                                                                                ),
                                                                                                                                                                                                                                null
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            new Node(
                                                                                                                                                                                                                                2,
                                                                                                                                                                                                                                new Node(
                                                                                                                                                                                                                                    3,
                                                                                                                                                                                                                                    new Node(
                                                                                                                                                                                                                                        3,
                                                                                                                                                                                                                                        null,
                                                                                                                                                                                                                                        null
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    null
                                                                                                                                                                                                                                ),
                                                                                                                                                                                                                                null
                                                                                                                                                                                                                            )
                                                                                                                                                                                                                        ),
                                                                                                                                                                                                                        null
                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                    null
                                                                                                                                                                                                                ),
                                                                                                                                                                                                                null
                                                                                                                                                                                                            )
                                                                                                                                                                                                        ),
                                                                                                                                                                                                        null
                                                                                                                                                                                                    ),
                                                                                                                                                                                                    null
                                                                                                                                                                                                ),
                                                                                                                                                                                                null
                                                                                                                                                                                            ),
                                                                                                                                                                                            null
                                                                                                                                                                                        ),
                                                                                                                                                                                        new Node(
                                                                                                                                                                                            2,
                                                                                                                                                                                            null,
                                                                                                                                                                                            null
                                                                                                                                                                                        )
                                                                                                                                                                                    ),
                                                                                                                                                                                    null
                                                                                                                                                                                ),
                                                                                                                                                                                null
                                                                                                                                                                            )
                                                                                                                                                                        )
                                                                                                                                                                    ),
                                                                                                                                                                    null
                                                                                                                                                                ),
                                                                                                                                                                null
                                                                                                                                                            ),
                                                                                                                                                            null
                                                                                                                                                        )
                                                                                                                                                    ),
                                                                                                                                                    null
                                                                                                                                                ),
                                                                                                                                                null
                                                                                                                                            )
                                                                                                                                        ),
                                                                                                                                        null
                                                                                                                                    ),
                                                                                                                                    new Node(
                                                                                                                                        2,
                                                                                                                                        null,
                                                                                                                                        null
                                                                                                                                    )
                                                                                                                                ),
                                                                                                                                null
                                                                                                                            ),
                                                                                                                            null
                                                                                                                        ),
                                                                                                                        null
                                                                                                                    ),
                                                                                                                    null
                                                                                                                ),
                                                                                                                new Node(
                                                                                                                    2,
                                                                                                                    null,
                                                                                                                    null
                                                                                                                )
                                                                                                            ),
                                                                                                            null
                                                                                                        ),
                                                                                                        null
                                                                                                    )
                                                                                                ),
                                                                                                null
                                                                                            ),
                                                                                            new Node(
                                                                                                2,
                                                                                                null,
                                                                                                null
                                                                                            )
                                                                                        ),
                                                                                        null
                                                                                    ),
                                                                                    null
                                                                                ),
                                                                                null
                                                                            )
                                                                        ),
                                                                        null
                                                                    ),
                                                                    null
                                                                )
                                                            )
                                                        ),
                                                        null
                                                    ),
                                                    null
                                                ),
                                                null
                                            )
                                        ),
                                        null
                                    ),
                                    null
                                ),
                                new Node(
                                    2,
                                    null,
                                    new Node(
                                        1,
                                        new Node(
                                            2,
                                            new Node(
                                                3,
                                                new Node(
                                                    1,
                                                    new Node(
                                                        2,
                                                        new Node(
                                                            3,
                                                            null,
                                                            null
                                                        ),
                                                        null
                                                    ),
                                                    new Node(
                                                        2,
                                                        null,
                                                        null
                                                    )
                                                ),
                                                null
                                            ),
                                            null
                                        ),
                                        new Node(
                                            2,
                                            null,
                                            null
                                        )
                                    )
                                )
                            )
                        )
                    )
                ),
                new Node(
                    2,
                    new Node(
                        1,
                        new Node(
                            2,
                            new Node(
                                3,
                                new Node(
                                    1,
                                    new Node(
                                        2,
                                        new Node(
                                            3,
                                            null,
                                            null
                                        ),
                                        null
                                    ),
                                    new Node(
                                        2,
                                        null,
                                        null
                                    )
                                ),
                                null
                            ),
                            null
                        ),
                        new Node(
                            2,
                            null,
                            null
                        )
                    ),
                    null
                )
            ),
            new Node(
                1,
                new Node(
                    2,
                    new Node(
                        3,
                        null,
                        null
                    ),
                    new Node(
                        1,
                        new Node(
                            2,
                            new Node(
                                3,
                                null,
                                null
                            ),
                            null
                        ),
                        new Node(
                            2,
                            null,
                            new Node(
                                1,
                                new Node(
                                    2,
                                    new Node(
                                        3,
                                        new Node(
                                            1,
                                            new Node(
                                                2,
                                                new Node(
                                                    3,
                                                    null,
                                                    null
                                                ),
                                                null
                                            ),
                                            new Node(
                                                2,
                                                null,
                                                null
                                            )
                                        ),
                                        null
                                    ),
                                    null
                                ),
                                new Node(
                                    2,
                                    null,
                                    new Node(
                                        1,
                                        new Node(
                                            2,
                                            new Node(
                                                3,
                                                new Node(
                                                    1,
                                                    new Node(
                                                        2,
                                                        new Node(
                                                            3,
                                                            null,
                                                            null
                                                        ),
                                                        null
                                                    ),
                                                    new Node(
                                                        2,
                                                        null,
                                                        null
                                                    )
                                                ),
                                                new Node(
                                                    1,
                                                    new Node(
                                                        2,
                                                        new Node(
                                                            3,
                                                            new Node(
                                                                1,
                                                                new Node(
                                                                    2,
                                                                    new Node(
                                                                        3,
                                                                        null,
                                                                        null
                                                                    ),
                                                                    new Node(
                                                                        1,
                                                                        new Node(
                                                                            2,
                                                                            new Node(
                                                                                3,
                                                                                null,
                                                                                null
                                                                            ),
                                                                            null
                                                                        ),
                                                                        new Node(
                                                                            2,
                                                                            null,
                                                                            new Node(
                                                                                1,
                                                                                new Node(
                                                                                    2,
                                                                                    new Node(
                                                                                        3,
                                                                                        new Node(
                                                                                            1,
                                                                                            new Node(
                                                                                                2,
                                                                                                new Node(
                                                                                                    3,
                                                                                                    null,
                                                                                                    null
                                                                                                ),
                                                                                                null
                                                                                            ),
                                                                                            new Node(
                                                                                                2,
                                                                                                null,
                                                                                                null
                                                                                            )
                                                                                        ),
                                                                                        null
                                                                                    ),
                                                                                    null
                                                                                ),
                                                                                new Node(
                                                                                    2,
                                                                                    null,
                                                                                    new Node(
                                                                                        1,
                                                                                        new Node(
                                                                                            2,
                                                                                            new Node(
                                                                                                3,
                                                                                                new Node(
                                                                                                    1,
                                                                                                    new Node(
                                                                                                        2,
                                                                                                        new Node(
                                                                                                            3,
                                                                                                            null,
                                                                                                            null
                                                                                                        ),
                                                                                                        null
                                                                                                    ),
                                                                                                    new Node(
                                                                                                        2,
                                                                                                        null,
                                                                                                        null
                                                                                                    )
                                                                                                ),
                                                                                                null
                                                                                            ),
                                                                                            null
                                                                                        ),
                                                                                        new Node(
                                                                                            2,
                                                                                            null,
                                                                                            null
                                                                                        )
                                                                                    )
                                                                                )
                                                                            )
                                                                        )
                                                                    )
                                                                ),
                                                                new Node(
                                                                    2,
                                                                    new Node(
                                                                        1,
                                                                        new Node(
                                                                            2,
                                                                            new Node(
                                                                                3,
                                                                                new Node(
                                                                                    1,
                                                                                    new Node(
                                                                                        2,
                                                                                        new Node(
                                                                                            3,
                                                                                            null,
                                                                                            null
                                                                                        ),
                                                                                        null
                                                                                    ),
                                                                                    new Node(
                                                                                        2,
                                                                                        null,
                                                                                        null
                                                                                    )
                                                                                ),
                                                                                null
                                                                            ),
                                                                            null
                                                                        ),
                                                                        new Node(
                                                                            2,
                                                                            null,
                                                                            null
                                                                        )
                                                                    ),
                                                                    null
                                                                )
                                                            ),
                                                            new Node(
                                                                1,
                                                                new Node(
                                                                    2,
                                                                    new Node(
                                                                        3,
                                                                        null,
                                                                        null
                                                                    ),
                                                                    new Node(
                                                                        1,
                                                                        new Node(
                                                                            2,
                                                                            new Node(
                                                                                3,
                                                                                null,
                                                                                null
                                                                            ),
                                                                            null
                                                                        ),
                                                                        new Node(
                                                                            2,
                                                                            null,
                                                                            new Node(
                                                                                1,
                                                                                new Node(
                                                                                    2,
                                                                                    new Node(
                                                                                        3,
                                                                                        new Node(
                                                                                            1,
                                                                                            new Node(
                                                                                                2,
                                                                                                new Node(
                                                                                                    3,
                                                                                                    null,
                                                                                                    null
                                                                                                ),
                                                                                                null
                                                                                            ),
                                                                                            new Node(
                                                                                                2,
                                                                                                null,
                                                                                                null
                                                                                            )
                                                                                        ),
                                                                                        null
                                                                                    ),
                                                                                    null
                                                                                ),
                                                                                new Node(
                                                                                    2,
                                                                                    null,
                                                                                    new Node(
                                                                                        1,
                                                                                        new Node(
                                                                                            2,
                                                                                            new Node(
                                                                                                3,
                                                                                                new Node(
                                                                                                    1,
                                                                                                    new Node(
                                                                                                        2,
                                                                                                        new Node(
                                                                                                            3,
                                                                                                            null,
                                                                                                            null
                                                                                                        ),
                                                                                                        null
                                                                                                    ),
                                                                                                    new Node(
                                                                                                        2,
                                                                                                        null,
                                                                                                        null
                                                                                                    )
                                                                                                ),
                                                                                                null
                                                                                            ),
                                                                                            null
                                                                                        ),
                                                                                        new Node(
                                                                                            2,
                                                                                            null,
                                                                                            null
                                                                                        )
                                                                                    )
                                                                                )
                                                                            )
                                                                        )
                                                                    )
                                                                ),
                                                                new Node(
                                                                    2,
                                                                    new Node(
                                                                        1,
                                                                        new Node(
                                                                            2,
                                                                            new Node(
                                                                                3,
                                                                                new Node(
                                                                                    1,
                                                                                    new Node(
                                                                                        2,
                                                                                        new Node(
                                                                                            3,
                                                                                            null,
                                                                                            null
                                                                                        ),
                                                                                        null
                                                                                    ),
                                                                                    new Node(
                                                                                        2,
                                                                                        null,
                                                                                        null
                                                                                    )
                                                                                ),
                                                                                null
                                                                            ),
                                                                            null
                                                                        ),
                                                                        new Node(
                                                                            2,
                                                                            null,
                                                                            new Node(
                                                                                1,
                                                                                new Node(
                                                                                    2,
                                                                                    new Node(
                                                                                        3,
                                                                                        null,
                                                                                        null
                                                                                    ),
                                                                                    new Node(
                                                                                        1,
                                                                                        new Node(
                                                                                            2,
                                                                                            new Node(
                                                                                                3,
                                                                                                null,
                                                                                                null
                                                                                            ),
                                                                                            null
                                                                                        ),
                                                                                        new Node(
                                                                                            2,
                                                                                            null,
                                                                                            new Node(
                                                                                                1,
                                                                                                new Node(
                                                                                                    2,
                                                                                                    new Node(
                                                                                                        3,
                                                                                                        new Node(
                                                                                                            1,
                                                                                                            new Node(
                                                                                                                2,
                                                                                                                new Node(
                                                                                                                    3,
                                                                                                                    null,
                                                                                                                    null
                                                                                                                ),
                                                                                                                null
                                                                                                            ),
                                                                                                            new Node(
                                                                                                                2,
                                                                                                                null,
                                                                                                                null
                                                                                                            )
                                                                                                        ),
                                                                                                        null
                                                                                                    ),
                                                                                                    null
                                                                                                ),
                                                                                                new Node(
                                                                                                    2,
                                                                                                    null,
                                                                                                    new Node(
                                                                                                        1,
                                                                                                        new Node(
                                                                                                            2,
                                                                                                            new Node(
                                                                                                                3,
                                                                                                                new Node(
                                                                                                                    1,
                                                                                                                    new Node(
                                                                                                                        2,
                                                                                                                        new Node(
                                                                                                                            3,
                                                                                                                            null,
                                                                                                                            null
                                                                                                                        ),
                                                                                                                        null
                                                                                                                    ),
                                                                                                                    new Node(
                                                                                                                        2,
                                                                                                                        null,
                                                                                                                        null
                                                                                                                    )
                                                                                                                ),
                                                                                                                null
                                                                                                            ),
                                                                                                            null
                                                                                                        ),
                                                                                                        new Node(
                                                                                                            2,
                                                                                                            null,
                                                                                                            null
                                                                                                        )
                                                                                                    )
                                                                                                )
                                                                                            )
                                                                                        )
                                                                                    )
                                                                                ),
                                                                                new Node(
                                                                                    2,
                                                                                    new Node(
                                                                                        1,
                                                                                        new Node(
                                                                                            2,
                                                                                            new Node(
                                                                                                3,
                                                                                                new Node(
                                                                                                    1,
                                                                                                    new Node(
                                                                                                        2,
                                                                                                        new Node(
                                                                                                            3,
                                                                                                            null,
                                                                                                            null
                                                                                                        ),
                                                                                                        null
                                                                                                    ),
                                                                                                    new Node(
                                                                                                        2,
                                                                                                        null,
                                                                                                        null
                                                                                                    )
                                                                                                ),
                                                                                                null
                                                                                            ),
                                                                                            null
                                                                                        ),
                                                                                        new Node(
                                                                                            2,
                                                                                            null,
                                                                                            null
                                                                                        )
                                                                                    ),
                                                                                    new Node(
                                                                                        1,
                                                                                        new Node(
                                                                                            2,
                                                                                            new Node(
                                                                                                3,
                                                                                                null,
                                                                                                null
                                                                                            ),
                                                                                            new Node(
                                                                                                1,
                                                                                                new Node(
                                                                                                    2,
                                                                                                    new Node(
                                                                                                        3,
                                                                                                        null,
                                                                                                        null
                                                                                                    ),
                                                                                                    null
                                                                                                ),
                                                                                                new Node(
                                                                                                    2,
                                                                                                    null,
                                                                                                    new Node(
                                                                                                        1,
                                                                                                        new Node(
                                                                                                            2,
                                                                                                            new Node(
                                                                                                                3,
                                                                                                                new Node(
                                                                                                                    1,
                                                                                                                    new Node(
                                                                                                                        2,
                                                                                                                        new Node(
                                                                                                                            3,
                                                                                                                            null,
                                                                                                                            null
                                                                                                                        ),
                                                                                                                        null
                                                                                                                    ),
                                                                                                                    new Node(
                                                                                                                        2,
                                                                                                                        null,
                                                                                                                        null
                                                                                                                    )
                                                                                                                ),
                                                                                                                null
                                                                                                            ),
                                                                                                            null
                                                                                                        ),
                                                                                                        new Node(
                                                                                                            2,
                                                                                                            null,
                                                                                                            new Node(
                                                                                                                1,
                                                                                                                new Node(
                                                                                                                    2,
                                                                                                                    new Node(
                                                                                                                        3,
                                                                                                                        new Node(
                                                                                                                            1,
                                                                                                                            new Node(
                                                                                                                                2,
                                                                                                                                new Node(
                                                                                                                                    3,
                                                                                                                                    null,
                                                                                                                                    null
                                                                                                                                ),
                                                                                                                                null
                                                                                                                            ),
                                                                                                                            new Node(
                                                                                                                                2,
                                                                                                                                null,
                                                                                                                                null
                                                                                                                            )
                                                                                                                        ),
                                                                                                                        null
                                                                                                                    ),
                                                                                                                    null
                                                                                                                ),
                                                                                                                new Node(
                                                                                                                    2,
                                                                                                                    null,
                                                                                                                    null
                                                                                                                )
                                                                                                            )
                                                                                                        )
                                                                                                    )
                                                                                                )
                                                                                            )
                                                                                        ),
                                                                                        new Node(
                                                                                            2,
                                                                                            new Node(
                                                                                                1,
                                                                                                new Node(
                                                                                                    2,
                                                                                                    new Node(
                                                                                                        3,
                                                                                                        new Node(
                                                                                                            1,
                                                                                                            new Node(
                                                                                                                2,
                                                                                                                new Node(
                                                                                                                    3,
                                                                                                                    null,
                                                                                                                    null
                                                                                                                ),
                                                                                                                null
                                                                                                            ),
                                                                                                            new Node(
                                                                                                                2,
                                                                                                                null,
                                                                                                                null
                                                                                                            )
                                                                                                        ),
                                                                                                        null
                                                                                                    ),
                                                                                                    null
                                                                                                ),
                                                                                                new Node(
                                                                                                    2,
                                                                                                    null,
                                                                                                    null
                                                                                                )
                                                                                            ),
                                                                                            null
                                                                                        )
                                                                                    )
                                                                                )
                                                                            )
                                                                        )
                                                                    ),
                                                                    null
                                                                )
                                                            )
                                                        ),
                                                        new Node(
                                                            1,
                                                            new Node(
                                                                2,
                                                                new Node(
                                                                    3,
                                                                    null,
                                                                    null
                                                                ),
                                                                null
                                                            ),
                                                            new Node(
                                                                2,
                                                                null,
                                                                new Node(
                                                                    1,
                                                                    new Node(
                                                                        2,
                                                                        new Node(
                                                                            3,
                                                                            new Node(
                                                                                1,
                                                                                new Node(
                                                                                    2,
                                                                                    new Node(
                                                                                        3,
                                                                                        null,
                                                                                        null
                                                                                    ),
                                                                                    null
                                                                                ),
                                                                                new Node(
                                                                                    2,
                                                                                    null,
                                                                                    null
                                                                                )
                                                                            ),
                                                                            null
                                                                        ),
                                                                        null
                                                                    ),
                                                                    new Node(
                                                                        2,
                                                                        null,
                                                                        new Node(
                                                                            1,
                                                                            new Node(
                                                                                2,
                                                                                new Node(
                                                                                    3,
                                                                                    new Node(
                                                                                        1,
                                                                                        new Node(
                                                                                            2,
                                                                                            new Node(
                                                                                                3,
                                                                                                null,
                                                                                                null
                                                                                            ),
                                                                                            null
                                                                                        ),
                                                                                        new Node(
                                                                                            2,
                                                                                            null,
                                                                                            null
                                                                                        )
                                                                                    ),
                                                                                    null
                                                                                ),
                                                                                null
                                                                            ),
                                                                            new Node(
                                                                                2,
                                                                                null,
                                                                                null
                                                                            )
                                                                        )
                                                                    )
                                                                )
                                                            )
                                                        )
                                                    ),
                                                    new Node(
                                                        2,
                                                        new Node(
                                                            1,
                                                            new Node(
                                                                2,
                                                                new Node(
                                                                    3,
                                                                    new Node(
                                                                        1,
                                                                        new Node(
                                                                            2,
                                                                            new Node(
                                                                                3,
                                                                                null,
                                                                                null
                                                                            ),
                                                                            null
                                                                        ),
                                                                        new Node(
                                                                            2,
                                                                            null,
                                                                            null
                                                                        )
                                                                    ),
                                                                    null
                                                                ),
                                                                null
                                                            ),
                                                            new Node(
                                                                2,
                                                                null,
                                                                null
                                                            )
                                                        ),
                                                        null
                                                    )
                                                )
                                            ),
                                            null
                                        ),
                                        new Node(
                                            2,
                                            null,
                                            null
                                        )
                                    )
                                )
                            )
                        )
                    )
                ),
                new Node(
                    2,
                    new Node(
                        1,
                        new Node(
                            2,
                            new Node(
                                3,
                                new Node(
                                    1,
                                    new Node(
                                        2,
                                        new Node(
                                            3,
                                            null,
                                            null
                                        ),
                                        null
                                    ),
                                    new Node(
                                        2,
                                        null,
                                        null
                                    )
                                ),
                                null
                            ),
                            null
                        ),
                        new Node(
                            2,
                            null,
                            new Node(
                                1,
                                new Node(
                                    2,
                                    new Node(
                                        3,
                                        null,
                                        null
                                    ),
                                    new Node(
                                        1,
                                        new Node(
                                            2,
                                            new Node(
                                                3,
                                                null,
                                                null
                                            ),
                                            null
                                        ),
                                        new Node(
                                            2,
                                            null,
                                            new Node(
                                                1,
                                                new Node(
                                                    2,
                                                    new Node(
                                                        3,
                                                        new Node(
                                                            1,
                                                            new Node(
                                                                2,
                                                                new Node(
                                                                    3,
                                                                    null,
                                                                    null
                                                                ),
                                                                null
                                                            ),
                                                            new Node(
                                                                2,
                                                                null,
                                                                null
                                                            )
                                                        ),
                                                        null
                                                    ),
                                                    null
                                                ),
                                                new Node(
                                                    2,
                                                    null,
                                                    new Node(
                                                        1,
                                                        new Node(
                                                            2,
                                                            new Node(
                                                                3,
                                                                new Node(
                                                                    1,
                                                                    new Node(
                                                                        2,
                                                                        new Node(
                                                                            3,
                                                                            null,
                                                                            null
                                                                        ),
                                                                        null
                                                                    ),
                                                                    new Node(
                                                                        2,
                                                                        null,
                                                                        null
                                                                    )
                                                                ),
                                                                null
                                                            ),
                                                            null
                                                        ),
                                                        new Node(
                                                            2,
                                                            null,
                                                            null
                                                        )
                                                    )
                                                )
                                            )
                                        )
                                    )
                                ),
                                new Node(
                                    2,
                                    new Node(
                                        1,
                                        new Node(
                                            2,
                                            new Node(
                                                3,
                                                new Node(
                                                    1,
                                                    new Node(
                                                        2,
                                                        new Node(
                                                            3,
                                                            null,
                                                            null
                                                        ),
                                                        null
                                                    ),
                                                    new Node(
                                                        2,
                                                        null,
                                                        null
                                                    )
                                                ),
                                                null
                                            ),
                                            null
                                        ),
                                        new Node(
                                            2,
                                            null,
                                            null
                                        )
                                    ),
                                    new Node(
                                        1,
                                        new Node(
                                            2,
                                            new Node(
                                                3,
                                                null,
                                                null
                                            ),
                                            new Node(
                                                1,
                                                new Node(
                                                    2,
                                                    new Node(
                                                        3,
                                                        null,
                                                        null
                                                    ),
                                                    null
                                                ),
                                                new Node(
                                                    2,
                                                    null,
                                                    new Node(
                                                        1,
                                                        new Node(
                                                            2,
                                                            new Node(
                                                                3,
                                                                new Node(
                                                                    1,
                                                                    new Node(
                                                                        2,
                                                                        new Node(
                                                                            3,
                                                                            null,
                                                                            null
                                                                        ),
                                                                        null
                                                                    ),
                                                                    new Node(
                                                                        2,
                                                                        null,
                                                                        null
                                                                    )
                                                                ),
                                                                null
                                                            ),
                                                            null
                                                        ),
                                                        new Node(
                                                            2,
                                                            null,
                                                            new Node(
                                                                1,
                                                                new Node(
                                                                    2,
                                                                    new Node(
                                                                        3,
                                                                        new Node(
                                                                            1,
                                                                            new Node(
                                                                                2,
                                                                                new Node(
                                                                                    3,
                                                                                    null,
                                                                                    null
                                                                                ),
                                                                                null
                                                                            ),
                                                                            new Node(
                                                                                2,
                                                                                null,
                                                                                null
                                                                            )
                                                                        ),
                                                                        null
                                                                    ),
                                                                    null
                                                                ),
                                                                new Node(
                                                                    2,
                                                                    null,
                                                                    null
                                                                )
                                                            )
                                                        )
                                                    )
                                                )
                                            )
                                        ),
                                        new Node(
                                            2,
                                            new Node(
                                                1,
                                                new Node(
                                                    2,
                                                    new Node(
                                                        3,
                                                        new Node(
                                                            1,
                                                            new Node(
                                                                2,
                                                                new Node(
                                                                    3,
                                                                    null,
                                                                    null
                                                                ),
                                                                null
                                                            ),
                                                            new Node(
                                                                2,
                                                                null,
                                                                null
                                                            )
                                                        ),
                                                        null
                                                    ),
                                                    null
                                                ),
                                                new Node(
                                                    2,
                                                    null,
                                                    null
                                                )
                                            ),
                                            null
                                        )
                                    )
                                )
                            )
                        )
                    ),
                    null
                )
            )
        ),
        new Node(
            1,
            new Node(
                2,
                new Node(
                    3,
                    null,
                    null
                ),
                null
            ),
            new Node(
                2,
                null,
                new Node(
                    1,
                    new Node(
                        2,
                        new Node(
                            3,
                            new Node(
                                1,
                                new Node(
                                    2,
                                    new Node(
                                        3,
                                        null,
                                        null
                                    ),
                                    null
                                ),
                                new Node(
                                    2,
                                    null,
                                    null
                                )
                            ),
                            null
                        ),
                        null
                    ),
                    new Node(
                        2,
                        null,
                        new Node(
                            1,
                            new Node(
                                2,
                                new Node(
                                    3,
                                    new Node(
                                        1,
                                        new Node(
                                            2,
                                            new Node(
                                                3,
                                                null,
                                                null
                                            ),
                                            null
                                        ),
                                        new Node(
                                            2,
                                            null,
                                            null
                                        )
                                    ),
                                    null
                                ),
                                null
                            ),
                            new Node(
                                2,
                                null,
                                null
                            )
                        )
                    )
                )
            )
        )
    ),
    new Node(
        2,
        new Node(
            1,
            new Node(
                2,
                new Node(
                    3,
                    new Node(
                        1,
                        new Node(
                            2,
                            new Node(
                                3,
                                null,
                                null
                            ),
                            null
                        ),
                        new Node(
                            2,
                            null,
                            null
                        )
                    ),
                    null
                ),
                null
            ),
            new Node(
                2,
                null,
                null
            )
        ),
        null
    )
);

$tree2 = new Node(
    1,
    new Node(
        2,
        new Node(
            3,
            new Node(
                1,
                new Node(
                    2,
                    new Node(
                        3,
                        null,
                        null
                    ),
                    new Node(
                        1,
                        new Node(
                            2,
                            new Node(
                                3,
                                null,
                                null
                            ),
                            null
                        ),
                        new Node(
                            2,
                            null,
                            new Node(
                                1,
                                new Node(
                                    2,
                                    new Node(
                                        3,
                                        new Node(
                                            1,
                                            new Node(
                                                2,
                                                new Node(
                                                    3,
                                                    null,
                                                    null
                                                ),
                                                null
                                            ),
                                            new Node(
                                                2,
                                                new Node(
                                                    2,
                                                    new Node(
                                                        3,
                                                        new Node(
                                                            1,
                                                            new Node(
                                                                2,
                                                                new Node(
                                                                    3,
                                                                    null,
                                                                    null
                                                                ),
                                                                null
                                                            ),
                                                            new Node(
                                                                2,
                                                                null,
                                                                new Node(
                                                                    2,
                                                                    new Node(
                                                                        3,
                                                                        new Node(
                                                                            1,
                                                                            new Node(
                                                                                2,
                                                                                new Node(
                                                                                    3,
                                                                                    null,
                                                                                    null
                                                                                ),
                                                                                null
                                                                            ),
                                                                            new Node(
                                                                                2,
                                                                                new Node(
                                                                                    2,
                                                                                    new Node(
                                                                                        3,
                                                                                        new Node(
                                                                                            1,
                                                                                            new Node(
                                                                                                2,
                                                                                                new Node(
                                                                                                    3,
                                                                                                    null,
                                                                                                    new Node(
                                                                                                        2,
                                                                                                        new Node(
                                                                                                            3,
                                                                                                            new Node(
                                                                                                                1,
                                                                                                                new Node(
                                                                                                                    2,
                                                                                                                    new Node(
                                                                                                                        3,
                                                                                                                        new Node(
                                                                                                                            2,
                                                                                                                            new Node(
                                                                                                                                3,
                                                                                                                                new Node(
                                                                                                                                    1,
                                                                                                                                    new Node(
                                                                                                                                        2,
                                                                                                                                        new Node(
                                                                                                                                            3,
                                                                                                                                            null,
                                                                                                                                            new Node(
                                                                                                                                                2,
                                                                                                                                                new Node(
                                                                                                                                                    3,
                                                                                                                                                    new Node(
                                                                                                                                                        1,
                                                                                                                                                        new Node(
                                                                                                                                                            2,
                                                                                                                                                            new Node(
                                                                                                                                                                3,
                                                                                                                                                                null,
                                                                                                                                                                null
                                                                                                                                                            ),
                                                                                                                                                            null
                                                                                                                                                        ),
                                                                                                                                                        new Node(
                                                                                                                                                            2,
                                                                                                                                                            new Node(
                                                                                                                                                                2,
                                                                                                                                                                new Node(
                                                                                                                                                                    3,
                                                                                                                                                                    new Node(
                                                                                                                                                                        1,
                                                                                                                                                                        new Node(
                                                                                                                                                                            2,
                                                                                                                                                                            new Node(
                                                                                                                                                                                3,
                                                                                                                                                                                null,
                                                                                                                                                                                null
                                                                                                                                                                            ),
                                                                                                                                                                            null
                                                                                                                                                                        ),
                                                                                                                                                                        new Node(
                                                                                                                                                                            2,
                                                                                                                                                                            null,
                                                                                                                                                                            new Node(
                                                                                                                                                                                2,
                                                                                                                                                                                new Node(
                                                                                                                                                                                    3,
                                                                                                                                                                                    new Node(
                                                                                                                                                                                        1,
                                                                                                                                                                                        new Node(
                                                                                                                                                                                            2,
                                                                                                                                                                                            new Node(
                                                                                                                                                                                                3,
                                                                                                                                                                                                new Node(
                                                                                                                                                                                                    2,
                                                                                                                                                                                                    new Node(
                                                                                                                                                                                                        3,
                                                                                                                                                                                                        new Node(
                                                                                                                                                                                                            1,
                                                                                                                                                                                                            new Node(
                                                                                                                                                                                                                2,
                                                                                                                                                                                                                new Node(
                                                                                                                                                                                                                    3,
                                                                                                                                                                                                                    null,
                                                                                                                                                                                                                    null
                                                                                                                                                                                                                ),
                                                                                                                                                                                                                null
                                                                                                                                                                                                            ),
                                                                                                                                                                                                            new Node(
                                                                                                                                                                                                                2,
                                                                                                                                                                                                                new Node(
                                                                                                                                                                                                                    2,
                                                                                                                                                                                                                    new Node(
                                                                                                                                                                                                                        3,
                                                                                                                                                                                                                        new Node(
                                                                                                                                                                                                                            1,
                                                                                                                                                                                                                            new Node(
                                                                                                                                                                                                                                2,
                                                                                                                                                                                                                                new Node(
                                                                                                                                                                                                                                    3,
                                                                                                                                                                                                                                    new Node(
                                                                                                                                                                                                                                        3,
                                                                                                                                                                                                                                        null,
                                                                                                                                                                                                                                        new Node(
                                                                                                                                                                                                                                            3,
                                                                                                                                                                                                                                            null,
                                                                                                                                                                                                                                            null
                                                                                                                                                                                                                                        )
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    null
                                                                                                                                                                                                                                ),
                                                                                                                                                                                                                                null
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            new Node(
                                                                                                                                                                                                                                2,
                                                                                                                                                                                                                                new Node(
                                                                                                                                                                                                                                    3,
                                                                                                                                                                                                                                    new Node(
                                                                                                                                                                                                                                        3,
                                                                                                                                                                                                                                        null,
                                                                                                                                                                                                                                        null
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    null
                                                                                                                                                                                                                                ),
                                                                                                                                                                                                                                null
                                                                                                                                                                                                                            )
                                                                                                                                                                                                                        ),
                                                                                                                                                                                                                        null
                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                    null
                                                                                                                                                                                                                ),
                                                                                                                                                                                                                null
                                                                                                                                                                                                            )
                                                                                                                                                                                                        ),
                                                                                                                                                                                                        null
                                                                                                                                                                                                    ),
                                                                                                                                                                                                    null
                                                                                                                                                                                                ),
                                                                                                                                                                                                null
                                                                                                                                                                                            ),
                                                                                                                                                                                            null
                                                                                                                                                                                        ),
                                                                                                                                                                                        new Node(
                                                                                                                                                                                            2,
                                                                                                                                                                                            null,
                                                                                                                                                                                            null
                                                                                                                                                                                        )
                                                                                                                                                                                    ),
                                                                                                                                                                                    null
                                                                                                                                                                                ),
                                                                                                                                                                                null
                                                                                                                                                                            )
                                                                                                                                                                        )
                                                                                                                                                                    ),
                                                                                                                                                                    null
                                                                                                                                                                ),
                                                                                                                                                                null
                                                                                                                                                            ),
                                                                                                                                                            null
                                                                                                                                                        )
                                                                                                                                                    ),
                                                                                                                                                    null
                                                                                                                                                ),
                                                                                                                                                null
                                                                                                                                            )
                                                                                                                                        ),
                                                                                                                                        null
                                                                                                                                    ),
                                                                                                                                    new Node(
                                                                                                                                        2,
                                                                                                                                        null,
                                                                                                                                        null
                                                                                                                                    )
                                                                                                                                ),
                                                                                                                                null
                                                                                                                            ),
                                                                                                                            null
                                                                                                                        ),
                                                                                                                        null
                                                                                                                    ),
                                                                                                                    null
                                                                                                                ),
                                                                                                                new Node(
                                                                                                                    2,
                                                                                                                    null,
                                                                                                                    null
                                                                                                                )
                                                                                                            ),
                                                                                                            null
                                                                                                        ),
                                                                                                        null
                                                                                                    )
                                                                                                ),
                                                                                                null
                                                                                            ),
                                                                                            new Node(
                                                                                                2,
                                                                                                null,
                                                                                                null
                                                                                            )
                                                                                        ),
                                                                                        null
                                                                                    ),
                                                                                    null
                                                                                ),
                                                                                null
                                                                            )
                                                                        ),
                                                                        null
                                                                    ),
                                                                    null
                                                                )
                                                            )
                                                        ),
                                                        null
                                                    ),
                                                    null
                                                ),
                                                null
                                            )
                                        ),
                                        null
                                    ),
                                    null
                                ),
                                new Node(
                                    2,
                                    null,
                                    new Node(
                                        1,
                                        new Node(
                                            2,
                                            new Node(
                                                3,
                                                new Node(
                                                    1,
                                                    new Node(
                                                        2,
                                                        new Node(
                                                            3,
                                                            null,
                                                            null
                                                        ),
                                                        null
                                                    ),
                                                    new Node(
                                                        2,
                                                        null,
                                                        null
                                                    )
                                                ),
                                                null
                                            ),
                                            null
                                        ),
                                        new Node(
                                            2,
                                            null,
                                            null
                                        )
                                    )
                                )
                            )
                        )
                    )
                ),
                new Node(
                    2,
                    new Node(
                        1,
                        new Node(
                            2,
                            new Node(
                                3,
                                new Node(
                                    1,
                                    new Node(
                                        2,
                                        new Node(
                                            3,
                                            null,
                                            null
                                        ),
                                        null
                                    ),
                                    new Node(
                                        2,
                                        null,
                                        null
                                    )
                                ),
                                null
                            ),
                            null
                        ),
                        new Node(
                            2,
                            null,
                            null
                        )
                    ),
                    null
                )
            ),
            new Node(
                1,
                new Node(
                    2,
                    new Node(
                        3,
                        null,
                        null
                    ),
                    new Node(
                        1,
                        new Node(
                            2,
                            new Node(
                                3,
                                null,
                                null
                            ),
                            null
                        ),
                        new Node(
                            2,
                            null,
                            new Node(
                                1,
                                new Node(
                                    2,
                                    new Node(
                                        3,
                                        new Node(
                                            1,
                                            new Node(
                                                2,
                                                new Node(
                                                    3,
                                                    null,
                                                    null
                                                ),
                                                null
                                            ),
                                            new Node(
                                                2,
                                                null,
                                                null
                                            )
                                        ),
                                        null
                                    ),
                                    null
                                ),
                                new Node(
                                    2,
                                    null,
                                    new Node(
                                        1,
                                        new Node(
                                            2,
                                            new Node(
                                                3,
                                                new Node(
                                                    1,
                                                    new Node(
                                                        2,
                                                        new Node(
                                                            3,
                                                            null,
                                                            null
                                                        ),
                                                        null
                                                    ),
                                                    new Node(
                                                        2,
                                                        null,
                                                        null
                                                    )
                                                ),
                                                new Node(
                                                    1,
                                                    new Node(
                                                        2,
                                                        new Node(
                                                            3,
                                                            new Node(
                                                                1,
                                                                new Node(
                                                                    2,
                                                                    new Node(
                                                                        3,
                                                                        null,
                                                                        null
                                                                    ),
                                                                    new Node(
                                                                        1,
                                                                        new Node(
                                                                            2,
                                                                            new Node(
                                                                                3,
                                                                                null,
                                                                                null
                                                                            ),
                                                                            null
                                                                        ),
                                                                        new Node(
                                                                            2,
                                                                            null,
                                                                            new Node(
                                                                                1,
                                                                                new Node(
                                                                                    2,
                                                                                    new Node(
                                                                                        3,
                                                                                        new Node(
                                                                                            1,
                                                                                            new Node(
                                                                                                2,
                                                                                                new Node(
                                                                                                    3,
                                                                                                    null,
                                                                                                    null
                                                                                                ),
                                                                                                null
                                                                                            ),
                                                                                            new Node(
                                                                                                2,
                                                                                                null,
                                                                                                null
                                                                                            )
                                                                                        ),
                                                                                        null
                                                                                    ),
                                                                                    null
                                                                                ),
                                                                                new Node(
                                                                                    2,
                                                                                    null,
                                                                                    new Node(
                                                                                        1,
                                                                                        new Node(
                                                                                            2,
                                                                                            new Node(
                                                                                                3,
                                                                                                new Node(
                                                                                                    1,
                                                                                                    new Node(
                                                                                                        2,
                                                                                                        new Node(
                                                                                                            3,
                                                                                                            null,
                                                                                                            null
                                                                                                        ),
                                                                                                        null
                                                                                                    ),
                                                                                                    new Node(
                                                                                                        2,
                                                                                                        null,
                                                                                                        null
                                                                                                    )
                                                                                                ),
                                                                                                null
                                                                                            ),
                                                                                            null
                                                                                        ),
                                                                                        new Node(
                                                                                            2,
                                                                                            null,
                                                                                            null
                                                                                        )
                                                                                    )
                                                                                )
                                                                            )
                                                                        )
                                                                    )
                                                                ),
                                                                new Node(
                                                                    2,
                                                                    new Node(
                                                                        1,
                                                                        new Node(
                                                                            2,
                                                                            new Node(
                                                                                3,
                                                                                new Node(
                                                                                    1,
                                                                                    new Node(
                                                                                        2,
                                                                                        new Node(
                                                                                            3,
                                                                                            null,
                                                                                            null
                                                                                        ),
                                                                                        null
                                                                                    ),
                                                                                    new Node(
                                                                                        2,
                                                                                        null,
                                                                                        null
                                                                                    )
                                                                                ),
                                                                                null
                                                                            ),
                                                                            null
                                                                        ),
                                                                        new Node(
                                                                            2,
                                                                            null,
                                                                            null
                                                                        )
                                                                    ),
                                                                    null
                                                                )
                                                            ),
                                                            new Node(
                                                                1,
                                                                new Node(
                                                                    2,
                                                                    new Node(
                                                                        3,
                                                                        null,
                                                                        null
                                                                    ),
                                                                    new Node(
                                                                        1,
                                                                        new Node(
                                                                            2,
                                                                            new Node(
                                                                                3,
                                                                                null,
                                                                                null
                                                                            ),
                                                                            null
                                                                        ),
                                                                        new Node(
                                                                            2,
                                                                            null,
                                                                            new Node(
                                                                                1,
                                                                                new Node(
                                                                                    2,
                                                                                    new Node(
                                                                                        3,
                                                                                        new Node(
                                                                                            1,
                                                                                            new Node(
                                                                                                2,
                                                                                                new Node(
                                                                                                    3,
                                                                                                    null,
                                                                                                    null
                                                                                                ),
                                                                                                null
                                                                                            ),
                                                                                            new Node(
                                                                                                2,
                                                                                                null,
                                                                                                null
                                                                                            )
                                                                                        ),
                                                                                        null
                                                                                    ),
                                                                                    null
                                                                                ),
                                                                                new Node(
                                                                                    2,
                                                                                    null,
                                                                                    new Node(
                                                                                        1,
                                                                                        new Node(
                                                                                            2,
                                                                                            new Node(
                                                                                                3,
                                                                                                new Node(
                                                                                                    1,
                                                                                                    new Node(
                                                                                                        2,
                                                                                                        new Node(
                                                                                                            3,
                                                                                                            null,
                                                                                                            null
                                                                                                        ),
                                                                                                        null
                                                                                                    ),
                                                                                                    new Node(
                                                                                                        2,
                                                                                                        null,
                                                                                                        null
                                                                                                    )
                                                                                                ),
                                                                                                null
                                                                                            ),
                                                                                            null
                                                                                        ),
                                                                                        new Node(
                                                                                            2,
                                                                                            null,
                                                                                            null
                                                                                        )
                                                                                    )
                                                                                )
                                                                            )
                                                                        )
                                                                    )
                                                                ),
                                                                new Node(
                                                                    2,
                                                                    new Node(
                                                                        1,
                                                                        new Node(
                                                                            2,
                                                                            new Node(
                                                                                3,
                                                                                new Node(
                                                                                    1,
                                                                                    new Node(
                                                                                        2,
                                                                                        new Node(
                                                                                            3,
                                                                                            null,
                                                                                            null
                                                                                        ),
                                                                                        null
                                                                                    ),
                                                                                    new Node(
                                                                                        2,
                                                                                        null,
                                                                                        null
                                                                                    )
                                                                                ),
                                                                                null
                                                                            ),
                                                                            null
                                                                        ),
                                                                        new Node(
                                                                            2,
                                                                            null,
                                                                            new Node(
                                                                                1,
                                                                                new Node(
                                                                                    2,
                                                                                    new Node(
                                                                                        3,
                                                                                        null,
                                                                                        null
                                                                                    ),
                                                                                    new Node(
                                                                                        1,
                                                                                        new Node(
                                                                                            2,
                                                                                            new Node(
                                                                                                3,
                                                                                                null,
                                                                                                null
                                                                                            ),
                                                                                            null
                                                                                        ),
                                                                                        new Node(
                                                                                            2,
                                                                                            null,
                                                                                            new Node(
                                                                                                1,
                                                                                                new Node(
                                                                                                    2,
                                                                                                    new Node(
                                                                                                        3,
                                                                                                        new Node(
                                                                                                            1,
                                                                                                            new Node(
                                                                                                                2,
                                                                                                                new Node(
                                                                                                                    3,
                                                                                                                    null,
                                                                                                                    null
                                                                                                                ),
                                                                                                                null
                                                                                                            ),
                                                                                                            new Node(
                                                                                                                2,
                                                                                                                null,
                                                                                                                null
                                                                                                            )
                                                                                                        ),
                                                                                                        null
                                                                                                    ),
                                                                                                    null
                                                                                                ),
                                                                                                new Node(
                                                                                                    2,
                                                                                                    null,
                                                                                                    new Node(
                                                                                                        1,
                                                                                                        new Node(
                                                                                                            2,
                                                                                                            new Node(
                                                                                                                3,
                                                                                                                new Node(
                                                                                                                    1,
                                                                                                                    new Node(
                                                                                                                        2,
                                                                                                                        new Node(
                                                                                                                            3,
                                                                                                                            null,
                                                                                                                            null
                                                                                                                        ),
                                                                                                                        null
                                                                                                                    ),
                                                                                                                    new Node(
                                                                                                                        2,
                                                                                                                        null,
                                                                                                                        null
                                                                                                                    )
                                                                                                                ),
                                                                                                                null
                                                                                                            ),
                                                                                                            null
                                                                                                        ),
                                                                                                        new Node(
                                                                                                            2,
                                                                                                            null,
                                                                                                            null
                                                                                                        )
                                                                                                    )
                                                                                                )
                                                                                            )
                                                                                        )
                                                                                    )
                                                                                ),
                                                                                new Node(
                                                                                    2,
                                                                                    new Node(
                                                                                        1,
                                                                                        new Node(
                                                                                            2,
                                                                                            new Node(
                                                                                                3,
                                                                                                new Node(
                                                                                                    1,
                                                                                                    new Node(
                                                                                                        2,
                                                                                                        new Node(
                                                                                                            3,
                                                                                                            null,
                                                                                                            null
                                                                                                        ),
                                                                                                        null
                                                                                                    ),
                                                                                                    new Node(
                                                                                                        2,
                                                                                                        null,
                                                                                                        null
                                                                                                    )
                                                                                                ),
                                                                                                null
                                                                                            ),
                                                                                            null
                                                                                        ),
                                                                                        new Node(
                                                                                            2,
                                                                                            null,
                                                                                            null
                                                                                        )
                                                                                    ),
                                                                                    new Node(
                                                                                        1,
                                                                                        new Node(
                                                                                            2,
                                                                                            new Node(
                                                                                                3,
                                                                                                null,
                                                                                                null
                                                                                            ),
                                                                                            new Node(
                                                                                                1,
                                                                                                new Node(
                                                                                                    2,
                                                                                                    new Node(
                                                                                                        3,
                                                                                                        null,
                                                                                                        null
                                                                                                    ),
                                                                                                    null
                                                                                                ),
                                                                                                new Node(
                                                                                                    2,
                                                                                                    null,
                                                                                                    new Node(
                                                                                                        1,
                                                                                                        new Node(
                                                                                                            2,
                                                                                                            new Node(
                                                                                                                3,
                                                                                                                new Node(
                                                                                                                    1,
                                                                                                                    new Node(
                                                                                                                        2,
                                                                                                                        new Node(
                                                                                                                            3,
                                                                                                                            null,
                                                                                                                            null
                                                                                                                        ),
                                                                                                                        null
                                                                                                                    ),
                                                                                                                    new Node(
                                                                                                                        2,
                                                                                                                        null,
                                                                                                                        null
                                                                                                                    )
                                                                                                                ),
                                                                                                                null
                                                                                                            ),
                                                                                                            null
                                                                                                        ),
                                                                                                        new Node(
                                                                                                            2,
                                                                                                            null,
                                                                                                            new Node(
                                                                                                                1,
                                                                                                                new Node(
                                                                                                                    2,
                                                                                                                    new Node(
                                                                                                                        3,
                                                                                                                        new Node(
                                                                                                                            1,
                                                                                                                            new Node(
                                                                                                                                2,
                                                                                                                                new Node(
                                                                                                                                    3,
                                                                                                                                    null,
                                                                                                                                    null
                                                                                                                                ),
                                                                                                                                null
                                                                                                                            ),
                                                                                                                            new Node(
                                                                                                                                2,
                                                                                                                                null,
                                                                                                                                null
                                                                                                                            )
                                                                                                                        ),
                                                                                                                        null
                                                                                                                    ),
                                                                                                                    null
                                                                                                                ),
                                                                                                                new Node(
                                                                                                                    2,
                                                                                                                    null,
                                                                                                                    null
                                                                                                                )
                                                                                                            )
                                                                                                        )
                                                                                                    )
                                                                                                )
                                                                                            )
                                                                                        ),
                                                                                        new Node(
                                                                                            2,
                                                                                            new Node(
                                                                                                1,
                                                                                                new Node(
                                                                                                    2,
                                                                                                    new Node(
                                                                                                        3,
                                                                                                        new Node(
                                                                                                            1,
                                                                                                            new Node(
                                                                                                                2,
                                                                                                                new Node(
                                                                                                                    3,
                                                                                                                    null,
                                                                                                                    null
                                                                                                                ),
                                                                                                                null
                                                                                                            ),
                                                                                                            new Node(
                                                                                                                2,
                                                                                                                null,
                                                                                                                null
                                                                                                            )
                                                                                                        ),
                                                                                                        null
                                                                                                    ),
                                                                                                    null
                                                                                                ),
                                                                                                new Node(
                                                                                                    2,
                                                                                                    null,
                                                                                                    null
                                                                                                )
                                                                                            ),
                                                                                            null
                                                                                        )
                                                                                    )
                                                                                )
                                                                            )
                                                                        )
                                                                    ),
                                                                    null
                                                                )
                                                            )
                                                        ),
                                                        new Node(
                                                            1,
                                                            new Node(
                                                                2,
                                                                new Node(
                                                                    3,
                                                                    null,
                                                                    null
                                                                ),
                                                                null
                                                            ),
                                                            new Node(
                                                                2,
                                                                null,
                                                                new Node(
                                                                    1,
                                                                    new Node(
                                                                        2,
                                                                        new Node(
                                                                            3,
                                                                            new Node(
                                                                                1,
                                                                                new Node(
                                                                                    2,
                                                                                    new Node(
                                                                                        3,
                                                                                        null,
                                                                                        null
                                                                                    ),
                                                                                    null
                                                                                ),
                                                                                new Node(
                                                                                    2,
                                                                                    null,
                                                                                    null
                                                                                )
                                                                            ),
                                                                            null
                                                                        ),
                                                                        null
                                                                    ),
                                                                    new Node(
                                                                        2,
                                                                        null,
                                                                        new Node(
                                                                            1,
                                                                            new Node(
                                                                                2,
                                                                                new Node(
                                                                                    3,
                                                                                    new Node(
                                                                                        1,
                                                                                        new Node(
                                                                                            2,
                                                                                            new Node(
                                                                                                3,
                                                                                                null,
                                                                                                null
                                                                                            ),
                                                                                            null
                                                                                        ),
                                                                                        new Node(
                                                                                            2,
                                                                                            null,
                                                                                            null
                                                                                        )
                                                                                    ),
                                                                                    null
                                                                                ),
                                                                                null
                                                                            ),
                                                                            new Node(
                                                                                2,
                                                                                null,
                                                                                null
                                                                            )
                                                                        )
                                                                    )
                                                                )
                                                            )
                                                        )
                                                    ),
                                                    new Node(
                                                        2,
                                                        new Node(
                                                            1,
                                                            new Node(
                                                                2,
                                                                new Node(
                                                                    3,
                                                                    new Node(
                                                                        1,
                                                                        new Node(
                                                                            2,
                                                                            new Node(
                                                                                3,
                                                                                null,
                                                                                null
                                                                            ),
                                                                            null
                                                                        ),
                                                                        new Node(
                                                                            2,
                                                                            null,
                                                                            null
                                                                        )
                                                                    ),
                                                                    null
                                                                ),
                                                                null
                                                            ),
                                                            new Node(
                                                                2,
                                                                null,
                                                                null
                                                            )
                                                        ),
                                                        null
                                                    )
                                                )
                                            ),
                                            null
                                        ),
                                        new Node(
                                            2,
                                            null,
                                            null
                                        )
                                    )
                                )
                            )
                        )
                    )
                ),
                new Node(
                    2,
                    new Node(
                        1,
                        new Node(
                            2,
                            new Node(
                                3,
                                new Node(
                                    1,
                                    new Node(
                                        2,
                                        new Node(
                                            3,
                                            null,
                                            null
                                        ),
                                        null
                                    ),
                                    new Node(
                                        2,
                                        null,
                                        null
                                    )
                                ),
                                null
                            ),
                            null
                        ),
                        new Node(
                            2,
                            null,
                            new Node(
                                1,
                                new Node(
                                    2,
                                    new Node(
                                        3,
                                        null,
                                        null
                                    ),
                                    new Node(
                                        1,
                                        new Node(
                                            2,
                                            new Node(
                                                3,
                                                null,
                                                null
                                            ),
                                            null
                                        ),
                                        new Node(
                                            2,
                                            null,
                                            new Node(
                                                1,
                                                new Node(
                                                    2,
                                                    new Node(
                                                        3,
                                                        new Node(
                                                            1,
                                                            new Node(
                                                                2,
                                                                new Node(
                                                                    3,
                                                                    null,
                                                                    null
                                                                ),
                                                                null
                                                            ),
                                                            new Node(
                                                                2,
                                                                null,
                                                                null
                                                            )
                                                        ),
                                                        null
                                                    ),
                                                    null
                                                ),
                                                new Node(
                                                    2,
                                                    null,
                                                    new Node(
                                                        1,
                                                        new Node(
                                                            2,
                                                            new Node(
                                                                3,
                                                                new Node(
                                                                    1,
                                                                    new Node(
                                                                        2,
                                                                        new Node(
                                                                            3,
                                                                            null,
                                                                            null
                                                                        ),
                                                                        null
                                                                    ),
                                                                    new Node(
                                                                        2,
                                                                        null,
                                                                        null
                                                                    )
                                                                ),
                                                                null
                                                            ),
                                                            null
                                                        ),
                                                        new Node(
                                                            2,
                                                            null,
                                                            null
                                                        )
                                                    )
                                                )
                                            )
                                        )
                                    )
                                ),
                                new Node(
                                    2,
                                    new Node(
                                        1,
                                        new Node(
                                            2,
                                            new Node(
                                                3,
                                                new Node(
                                                    1,
                                                    new Node(
                                                        2,
                                                        new Node(
                                                            3,
                                                            null,
                                                            null
                                                        ),
                                                        null
                                                    ),
                                                    new Node(
                                                        2,
                                                        null,
                                                        null
                                                    )
                                                ),
                                                null
                                            ),
                                            null
                                        ),
                                        new Node(
                                            2,
                                            null,
                                            null
                                        )
                                    ),
                                    new Node(
                                        1,
                                        new Node(
                                            2,
                                            new Node(
                                                3,
                                                null,
                                                null
                                            ),
                                            new Node(
                                                1,
                                                new Node(
                                                    2,
                                                    new Node(
                                                        3,
                                                        null,
                                                        null
                                                    ),
                                                    null
                                                ),
                                                new Node(
                                                    2,
                                                    null,
                                                    new Node(
                                                        1,
                                                        new Node(
                                                            2,
                                                            new Node(
                                                                3,
                                                                new Node(
                                                                    1,
                                                                    new Node(
                                                                        2,
                                                                        new Node(
                                                                            3,
                                                                            null,
                                                                            null
                                                                        ),
                                                                        null
                                                                    ),
                                                                    new Node(
                                                                        2,
                                                                        null,
                                                                        null
                                                                    )
                                                                ),
                                                                null
                                                            ),
                                                            null
                                                        ),
                                                        new Node(
                                                            2,
                                                            null,
                                                            new Node(
                                                                1,
                                                                new Node(
                                                                    2,
                                                                    new Node(
                                                                        3,
                                                                        new Node(
                                                                            1,
                                                                            new Node(
                                                                                2,
                                                                                new Node(
                                                                                    3,
                                                                                    null,
                                                                                    null
                                                                                ),
                                                                                null
                                                                            ),
                                                                            new Node(
                                                                                2,
                                                                                null,
                                                                                null
                                                                            )
                                                                        ),
                                                                        null
                                                                    ),
                                                                    null
                                                                ),
                                                                new Node(
                                                                    2,
                                                                    null,
                                                                    null
                                                                )
                                                            )
                                                        )
                                                    )
                                                )
                                            )
                                        ),
                                        new Node(
                                            2,
                                            new Node(
                                                1,
                                                new Node(
                                                    2,
                                                    new Node(
                                                        3,
                                                        new Node(
                                                            1,
                                                            new Node(
                                                                2,
                                                                new Node(
                                                                    3,
                                                                    null,
                                                                    null
                                                                ),
                                                                null
                                                            ),
                                                            new Node(
                                                                2,
                                                                null,
                                                                null
                                                            )
                                                        ),
                                                        null
                                                    ),
                                                    null
                                                ),
                                                new Node(
                                                    2,
                                                    null,
                                                    null
                                                )
                                            ),
                                            null
                                        )
                                    )
                                )
                            )
                        )
                    ),
                    null
                )
            )
        ),
        new Node(
            1,
            new Node(
                2,
                new Node(
                    3,
                    null,
                    null
                ),
                null
            ),
            new Node(
                2,
                null,
                new Node(
                    1,
                    new Node(
                        2,
                        new Node(
                            3,
                            new Node(
                                1,
                                new Node(
                                    2,
                                    new Node(
                                        3,
                                        null,
                                        null
                                    ),
                                    null
                                ),
                                new Node(
                                    2,
                                    null,
                                    null
                                )
                            ),
                            null
                        ),
                        null
                    ),
                    new Node(
                        2,
                        null,
                        new Node(
                            1,
                            new Node(
                                2,
                                new Node(
                                    3,
                                    new Node(
                                        1,
                                        new Node(
                                            2,
                                            new Node(
                                                3,
                                                null,
                                                null
                                            ),
                                            null
                                        ),
                                        new Node(
                                            2,
                                            null,
                                            null
                                        )
                                    ),
                                    null
                                ),
                                null
                            ),
                            new Node(
                                2,
                                null,
                                null
                            )
                        )
                    )
                )
            )
        )
    ),
    new Node(
        2,
        new Node(
            1,
            new Node(
                2,
                new Node(
                    3,
                    new Node(
                        1,
                        new Node(
                            2,
                            new Node(
                                3,
                                null,
                                null
                            ),
                            null
                        ),
                        new Node(
                            2,
                            null,
                            null
                        )
                    ),
                    null
                ),
                null
            ),
            new Node(
                2,
                null,
                null
            )
        ),
        null
    )
);

$count = $tree1->num_nodes();

$start = microtime(true);
$is_equal = binary_trees_equal($tree1, $tree2);
$end = microtime(true);

$is_equal = $is_equal ? 'true' : 'false';
$time = ($end - $start) * 1000 * 1000;

echo "Trees are equal: {$is_equal}\nProcess took {$time} microseconds for {$count} nodes";
