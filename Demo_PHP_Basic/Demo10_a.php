<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo truyền nhận dữ liệu</title>
</head>
<body>
    <form action="Demo10_b.php" method="get">
        <div>
            Keyword: <input type='text' name='txtKeyword' />
        </div>
        <div>
        Type:  
            <select name='cmbType'>
                <option value="book">Book</option>
                <option value="soft">Software</option>
            </select>
        </div> 
        <input type="submit" value="Search" />
    </form>
</body>
</html>