<?php 
    $c = 10; 
    $d = 5;

    // include ('Demo09_a1.php');
    // include_once ('Demo09_a1.php');
    // require ('Demo09_a.php');
    require_once ('Demo09_a.php');

    $e = TinhTong($c, $d);
    echo "<p>$e</p>";

    require_once ('Demo09_a.php');
    SayHi();
?>