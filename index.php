<?php
 if(isset($_GET['code'])){
    header("Location:http://localhost:3000/"."code/".substr($_GET['code'],0,-2));
 }
 else{
    header("Location:http://localhost:3000/"."code/error".substr($_GET['code'],0,-2));
 }
?>

