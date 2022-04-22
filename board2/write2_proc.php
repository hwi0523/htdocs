<?php
    include_once "db2.php";

    $title = $_POST["title"];
    $ctnt = $_POST["ctnt"];

    print "title : $title<br>";
    print "ctnt : $ctnt<br>";

    $sql="
    INSERT INTO t_board2
    (title,ctnt)
    VALUES
    ('${title}','${ctnt}')
    ";

    $conn = get_conn();
    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);
    header("location: list2.php");
?>