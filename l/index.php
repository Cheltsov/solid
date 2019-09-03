<?php
/**
 * Принцип подстановки Барбары Лисков
 * Liskov Subctitution Principle
 */

$bird = new Bird();
//$bird = new Duck();
//$bird = new Penguin();
$birfRun = new BirdRun($bird);
$birfRun->run();