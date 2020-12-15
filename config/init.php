<?php
require_once './db.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Playiva/class/AutoLoader.class.php';

R::setup(DB_STRING, DB_USER, DB_PASSWORD);

// user 1
$user = R::dispense('user');

$user->firstName = 'Iarah';
$user->lastName = 'Almeida';
$user->email = 'iarahgda@gmail.com';
$user->passwordHash = 'fhasdf90dasfbp4i12hpfas';

R::store($user);

// user 2
$user = R::dispense('user');

$user->firstName = 'Paulo';
$user->lastName = 'Borges';
$user->email = 'pauloabm@gmail.com';
$user->passwordHash = 'fasud9-fuasdhnç14fass';

R::store($user);

// user 3
$user = R::dispense('user');

$user->firstName = 'Nayara';
$user->lastName = 'Borges';
$user->email = 'nayaras@gmail.com';
$user->passwordHash = 'fyuasd09f7yuas9-h3412';

R::store($user);

R::close();