<?php
include("nav.php");
$_features=true;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <script>
        const button=document.querySelector("button");
        const body=document.querySelector("body");
        const color=['red','green','blue'];
        body.style.backgroundColor('violet');
        button.addEventListener('click',change);
        function change(){
          const color2=parseInt(Math.random()*color.length);
          body.style.backgroundColor(color[color2]);
        }
        </script>
</head>
<body>
    <h1>features</h1>
    <p>features</p>
    <p> i love myself12 </p>
    <button>click me</button>
    
   


</body>
</html>