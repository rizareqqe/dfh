<?php

declare(strict_types=1);

namespace PizzaStore\Tests;

use PHPUnit\Framework\TestCase;
use PizzaStore\Stores\NYPizzaStore;

class PizzaStoreTest extends TestCase
{
 public function testOrderPizza(): void
 {
  $store = new NYPizzaStore();

  // Проверяем вывод в консоль
  $this->expectOutputString(
   "Началась готовка пиццы Сырная пицца\n" .
    "Добавлен соус Томатный соус\n" .
    "Добавлены топики: Моцарелла, Пармезан, Чеддер\n" .
    "Данную пиццу нарезают по диагонали\n"
  );

  $pizza = $store->orderPizza('cheese');

  // Дополнительная проверка имени пиццы
  $this->assertEquals('Сырная пицца', $pizza->getName());
 }
}
