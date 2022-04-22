<?php
    // 객체 안에 함수가 있으면 method(메소드) 라도 부른다.

    // 객체 안이 아니라면 fuction(함수) 라고 부른다.
    // 함수 funtion,
    // 소스를 줄여주는 (함수?)

    $result =sum(10,20);

    print "썸 : $result <br>";
    print "sum :" . sum(30, 40) . "<br>";

    minus(35,12);
    minus(10,2);


    function sum($n1, $n2) // 파라미터 , 매개변수
    {
        return $n1 + $n2;   // 2차 가공이 쉽다. // = 이있다면 return 100% 있음
    }

    function minus($n1,$n2)
    {
        print "minus : " . ($n1 -$n2) . "<br>";
    }
?>