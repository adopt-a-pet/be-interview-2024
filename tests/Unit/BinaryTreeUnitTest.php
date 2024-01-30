<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Src\BinaryTree;

class BinaryTreeUnitTest extends TestCase {
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
    }

    public function testInsertNull() {
        $this->expectException(\Exception::class);

        $this->expectExceptionMessage("Value cannot be null.");

        $this->tree->insert(null);

        $this->assertNull($this->tree->root);
    }

    /**
     * Test the insert method.
     *
     * @return void
     */
    public function testInsert() {
        $this->assertNull($this->tree->root);

        $values = [15, 10, 20, 8, 12, 17, 25];
        foreach ($values as $value) {
            $this->tree->insert($value);
        }

        $this->assertNotNull($this->tree->root);
        $this->assertEquals(15, $this->tree->root->value);
        $this->assertEquals(10, $this->tree->root->left->value);
        $this->assertEquals(20, $this->tree->root->right->value);
    }
}