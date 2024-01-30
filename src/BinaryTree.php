<?php

namespace Src;

use Exception;
use Src\TreeNode;

class BinaryTree {
    /**
     * The root node of the tree.
     *
     * @var TreeNode|null
     */
    public ?TreeNode $root;

    /**
     * Create a new binary tree instance.
     */
    public function __construct() {
        $this->root = null;
    }

    /**
     * Insert a new node into the tree.
     *
     * @param int|null $value
     *
     * @return void
     */
    public function insert(?int $value) {
        if ($value === null) {
            throw new Exception("Value cannot be null.");
        }

        $newNode = new TreeNode($value);

        if ($this->root === null) {
            $this->root = $newNode;
            return;
        }

        $this->insertNode($this->root, $newNode);
    }

    /**
     * Insert a new node into the tree (helper function)
     * Recursively called until we hit the correct location/depth
     * for the newNode.
     *
     * @param TreeNode $node
     * @param TreeNode $newNode
     *
     * @return void
     */
    private function insertNode(TreeNode $node, TreeNode $newNode) {
        if ($newNode->value < $node->value) {
            if ($node->left === null) {
                $node->left = $newNode;
                return;
            }

            $this->insertNode($node->left, $newNode);
            return;
        }

        if ($node->right === null) {
            $node->right = $newNode;
            return;
        }

        $this->insertNode($node->right, $newNode);
    }
}