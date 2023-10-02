<?php include "connect.php" ?>

<?php
    $stmt = $pdo->prepare("SELECT * FROM member WHERE username = ?");
    $stmt->bindParam(1, $_GET["username"]); 
    $stmt->execute(); 
    $row = $stmt->fetch(); 
?>

<html>
<head><meta charset="UTF-8"></head>
<body>
    <form action="edit.php" method="post" >
        <input type="hidden" name="username" value="<?=$row["username"]?>"><br>
        name : <input type="text" name="name" value="<?=$row["name"]?>"><br><br>
        address : <input type="text" name="address" value="<?=$row["address"]?>"><br><br>
        mobile : <input type="text" name="mobile" value="<?=$row["mobile"]?>"><br><br>
        email : <input type="text" name="email" value="<?=$row["email"]?>"><br><br>
        <input type="submit" value="แก้ไข">
    </form>
</body>
</html>
