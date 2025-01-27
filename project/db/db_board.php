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
    // qna ~~~~~~~~
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

        $sql = 
        "SELECT * FROM t_user A
        INNER JOIN q_board B
        ON A.user_no = B.user_no
        WHERE B.qust_no = '$qust_no'";

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
 // 예찬씨 거~~~
    function sel_board(&$param)
    {
        $food_no = $param["food_no"];
    
        $conn = get_conn();
        $sql = "SELECT B.profile_img, B.nm, A.created_at, A.food_img, A.food_url, A.food_title, A.food_ctnt, A.user_no
                FROM f_board A
                INNER JOIN t_user B
                ON A.user_no = B.user_no
                WHERE A.food_no = $food_no";
    
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return mysqli_fetch_assoc($result);
    }
        function recipe_list()
        {     
            $sql = "SELECT A.food_no, A.food_img, A.food_title, A.created_at,B.profile_img,
                           B.nm, A.user_no 
                    FROM f_board A
                    INNER JOIN t_user B 
                    ON A.user_no = B.user_no
                    ORDER BY created_at desc";
                
            $conn = get_conn();
            $result = mysqli_query($conn, $sql);
            mysqli_close($conn);
            return $result;
        }
    
        function recipe_kfood()
        {     
            $sql = "SELECT A.food_no, A.food_img, A.food_title, A.created_at,B.profile_img,B.nm, A.user_no 
                    FROM f_board A
                    INNER JOIN t_user B ON A.user_no = B.user_no
                    WHERE ctgr_no = 1";
                
            $conn = get_conn();
            $result = mysqli_query($conn, $sql);
            mysqli_close($conn);
            return $result;
        }
        //레시피 한식목록 
        function recipe_afood()
        {     
            $sql = "SELECT A.food_no, A.food_img, A.food_title, A.created_at,B.profile_img,B.nm, A.user_no
                    FROM f_board A
                    INNER JOIN t_user B ON A.user_no = B.user_no
                    WHERE ctgr_no = 2";
                
            $conn = get_conn();
            $result = mysqli_query($conn, $sql);
            mysqli_close($conn);
            return $result;
        }
        //레시피 양식목록 
        function recipe_jfood()
        {     
            $sql = "SELECT A.food_no, A.food_img, A.food_title, A.created_at,B.profile_img,B.nm, A.user_no 
                    FROM f_board A
                    INNER JOIN t_user B ON A.user_no = B.user_no
                    WHERE ctgr_no = 3";
                
            $conn = get_conn();
            $result = mysqli_query($conn, $sql);
            mysqli_close($conn);
            return $result;
        }
        //레시피 일식목록
        function recipe_cfood()
        {     
            $sql = "SELECT A.food_no, A.food_img, A.food_title, A.created_at,B.profile_img,B.nm, A.user_no 
                    FROM f_board A
                    INNER JOIN t_user B ON A.user_no = B.user_no
                    WHERE ctgr_no = 4";
                
            $conn = get_conn();
            $result = mysqli_query($conn, $sql);
            mysqli_close($conn);
            return $result;
        }
        //레시피 중식목록
    
        function comment(&$param){
            $food_no = $param["food_no"];
            $sql="SELECT A.*,B.nm
            FROM r_board A
            INNER JOIN t_user B ON A.user_no = B.user_no
            WHERE A.food_no = $food_no";
    
            $conn = get_conn();
            $result = mysqli_query($conn, $sql);
            mysqli_close($conn);
            return $result;
        }
        function ins_comment(&$param){
            $food_no = $param["food_no"];
            $user_no = $param["user_no"];
            $reply_ctnt = $param["reply_ctnt"];
    
            $sql = "INSERT INTO r_board(food_no, user_no, reply_ctnt) 
            VALUES ($food_no, $user_no, '$reply_ctnt')";
    
            $conn = get_conn();
            $result = mysqli_query($conn, $sql);
            mysqli_close($conn);
    
            return $result;
        }
    
        function sel_detail_profile(&$param) {
            $food_no = $param["food_no"];
            
            $sql = 
            "   SELECT user_no
                  FROM f_board
                 WHERE food_no = $food_no
            ";
            $conn = get_conn();
            $result = mysqli_query($conn, $sql);
            mysqli_close($conn);
            return mysqli_fetch_assoc($result);
        }

    