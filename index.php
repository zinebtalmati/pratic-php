<?php
echo $_SERVER['SERVER_NAME'];
$servername = "localhost";  
$username = "root";        
$password = "";             
$dbname = "practise"; 
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
    echo'connection eroor'.mysqli_connect_error();
}
$sql='select * from testing';
$result = mysqli_query($conn, $sql);
$pizzas=mysqli_fetch_all($result, MYSQLI_ASSOC);
print_r($pizzas);
$emails=mysqli_real_escape_string($conn, $_GET['email']);
$names=mysqli_real_escape_string($conn, $_GET['name']);
$sql = "INSERT INTO testing (title, email) VALUES ('$names', '$emails')";
if(mysqli_query($conn, $sql)){
   // header('location:add.php');
   echo "waw";
}else{
    echo 'erros sql'.mysqli_error($conn);
}
$email = isset($_GET["email"]) ? $_GET["email"] : '';
$name = isset($_GET["name"]) ? $_GET["name"] : '';
$errors = array('name' => '', 'email' => '');

if (empty($_GET["email"])) {
    $errors['email'] ="Les informations ne sont pas saisies";
} elseif (!filter_var($_GET['email'], FILTER_VALIDATE_EMAIL)) {
    $errors['email'] ="L'adresse email n'est pas valide";
}

if (empty($_GET['name'])) {
    $errors['name'] ='Le nom n\'est pas saisi';
} elseif (!preg_match('/^[A-Za-z]+$/', $_GET['name'])) {
    $errors['name'] ='Le nom n\'est pas valide';
}

if (array_filter($errors)) {
    echo 'errors';
} else {
    header('Location:add.php');
    exit; // Assurez-vous d'arrêter l'exécution après la redirection
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
    <section>
        <h1 class="a">hello1</h1>
        <!-- Déplacer le formulaire ici -->
        <form class="h" action="index.php" method="GET">
            <label>name</label>
            <input type="text" name="name" value="<?php echo $name; ?>">
            <div class="red-text"><?php echo isset($errors['name']) ? $errors['name'] : ''; ?></div>
            <label>email</label>
            <input type="text" name="email" value="<?php echo $email; ?>">
            <div class="red-text"><?php echo isset($errors['email']) ? $errors['email'] : ''; ?></div>
            
           <div>
            <input type="submit" name="submit" value="submit">
           </div>
        </form>
    </section>
</body>
</html>