<?php

namespace Communication\CommunicationInterface;

require_once __DIR__."/CommunicationInterface.php";

class LoginData
{
    private $login;
    private $pass;

//======================================================================
    public function __construct($login = "", $pass = "")
    {
        $this->login = $login;
        $this->pass = $pass;
    }
//======================================================================
    public function getLogin()
    {
        return $this->login;
    }
    public function getPass()
    {
        return $this->pass;
    }
}