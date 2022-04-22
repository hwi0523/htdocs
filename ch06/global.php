<?php

function counts()
{
    global $i;
    $i =$i + 1;
    return;
}


$i=0;
while($i<10)
{
    counts(); //전역변수 $i 값을 1씩증가 시키는 함수
    print $i . "<br>";
}


//1
//2
//3
//...
//10
?>