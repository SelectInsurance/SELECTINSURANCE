<?php
require_once 'app/models/autoload.php';
class ControllerAgentes
{

    public function Controller($Valor){
        if (file_exists('app/views/pages/AgentesPages/'.$Valor.'.php')) {
            require_once 'app/views/assets/NavAgentePersonalizado.php';
            require_once 'app/views/pages/AgentesPages/'.$Valor.'.php';
        }
        

    }

    //public function ControllerAngelaHerrera()
    //{
    //    require_once 'app/views/assets/NavAgentePersonalizado.php';
    //    require_once 'app/views/pages/AgentesPages/AngelaHerrera.php';
    //}
//
    //public function ControllerLuaArcila()
    //{
    //    require_once 'app/views/assets/NavAgentePersonalizado.php';
    //    require_once 'app/views/pages/AgentesPages/LuaArcila.php';
    //}
//
    //public function ControllerLesslieFonseca()
    //{
    //    require_once 'app/views/assets/NavAgentePersonalizado.php';
    //    require_once 'app/views/pages/AgentesPages/LeslieFonseca.php';
    //}
    //public function ControllerManoelaFirvida()
    //{
    //    require_once 'app/views/assets/NavAgentePersonalizado.php';
    //    require_once 'app/views/pages/AgentesPages/ManoelaFirvida.php';
    //}
//
//
    //public function ControllerYoimaValdes()
    //{
    //    require_once 'app/views/assets/NavAgentePersonalizado.php';
    //    require_once 'app/views/pages/AgentesPages/YoimaValdes.php';
    //}

}
