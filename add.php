<?php  
if(isset($_GET["submit"])){
    setcookie('gender', $_GET["gender"], time() + 3600, "/");
    header('Location: why.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1 class="a">hello zineb</h1>
        <form class="h" action="why.php" method="GET">
            <label>name</label>
            <input type="text" name="name" >
            <div>
            <select name='gender'>
        <option value='male'>male</option>
        <option value='female'>female</option>
        </select>
            <input type="submit" name="submit" value="submit">
           </div>
        </form>
</body>
</html>