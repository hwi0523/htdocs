<?php
    include_once "db3.php";

    $i_board=$_GET['i_board'];

    $sql="DELETE FROM t_board3 WHERE i_board=$i_board";
    $conn=get_conn();
    $result=mysqli_query($conn,$sql);
    mysqli_close($conn);
    header("location: list3.php");
?>