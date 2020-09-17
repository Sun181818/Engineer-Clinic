<?php

    $dbcon = mysqli_connect('localhost','root','','demo') or die('ไม่สามารถติดต่อ Mysql ได้'.mysqli_connect_error());
    mysqli_set_charset($dbcon,'utf8');
