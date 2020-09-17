<?php
    include 'database.php';

    $idBooking = $_POST['idBooking'];
    //$id = (isset($_POST['id'])) ? $_POST['id'] : '';

    $db->query("DELETE FROM booking WHERE idBooking = '".$idBooking."'");