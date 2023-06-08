<?php
session_start();
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
    <center>
        Olá,<?php 
        if(isset($_SESSION['nome']) == null) {
            ?> visitante <br>
            <a href="logina3.php">login</a><br>
        <?php } else {
            echo $_SESSION['nome'];?>
            <a href="cadastrar.php">cadastrar</a><br>
            <a href="logout.php">sair</a>
        <?php } ?> 
    </center>
</body>
</html>