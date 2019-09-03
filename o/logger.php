<?php

class FileLogger implements ILogger {

    public function log($message = null){
        //...
        $this->saveToFile($message);
    }

    private function saveToFile($message){
        //...
    }
}

class DBLogger implements ILogger {

    public function log($message = null){
        //...
        $this->saveToDB($message);
    }

    private function saveToDB($message){
        //...
    }
}