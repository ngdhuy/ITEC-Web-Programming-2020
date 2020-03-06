<?php
    session_start();
    include_once("./lib/Database.php");
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel='stylesheet' href="./css/style.css" />
    <title>Hello, world!</title>
</head>

<body>
    <?php require_once("./include/header.php"); ?>

    <div class="container" id="content">
        <?php 
            $action = 1;
            if(isset($_GET["a"])) {
                $action = $_GET["a"];
            }
            
            switch($action) {
                case 1:
                    include("./pages/pHome.php");
                    break;
                case 2:
                    include("./pages/pLogin.php");
                    break;
                case 3:
                    include("./pages/eLogin.php");
                    break;
                case 4:
                    include("./pages/eLogout.php");
                    break;
                case 5:
                    include("./pages/eRegister.php");
                    break;
                case 6:
                    include("./pages/pRegisterSuccess.php");
                    break;
                case 7:
                    include("./pages/pListOfPost.php");
                    break;
                case 8:
                    include("./pages/eCreatePost.php");
                    break;
                case 9:
                    include("./pages/eAddComment.php");
                    break;
                default:
                    include("./pages/pError.php");
            }
        ?>
    </div>

    <?php require_once("./include/footer.php"); ?>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>