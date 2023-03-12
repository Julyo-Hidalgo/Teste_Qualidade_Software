<?php

include 'controller/formController.php';

$url = $_SERVER['REQUEST_URI'];

$uri = parse_url($url, PHP_URL_PATH);

switch ($uri){
    case '/':
        formController::index();
    break;

    case '/form/save':
        formController::save();
    break;

    case '/sucesso':
        formController::sucesso();
    break;

    default:
        echo 'erro 404';
    break;
}