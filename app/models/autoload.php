<?php 
//Auto carga de Clases
    function app_autoload($clases){
        require_once 'clases/'.$clases.'.php';
    }

    spl_autoload_register('app_autoload');

?>