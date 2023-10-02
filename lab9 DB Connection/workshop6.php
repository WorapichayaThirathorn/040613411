<?php include "connect.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script>
        function confirmDelete(username){
            var ans = confirm("ต้องการลบชื่อ" + username);
            if (ans==true)
                document.location = "delete.php?username=" + username;
        }
    </script>
</head>
<body>
    <?php
        $stmt = $pdo->prepare("SELECT * FROM member");
        $stmt->execute();

        while ($row = $stmt->fetch()){
            echo "ชื่อสมาชิก : " . $row ["name"] . "<br>";
            echo "ที่อยู่ : " . $row ["address"] . "<br>";
            echo "email : " . $row ["email"] . "<br>";
            echo "<a href='editform.php?username=".$row["username"]."'>แก้ไข</a> |";
            echo "<a href='delete.php?username=' onclick='confirmDelete(" . $row ["username"] . ")'>ลบ</a>";
            echo "<hr>\n";

        }
    ?>
</body>
</html>