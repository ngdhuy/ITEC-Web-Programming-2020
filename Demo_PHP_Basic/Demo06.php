<?php 
    $a = array(1, 4, 2, 7, 3);  // PHP version > 5.0
    $a = [1, 4, 2, 7, 3];       // PHP version > 7.0
    var_dump($a);
    echo "<hr />";

    foreach($a as $i) { echo "$i "; }
    echo "<hr />";

    $a[] = 8;   // Thêm mới item
    $a[3] = 0;  // Update item thứ 3
    $a[] = 9;   // Thêm mới item
    foreach($a as $i) { echo "$i "; }
    echo "<hr />";

    array_splice($a, 2, 1);     // Xóa 1 phần tử ở vị trí thứ 2
    foreach($a as $i) { echo "$i "; }
    echo "<hr />";

    array_splice($a, 3, 0, [-1]);   // Thêm một phần tử -1 vào vị trí thứ 3
    foreach($a as $i) { echo "$i "; }
    echo "<hr />";
?>