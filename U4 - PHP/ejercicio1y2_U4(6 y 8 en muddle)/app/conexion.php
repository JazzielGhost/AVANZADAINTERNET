<?php
    session_start();
    var_dump($_POST);
    header('Content-Type: application/json');
    echo json_encode($_POST);
?>