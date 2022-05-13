<?php
    include_once "db/db_board.php";

    session_start();
    $nm = "";

    if(isset($_SESSION["login_user"])) {
        $login_user = $_SESSION["login_user"];
        $nm = $login_user["nm"];
    }
    $list = qna_list();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QnA</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/table.css">
</head>
<body>
<?php
include_once "header.php";
?>
<?=isset($_SESSION["login_user"]) ? "<div>". $nm . "님 환영합니다.</div>" : "" ?>
    <div class="continer">
        <main>
        <h1>자주 하는 질문!!!</h1>
        <div>1. 회원가입은 어떻게 하나요?</div>
        <div>어떻게 사용하나요? 몰라요 ^^</div>
        </main>
        <table>
        <h2>QnA</h2>
            <tr>
                <th>NO</th>
                <th>질문</th>
                <th>작성일</th>
                <th>작성자</th>
                <?php if(isset($_SESSION["manager_user"])){?>     
                <?php } ?>
            </tr>
            <tr>
            <?php if(isset($_SESSION["login_user"])) { ?>
                    <a href="qna_write.php"><button>질문하기</button></a>
                    <a href="logout.php"><button>로그아웃</button></a>
                <?php }  { ?>
                <?php } ?>                
                <tbody>                    
                    <?php foreach($list as $item) { ?>
                        <tr>
                            <td><?=$item["qust_no"]?></td>
                            <td><a href="qna_detail.php?qust_no=<?=$item["qust_no"]?>"><?=$item["qust_title"]?></a></td>
                            <td><?=$item["created_at"]?> </td>
                            <td><?=$item["nm"]?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
        </table>
    </div>