<?php
    /*
    rand(1,10) 실행울 시킬건데 10이 나올때까지 반복
    10이 아니면 숫자를찍는다. 
    10이 나오면 반복을 멈추고 끝
    */
     /*
     $r_val =$rand(1,10);
    print "r_val: $r_val<br>";
    */
    print "---------시작<br>";
    $r_val=rand(1,10); //초기화

    while($r_val !=10) // 조건식
        { 
            print "r_val: $r_val<br>";
            $r_val =$rand(1,10);
        }
        
    print "------ 끝";
?>