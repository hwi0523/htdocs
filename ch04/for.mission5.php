<?php
    /*
    2 X 1 = 2
    2 X 9 = 18
    ----------
    ........ 
    --------
    9 x 9
    */

    for($i=2; $i <10; $i++)
    {
        if($i >2) {print"-------------<br>";}
        for($z=1; $z <10; $z++)
        {
            $result = $i *$z;
            print "$i X $z = $result <br>" ;
        }
         
    }



?>