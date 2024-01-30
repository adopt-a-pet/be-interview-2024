<?php

namespace Src;

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
     * @param mixed $value
     * @return void
     */
    public function insert(int $value) {
        $newNode = new TreeNode($value);

        if ($this->root === null) {
            $this->root = $newNode;
        } else {
            $this->insertNode($this->root, $newNode);
        }
    }

    /**
     * Insert a new node into the tree (helper function).
     *
     * @param TreeNode $node
     * @param TreeNode $newNode
     * @return void
     */
    private function insertNode($node, $newNode) {
        if ($newNode->value < $node->value) {
            if ($node->left === null) {
                $node->left = $newNode;
            } else {
                $this->insertNode($node->left, $newNode);
            }
        } elseif ($node->right === null) {
            $node->right = $newNode;
        } else {
            $this->insertNode($node->right, $newNode);
        }
    }
}