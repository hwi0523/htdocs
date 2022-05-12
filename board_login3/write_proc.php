<?php
    include_once "db/db_board.php";

    session_start();
    $login_user=$_SESSION["login_user"];
    $i_user=$login_user["i_user"];

    $title=$_POST['title'];
    $ctnt=$_POST['ctnt'];

    print "$title<br>";
    print "$ctnt<br>";

    $param=[
        "title"=>$title,
        "ctnt" =>$ctnt,
        "i_user"=>$i_user
    ];
    $result= m_write($param);
    header("location: list.php");
?>