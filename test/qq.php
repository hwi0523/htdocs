<?php
    include_once "db/db_board.php";
    session_start();
    if(isset($_SESSION["login_user"])) {
        $login_user = $_SESSION["login_user"];
    }

    $del ="";
    $mod ="";
    $emp ="";

    $qust_no = $_GET["qust_no"];
    $param = [
        "qust_no" => $qust_no
    ];
    $item = qna_detail($param);
    
    if($login_user["role"]=="admin") {
        $del = "<a href='qna_del.php'><button>삭제</button></a>";
    } elseif(isset($_SESSION["login_user"]) && $login_user["user_no"] === $item["user_no"]){
        $del ="<a href='qna_del.php?<?=$qust_no?>'><button>삭제</button></a>";
        $mod ="<a href='qna_mod.php?<?=$qust_no?>'><button>수정</button></a>";
    } else{
        $emp = "로그인이 필요합니다";
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$item["qust_title"]?></title>
    <link rel="stylesheet" href="css/header.css">
</head>
<body>
<?php
include_once "header.php";
?>
    <div><a href="qna.php">QnA</a></div>
    <div>
        <?=$del?>
        <?=$mod?>
        <?=$emp?>
    </div>
    <div>제목 : <?=$item["qust_title"]?></div>
    <div>글쓴이 : <?=$item["nm"]?></div>
    <div>등록일시 : <?=$item["created_at"]?></div>
    <div><?=$item["qust_ctnt"]?></div>
</body>
</html>