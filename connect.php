<?php
    $host = "localhost";
    $user = "root";
    $password = "root@12345";
    $database = "student";

    $connect = mysqli_connect($host, $user, $password, $database);

    // if($connect){
    //     echo "Successfully Connected!";
    // }else{
    //     echo "Connection Failed!";
    // }
    // echo ($connect) ? "Successfully Connected!" : "Connection Failed";
?>