<?php
 if(isset($_GET['code'])){
    header("Location:https://socialid-2635e.firebaseapp.com/"."code/".substr($_GET['code'],0));
 }
 else{
    header("Location:https://socialid-2635e.firebaseapp.com/"."code/error");
 }
?>

