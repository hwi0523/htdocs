<?php
    include_once "db/db_board.php";
    session_start();
    if(isset($_SESSION["login_user"]))
    {
        $login_user =$_SESSION["login_user"];
    }
    $i_board=$_GET['i_board'];
    $param=[
        "i_board"=> $i_board
    ];
    $mas=sel_det($param);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="list.php"><button>리스트</button></a>
    <div></div>
    <?php if(isset($_SESSION["login_user"])&& $login_user["i_user"]===$mas["i_user"]){?>
        <div>
        <button onclick="isDel();">삭제</button>
    <a href="mod.php?i_board=<?=$param['i_board']?>"><button>수정</button></a>
        </div>
        <?php } ?>
    <div>제목 :<?=$mas['title']?></div>
    <div>글쓴이 :<?=$mas['nm']?></div>
    <div>등록일시 :<?=$mas['created_at']?></div>
    <div>내용 :<?=$mas['ctnt']?></div>
    <script>
  function isDel() {            
            console.log('isDel 실행 됨!!');            
            if(confirm('삭제하시겠습니까?')) {
                location.href = "del.php?i_board=<?=$i_board?>";
            } 
        }
    </script>
</body>
</html>