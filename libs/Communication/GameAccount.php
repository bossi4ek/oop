<?php

namespace Communication\CommunicationInterface;

require_once __DIR__."/Account.php";

class GameAccount extends Account
{
    private $nickName;

//======================================================================
    public function setNickName($nickName)
    {
        $this->nickName = $nickName;
    }
    public function getNickName()
    {
        return $this->nickName;
    }

//======================================================================
    public function logIn(LoginData $data)
    {

    }

//======================================================================
    public function logOut()
    {

    }
}