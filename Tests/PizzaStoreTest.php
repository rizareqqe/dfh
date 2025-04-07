<?php

declare(strict_types=1);

namespace PizzaStore\Tests;

use PHPUnit\Framework\TestCase;
use PizzaStore\Pizza;
use PizzaStore\PizzaStore;

class PizzaStoreTest extends TestCase
{
 /**
  * Tests the orderPizza method with a mock pizza.
  */
 public function testOrderPizza(): void
 {
  // Создаём мок для PizzaStore
  $store = new class extends PizzaStore {
   protected function createPizza(string $type): Pizza
   {
    return new class('Тестовая пицца', 'Тестовый соус', ['Тестовый топпинг']) extends Pizza {};
   }
  };

  $pizza = $store->orderPizza('test');
  $this->assertEquals('Тестовая пицца', $pizza->getName());
 }
}
