<?php
    $snum =4;
    $enum =10;

    print_num_from_to($snum,$enum);

    // [4,5,6,7,8,9,10] 이렇게 출력 해주세요.
    // 만약 eunm 값이 더 작으면 "종료값이 더 작을수 없습니다." 가 출력 되게 하기

    function print_num_from_to($s,$e)
    {
        if($e<$s)
        {
            print "종료값이 더 작을수 없습니다.";
            return;
        }
        print "[";
        for($i=$s;$i<=$e;$i++)
        {
            if($i>$s)
            {
                print ",";
            }
            print $i;
        }
        print "]" ;
    }
?>