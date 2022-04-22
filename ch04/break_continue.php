<?php
print "--------break------------<br>";
    for($i; $i<20; $i++)
    {
        if($i == 12){break;} // 멈추고 다음꺼 실행
        print $i ."<br>";
    }


    print "-------continue--------<br>";
    for($i=0;$i<20;$i++)
    {
        if($i ==12){continue;} // 빼고 실행
        print $i . "<br>";
    }
    // for 문을 중간에 멈추고 싶을때 쓴다 
    // for while swich 문에 break 를 쓴다 
?>