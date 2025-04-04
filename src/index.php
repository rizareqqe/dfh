<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use PizzaStore\Stores\NYPizzaStore;

$store = new NYPizzaStore();

// Заказываем сырную пиццу
echo "Заказываем сырную пиццу:\n";
$store->orderPizza('cheese');

// Заказываем пиццу с пепперони
echo "\nЗаказываем пиццу с пепперони:\n";
$store->orderPizza('pepperoni');

// Заказываем овощную пиццу
echo "\nЗаказываем овощную пиццу:\n";
$store->orderPizza('veggie');
