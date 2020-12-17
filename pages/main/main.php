<?php
require_once '../../config/db.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Playiva/class/AutoLoader.class.php';

$prefix = basename($_SERVER['SCRIPT_FILENAME'], '.php');
$css = file_exists(realpath(__DIR__) . '/' . $prefix . '.styles.css') ? realpath(__DIR__) . '\\' . $prefix . '.styles.css' : false;
$js = file_exists(realpath(__DIR__) . '/' . $prefix . '.script.js') ? realpath(__DIR__) . '\\' . $prefix . '.script.js' : false;

$title = 'Playiva - Learn and Improve';

///* para só acessar page logado --comentar caso precisem
session_start();
if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['passwordHash']) == true)){
    unset($_SESSION['email']);
    unset($_SESSION['passwordHash']);
    header('location:index.php');
}

$logado = $_SESSION['email'];
var_dump($logado);
//*/

R::setup(DB_STRING, DB_USER, DB_PASSWORD);
$languages = R::findAll('language');
$channels = R::findAll('channel');
$instruments = R::findAll('instrument');
$techniques = R::findAll('technique');
$lectures = R::findAll('lecture');
include '../template/template.php';