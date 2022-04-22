<?php
    function make_ten()
    {
        global $i;
        $i =$i + 10; // 지역변수(함수 안)
    }
    $i =5; // 전역변수(함수 밖)
    make_ten();
    print "i : $i <br>";
?>