<?php
    include_once "db3.php";

    $i_board=$_GET['i_board'];

    $sql="SELECT * FROM t_board3 WHERE i_board=$i_board";
    $conn = get_conn();
    $result=mysqli_query($conn,$sql);
    mysqli_close($conn);

    if($row=mysqli_fetch_assoc($result))
    {
        $title=$row['title'];
        $ctnt= $row['ctnt'];
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
    <a href="list3.php"><button>리스트</button></a>
    <a href="del3_proc.php?i_board=<?=$i_board?>"><button>삭제</button></a>
    <a href="mod3.php?i_board=<?=$i_board?>"><button>수정</button></a>
    <div>제목 : <?=$title?></div>
    <div>내용 : <?=$ctnt?></div>
    <div>작성시간 : <?=$create_at?></div>
</body>
</html>