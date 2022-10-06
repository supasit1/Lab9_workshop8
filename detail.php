<?php include "connect.php"?>
<html>
<head><meta charset="utf-8"></head>
<body>
    <?php
    $stmt = $pdo->prepare("SELECT * FROM member WHERE username LIKE ?");
    $stmt->bindParam(1,$_GET["username"]);
    $stmt->execute();
    $row = $stmt->fetch();
    ?>
    <h2><?=$row["name"]?></h2><br>
    ที่อยู่:<?=$row["address"]?><br>
    เบอร์โทร:<?=$row["mobile"]?><br>
    อีเมล์:<?=$row["email"]?><br> 
</body>
</html>