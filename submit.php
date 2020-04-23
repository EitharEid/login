<?php
$errors=[];
$name     =$_POST['username'];
$email    =$_POST['email'];
$password =$_POST['password'];
$confirm  =$_POST['confirm'];
//validate records
if(empty($name)){
     $errors[$name] ="username required";
    // echo"username required";
}
if(empty($email)){
    $errors[$email] ="email required";
}
if(empty($password)){
    $errors[$password]= "password required";
}
if(strlen($password<8)){
    $errors[$password]="password must contain 8 characters at less";
}
if($confirm != $password){
    $errors[$confirm]="the cnfirm should be identical to password";
}
if(!empty($errors)){
 require 'register.php';
  
}else{
    session_start();
    $_SESSION['username'] =$name;
    $_SESSION['email']    =$email;
    $_SESSION['password'] =$password;
    $_SESSION['confirm']  =$confirm;
    require 'index.php';}
    // echo'<a href="index.php">your regstrtion success continue</a>';


