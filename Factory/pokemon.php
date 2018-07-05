<?php

class Pokemon
{
    private $pokemonName;
    private $pokemonStars;
    private $pokemonStatus;

    public function __construct($name, $stars, $status)
    {
        $this->pokemonName = $name;
        $this->pokemonStars = $stars;
        $this->pokemonStatus = $status;
    }

    public function getStartsAndStatus()
    {
        return $this->pokemonName . ' = ' . $this->pokemonStars . ' - ' . $this->pokemonStatus;
    }

}

class PokemonFactory
{
    public static function create($name, $stars, $status)
    {
        return new Pokemon($name, $stars, $status);
    }
}

/* ¯\_(ツ)_/¯*/

$pokemonFirst = PokemonFactory::create('Pikachu', 'Fire', '*****');
print_r($pokemonFirst->getStartsAndStatus());
