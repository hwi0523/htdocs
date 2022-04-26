<?php
    include_once "db/db_user.php";

    $uid =$_POST['uid'];
    $upw =$_POST['upw'];

    print "uid = $uid <br>";
    print "upw = $upw <br>";

    $param =["uid" => $uid];

    $result= sel_user($param);
    if(empty($result))
    {
        echo "해당하는 아이디없음";
        die;
    }
    // mysqli_fetch_assoc($result); // 첫번째 레코드만 가져온다 

    echo "i_user :", $result["i_user"], "<br>";
    echo "pw :", $result["upw"], "<br>";

    
    if($upw===$result['upw'])
    {
        session_start();
        $_SESSION["login_user"] = $result;
        header("location: list.php");
    }
    else
    {
        header("location: /board_login/login.php");
    }

     // SESSION 브라우져가 꺼질때 까지 살아있다 
     // 배열은 여러 값들을 담을 수 있는 쟁반 같은 친구