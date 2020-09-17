<?php
    $servername = 'http://13.212.35.182:8081/';
    $user = 'root';
    $pass = 'liwkak04';
    $dbname = 'phook';

    $db =  new mysqli($servername,$user,$pass,$dbname);
    if ($db->connect_errno){
        printf('database connect fild',$db->connect_errno);
        exit();
    }

?>