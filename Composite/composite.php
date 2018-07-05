<?php

interface charClass
{
    public function __construct(string $name, float $level);
    public function getNickName(): string;
    public function getClass(): string;
    public function getClassRole(): string;
    public function setLevel(float $level);

}

class Warrior implements charClass
{
    protected $nickName;
    protected $class;
    protected $level;
    protected $classRole;

    public function __construct(string $nickName, float $level)
    {
        $this->nickName = $nickName;
        $this->level = $level;
    }

    public function getNickName(): string
    {
        return $this->nickName;
    }

    public function getClass(): string
    {
        return $this->class;
    }

    public function getClassRole(): string
    {
        return $this->classRole;
    }

    public function setLevel(float $level): float
    {
        return $this->level;
    }

    public function getLevel(): float
    {
        return $this->level;
    }

}

class Guild
{
    protected $guildPlayers;

    public function addGuildPlayer(charClass $charClass)
    {
        $this->guildPlayers[] = $charClass;
    }

    public function getGuildPlayers()
    {
        $gplayers = 0;

        foreach ($this->guildPlayers as $charClass) {
            $gPlayers += $charClass->getLevel;
        }

        return $gPlayers;
    }

}

$kira = new warrior('Kira', 22);
$alany = new Warrior('Alany', 110);

$guild = new Guild();
$guild->addGuildPlayer($kira);
$guild->addguildPlayer($alany);

print_r($guild);
