<?php
/**
 * Принцип открытости / закрытости
 * Open / Close Principle
 */

$logger = new DBLogger();
$product = new Product($logger);
$product->setPrice(10);