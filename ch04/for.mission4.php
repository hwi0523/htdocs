<?php
    // 지금까지 배운거 모두 활용하여  [1,2,3,4,5,6,7] 만들어라
    $end_val =7;
    echo "[";
    for($i=1; $i<=$end_val; $i++)
    {
        print $i;
        if($i <$end_val) {print",";}
    }
    echo "]";
    echo "<br>";
    
    echo "[";
    for($i=1; $i<=$end_val; $i++)
    {
        if($i>1) {print",";}
        print $i;
    }
    echo "]";
?>
