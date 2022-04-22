<?php
    /*
     val 변수에 있는 숫자를 1부터 모두 더해 주세요 
     결과값 출력 
     ex) 50 이면 1~50 더하기 
    while 문으로 해결 
    */
    $val =rand(50,100);
    print "val : $val <br>";

    $sum =0;
    $i=1;
    while($i<=$val)
    {
        $sum +=$i;
        $i++;
    }
    print "합계 $sum ";


?>