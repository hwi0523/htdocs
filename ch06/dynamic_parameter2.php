<?php
function mult()
{
    print "count :" . count(func_get_args()) . "<br>";
    print "[1] :" . func_get_args()[1] . "<br>";
}

mult(2);
mult(5,10);

/*
    아규먼트, 인자 
    func_num_args() : 인자수 리턴
    func_get_arg() : 인자값 가져올 때 사용
    func_get_args() : 인자배열로 받음

 */
function print_sum()
{
    echo "func_num_args() :" . func_num_args() . "<br>";
    echo "func_get_arg(0)  :" . func_get_arg(0) . "<br>";
    echo "func_get_args(1) :" . func_get_arg(1) . "<br>";
    print "-----<br>";
}

// print_sum(10);       
// print_sum(10,11,13);    

function sum()
{
    print "count : " . count(func_get_args()) . "<br>";
    $sum=0;
    foreach(func_get_args() as $val)
    {
        $sum+= $val;
    }
    return $sum;
}

print "sum : " . sum(1,2) . "<br>";
print "썸 : " . sum(1,2,10) . "<br>";
?>