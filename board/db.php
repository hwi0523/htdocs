<?php
    function get_conn() 
    {
        define("URL", "localhost");
        define("USERNAME", "root");
        define("PASSWORD", "506greendg@");
        define("DB_NAME", "board1");
        define("PORT","3306");
        return mysqli_connect(URL, USERNAME, PASSWORD, DB_NAME);
    }  
    //  mysqli_connect = php 와 mysql marid 를 연결 
    //  get 방식 주소 ? 뒤에 붙는것들  = 쿼리스트링(Query String) 파라미터
    // 바뀌면 안되는 것들은 상수로 쓴다 
    // 순서대로 안하면 작동안함
?>