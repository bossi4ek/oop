<?php

namespace Communication\CommunicationInterface;

require_once __DIR__."/EmailAccount.php";

class GmailAccount extends EmailAccount
{
    public function __construct()
    {
        $this->create();
    }

    public function create()
    {
        echo "Create new Gmail account<br/>";
    }

    public function delete()
    {
        echo "Delete Gmail account<br/>";
    }
}