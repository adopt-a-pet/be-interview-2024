<?php

namespace Tests\Unit\BinaryTree;

use Src\BinaryTrees\TreeNode;

use PHPUnit\Framework\TestCase;

class TreeNodeUnitTest extends TestCase {

    /**
     * Test the creation of a tree node.
     *
     * @return void
     */
    public function testTreeNodeCreation(): void {
        $value = 10;
        $node = new TreeNode($value);

        $this->assertEquals($value, $node->value);
        $this->assertNull($node->left);
        $this->assertNull($node->right);
    }
}