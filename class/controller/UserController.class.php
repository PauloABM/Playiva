<?php
require_once './db.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Playiva/class/AutoLoader.class.php';

if (isset($_GET['id'])) {
    $id = filter_input(INPUT_GET, 'id');
    
    R::setup(DB_STRING, DB_USER, DB_PASSWORD);
    $user = R::load('user', $id);

    print_r($user);
    
    // Dado de feedback recebido para processamento
    // if(isset($_GET['positivo'])) {
    //     // feedback postivo
    //     $postagem->positivo++;
    //     R::store($postagem);
    // } else if(isset($_GET['negativo'])) {
    //     // feedback negativo
    //     $postagem->negativo++;
    //     R::store($postagem);
    // }
    
    // header('Location: index.php');
}