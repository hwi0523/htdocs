<?php
    // 증감 연산자 
    // ++ -- 만 들어갈수 있음
    $n1 = 10;

    $n1++;
    print "$n1 <br>";

    ++$n1;
    print "$n1 <br>";

    print "-------!------<br>";
/* ++이 뒤쪽에 있으면 원래 있는값 을 읽고 더하는거고 ++이 앞에 있으면 더하고 읽는다  */
    $n2 =10;
    $sum = 10 + ++$n2;
    print "$sum <br>";
    print "$n2 <br>";

    print "-------!!------<br>";
// 다 들어갈수있음 사칙연산
    $n3 = 10;
    $n3 = $n3 +2;  // $n3++; 
    print "$n3<br>";
    $n3 = $n3 +2;  // $n3++; 
    print "$n3<br>";

    print "------!!!-------<br>";
    // !! 에 축약형 
    $n4 = 10;
    $n4 +=2;
    print "$n4 <br>";

    print "------!!!!-------<br>";

    $oprd1 = '10';
    $oprd2 = 10;
    
    $result = $oprd1 == $oprd2; // 값만 같으면 ture
    print "$oprd1 == $oprd2 : $result <br>";

    $result = $oprd1 === $oprd2; // 값 과 타입까지 같으면 ture 
    print "$oprd1 === $oprd2 : $result <br>";

    $result = $oprd1 != $oprd2; // == 반대
    print "$oprd1 != $oprd2 : $result <br>";

    $result = $oprd1 > $oprd2; 
    print "$oprd1 > $oprd2 : $result <br>";
?>