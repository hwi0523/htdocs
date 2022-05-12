<?php
    include_once "db/db_user.php";

    $uid=$_POST['uid'];
    $upw=$_POST['upw'];

    $param=[
        "uid" => $uid
    ];

    print "$uid<br>";
    print "$upw<br>";

    $result=h_login($param);

    if(empty($result))
    {
        print "없는 아이디 입니다";
        exit;
    }
    if($upw===$result['upw'])
    {
        session_start();
        $_SESSION["login_user"]=$result;
        header("location: list.php");
    }
    else
    {
        header("location: login.php");
    }
?>