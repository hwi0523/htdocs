<?php
    $num = rand(1,10);

    print_odd_even($num);

    function print_odd_even($num)
    {
        if($num %2 === 0)
        {
        print "$num (는)은 짝수입니다." ;
        }
        else
        {
        print "$num (는)은 홀수입니다.";
        }
    }

    
     function print_odd_even($n)
     {
         $result =$n %2 ===0? "짝" : "홀";
         print "숫자 $(num) 은 $(result) 수 입니다.";
     }
    

    // 숫자 10은 짝수입니다

    // 숫자 1은 홀수 입니다 
?>