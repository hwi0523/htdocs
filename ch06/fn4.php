<?php
    $dan=rand(2,9);
    // print  $dan . "단<br>";
    //  print_gugudan($dan); 2~9 단 랜덤 생성 
    print_gugudan_to(2,6); // 2,6 단 만 

    function print_gugudan_to($z,$x)
    {
        for($q=$z; $q<=$x;$q++)
        {
            for($i=1;$i<10;$i++)
            {
                print "$q X $i =" . ($q *$i) . "<br>";
            }
            print "<br>";
        }
    }

    function print_gugudan($d)
    {
        for($i=1;$i<10;$i++)
        {
            print "$d X $i = " . ($d *$i) . "<br>";
        }
    }
?>