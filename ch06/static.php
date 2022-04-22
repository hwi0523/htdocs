<?php

    function inc()
    {
        static $i =1; 
    // static 정적변수 호출할때만 값이 할당됨 최초 한번만 실행
        print $i . "<br>";
        $i +=1;
    }
    for($i=0;$i<10;$i++)
    {
        inc();
    }
    
    $z =1;
    function inc2()
    {
        global $z;
        print $z . "<br>";
        $z +=1;
    }

    for($i=0;$i<10;$i++)
    {
        inc2();
    }

    
?>