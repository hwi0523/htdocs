<?php
include_once "header.php";
?>
<?php if(isset($_SESSION["master_user"])){?>
    <h1> 답변하기</h1>
    <div>질문 제목: <?=$item["qust_title"]?></div>
    <div>질문 내용: <?=$item["qust_ctnt"]?></div>
    <form action="a_board.php" method="post">
    <div><textarea name="ansr_ctnt" placeholder="답변"></textarea></div>
    <div><input type="submit" value="답변등록"></div>
    </form>
<?php } ?>