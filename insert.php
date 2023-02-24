<?php
mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");

$pdo->exec("insert into contactform(name,mail,age,comments)
values('".$_POST['name']."','".$_POST['mail']."','".$_POST['age']."','".$_POST['comments']."');");
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>お問合せフォーム</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h1>お問合せフォーム</h1>

    <div class="confim">
        <p>お問合せ有難うございました。<br>3営業日以内に担当者よりご連絡差し上げます。</p>
    </div>
</body>

</html>