<?php
    namespace Animal;

    class Cat extends Animal {
        var $color; 

        public function __construct($color)
        {
            parent::__construct();

            $this->animal_type = "Cat";
            $this->color = $color;
        }

        public function __destruct()
        {
            unset($this->color);
            parent::__destruct();   
        }

        public function MakeSound()
        {
            echo "Meo Meo";
        }
    }
?>