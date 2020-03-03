<?php 
    include_once("Database.php");

    $db = new Database();
    $sql = "SELECT * FROM User";

    $db->query($sql);

    while($row = $db->stmt->fetch()){
        $id = $row["UserID"];
        $name = $row["UserName"];
        $type = $row["UserTypeID"];

        echo "<div>$id - $ $name - $type</div>";
    }
?>