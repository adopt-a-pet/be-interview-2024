<?php

namespace Src\Pet;

use Src\Pet\Pet;
use Src\Pet\PetInterface;

class Dog
{
    /**
     * The breed of the dog.
     *
     * @var string
     */
    private string $breed;

    /**
     * Create a new dog instance.
     *
     * @param string $name
     * @param int $age
     * @param string $breed
     */
    public function __construct(string $name, int $age, string $breed)
    {
        parent::__construct($name, $age, 'dog');
    }

    /**
     * Get the breed of the dog.
     *
     * @return string
     */
    public function getBreed(): string
    {
        return $this->breed;
    }

    public function getAgeInHumanYears()
    {
        // return the age in human years as an integer
    }
}