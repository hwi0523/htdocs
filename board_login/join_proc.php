    <?php
    include_once "db/db_user.php";

    $uid = $_POST["uid"];
    $upw = $_POST["upw"];
    $confirm_upw = $_POST["confirm_upw"];
    $nm = $_POST["nm"];
    $gender = $_POST["gender"];

    $param = [
        "uid" => $uid,
        "upw" => $upw,
        "nm" => $nm,
        "gender" => $gender
    ];
    // 함수호출 (=) 오른쪽에 갚을 복사하여 왼쪽으로 준다 (리턴 필수 100%)
    // = 이없으면 리턴을 넣어도 되고 안넣어도됨
    $result =ins_user($param);  

    echo "result :", $result, "<br>";
    echo "uid : ", $uid, "<br>";
    echo "upw : ", $upw, "<br>";
    echo "confirm_upw : ", $confirm_upw, "<br>";
    echo "nm : ", $nm, "<br>";
    echo "gender : ", $gender, "<br>";

    // header("location: login.php");

