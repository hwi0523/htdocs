<?php
    $score =100;
    // switch 경우의 수 case : 부터 break; 만날때 까지 실행됨 
    switch($score)
    {
        case 100:
            print "당신의 성적은 A입니다";
            break;

        case 80:
            print "당신의 성적은 B입니다";
            break;

        case 60:
            print "당신의 성적은 C입니다";
            break;

        case 0:
            print "당신의 성적은 F입니다";
            break;

            default : 
            print "디폴트 !";
    }
?>