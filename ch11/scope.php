<?php
    // scope 살아있는범위 하루살이? 느낌 
    function A() // 함수선언만 한 상태 문서로만 존재
   {
        global $n;  // 밑에 친구와 같은 변수가 됨 
        $n = "A";
        $m = "A";
        print "2: $n, $m <br>";
    }

    $n = "M"; 
    $m = "M";

    print " 1: $n ,$m<br>";
    A(); // A 가들어와서  n,m 은 A가 된다
    print "3: $n, $m<br>";
    // global 을 안쓰면 지역 변수임
?>