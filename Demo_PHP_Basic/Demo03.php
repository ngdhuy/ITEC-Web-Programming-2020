<?php
    // IF
    $a = 9;
    if($a / 2 == 0) {
        echo "$a là số chẵn";
    } else {
        echo "$a là số lẻ";
    }

    echo "<hr />";

    // SWITCH
    $b = 8;
    switch ($b) {
        case 1:
            echo "Số 1";
            break;
        case 2:
            echo "Số 2";
            break;
        case 3:
            echo "Số 3";
            break;
        case 4:
            echo "Số 4";
        case 5:
            echo "Số 5";
            break;
        default:
            echo "Error";
    }
?>