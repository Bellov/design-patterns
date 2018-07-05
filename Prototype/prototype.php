<?php

class Pokemon
{
    protected $name;
    protected $category;

    public function __construct(string $name, string $category = 'FIRE')
    {
        $this->name = $name;
        $this->category = $category;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setCategory(string $category)
    {
        $this->category = $category;
    }

    public function getCategory()
    {
        return $this->category;
    }
}
$original = new Pokemon('Pikachy');
print_r($original->getName());
print_r($original->getCategory());

/* ¯\_(ツ)_/¯ */

$cloned = clone $original;
$cloned->setName('Raichu');
print_r($cloned->getName());
print_r($cloned->getCategory());
