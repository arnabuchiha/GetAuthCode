<?php
 if(isset($_GET['code'])){
    setcookie("auth_code",substr($_GET['code'],0,-2),time() + (86400 * 30),"/");
    header("Location:http://localhost:3000/");
 }
 else{
    setcookie("auth_code","error",time() + (86400 * 30),"/");
    header("Location:http://localhost:3000/");
 }
 echo $_COOKIE["auth_code"];
?>
