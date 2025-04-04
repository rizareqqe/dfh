<?php

declare(strict_types=1);

namespace PizzaStore;

abstract class Pizza
{
 protected string $name;
 protected string $sauce;
 /** @var array<string> */
 protected array $toppings;

 /**
  * Constructs a new Pizza instance.
  *
  * @param string $name The name of the pizza
  * @param string $sauce The sauce used on the pizza
  * @param array<string> $toppings The list of toppings on the pizza
  */
 public function __construct(string $name, string $sauce, array $toppings)
 {
  $this->name = $name;
  $this->sauce = $sauce;
  $this->toppings = $toppings;
 }

 public function prepare(): void
 {
  echo "Началась готовка пиццы {$this->name}\n";
  echo "Добавлен соус {$this->sauce}\n";
  echo "Добавлены топики: " . implode(', ', $this->toppings) . "\n";
 }

 public function cut(): void
 {
  echo "Данную пиццу нарезают по диагонали\n";
 }

 public function getName(): string
 {
  return $this->name;
 }
}
