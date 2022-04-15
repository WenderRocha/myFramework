<?php

require_once "../vendor/autoload.php";

use App\Routes;

try{

    $route = new Routes();

}catch (Exception $e){
    echo $e->getMessage();
}

