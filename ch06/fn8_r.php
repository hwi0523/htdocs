<style>
table { border-collapse: collapse; }
table, td { border: 1px solid #000; }
td { padding: 10px; text-align: center; }
</style>
<table>
<?php

    $val =rand(2,5);

    print_table($val);

    function print_table($v)
    { 
        print "val : ${v}<br>";
        $n=$v *$v;
        for($i=$v; $i>0;$i--)
        {
            print "<tr>";
            for($z=$v;$z>0;$z--)
            {
                print "<td>". $n-- ."</td>";
            }
            print "</tr>";
        }
    }
 
/*
    // $val =2
    //  4  3  테이블 만들기  역순 
    //  2  1 


// 예찬씨 꺼
    function print_table($val)
    {
        print "구구단 표 : $val";
        $num = $val * $val;
        for($i=1; $i<=$val; $i++)
        {
            print "<tr>";
            for($z=1; $z<=$val; $z++)
            {
                print "<td>" . $num-- . "</td>";
            }
            print "</tr>";
        }
    }
 */
    // 경도씨꺼
/*
    function print_table($val)
    {
        for($z =0 ; $z < $val ; $z++ )
        { 
            print "<tr>";
            $num = $z*$val;
            for($i =1 ; $i <= $val; $i++ )
            {
                print "<td>" . $i+$num . "</td>";
            }
            print "</tr>";
        }
    } */
?>
</table>
