<?php
session_start();
if(isset($_SESSION['username'])){
session_unset();
session_destroy();

require 'register.php';
} 



?>