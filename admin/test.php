<?php
require("./src/co_bdd.php");

if(!empty($_POST)){
    $req = $bdd->prepare('INSERT INTO admin(email,name,password) VALUES (?,?,?)');
    $req->execute(array($_POST['email'], $_POST['name'], password_hash($_POST['password'], PASSWORD_BCRYPT)));

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="test.php" method="POST">
            <input type="text" name="name">
            <input type="email" name="email">
            <input type="password" name="password">
            <input type="submit">


    </form>
</body>
</html>