<?php

$remember=$_POST['rememberme'];
$user    =$_post['username'];
$email   =$_post['email'];
$password   =$_post['password'];
$confirm   =$_post['confirm'];
if(!empty($remember)){
    setcookie("saveincookie",$email,time()+86400,"/");
    setcookie("saveincookie",$user,time()+86400,"/");
   }
else
{
    setcookie("saveincookie",$email,time()-86400,"/");
    setcookie("saveincookie",$user,time()-86400,"/");
}