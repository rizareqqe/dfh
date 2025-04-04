<?php

declare(strict_types=1);

namespace PizzaStore\Tests;

use PHPUnit\Framework\TestCase;
use PizzaStore\Stores\NYPizzaStore;

class PizzaStoreTest extends TestCase
{
 /**
  * Tests the orderPizza method for a cheese pizza.
  */
 public function testOrderPizza(): void
 {
  $store = new NYPizzaStore();
  $pizza = $store->orderPizza(type: 'cheese');

  $this->assertEquals('Сырная пицца', $pizza->getName());
 }

 /**
  * Tests the orderPizza method for a pepperoni pizza.
  */
 public function testOrderPizzaPepperoni(): void
 {
  $store = new NYPizzaStore();
  $pizza = $store->orderPizza(type: 'pepperoni');

  $this->assertEquals('Пицца с пепперони', $pizza->getName());
 }

 /**
  * Tests the orderPizza method for a veggie pizza.
  */
 public function testOrderPizzaVeggie(): void
 {
  $store = new NYPizzaStore();
  $pizza = $store->orderPizza(type: 'veggie');

  $this->assertEquals('Овощная пицца', $pizza->getName());
 }

 /**
  * Tests that orderPizza throws an exception for an invalid pizza type.
  */
 public function testOrderPizzaWithInvalidType(): void
 {
  $store = new NYPizzaStore();
  $this->expectException(\InvalidArgumentException::class);
  $this->expectExceptionMessage('Неизвестный тип пиццы: invalid');
  $store->orderPizza(type: 'invalid');
 }
}
