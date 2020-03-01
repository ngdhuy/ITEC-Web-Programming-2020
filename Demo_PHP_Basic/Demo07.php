<?php
    $a = ["second" => 2, "first" => 1, "third" => 3];
    
    foreach($a as $i ) { echo "$i "; }
    echo "<hr />";
    echo $a["second"];
    echo "<hr />";

    foreach($a as $key => $value){
        echo "<p>$key = $value</p>";
    }
?>