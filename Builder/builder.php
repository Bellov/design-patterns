<?php

class Computer
{
    protected $price;

    protected $ram;
    protected $proccesor;
    protected $videoCard;
    protected $ssd;
    protected $hdd;

    public function __construct(ComputerBuilder $builder)
    {
        $this->ram = $builder->ram;
        $this->proccesor = $builder->proccesor;
        $this->videoCard = $builder->videoCard;
        $this->ssd = $builder->ssd;
        $this->hdd = $builder->hdd;
    }
}

class ComputerBuilder
{
    public $price;
    public $ram = false;
    public $proccesor = false;
    public $videoCard = false;
    public $ssd = false;
    public $hdd = false;

    public function __construct(int $price)
    {
        $this->price = $price;
    }

    public function addRam()
    {
        $this->ram = true;
        return $this;
    }

    public function addProccesor()
    {
        $this->proccesor = true;
        return $this;
    }

    public function addVideoCard()
    {
        $this->videoCard = true;
        return $this;
    }

    public function addSsd()
    {
        $this->ssd = true;
        return $this;
    }

    public function addHdd()
    {
        $this->hdd = true;
        return $this;
    }
}

$pc = (new ComputerBuilder(1200))
    ->addRam()
    ->addProccesor()
    ->addVideoCard()
    ->addSsd()
    ->addHdd();

print_r($pc);
