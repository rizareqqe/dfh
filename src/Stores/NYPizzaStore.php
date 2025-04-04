<?php

declare(strict_types=1);

namespace PizzaStore\Stores;

use PizzaStore\Pizza;
use PizzaStore\PizzaStore;
use PizzaStore\Pizzas\CheesePizza;
use PizzaStore\Pizzas\PepperoniPizza;
use PizzaStore\Pizzas\VeggiePizza;

class NYPizzaStore extends PizzaStore
{
 /**
  * Creates a pizza based on the given type.
  *
  * @param string $type The type of pizza to create (e.g., 'cheese', 'pepperoni', 'veggie')
  * @return Pizza The created pizza instance
  * @throws \InvalidArgumentException If the pizza type is unknown
  */
 protected function createPizza(string $type): Pizza
 {
  return match ($type) {
   'cheese' => new CheesePizza(),
   'pepperoni' => new PepperoniPizza(),
   'veggie' => new VeggiePizza(),
   default => throw new \InvalidArgumentException("Неизвестный тип пиццы: {$type}"),
  };
 }
}
