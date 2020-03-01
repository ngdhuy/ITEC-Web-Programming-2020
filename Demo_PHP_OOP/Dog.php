<?php 
    namespace Animal;
    
    class Dog extends Animal {
        var $type;

        public function __construct($type)
        {
            parent::__construct();
            
            $this->animal_type = "Dog";
            $this->type = $type;
        }

        public function __destruct()
        {
            unset($this->type);
            parent::__destruct();
        }

        public function MakeSound() 
        {
            echo "<div>Gau Gau</div>";
        }
    }
?>