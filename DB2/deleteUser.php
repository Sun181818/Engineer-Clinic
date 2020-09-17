<?php
    include 'database.php';

    $idUser = $_POST['idUser'];
    //$id = (isset($_POST['id'])) ? $_POST['id'] : '';

    $db->query("DELETE FROM user WHERE idUser = '".$idUser."'");

