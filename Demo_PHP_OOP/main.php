<?php
    include_once ('Animal.php');
    include_once ('Dog.php');
    include_once ('Cat.php');

    // $a = new Animal();
    // echo $a->id." - ".$a->animal_type;
    // echo "<hr />";

    $b = new Dog("Corgi");
    echo "<div>$b->id - $b->animal_type - $b->type</div>";
    $b->MakeSound();

    $c = new Dog("Phoc");
    echo "<div>$c->id - $c->animal_type - $c->type</div>";
    $c->MakeSound();

    $d = new Cat("Black");
    echo "<div>$d->id - $d->animal_type - $d->color</div>";
    $d->MakeSound();
?>