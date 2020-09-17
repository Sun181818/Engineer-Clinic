<?php

    include 'database.php';

    //$id = (isset($_POST['id'])) ? $_POST['id'] : '';
    //$firstName = (isset($_POST['firstName'])) ? $_POST['firstName'] : '';
    //$lastName = (isset($_POST['lastName'])) ? $_POST['lastName'] : '';
    //$email = (isset($_POST['email'])) ? $_POST['email'] : '';
    $idUser = $_POST['idUser'];
    $nameTitle = $_POST['nameTitle'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    //$userType = $_POST['userType'];
    //$picture = $_POST['picture'];
   
    $db->query("UPDATE user SET nameTitle = '".$nameTitle."',firstName = '".$firstName."', lastName = '".$lastName."', email = '".$email."' 
        WHERE idUser = '".$idUser."'");
    echo $id;

    // UPDATE `user` SET `firstName` = 'eiei', `lastName` = 'zaza', `email` = 'eieizaza' WHERE `user`.`id` = 19;