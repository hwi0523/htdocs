<?php
    include_once "db.php";
// write_proc // ins_board
    function ins_board(&$param) {
        $i_user = $param["i_user"];
        $title = $param["title"];
        $ctnt = $param["ctnt"];

        $sql = 
        "   INSERT INTO t_board
            (title, ctnt, i_user)
            VALUES
            ('$title', '$ctnt', $i_user)
        ";

        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }
// list // sel_board_list
    function sel_list(){

        $sql=
        "SELECT A.title, A.i_board, B.nm, A.created_at
        FROM t_board A
        INNER JOIN t_user B
        ON A.i_user = B.i_user";
        $conn=get_conn();
        $result=mysqli_query($conn,$sql);
        mysqli_close($conn);
        return $result;
    }
// detail // sel_board
    function sel_det(&$param)
    {
        $i_board=$param["i_board"];

        $sql=
        "SELECT A.title, A.i_board, A.ctnt, A.created_at, B.nm ,B.i_user
        FROM t_board A
        INNER JOIN t_user B
        ON A.i_user = B.i_user
        WHERE i_board='$i_board'
        ";

        $conn=get_conn();
        $result=mysqli_query($conn,$sql);
        mysqli_close($conn);
        return mysqli_fetch_assoc($result);
    }
// del // del_board
function del_board(&$param) {
    $i_board = $param["i_board"];

    $sql = "DELETE FROM t_board 
             WHERE i_board = '$i_board' 
               ";
    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}
// update upd_board
function upd_sel(&$param)
{
    $i_board = $param["i_board"];
        $title = $param["title"];
        $ctnt = $param["ctnt"];
        $i_user = $param["i_user"];

    $sql = "UPDATE t_board
    SET title = '$title'
      , ctnt = '$ctnt'
      , updated_at = now()
  WHERE i_board = '$i_board'
    AND i_user = '$i_user'";

    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}