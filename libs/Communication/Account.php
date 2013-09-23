<?php

namespace Communication\CommunicationInterface;

require_once __DIR__."/CommunicationInterface.php";
require_once __DIR__."/LoginData.php";
require_once __DIR__."/Contact.php";

abstract class Account implements  CommunicationInterface
{
    private $login;
    private $pass;
    private $email;

//======================================================================
    public function setLogin($login)
    {
        $this->login = $login;
    }
    public function getLogin()
    {
        return $this->login;
    }
//======================================================================
    public function setPass($pass)
    {
        $this->pass = $pass;
    }
    public function getPass()
    {
        return $this->pass;
    }
//======================================================================
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getEmail()
    {
        return $this->email;
    }
//======================================================================

    public function create()
    {
        //Добавление в БД
        echo "create a new Account";
    }
    public function delete()
    {
        //Удаление с БД
        echo "delete Account";
    }

//======================================================================
    abstract public function logIn(LoginData $data);
    abstract public function logOut();
}