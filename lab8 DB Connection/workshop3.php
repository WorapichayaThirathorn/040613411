<?php include "connect.php" ?>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <div style="display:block">
        <?php
        $stmt = $pdo->prepare("SELECT * FROM member");
        $stmt->execute();
        ?>
        <?php while ($row = $stmt->fetch()) : ?>
            
            <div>
                ชื่อสมาชิก : <?= $row["name"] ?> <br>
                ที่อยู่ : <?= $row["address"] ?> <br>
                อีเมล์ : <?= $row["email"] ?> <br>
                <img src='img/<?= $row["username"] ?>.jpg' width='100'><br> <hr>
            </div>
        <?php endwhile; ?>
    </div>
</body>

</html>