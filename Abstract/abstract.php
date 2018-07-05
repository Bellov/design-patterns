<?php
interface Programmer
{
    public function getSkills();
}
class JuniorDev implements Programmer
{
    public function getSkills()
    {
        echo 'Hey, i`m a junior dev ༼ つ ◕_◕ ༽つ';
    }
}

interface ProgrammerFactory
{
    public function JuniorDev(): Programmer;
}

class Factory implements ProgrammerFactory
{
    public function JuniorDev(): Programmer
    {
        return new JuniorDev();
    }
}

/* (；一_一) */
$programmerFactory = new Factory();
$junior = $programmerFactory->JuniorDev();
$junior->getSkills();
print_r($junior);
