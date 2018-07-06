<?php
interface Laptop
{
    public function getPrice();
    public function getDescription();
}
class LaptopForBusiness implements Laptop
{
    public function getPrice()
    {
        return 200;
    }

    public function getDescription()
    {
        return 'Laptop for Business';
    }
}

class GamingLaptop implements Laptop
{
    protected $laptop;

    public function __construct(Laptop $laptop)
    {
        $this->laptop = $laptop;
    }

    public function getPrice()
    {
        return $this->laptop->getPrice() + 1200;
    }

    public function getDescription()
    {
        return $this->laptop->getDescription() . ',gaming laptop';
    }

}
class SimpleLaptop implements Laptop
{
    protected $laptop;

    public function __construct(Laptop $laptop)
    {
        $this->laptop = $laptop;
    }

    public function getPrice()
    {
        return $this->laptop->getPrice() + 50;
    }

    public function getDescription()
    {
        return $this->laptop->getDescription() . ', laptop for the home';

    }

}

$laptops = new LaptopForBusiness();
echo ($laptops->getPrice());
echo ($laptops->getDescription());

$laptops = new GamingLaptop($laptops);
echo ($laptops->getPrice());
echo ($laptops->getDescription());

$laptops = new SimpleLaptop($laptops);
echo ($laptops->getDescription());
