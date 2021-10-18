<?php 
require_once '../vendor/autoload.php';
require_once '../src/Wcs/Hello.php';

$messgae = new App\Wcs\Hello();
echo $messgae->talk();


