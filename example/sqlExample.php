<?php

use Src\PDO\Database;

$sql = new Database('host', 'db', 'user', 'pass');



//Case 1 - user can have one location
// get user location, simple join with location table and user table, locationId is foreign key
$results = $sql->select('SELECT location.name, location.latitude, location.longitude
                                FROM location 
                                left join users 
                                ON location.Id = users.locationId 
                                where users.Id = ?', array($userId));



//Case 2 - user can have multiple location
$results = $sql->select('SELECT l.name, l.latitude, l.longitude, u.name
                                FROM location as l
                                JOIN usersLocations as ul ON l.Id = ul.locationId
                                JOIN users as u ON u.Id = ul.userId
                                where users.Id = ?', array($userId));


//Case 3 - user can have some type
// we can select user by type

$results = $sql->select('SELECT u.name as username FROM users as u where u.type IN (1,2) ORDER BY u.created_at');






