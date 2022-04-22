<?php
    include_once "db3.php";

    $title = $_POST["title"];
    $ctnt = $_POST["ctnt"];

    print "title : $title<br>";
    print "ctnt : $ctnt<br>";

    $conn=get_conn();

    $sql="
    INSERT INTO t_board3 
    (title,ctnt) 
    VALUES 
    ('${title}','${ctnt}')
    ";

    $result=mysqli_query($conn,$sql);
    mysqli_close($conn);
    header("location: list3.php");
?>