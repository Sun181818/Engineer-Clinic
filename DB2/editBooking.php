<?php

    include 'database.php';

    //$id = (isset($_POST['id'])) ? $_POST['id'] : '';
    //$firstName = (isset($_POST['firstName'])) ? $_POST['firstName'] : '';
    //$lastName = (isset($_POST['lastName'])) ? $_POST['lastName'] : '';
    //$email = (isset($_POST['email'])) ? $_POST['email'] : '';
    $idBooking = $_POST['idBooking'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $subject = $_POST['subject'];
    $detail = $_POST['detail'];
    //$userType = $_POST['userType'];
    //$picture = $_POST['picture'];
   
    $db->query("UPDATE booking SET date = '".$date."',time = '".$time."', subject = '".$subject."', detail = '".$detail."' 
        WHERE idBooking = '".$idBooking."'");
