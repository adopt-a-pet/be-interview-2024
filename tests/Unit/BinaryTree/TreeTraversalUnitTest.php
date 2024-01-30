<?php

namespace Tests\Unit\BinaryTree;

use Src\BinaryTree;
use Src\TreeTraversal;
use PHPUnit\Framework\TestCase;

class TreeTraversalUnitTest extends TestCase {

    /**
     * The tree traversal instance for testing.
     *
     * @var TreeTraversal
     */
    private TreeTraversal $treeTraversal;

    /**
     * Set up before tests.
     *
     * @return void
     */
    protected function setUp(): void {
        $this->treeTraversal = new TreeTraversal();
    }

    /**
     * Test the getTreeDepth method.
     *
     * @return void
     */
    public function testGetTreeDepth(): void {
        $this->assertEquals(0, $this->treeTraversal->getTreeDepth(new BinaryTree()));

        $tree = new BinaryTree();
        $tree->insert(15);
        $tree->insert(10);
        $tree->insert(20);
        $tree->insert(8);
        $tree->insert(12);
        $tree->insert(17);
        $tree->insert(25);

        $this->assertEquals(3, $this->treeTraversal->getTreeDepth($tree));
    }
}