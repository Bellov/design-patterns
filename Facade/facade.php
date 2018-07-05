<?php

class Mage
{
    public function fireBlast()
    {
        echo 'Blasts the enemy for (188.8% of Spell power) Fire damage. Castable while casting other spells.';
    }

    public function flamestrike()
    {
        echo 'Calls down a pillar of fire, burning all enemies within the area for (271.4% of Spell power)';
    }

    public function pyroblast()
    {
        echo 'Hurls an immense fiery boulder that causes (495.6% of Spell power) Fire damage.';
    }

}

class MageFacade
{
    protected $mage;

    public function __construct(Mage $mage)
    {
        $this->mage = $mage;
    }

    public function mageBattle()
    {
        $this->mage->fireBlast();
        $this->mage->flamestrike();
        $this->mage->pyroblast();
    }
}

$fireMage = new MageFacade(new Mage());
$fireMage->mageBattle();
print_r($fireMage);
