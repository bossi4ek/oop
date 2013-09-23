<?php

namespace Communication\CommunicationInterface;

require_once __DIR__."/Account.php";

class SocialNetworkAccount extends Account
{
    private $firstName;
    private $lastName;
    private $surName;
    private $friendList;
    private $miniGames;

//======================================================================
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }
    public function getFirstName()
    {
        return $this->firstName;
    }
//======================================================================
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }
    public function getLastName()
    {
        return $this->lastName;
    }
//======================================================================
    public function setSurName($surName)
    {
        $this->surName = $surName;
    }
    public function getSurName()
    {
        return $this->surName;
    }

//======================================================================
    public function addPrivateInfo($private_info)
    {
        $this->setLogin($private_info['login']);
        $this->setPass($private_info['pass']);

        $this->firstName = $private_info['firstName'];
        $this->lastName = $private_info['lastName'];
        $this->surName = $private_info['surName'];
    }
//======================================================================
    public function showAccountInfo()
    {
        echo "Логин: ".$this->getLogin()." (".$this->getPass().")<br/>";
        echo "Имя: ".$this->getFirstName()."<br/>";
        echo "Фамилия: ".$this->getLastName()."<br/>";
        echo "Отчество: ".$this->getSurName()."<br/>";
    }
//======================================================================
    public function logIn(LoginData $data)
    {
        if ($data->getLogin() == "admin" && $data->getPass() == "admin"){
            echo "Login social network OK<br/>";
        }
        else {
            echo "Login social network Error !!!<br/>";
        }
    }
//======================================================================
    public function logOut()
    {
        echo "Logout social network OK<br/>";
    }
//======================================================================
    public function delete()
    {
        echo "delete social network account<br/>";
    }
}