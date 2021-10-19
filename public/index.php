<?php 
require_once './../vendor/autoload.php';


use App\Wcs\Hello;
$messgae = new Hello();
echo $messgae->talk();


