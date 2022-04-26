<?php
    include_once "db.php";

    function ins_board($param)
    {
        session_start();
        $login_user = $_SESSION['login_user'];
    
        $i_user =$param['i_user'];
        $title=$param['title'];
        $ctnt=$param['ctnt'];

        $sql=
        "INSERT INTO t_board 
        (title,ctnt,i_user)
        VALUES
        ('${title}','${ctnt}','${i_user}')
        ";
    
        $conn =get_conn();
        $result=mysqli_query($conn,$sql);
        mysqli_close($conn);
        return $result;

    }

?>