<?php
    require_once 'config/config.php';

    //Autoloader Libraries
    spl_autoload_register(function($className){
        require_once 'libraries/' . $className . '.php';
    });
?>