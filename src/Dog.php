<?php

namespace Src;

use Src\Pet;
use Src\PetInterface;

class Dog extends Pet implements PetInterface
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
        $this->breed = $breed;
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
}