<?php
    include_once "db.php";

    $i_board=$_GET["i_board"];
    $sql="SELECT title,ctnt,create_at FROM t_board8 WHERE i_board=$i_board";

    $conn=get_conn();
    $result=mysqli_query($conn,$sql);
    mysqli_close($conn);
    if($row=mysqli_fetch_assoc($result))
    {
        $title=$row['title'];
        $ctnt=$row['ctnt'];
        $create_at=$row['create_at'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
</head>
<body>
    <a href="list.php"><button>리스트</button></a>
    <a href="del.php?i_board=<?=$i_board?>"><button>삭제</button></a>
    <a href="mod.php?i_board=<?=$i_board?>"><button>수정</button></a>
    <div>이름 :<?=$title?></div>
    <div>작품 :<?=$ctnt?></div>
    <div>작성 시간 :<?=$create_at?></div>
</body>
</html>