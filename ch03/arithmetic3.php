<?php
// && : ture 만들기가 힘듬. false 만들기가 쉬움 
// || : false 만들기가 힘듬. ture 만들기가 힘듬

    $name =-1;
    if(1 && 1 && 1 && 1 && 1 && -2 && 'a' && $name)
// 한개라도 틀리면false 문자열이 빈칸이면 false 하나라도 있으면 ture ,숫자 0 빼고 ture
    {
    print "나는 진실이다."; 
    }
    if(0 || 0 || 0 || 0) 
     // 한개라도 맞으면 ture
    {
    print "i'm ture" ;
    }
?>