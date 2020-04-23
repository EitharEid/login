<?php 
if(isset($_SESSION['username'])) {
    echo "<h1>wellcome"." ".$_SESSION['username']." "."toyourpage</h1>";
    echo "<a href='logout.php'><input type='button' name='logout' value='logout'></a>";
}else{
    echo"<h1>you should create new account</h1>'<br>'<a href='register.php'><input type='button' name='Create' value='Create New Account'></a>";
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
    <style>
body{
    background-image:url('star.jpg');
    background-repeat:no-repeat;
    background-size:200% 100%;
}
h1{
    text-align:center;
    margin-top:50px;
    color:rgb(255, 85, 122);
}
input{
    position:absolute;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
    width:30%;
 border-radius:5px;
 border:0px;
  padding:6px;
  background-color:rgb(97, 92, 93);
  color:white;
  font-size:1.2rem;
}

    </style>

    
</body>
</html>