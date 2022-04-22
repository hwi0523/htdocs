<?php

/*
국어 합계 ? 평균 ? 
영어 합계 ? 평균 ?
수학 합계? 평균 ?
*/
$scores =array(
    //    국 ,영 , 수
    array(100,100,100), 
    array(90,80,70),    
    array(55,65,75),
    array(90,88,55),
    array(90,90,90),
);

$names = array("국어", "영어", "수학");
$aaa = array();
for($i=0; $i<count($scores); $i++)
{        
    for($z=0; $z<count($scores[$i]); $z++)
    {
        $aaa[$z] += $scores[$i][$z];
    }        
}

for($i=0; $i<count($names); $i++)
{
    $sum = $aaa[$i];
    $avg = $sum / count($scores);
    print $names[$i] . "<br>";
    print "합계 : $sum 평균 : $avg <br>";
    print "<br>";
    
}
?>
