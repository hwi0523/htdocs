<?php
    $n1 =9;
    $n2 = 5;

    function print_sum($num1,$num2)
    {
        $result = $num1 + $num2;
        print "$num1 + $num2 = $result<br>";
    }
    function print_minus($num1,$num2)
    {
        $result = $num1 - $num2;
        print "$num1 - $num2 = $result<br>";
    }
    function print_multi($num1,$num2)
    {
        $result = $num1 * $num2;
        print "$num1 * $num2 = $result<br>";
    }
    function print_div($num1,$num2)
    {
        $result = $num1 / $num2;
        print "$num1 / $num2 = $result<br>";
    }
    function print_mod($num1,$num2)
    {
        $result = $num1 % $num2;
        print "$num1 % $num2 = $result<br>";
    }

    
    print_sum($n1,$n2);
    print_minus($n1,$n2);
    print_multi($n1,$n2);
    print_div($n1,$n2);
    print_mod($n1,$n2);

?>