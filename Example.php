<?php

class Example{
    private $tablica; 
    
    public function __construct() {
        for ($i=0;$i<10;$i++) {
    array_push($this->tablica, "To jest ".($i+1)." linijka tekstu");
    }
        
    }
    public function display(){
        foreach($this->tablica as $element) {
            echo $element;
        }
    }



