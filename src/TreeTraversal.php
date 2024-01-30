<?php

namespace Src;

use Src\TreeNode;
use Src\BinaryTree;

class TreeTraversal
{
    /**
     * The tree to traverse.
     *
     * @var BinaryTree
     */
    protected BinaryTree $tree;

    /**
     * Create a new tree traversal instance.
     *
     * @param BinaryTree $tree
     */
    public function __construct(BinaryTree $tree)
    {
        $this->tree = $tree;
    }

    public function getTreeDepth(BinaryTree $tree): int {
        if ($tree->root === null) {
            return 0;
        }

        return $this->getDepth($tree->root);
    }

    private function getDepth(?TreeNode $node): int {
        if ($node === null) {
            return 0;
        }

        $leftDepth = $this->getDepth($node->left);
        $rightDepth = $this->getDepth($node->right);

        return max($leftDepth, $rightDepth) + 1;
    }
}