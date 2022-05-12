<?php
    $name= "홍길동";
    $age =22;
    $height= 177.32;
    $blood_type ='o';

    $str = sprintf("제 이름은 %s입니다. 나이는 %d세이고 키는 %.1fcm입니다. 혈액형은 %s입니다."
    ,$name,$age,$height,$blood_type);

    print $str;
    // sprintf = 함수를 리턴해주는게 목표 
    // printf = 출력해주는게 목표  
?>