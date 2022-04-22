<?php
 //               0    1    2    3    4    5    6   7   8 ...
    $week =array("일","월","화","수","목","금","토");

    print $week[0] . "<br>";
    print $week[3] . "<br>";
 // 이 라인 부터 [3] 번은 수 에서 wed 로 바뀜

// 원래 값을 바꿀려면 =을 꼭 써야한다.
    $week[3] ="wed";
    print $week [3] . "<br>";

    $week[7] ="응?";
    print $week[7] . "<br>";
// 값이 없으면 빈칸으로 나옴 (PHP 에서만 )
    $week [9] = "ㅁㅁ";
    print $week[8] . "<br>";
    print $week[9] . "<br>";
    print $week[11] . "<br>";
    print "test<br>";

    $test = array("A","B");
    print count($test) . "<br>";

    // $test[10]= "C"; 
    // array_push 값을 추가할때 쓴다 중요 !!
    array_push($test,"C","D");

    print "count(\$test) : " . count($test) . "<br>";

    print "tset[2] : " . $test[2] . "<br>";
    print "tset[2] : " . $test[3] . "<br>";

    print "-----------------<br>";

    $test2 =array(1,3.44,"안녕");
    print $test2[0];
    print $test2[1];
    print $test2[2];
?>