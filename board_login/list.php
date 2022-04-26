<?php   
    session_start();
    $nm = "";
    if(isset($_SESSION["login_user"])) {
        $login_user = $_SESSION["login_user"];
        $nm = $login_user["nm"];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="common.css">
    <title>리스트</title>
</head>
<body>
    <div id="container">
        <header>
            <?=isset($_SESSION["login_user"]) ? "<div>". $nm . "님 환영합니다.</div>" : "" ?>
            <div>
                <a href="list.php"><button>리스트</button></a>
                <?php if(isset($_SESSION["login_user"])) { ?>
                    <a href="write.php"><button>글쓰기</button></a>
                    <a href="logout.php"><button>로그아웃</button></a>
                <?php } else { ?>
                    <a href="login.php"><button>로그인</button></a>
                <?php } ?>                
            </div>
        </header>
        <main>
            <h1>리스트</h1>
        </main>
    </div>
</body>
</html>