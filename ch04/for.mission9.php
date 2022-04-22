<?php

    /*
    만약에 스타 값이 3이면 
    *
    **
    *** 이렇게    
    */



    $star = rand(3,10);

    print "star : $star<br>";
    
    for($i=1;$i<=$star; $i++)
    {
        for($z=1; $z<=$i; $z++)
        {
            print "*";
        }
        print "<br>";
    }

     // Good!! 
     $star = rand(3, 10);
     print "star : $star <br>";
 
     $sum = "";
     for ($z=1; $z<=$star; $z++)
     {
         $sum = $sum . "@";
         print "{$sum}<br>";
     }
?>