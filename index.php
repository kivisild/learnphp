<?php

// library
class Job{
    public function task(Logger $logger){
        for($i=0; $i<10; $i++){
            $logger->log("Task $i completed!");

            
        }
    }
}

class ConsoleLogger implements Logger{
    public function log($message){
        echo $message . "\n";
    }
}

interface Logger {
    public function log($message);
}

// user
$job = new Job();
$logger = new ConsoleLogger();
$job->task($logger);