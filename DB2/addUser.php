<?php
    include 'database.php';

    $nameTitle = $_POST['nameTitle'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    //$userType = $_POST['userType'];
    //$picture = $_POST['picture'];

    $db->query("INSERT INTO user(nameTitle,firstName,lastName,email)values('".$nameTitle."','".$firstName."','" .$lastName."','".$email."')");


