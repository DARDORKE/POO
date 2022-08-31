<?php

require_once 'User.php';

class Seller extends User
{
    public string $companyName;

    public function __construct($username, $email, $companyName)
    {
        $this->username = $username;
        $this->email = $email;
        $this->companyName = $companyName;
    }
}