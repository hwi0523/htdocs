<?php
    // 재귀함수
    // 내가 함수라면 내가 나를 호출하는 것.
    
    function factorial($n)
    {
        $result =1;
        for($i=1;$i<=$n;$i++)
        {
            $result *=$i;
        }
            return $result;
    }
 
    function factorial2($n)
    {
        $result =1;
        for($i=$n;$i>0;$i--)
        {
            $result *= $i;
        }
        return $result;
    }

    function factorial_rec($n)
    {
        if($n===1) return(1);
        return $n * factorial_rec($n-1);   
    }
    // 절대값 만들기 
    
    function my_abs($val)
    {
        /*
        if($val <0)
        {
            return -$val;
        }
        return $val;
        */
        return $val < 0 ? -$val : $val;
    }
    print "abs(-3) :" . my_abs(-3) . "<br>";
    print "abs(3) :" . my_abs(3) . "<br>";
    
    $num = 3;
    $result= factorial_rec($num); // 3 x 2 x 1
    print "${num}! = $result <br>";
?>