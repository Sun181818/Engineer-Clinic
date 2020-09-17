<?php
    include 'database.php';

    $date = $_POST['date'];
    $time = $_POST['time'];
    $subject = $_POST['subject'];
    $detail = $_POST['detail'];
    //$userType = $_POST['userType'];
    //$picture = $_POST['picture'];

    $db->query("INSERT INTO booking(date,time,subject,detail)values('".$date."','".$time."','" .$subject."','".$detail."')");