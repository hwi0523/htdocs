<?php
 $snum =5;
 $enum =9;

 print_num_from_to($snum,$enum);

 function print_num_from_to($s,$e)
 {
    print "[";
    for($i=$s;$i<=$e;$i++)
    {
        if($i>$s)
        {
            print ",";
        }
        print $i;
    }
    if($e<$s)
    {
        for($i=$s;$i>$e;$i--)
        {
            if($s>$i)
            {
                print ",";
            }
            print $i;
        }
    }
    print "]";
 }

 // [4,5,6,7,8,9,10] 이렇게 출력 해주세요.
 // 만약 eunm 값이 더 작으면 "[5,4,3,2,1]" 가 출력 되게 하기


?>