<?php
class PepperoniPizza
{

}

class PizzaMaker
{
    protected $availablePizza = [];

    public function make($preference)
    {
        if (empty($this->availablePizza[$preference])) {
            $this->availablePizza[$preference] = new PepperoniPizza();
        }

        return $this->availablePizza[$preference];
    }
}

class PizzaShop
{
    protected $orders;
    protected $pizzaMaker;

    public function __construct(PizzaMaker $pizzaMaker)
    {
        $this->pizzaMaker = $pizzaMaker;
    }

    public function takeOrder(string $pizzaType, int $table)
    {
        $this->orders[$table] = $this->pizzaMaker->make($pizzaType);
    }

    public function serve()
    {
        foreach ($this->orders as $table => $pizza) {
            print_r("The pizza is a ready!" . '-' . $table);
        }
    }
}

$pizzaMaker = new PizzaMaker();
$order = new PizzaShop($pizzaMaker);
$order->takeOrder('More shugar for the coffe', 1);
$order->takeOrder('Coffe', 1);
$order->serve();

print_r($order);
