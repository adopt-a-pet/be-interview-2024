<?php

namespace Tests\Unit\Pet;

use Src\Dog;
use PHPUnit\Framework\TestCase;

class DogUnitTest extends TestCase
{
    /**
     * The dog instance for testing.
     *
     * @var Dog
     */
    private Dog $dog;

    /**
     * Set up before tests.
     *
     * @return void
     */
    protected function setUp(): void
    {
        $this->dog = new Dog('Fido', 5, 'Labrador');
    }

    /**
     * Test the inheritance of the dog class.
     *
     * @return void
     */
    public function testInheritance(): void
    {
        $this->assertInstanceOf('Src\Pet', $this->dog);
    }

    /**
     * Test the creation of a dog.
     *
     * @return void
     */
    public function testDogCreation(): void
    {
        $this->assertEquals('Fido', $this->dog->getName());
        $this->assertEquals(5, $this->dog->getAge());
        $this->assertEquals('dog', $this->dog->getType());
    }

    /**
     * Test the getBreed method.
     *
     * @return void
     */
    public function testGetBreed(): void
    {
        $this->assertEquals('Labrador', $this->dog->getBreed());
    }
}