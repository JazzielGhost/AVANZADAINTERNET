<?php
    $url = 'https://crud.jonathansoto.mx/api/login';
    $data = array('email' => 'jazziel@fakemail.com', 'password' => 'password123');
    $options = array(
        'http' => array(
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($data),
        ),
    );
    header('Content-Type: application/json');
    $context = stream_context_create($options);
    $response = file_get_contents($url, false, $context);
    echo $response;
?>