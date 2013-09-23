<?php
    namespace Communication\CommunicationInterface;

    require_once __DIR__."/libs/Communication/VkAccount.php";
    require_once __DIR__."/libs/Communication/GmailAccount.php";

    //Аккаунт VK
    $vk_acc = new VkAccount();
    $vk_acc->setLogin("admin");
    $vk_acc->setPass("admin");
    $vk_acc->setFirstName("Сергей");
    $vk_acc->setLastName("Левченко");
    $vk_acc->setSurName("Петрович");
    $vk_acc->showAccountInfo();
    $vk_acc->logIn(new LoginData($vk_acc->getLogin(), $vk_acc->getPass()));
    $vk_acc->logOut();
    $vk_acc->delete();

    echo "<br/><br/>===================================================================<br/><br/>";

    //Аккаунт Gmail
    $gmail_account = new GmailAccount();
    $gmail_account->setLogin("admin_email");
    $gmail_account->setPass("admin_email");
    $gmail_account->setEmail("bossi4ek@gmail.com");

    $contact = new Contact("xz", "xz@gmail.com", "work");
    $gmail_account->addOneContact($contact);
    $contact2 = new Contact("xz2", "xz2@gmail.com", "public");
    $gmail_account->addOneContact($contact2);
    $gmail_account->getContactList();

    $gmail_account->sendEmail("xz@gmail.com");
    $gmail_account->logIn(new LoginData($gmail_account->getLogin(), $gmail_account->getPass()));
    $gmail_account->logOut();
    $gmail_account->delete();