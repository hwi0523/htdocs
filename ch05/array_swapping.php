<?php
    // 스와핑을 할때는 임시 저장소가 필요하다
    $arr =[10,33,12,8,1,89];

    print_r($arr);
    print "<br>";

    $temp =$arr[0];
    $arr[0]=$arr[1];
    $arr[1]=$temp;


    print_r($arr);
    print "<br>";

?>