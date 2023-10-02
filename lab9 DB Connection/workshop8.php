<?php include "connect.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="addno8.php" method="post">
        Username: <input type="text" name="username"><br><br>
        Password: <input type="password" name="password"><br><br>
        Name: <input type="text" name="name"><br><br>
        Address: <br><textarea name="address" rows="3" cols="30"></textarea><br><br>
        Mobile: <input type="text" name="mobile"><br><br>
        Email: <input type="email" name="email"><br><br>
        <input type="submit" value="เพิ่มข้อมูล">
    </form>
</body>
</html>