<?php
require "../vendor/autoload.php";

use Src\PDO\Database;
use Src\User;
use Src\UserNew;

$sql = new Database('host', 'db', 'user', 'pass');


$user = new User('goran', 'adminpass');

$user->getRoles();

$userNew = new UserNew($sql);




