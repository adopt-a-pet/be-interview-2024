<?php

namespace Src;

abstract class Pet {
    /**
     * The name of the pet.
     *
     * @var string
     */
    protected string $name;

    /**
     * The age of the pet.
     *
     * @var int
     */
    protected int $age;

    /**
     * The type of the pet.
     *
     * @var string
     */
    protected string $type;

    /**
     * Create a new pet instance.
     *
     * @param string $name
     * @param int $age
     * @param string $type
     */
    public function __construct(string $name, int $age, string $type) {
        $this->name = $name;
        $this->age = $age;
        $this->type = $type;
    }

    /**
     * Get the name of the pet.
     *
     * @return string
     */
    public function getName(): string {
        return $this->name;
    }

    /**
     * Get the age of the pet.
     *
     * @return int
     */
    public function getAge(): int {
        return $this->age;
    }

    /**
     * Get the type of the pet.
     *
     * @return string
     */
    public function getType(): string {
        return $this->type;
    }
}