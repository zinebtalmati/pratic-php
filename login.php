<?php
if (isset($_GET["submit"])) {
     echo $_GET["name"] . $_GET ["password"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login pageL</title>
</head>
<body>
    <h2> login</h2>
    <form  action="login.php" method="GET">
        <label>user name</label>
        <input type="text"  name="name" placeholder="name" >
        <label>password</label>
        <input type="password" name="password" placeholder="password">
        <input type="submit" name="submit" value="submit">
    </form>