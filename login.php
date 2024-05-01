<?php
$dbHost="Localhost";
$dbUsername="root";
$dbPassword= "";
$dbName="login_php";

$conexao=new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

echo "Hello World!";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="login.css"/>
    <title>Login projeto PHP</title>
</head>
<body>
    <div>
        <h1>Oiiii</h1>
    </div>
</body>
</html>