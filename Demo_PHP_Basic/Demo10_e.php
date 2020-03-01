<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Search Book</title>
</head>
<body>
    <form action="Demo10_e.php" method="get">
        <div>
            Keyword:
            <input type="text" name="kb" require />
            <button type="submit">Search</button>
        </div>
    </form>
    <hr />
    <?php
        if(isset($_GET["kb"])) { 
            $keyword = $_GET["kb"];
            echo "Keyword: $keyword";
        }
    ?>
</body>
</html>