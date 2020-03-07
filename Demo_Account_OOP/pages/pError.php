<?php 
    $id = 1;
    if(isset($_GET["id"]))
        $id = $_GET["id"];
    
    switch($id) { 
        case 1:
            echo "<h1 class='alert alert-danger'>Username or Password is invalid</h1>";
            break;
        case 2:
            echo "<h1 class='alert alert-danger'>Password and confirm password is not match</h1>";
            echo "<a href='index.php?a=2'>Back to Register page</a>";
            break;
        case 3:
            echo "<h1 class='alert alert-danger'>Cannot register</h1>";
            echo "<a href='index.php?a=2'>Back to Register page</a>";
            break;
    }
?>