<?php

namespace Src\BinaryTrees;

class TreeNode {
    /**
     * The value of the node.
     *
     * @var int
     */
    public int $value;
    /**
     * The left child of the node.
     *
     * @var TreeNode|null
     */
    public $left;
    /**
     * The right child of the node.
     *
     * @var TreeNode|null
     */
    public $right;

    /**
     * Create a new node instance.
     *
     * @param int $value
     */
    public function __construct(int $value) {
        $this->value = $value;
        $this->left = null;
        $this->right = null;
    }
}