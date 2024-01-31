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
    public function testInheritance()
    {
        // Please write a test that checks for proper inheritance.
    }

    public function testGetAge()
    {
        // Please write a test that checks that the age of the dog is returned as an integer.
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

    public function testGetName()
    {
        // Please write a test that checks that the name of the dog is returned as a string.
    }

    /**
     * Test the getAgeInHumanYears method.
     *
     * @return void
     */
    public function testGetAgeInHumanYears(): void
    {
        $this->assertEquals(35, $this->dog->getAgeInHumanYears());
    }
}