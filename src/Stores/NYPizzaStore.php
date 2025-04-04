<?php

declare(strict_types=1);

namespace PizzaStore\Stores;

use PizzaStore\Pizza;
use PizzaStore\PizzaStore;
use PizzaStore\Pizzas\CheesePizza;

class NYPizzaStore extends PizzaStore
{
 protected function createPizza(string $type): Pizza
 {
  return match (strtolower($type)) {
   'cheese' => new CheesePizza(),
   default => throw new \InvalidArgumentException("Unknown pizza type: $type"),
  };
 }
}
