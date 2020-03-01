<?php
    namespace Animal;
    
    abstract class Animal 
    {
        // Attribute
        var $id;
        var $animal_type;
        static $count = 1;
        
        // Method
        public function __construct() 
        {
            $this->id = Animal::$count++;
            $this->animal_type = "no-name";
        }

        public function __destruct()
        {
            unset($this->id);
            unset($this->animal_type); 
        }

        abstract public function MakeSound();
    }
?>