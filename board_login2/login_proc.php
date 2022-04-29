<?php
    include_once "db/db_user.php";

    $upw=$_POST['upw'];
    $uid=$_POST['uid'];

    $param=["uid" => $uid];

    print "$uid <br> ";
    print "$upw <br>";

    $result =sel_user($param);
    if(empty($result))
    {
        print "해당없는 아이디입니다.";
        exit;
    }
    if($upw===$result["upw"])
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
