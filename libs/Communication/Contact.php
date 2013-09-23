<?php

namespace Communication\CommunicationInterface;

class Contact
{
    private $name;
    private $email;
    private $group;

//======================================================================
    public function __construct($name = "", $email = "", $group = "")
    {
        $this->name = $name;
        $this->email = $email;
        $this->group = $group;
    }

//======================================================================
    public function getEmail()
    {
        return $this->email;
    }
    public function getGroup()
    {
        return $this->group;
    }
    public function getName()
    {
        return $this->name;
    }

//======================================================================
    public function getContactInfo()
    {
        return array(
            'name' => $this->getName(),
            'email' => $this->getEmail(),
            'group' => $this->getGroup(),
        );
    }
}