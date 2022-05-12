<?php
    include_once "db.php";
    function qna()
    {
        $sql=
        "SELECT A.qust_no, A.qust_title, A.user_no, A.created_at, A.qust_ctnt, B.nm
        FROM q_board A
        INNER JOIN t_user B
        WHERE A.user_no = B.user_no
        ORDER BY qust_no DESC
        ";
        $conn=get_conn();
        $result=mysqli_query($conn,$sql);
        mysqli_close($conn);
        return $result;
    }

    function qna_list()
    {
        $sql=
        "SELECT A.qust_no, A.qust_title, A.user_no, A.created_at, A.qust_ctnt, B.nm
        FROM q_board A
        INNER JOIN t_user B
        ON A.user_no = B.user_no
        ORDER BY qust_no DESC
        ";
        $conn=get_conn();
        $result=mysqli_query($conn,$sql);
        mysqli_close($conn);
        return $result;
    }

    function qna_board(&$param) {
        $user_no = $param["user_no"];
        $qust_title = $param["qust_title"];
        $qust_ctnt = $param["qust_ctnt"];

        $sql = 
        "   INSERT INTO q_board
            (qust_title, qust_ctnt, user_no)
            VALUES
            ('$qust_title', '$qust_ctnt', '$user_no')
        ";

        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }
?>