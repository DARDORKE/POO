<?php

require_once 'User.php';
require_once 'Seller.php';

function displayUsername(User $user): void
{
    echo 'Connecté en tant que : '.$user->getDisplayName();
}

function displaySellerUsername(Seller $seller): void
{
    echo 'Connecté en tant que : '.$seller->getDisplayName();
}

$user = new User('John', 'john@goe.fr');
$seller = new Seller('Laure', 'laure@dupont.com', 'Sarl Laure');
echo $seller->getDisplayName();