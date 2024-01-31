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

    /**
     * Get the tree depth
     *
     * @return int
     */
    public function getTreeDepth(): int {
        // If the tree is empty, the depth is 0.
        if ($this->tree->root === null) {
            return 0;
        }

        return $this->getDepth($this->tree->root);
    }

    /**
     * Get the depth of the tree.
     *
     * @param TreeNode|null $node
     *
     * @return int
     */
    private function getDepth(?TreeNode $node): int {
        // Please implement this method.
    }
}