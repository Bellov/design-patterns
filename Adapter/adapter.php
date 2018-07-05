<?php

interface Warlock
{
    public function destruction();
    public function demonology();
    public function affliction();
}

class AllianceWarlock implements Warlock
{
    public function destruction()
    {

    }

    public function demonology()
    {

    }

    public function affliction()
    {

    }
}

class HordeWarlock implements Warlock
{
    public function destruction()
    {

    }

    public function demonology()
    {

    }

    public function affliction()
    {

    }

}

class UndeadWarlock
{
    public function shadowBolt(Warclock $warlock)
    {
        $warlock->destruction();
    }

    public function corruption(Warclock $warlock)
    {
        $warlock->demonology();
    }

    public function agony(Warlock $warlock)
    {
        $warlock->affliction();
    }
}

class Succubus
{
    public function seduction()
    {

    }
}

class SuccubusAdapter implements Warlock
{
    protected $succubus;

    public function __construct(Succubus $succubus)
    {
        $this->succubus = $succubus;
    }

    public function destruction()
    {
        $this->succubus->seduction();
    }

    public function demonology()
    {
        $this->succubus->seduction();

    }

    public function affliction()
    {
        $this->succubus->seduction();

    }
}

$succubus = new Succubus();
$succubusAdapter = new SuccubusAdapter($succubus);
$warlock = new undeadWarlock();
var_dump($warlock);
$warlock->agony($succubusAdapter);
print_r($warlock);
