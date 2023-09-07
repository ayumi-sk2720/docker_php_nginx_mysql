<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $json = file_get_contents('php://input');
    $params = json_decode($json, true);
    $id = $params['id'];
    $name = $params['name'];

    echo "{'id': {$id}, 'name': {$name}}";
} else {
    echo 'Hello, world!';
}