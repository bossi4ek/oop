<?php

namespace Communication\CommunicationInterface;

require_once __DIR__."/Account.php";

class EmailAccount extends Account
{
    private $firstName;
    private $lastName;
    private $surName;
    private $contactList;

//======================================================================
    public function addOneContact(Contact $contact)
    {
        $this->contactList[] = $contact->getContactInfo();
    }
    public function getContactList()
    {
        echo "Contact list:<br/>";
        echo "<pre>";
        print_r($this->contactList);
        echo "</pre>";
    }

//======================================================================
    public function getContactByName($name)
    {
        //Поиск контакта по названию в БД
        $contact['name'] = "xz";
        $contact['email'] = "xz@gmail.com";

        return $contact;
    }

//======================================================================
    public function sendEmail($email)
    {
        //Отправка email
        echo "Email send to ".$email." - ";
        $result = $email != "" ? "OK" : "Error";
        echo $result."<br/>";

    }

//======================================================================
    public function logIn(LoginData $data)
    {
        if ($data->getLogin() == "admin_email" && $data->getPass() == "admin_email"){
            echo "Login email account OK<br/>";
        }
        else {
            echo "Login email account Error !!!<br/>";
        }
    }

    public function logOut()
    {
        echo "Logout email account OK<br/>";
    }
}