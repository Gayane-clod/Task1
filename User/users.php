<?php

require_once __DIR__ . "./../vendor/autoload.php";

use Classes\User\User as User;

$user = new User;
$user->getAll();

