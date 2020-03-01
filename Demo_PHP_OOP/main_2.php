<?php
    include_once "Animal.php";
    include_once "Dog.php";
    include_once "Cat.php";

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