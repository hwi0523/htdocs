<?php
    function sum_from_to($start,$end)
{                      //  파라미터,매개변수
    $result =0;
    for($i=$start;$i<=$end;$i++)
    {
        $result +=$i;
    }
    return $result;
    

    $start_num=1;
    $end_num =50;
                           // 아규먼트 인자, 인수
    $result =sum_from_to($start_num,$end_num);

    print "$start_num ~ $end_num 을 모두 더한 값은 $result <br>";

}
?>