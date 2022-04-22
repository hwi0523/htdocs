<?php
    $star =rand(3,10);
    print "$star<br>";

    print_star_triangle($star);

    function print_star_triangle($star)
    {
        for($i=0;$i<$star;$i++)
        {
            for($z=0;$z<=$i;$z++)
            {
                print "*";
            }
                print "<br>";
        }
    }


    function  print_star_line($star)
    {
        for($i=0;$i<$star;$i++)
        {
            for($z=0;$z<$star;$z++)
            {
                print "*";
            }
                print "<br>";
        }

    }

    // print_star($star);
    // star =3 
    // ***

    function print_star($s)
    {
        for($i=0;$i<$s;$i++)
        {
            print "*";
        }
        print "<br>";
    }
?>
