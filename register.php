<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>regestration</title>
    <style>
body{
    background-image:url('beach.jpg');
}
button{
transform:translate(20%,-30%);
border-radius:5px;
padding:6px;
border:0px;
max-width:350px;
background-color:#088;
color:white;
}
form{
   position:absolute;
   left:50%;
   top:50%;
   transform:translate(-50%,-50%);
   background-color:rgba(99, 104, 99, 0.63);
   padding:50px;
   border-radius:5px;

}
input{
    border:1px solid   rgba(77, 73, 73, 0.63);
    padding:6px;
    border-radius:5px;
}
span{
    color:white;
    font-size:1.2rem;
}
.check{
   
    
}
label{
    color:#f05f;
}
</style>
</head>
<body>
<?php 
if(!empty($errors)){
    foreach($errors as $error){
    echo "<span>".$error.'<br>'." </span>";
}
}

?>

<form  action="submit.php"method="post">
    
    <input type="text" name="username" placeholder="enter name" required>
    <br> <br>
    <input type="email" name="email" placeholder="enter email" required>
    <br> <br>
    <input type="password" name="password" placeholder="enter password" required>
    <br> <br>
    <input type="password" name="confirm" placeholder="confirm pass.." required>
    <br> <br>
    <button>Createyouraccount</button>
    <br><br>
    <input  class="check" type="checkbox"  name="rememberme" value="Bike">
    <label>rememberme</label>


</form>
</body>
</html>