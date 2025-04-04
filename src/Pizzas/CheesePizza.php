<?php

declare(strict_types=1);

namespace PizzaStore\Pizzas;

use PizzaStore\Pizza;

class CheesePizza extends Pizza
{
 public function __construct()
 {
  parent::__construct(
   'Сырная пицца',
   'Томатный соус',
   ['Моцарелла', 'Пармезан', 'Чеддер']
  );
 }
}
