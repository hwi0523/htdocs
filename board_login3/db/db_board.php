<?php

function m_list()
{
    $sql=
    "SELECT A.title, A.i_board, B.nm
    FROM t_board A
    INNER JOIN t_user B
    ON A.i_user = B.i_user
    ";

    $conn=get_conn();
    $result=mysqli_query($conn,$sql);
    mysqli_close($conn);
    return $result;
}