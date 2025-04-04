<?php

declare(strict_types=1);

namespace PizzaStore\Pizzas;

use PizzaStore\Pizza;

class PepperoniPizza extends Pizza
{
 public function __construct()
 {
  parent::__construct(
   'Пицца с пепперони',
   'Томатный соус',
   ['Пепперони', 'Моцарелла']
  );
 }
}
 