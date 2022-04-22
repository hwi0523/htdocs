<?php
 
    include_once 'db.php';

    $i_board = $_GET['i_board']; // 방식
    $sql = " DELETE FROM t_board WHERE i_board = $i_board "; // 어떻게할건지
    $conn =get_conn(); 
    $result = mysqli_query($conn, $sql); // 연결 열기
    mysqli_close($conn); // 연결 닫기 

    header ("Location: list.php"); // 링크 이동 
?>
