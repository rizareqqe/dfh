<?php

declare(strict_types=1);

namespace PizzaStore\Pizzas;

use PizzaStore\Pizza;

class VeggiePizza extends Pizza
{
 public function __construct()
 {
  parent::__construct(
   'Овощная пицца',
   'Томатный соус',
   ['Перец', 'Грибы', 'Оливки']
  );
 }
}
