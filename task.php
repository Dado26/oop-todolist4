<?php

class Task{
    protected $text = '';
    protected $finish = false;
    
    public function __construct($text) {
        $this->text = $text ;
    }
    
    public function finish(){
        $this->finish = true;
    }
    
    public function unfinish(){
        $this->finish = false;
    }
    
    public function getText(){
       return $this->text;
    }
    public function getIsFinished(){
       return $this->finish;
    }
    
    
}