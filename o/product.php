<?php

class Product {

    private $logger;

    public function __contruct(ILogger $logger){
        $this->logger = $logger;
    }

    public function setPrice($price){
        try{
            // save proce in db
        }catch(DbException $e){
            $this->logger->log($e->getMessage());
        }
    }
}