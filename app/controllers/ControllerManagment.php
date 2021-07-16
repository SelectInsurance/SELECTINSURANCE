<?php
require_once 'app/views/assets/header.php';
require_once 'app/models/autoload.php';

class ControllerManagment
{
    public function ControllerManagmentLogin()
    {
        require_once 'app/views/pages/managment/login.php';
    }
}

require_once 'app/views/assets/footer.php';
