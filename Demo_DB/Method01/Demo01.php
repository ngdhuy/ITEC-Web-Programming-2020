<?php
    include_once "DataProvider.php";

    $query = "SELECT u.UserID, u.FullName, t.UserTypeName FROM User u, UserType t WHERE u.UserTypeID = t.UserTypeID";
    $result = DataProvider::ExecuteQuery($query);
    
    while($row = mysqli_fetch_array($result)) {
        $id = $row["UserID"];
        $name = $row["FullName"];
        $userType = $row["UserTypeName"];

        echo "<div>$id - $name - $userType</div>";
    }
?>