<?php
    include_once "db.php";

    function ins_recipe(&$param)
    {
        $title = $param["title"];
        $video = $param["video"];
        $ctnt = $param["ctnt"];
        $category = $param["category"];
        $user_no = $param["user_no"];
        $food_img = $param["food_img"];

        $sql =
        "   INSERT INTO f_board
            (food_title, food_url, food_ctnt, ctgr_no, user_no, food_img)
            VALUES
            ('$title', '$video', '$ctnt', '$category', '$user_no', '$food_img')
        ";

        $conn = get_conn();     
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    function img_id() { 
        return sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x'
            , mt_rand(0, 0xffff)
            , mt_rand(0, 0xffff)
            , mt_rand(0, 0xffff)
            , mt_rand(0, 0x0fff) | 0x4000
            , mt_rand(0, 0x3fff) | 0x8000
            , mt_rand(0, 0xffff)
            , mt_rand(0, 0xffff)
            , mt_rand(0, 0xffff) 
        ); 
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
    function qna_detail(&$param) {
        $qust_no = $param["qust_no"];
        $sql = "SELECT A.qust_title, A.qust_ctnt, A.created_at, A.qust_no
                     , B.user_no, B.nm, B.role
                  FROM q_board A
                 INNER JOIN t_user B
                    ON A.user_no = B.user_no
                 WHERE A.qust_no = '$qust_no'";
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);        
        return mysqli_fetch_assoc($result);
    }

    //다음글 (최신글)
    function sel_next_board(&$param) {
        $qust_no = $param["qust_no"];
        $sql = "SELECT qust_no
                  FROM q_board
                 WHERE qust_no > $qust_no
                 ORDER BY qust_no
                 LIMIT 1";
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);        
        $row = mysqli_fetch_assoc($result);
        if($row) {
            return $row["qust_no"];
        }
        return 0;
    }

    //이전글 (지난글)
    function sel_prev_board(&$param) {
        $qust_no = $param["qust_no"];
        $sql = "SELECT qust_no
                  FROM q_board
                 WHERE qust_no < $qust_no
                 ORDER BY qust_no DESC
                 LIMIT 1";
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);        
        $row = mysqli_fetch_assoc($result);
        if($row) {
            return $row["qust_no"];
        }
        return 0;
    }

    function qna_upd_board(&$param) {
        $qust_no = $param["qust_no"];
        $qust_title = $param["qust_title"];
        $qust_ctnt = $param["qust_ctnt"];
        $user_no = $param["user_no"];

        $sql = "UPDATE q_board
                   SET qust_title = '$qust_title'
                     , qust_ctnt = '$qust_ctnt'
                 WHERE qust_no = $qust_no
                   AND user_no = $user_no";
         $conn = get_conn();
         $result = mysqli_query($conn, $sql);
         mysqli_close($conn);
         return $result;
    }

    function qna_del_board(&$param){
        $user_no =$param["user_no"];
        $qust_no =$param["qust_no"];

        $sql=
        "DELETE FROM q_board
        WHERE qust_no =$qust_no
        AND user_no =$user_no";
        $conn=get_conn();
        $result=mysqli_query($conn,$sql);
        mysqli_close($conn);
        return $result;
    }

    