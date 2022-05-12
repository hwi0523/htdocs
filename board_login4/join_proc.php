<?php
    include_once "db/db_user.php";
    
    $uid=$_POST['uid'];
    $upw=$_POST['upw'];
    $confrim_upw=$_POST['confrim_upw'];
    $nm=$_POST['nm'];
    $gender=$_POST['gender'];

    $param=[
        "uid" => $uid,
        "upw" => $upw,
        "nm" => $nm,
        "gender" => $gender
    ];

    $result =h_join($param);

    print "result : $result<br>";
    print "uid : $uid<br>";
    print "upw : $upw<br>";
    print "confrim_upw : $confrim_upw<br>";
    print "nm : $nm<br>";
    print "gender : $gender";
    header("location: login.php");
?>