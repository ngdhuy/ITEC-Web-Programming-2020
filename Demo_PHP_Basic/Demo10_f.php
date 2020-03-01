<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Create Detail Page</title>
</head>
<body>
    <?php
        $a = [1, 2, 3, 4, 5];

        echo "<ul>";
        foreach($a as $i) {
            echo "<li><a href='Demo10_g.php?id=$i'>Item $i</a></li>";
        }
        echo "</ul>";
    ?>
</body>
</html>