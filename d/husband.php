<?php
/**
 * Принцип инверсии зависимостей
 * Dependency Inversion Pricinple
 */

class lowRankingMale{

    public function eat(){
        $wife = new Wife();
        $food = $wife->getFood();
        // ... eat
    }
}

class averageRankingmale{
    private $wife;

    public function __construct(Wife $wife){
        $this->wife = $wife;
    }

    public function eat(){
        $food = $this->wife->getFood();
        // ... eat
    }
}

class highRankingmale{
    private $foodProvider;

    public function __construct(IFoodProvider $foodProvider){
        $food = $this->foodProvider->getFood();
        // ... eat
    }
}