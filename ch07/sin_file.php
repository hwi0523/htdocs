<?php
    print __FILE__ . "<br>"; // 파일 위치 경로가나옴
    print __LINE__ . "<br>";
    print __LINE__ . "<br>";
    print "PHP VERSION : " . PHP_VERSION . "<br>"; // php 버전
    print "OS : " . PHP_OS . "<br>"; // php os

    $GLOBALS["foo"]= 10;
    $GLOBALS["foo"]= 11;

    print "-- 글로벌 상수 -- <br>";
    foreach($GLOBALS as $key => $var)
    {
        print $key . " : ";
        print_r($var);
        print "<br>";
    }

    $arr = array(
        "name" => "홍길동",
        "age" => 20, 
        "height" => 160.6
    );
    foreach($arr as $key => $var)
    {
        print $key . " : ";
        print $var;
        print "<br>";
    }
?>