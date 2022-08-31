<?php

class User
{
    public string $username;
    public string $email;

    public function __construct($username, $email)
    {
        $this->username = $username;
        $this->email = $email;
    }

    public function getDisplayName(): string
    {
        return $this->username.' ('.$this->email.')';
    }
}