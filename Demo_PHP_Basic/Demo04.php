<?php 
    $a = 5;
    
    for($i = 0; $i < $a; $i++) {
        echo "<p>$i</p>";
    }
    echo "<hr />";

    while($i > 0) {
        echo "<p>$i</p>";
        $i--;
    }
    echo "<hr />";

    do {
        echo "<p>$i</p>";
        $i += 2;
    } while ($i < 10);
?>