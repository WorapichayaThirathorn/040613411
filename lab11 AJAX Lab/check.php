<?php
$keyword = $_GET["keyword"];
$conn = mysqli_connect("localhost", "root");

if ($conn) {
    mysqli_select_db($conn, "blueshop");
    mysqli_set_charset($conn, "utf8");
} else {
    echo mysqli_connect_errno();
}

$sql = "SELECT * FROM member WHERE name LIKE '%$keyword%'";
$objQuery = mysqli_query($conn, $sql);
?>


    <?php while ($row = mysqli_fetch_array($objQuery)) : ?>
        <img src='img/<?= $row["username"] ?>.jpg' width='100'> <br>
        ชื่อ: <?php echo $row["name"] ?> <br>
        
        <!-- username: <?php echo $row["username"] ?> <br>
        address: <?php echo $row["address"] ?> <br>
        mobile: <?php echo $row["mobile"] ?> <br>
        email: <?php echo $row["email"] ?> <br> -->
        
    <?php endwhile; ?>
