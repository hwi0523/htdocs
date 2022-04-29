<?php
    include_once "db/db_user.php";

    $uid = $_POST["uid"];
    $upw = $_POST["upw"];
    $confirm_upw = $_POST["confirm_upw"];
    $nm = $_POST["nm"];
    $gender = $_POST["gender"];

    $param = [
        "uid" => $uid,
        "upw" => $upw,
        "nm" => $nm,
        "gender" => $gender
    ];

    $result =user_inf($param);   

    print "result : $result<br>";
    print "uid : $uid<br>";
    print "upw : $upw<br>";
    print "confirm_upw : $confirm_upw<br>";
    print "nm : $nm<br>";
    print "gender : $gender";

    header("location: login.php");
?>