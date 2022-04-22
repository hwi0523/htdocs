<style>
    table {border-collapse: collapse;}
    table, th ,td {border:1px solid #000;}
    th, td {padding:5px;}
</style>
<table>
    <tr>
        <th> 이름 </th>
        <th> 키 </th>
    </tr>
<?php
    $array =array(
        "Hong" => 182.2,
        "HWang" => 180.4,
        "Kim" => 176.3,
        "Park" => 174.1
    );
    
    foreach($array as $key=> $val)
    {
        print "<tr>";
        print "<td>${key}</td>";
        print "<td>${val}</td>";
        print "</tr>";
    }
    // 테이블 처 만들려면 php 밖으로 빼서 할것 
?> 
</table>
