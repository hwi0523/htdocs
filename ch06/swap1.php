<?php
    function swap_val($n1,$n2)
    {
        $temp=$n1;
        $n1=$n2;
        $n2=$temp;
    }

    function swap_ref(&$n1,&$n2)
    {
        $temp=$n1;
        $n1=$n2;
        $n2=$temp;
    }

    $a =10;
    $b =30;

    print "a: $a, b: $b <br>";
    swap_val($a,$b); // 복사되서 이동 "값이 중요"
    print "a: $a, b: $b <br>";
    print "--------<br>";
    print "a: $a, b: $b <br>";
    swap_ref($a,$b); // 외부 값 변경 ref"값을 들고있는 것이 중요"
    print "a: $a, b: $b <br>";

?>