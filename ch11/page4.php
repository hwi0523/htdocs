<?php
    // session 은 개인용으로 적용된다  
    session_start();
    print $_SESSION['g'];
    $a =10;

    echo $_SESSION['g'] .",". $a;