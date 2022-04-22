<?php
    $freshman = array(
        "David" =>  "computer",
        "Alice" =>  "Math",
        "Elsa"  =>  "physics",
        "Bod"   =>  "music",
        "Chris" =>  "Electronics" 
    );

    print_r($freshman);
    print "<br>";
    print $freshman["David"] . "<br>";
    print $freshman["Alice"] . "<br>";
    print $freshman["Elsa"] . "<br>";
    print $freshman["Bod"] . "<br>";
    print $freshman["Chris"] . "<br>";

    $freshman["Bod"]="Dance";
    print "<br><br>";
    print $freshman["Bod"] . "<br>";

    print $freshman["Frank"] . "History";
    print $freshman["Frank"] . "<br>";

    $freshman[0]="안녕";
    print "<br><br>";
    print_r($freshman);
?>