<?php

interface Dungeon
{
    public function open();
    public function close();
}

class BlackwingLairDungeon implements Dungeon
{
    public function open()
    {
        echo "You can enter in the Dungeon!";
    }

    public function close()
    {
        echo "You can`t enter in the Dungeon!";
    }
}

class MoltenCore
{
    protected $dungeon;

    public function __construct(Dungeon $dungeon)
    {
        $this->dungeon = $dungeon;
    }

    public function open($level)
    {
        if ($this->authenticate($level)) {
            $this->dungeon->open();
        } else {
            echo 'You dont have level for this dungeon !';
        }
    }

    public function authenticate($level)
    {
        return $level === 55;
    }

    public function close()
    {
        $this->dungeon->close();
    }
}

$dungeon = new MoltenCore(new BlackwingLairDungeon);
$dungeon->open(55);
// $dungeon->open(22);
print_r($dungeon);
