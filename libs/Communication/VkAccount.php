<?php

namespace Communication\CommunicationInterface;

require_once __DIR__."/SocialNetworkAccount.php";


class VkAccount extends SocialNetworkAccount
{
    private $id;

    public function __construct()
    {
        $this->id = rand(1, 100000);
        echo "Create new social VK account<br/>";
    }

    public function showAccountInfo()
    {
        echo "ID: ".$this->id."<br/>";
        parent::showAccountInfo();
    }

    public function delete()
    {
        echo "Delete VK account";
    }
}