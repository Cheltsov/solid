<?php
/**
 * Принцип единственной ответственности
 * Single Responsibility Principle
 */

$logger = new Logger();
$product = new Product($logger);
$product->setPrice(10);