<?php

include_once "db.php";

function ins_user(&$param)
{
    $uid = $param['uid'];
    $upw = $param['upw'];
    $nm = $param['nm'];
    $birth = $param['birth'];
    $gender = $param['gender'];

    $conn = get_conn();
    $sql = "INSERT INTO t_user(uid, upw, nm, birth, gender)
            VALUES('$uid', '$upw', '$nm', '$birth', $gender)";

    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}

function sel_user(&$param)
{
    $uid = $param['uid'];

    $conn = get_conn();
    $sql = "SELECT * FROM t_user
            WHERE uid = '$uid'";

    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return mysqli_fetch_assoc($result);
}
 // 예찬씨꺼 ~~~~~~
function upd_profile(&$param) {
    $sql = "UPDATE t_user 
               SET profile_img = '{$param["profile_img"]}',
                   nm = '{$param["user_nm"]}' 
             WHERE user_no = {$param["user_no"]}";
    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
 }

 function sel_profile(&$param) {
    $user_no = $param['user_no'];
    $sql = 
    "  SELECT profile_img
       FROM   t_user
       WHERE  user_no = $user_no  
    ";
    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return mysqli_fetch_assoc($result);
 }