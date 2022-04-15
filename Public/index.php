<?php

require_once "../vendor/autoload.php";

use App\Route;

try{

    $route = new Route();

}catch (Exception $e){
    echo $e->getMessage();
}

