<?php
include "Animal.php";
include "Dog.php";
include "Cat.php";

use Animal\Dog;
use Animal\Cat;

    $a = []; // Animal;

    for($i = 0; $i < 10; $i++)
    {
        if($i < 6) {
            $item = new Dog($i);
        } else {
            $item = new Cat($i);
        }

        $a[] = $item;
    }

    foreach($a as $item) {
        echo "<div>$item->id - $item->animal_type</div>";
        $item->MakeSound();
    }
?>