<?php
    session_start();
    if(isset($_SESSION["userid"])){
        $userid =$_SESSION["userid"];
    } else{
        $user_id ="";
    }if (isset($_SESSION["username"])){
        $username =$_SESSION["username"];
    }else{
        $username="";
    }

?>