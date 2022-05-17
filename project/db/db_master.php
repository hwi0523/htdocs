<?php
    include_once "db.php";
function sel_master(&$param)
{
    $mid = $param['mid'];

    $conn = get_conn();
    $sql = "SELECT * FROM manager
            WHERE mid = '$mid'";

    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return mysqli_fetch_assoc($result);
}

function master_a(&$param)
{
    $ansr_ctnt =$param["ansr_ctnt"];
    $qust_no =$param["qust_no"];

    $sql=
    "INSERT INTO a_board
    (m_no, ansr_ctnt,qust_no)
    VALUES
    (1,'$ansr_ctnt','$qust_no')";

    $conn=get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}
