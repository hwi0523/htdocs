<?php
    include_once "db.php";

    function h_list()
    {
        $sql=
        "SELECT A.title, A.i_board, B.nm, A.created_at
        FROM t_board A
        INNER JOIN t_user B
        ON A.i_user = B.i_user
        ORDER BY i_board DESC";

        $conn=get_conn();
        $result=mysqli_query($conn,$sql);
        mysqli_close($conn);
        return $result;
    }

    function h_write(&$param)
    {
        $title=$param['title'];
        $ctnt=$param['ctnt'];
        $i_user=$param['i_user'];

        $sql=
        "INSERT INTO t_board
        (title,ctnt,i_user)
        VALUES
        ('$title','$ctnt','$i_user')";

        $conn=get_conn();
        $result=mysqli_query($conn,$sql);
        mysqli_close($conn);
        return $result;
    }

    function h_detail($param)
    {
        $i_board=$param['i_board'];

        $sql=
        "SELECT A.title, A.ctnt, B.nm, B.gender, B.i_user, A.created_at
        FROM t_board A
        INNER JOIN t_user B
        ON A.i_user =B.i_user 
        WHERE i_board='$i_board'
        ";
        $conn=get_conn();
        $result=mysqli_query($conn,$sql);
        mysqli_close($conn);
        return mysqli_fetch_assoc($result);
    }

    function h_del(&$param)
    {
        $i_board=$param["i_board"];

        $sql=
        "DELETE FROM t_board
        WHERE i_board='$i_board'";

        $conn=get_conn();
        $result=mysqli_query($conn,$sql);
        mysqli_close($conn);
        return $result;
    }

    function h_upd(&$param)
    {
        $title=$param['title'];
        $ctnt=$param['ctnt'];
        $i_board=$param['i_board'];
        $i_user=$param['i_user'];

        $sql=
        "UPDATE t_board
        SET title = '$title', ctnt ='$ctnt'
        WHERE i_board='$i_board'
        AND i_user='$i_user'";

        $conn=get_conn();
        $result=mysqli_query($conn,$sql);
        mysqli_close($conn);
        return $result;
    }
?>