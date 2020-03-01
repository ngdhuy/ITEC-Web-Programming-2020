<?php
    function SayHi() {
        echo "<h1>Hello Mr Bưởi</h1>";
    }

    // Truyền tham trị (Pass by Value)
    function Cong($a , $b) {
        return $a + $b;
    }

    SayHi();
    $c = 10; 
    $d = 2.3;
    $kq = Cong($c, $d);
    echo "<p>Ket qua = $kq</p>";
    echo "<hr />";

//----------------------------------------
    // Truyền tham chiếu (Pass by Reference)
    function NhanDoi(&$a){
        $a = $a * 2;
    }

    $k = 5;
    NhanDoi($k);
    echo "<p>$k</p>";
    echo "<hr />";

//----------------------------------------
    // Biến toàn cục và biến cục bộ
    function TangBaLan(){
        global $tong;   // Sử dụng biến tong toàn cục ở bên ngoài hàm
        $tong = 8;
        echo "<p> -- $tong</p>";
    }

    $tong = 10;
    TangBaLan();
    echo "<p>$tong</p>"; // tong là biến Toàn Cục
?>