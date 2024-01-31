<?php

namespace Tests\Unit\BinaryTree;

use Src\BinaryTrees\BinaryTree;
use Src\BinaryTrees\TreeTraversal;
use PHPUnit\Framework\TestCase;

class TreeTraversalUnitTest extends TestCase {

    /**
     * The tree traversal instance for testing.
     *
     * @var TreeTraversal
     */
    private TreeTraversal $treeTraversal;

    /**
     * The binary tree instance for testing.
     *
     * @var BinaryTree
     */
    private BinaryTree $tree;

    /**
     * Set up before tests.
     *
     * @return void
     */
    protected function setUp(): void {
        $this->tree = new BinaryTree();
        $this->treeTraversal = new TreeTraversal($this->tree);
    }

    /**
     * Test the getTreeDepth method.
     *
     * @return void
     */
    public function testGetTreeDepth(): void {
        $this->assertEquals(0, $this->treeTraversal->getTreeDepth());

        $this->tree->insert(15);
        $this->tree->insert(10);
        $this->tree->insert(20);
        $this->tree->insert(8);
        $this->tree->insert(12);
        $this->tree->insert(17);
        $this->tree->insert(25);

        $this->assertEquals(3, $this->treeTraversal->getTreeDepth($this->tree));
    }
}