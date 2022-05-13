<?php
    include_once "db.php";

    $sql=
    "SE";

    $conn=get_conn();
    $result=mysqli_query($conn,$sql);
    mysqli_close($conn);

?>