<?php
    $a = 1;
    echo $a;
    $a = "hello world!!!";
    echo $a;
    echo "<hr />";

    $b = "Hello";
    $c = "Mr Bưởi";
    $d = $b.$c;
    echo $d;
    echo "<hr />";

    echo "$b $c";
    echo "<br />";
    echo '$b $c';
    echo "<hr />";

    $pointer = "abc";   // <-- This is Pointer
    $$pointer = "123";  // <-- This is Memory cell

    echo "$pointer <br />";
    echo $$pointer."<br />";
    echo "$abc";

    echo "<hr />";

    $k;
    echo isset($k);
    echo " - $k<hr/>";
    
    $k = 3;
    echo isset($k);
    echo " - $k<hr/>";

    empty($k);
    echo isset($k);
    echo " - $k<hr/>";

    unset($k);
    echo isset($k);
    echo " - $k<hr/>";
?>