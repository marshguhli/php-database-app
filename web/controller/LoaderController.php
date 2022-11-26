<?php
spl_autoload_register('myAutoLoader');

function myAutoLoader($className){
    
    $path='../model/';
    $extension='Model.php';
    $fullPath = $path.$className.$extension;
    if (!file_exists($fullPath)){
        return false;
    }

    include_once $fullPath;
}  
