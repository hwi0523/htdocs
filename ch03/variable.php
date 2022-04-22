<?php

// single-line commentt
/*
    multi-line comment
    */
    $age =21; // = 은 대입연산자  오른쪽값을 복사하여 왼쪽값에 준다 정수겂이 저장되어있다
    print "<div>" . $age ."</div>";

    // 변수안에 값이 들어갔다가 가장 중요 
    // . 문자열 합치기 
    $name;
    print "<div>". $name ."</div>";

    $name = "홍길동";
    print "<div>". $name ."</div>";

    $name = "장보고";
    print "<div>". $name ."</div>";

    $name= 10;
    print "<div>". $name ."</div>";

    // 변수명 네이밍 규칙
    /* 
    1. 대소문자 영어 ,숫자, 특수기호 _ (언더바) 로 이루어져야한다. 
    2. 숫자가 맨 앞에 오면 X (처음만 안니면 된다)
    3. 문자 사이에 빈칸 X  

    .... 변수에 = 이없으면 값이 안바뀜 (= 꼭 쓰기)
    */

    $a1b =12;
    print $a1b;

    $_123 = "ㅅㅅㅅ";
    print $_123;
// html 에는 정수라는 개념이 없다 그냥 문자열 이다 
?>

<!-- dasdasdasdasd --> 