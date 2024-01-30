<?php

namespace Tests;

use Src\TreeNode;

use PHPUnit\Framework\TestCase;

class TreeNodeTest extends TestCase {
    public function testTreeNodeCreation() {
        $value = 10;
        $node = new TreeNode($value);

        $this->assertEquals($value, $node->value);
        $this->assertNull($node->left);
        $this->assertNull($node->right);
    }
}