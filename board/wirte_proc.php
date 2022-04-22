<?php
    include_once "db.php";

    $title =$_POST["title"];
    $ctnt =$_POST["ctnt"];

    print "title : $title <br>";
    print "ctnt : $ctnt <br>";

    $conn =get_conn();
    $sql =
    "
        insert into t_board
        (title, ctnt)
        VALUES
        ('${title}','${ctnt}')
    ";
    $result = mysqli_query($conn,$sql);
    print "result : $result <br>";
    mysqli_close($conn); // 연결 닫는거 !!!!
    header ("Location: list.php"); // 끝에 주소만 |  / 을 쓰면 풀로 적어야함
    die();

// post 방식으로 보내는건 form 태그 
// method 생략하면 자동으로 get 방식 
// get 방식은 쿼리스트링 을 사용 URL 뒤에 붙는 
// post 방식은 URL 뒤에 안붙이고  보통 (저장 수정)에 쓰임 

?>