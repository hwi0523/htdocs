<?php
    include_once "db/db_board.php";

    session_start();
    session_destroy();
    header("location: login.php");
?>