<?php
    $arr = array(1, 3, 2, 0, 4, 5);

    $n = count($arr);   // Đếm số lượng phần tử có trong mảng arr
    for($i = 0; $i < $n; $i++){
        echo "$arr[$i] ";
    }
    echo "<hr />";

    foreach($arr as $item) {
        echo "$item ";  // $item = $a[$i]
    }
?>