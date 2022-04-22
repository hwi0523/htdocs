<?php
/*
    for 문 노터치 ,continue을 활용해서 홀수만 출력 
    1
    3
    5
    ...
    99
*/
    for($i=1;$i<=100;$i++)
    {
        if($i%2 === 0){continue;}
        print $i  ."<br>";
    }

?>