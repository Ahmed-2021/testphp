<?php
namespace MyApp;
use MyApp\Lib\FrontController;

 require "../App/Config.php";


require_once  'vendor/autoload.php';
$controller = new FrontController;
$controller->dispatch();


