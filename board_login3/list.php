<?php
    include_once "db/db_board.php";
    session_start();
    $nm="";
    $page= 1;

    if(isset($_GET["page"]))
    {
        $page =intval(($_GET["page"]));
    }

    if(isset($_SESSION['login_user']))
    {
        $login_user=$_SESSION["login_user"];
        $nm=$login_user["nm"];
    }
    $row_count =5;
    $param =[
        "row_count" => $row_count,
        "start_idx" => ($page -1) * $row_count
    ];
    $paging_count =sel_paging_count($param);
    $list = m_list($param);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="list.css">
    <title>리스트</title>
</head>
<body>
    <div id="container">
        <header>
            <?=isset($_SESSION["login_user"]) ? "<div>" . $nm . "님 환영합니다.</div>": ""?>
    <div>
    <?php if(isset($_SESSION["login_user"])) {?>
    <a href="write.php"><button>글쓰기</button></a>
    <a href="logout.php"><button>로그아웃</button></a>
    <?php } else {?>
        <a href="login.php"><button>로그인</button></a>
        <?php }  ?>
    </div>
        </header>
        <main>
            <h1>리스트</h1>
            <table>
                <thead>
                    <tr>
                        <td>글번호</td>
                        <td>제목</td>
                        <td>글쓴이</td>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($list as $mas) { ?>
                    <tr>
                <td><?=$mas['i_board']?></td>
                <td><a href="detail.php?i_board=<?=$mas['i_board']?>"><?=$mas['title']?></a></td>
                <td><?=$mas['nm']?></td>    
                    </tr>
                <?php }?>
                </tbody>
            </table>
            <div>
                <?php for($i=1; $i<=$paging_count; $i++) {?>
                    <span class="<?=$i===$page ? "pageSelected" : ""?>">
                    <a href="list.php?page=<?=$i?>"><?=$i?></a></span>
                <?php }?>
            </div>
        </main>

</body>
</html>