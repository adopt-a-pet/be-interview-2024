<?php

namespace Src;

interface PetInterface {
    /**
     * Get the name of the pet.
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Get the age of the pet.
     *
     * @return int
     */
    public function getAge(): int;

    /**
     * Get the type of the pet.
     *
     * @return string
     */
    public function getType(): string;
}