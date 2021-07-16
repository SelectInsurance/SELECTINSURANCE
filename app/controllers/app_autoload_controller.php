<?php 
    function app_autoload_controller($clases){
        require_once $clases.'.php';
    }

    spl_autoload_call('app_autoload_controller');
?>