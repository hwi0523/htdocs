<?php
    include_once "db.php";

    $i_board=$_POST["i_board"];
    $title=$_POST["title"];
    $ctnt=$_POST["ctnt"];

    $sql=
    "UPDATE t_board9 SET
    title='$title',
    ctnt='$ctnt'
    WHERE i_board=$i_board";

    $conn=get_conn();
    $result=mysqli_query($conn,$sql);
    mysqli_close($conn);
    header("location: detail.php?i_board=$i_board");
?>