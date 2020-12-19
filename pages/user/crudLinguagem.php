<?php

require_once '../../config/db.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/class/AutoLoader.class.php';

$prefix = basename($_SERVER['SCRIPT_FILENAME'], '.php');
$css = file_exists(realpath(__DIR__) . '/' . $prefix . '.styles.css') ? realpath(__DIR__) . '\\' . $prefix . '.styles.css' : false;
$js = file_exists(realpath(__DIR__) . '/' . $prefix . '.script.js') ? realpath(__DIR__) . '\\' . $prefix . '.script.js' : false;

$title = 'Playiva - CRUD de Linguagem';

R::setup(DB_STRING, DB_USER, DB_PASSWORD);

function cadastroLinguagem($name){
    session_start();
    $failed = [
        'status' => false,
        'message' => 'Falha ao cadastrar'
    ];
    
    $linguagem = R::dispense('language');
    $linguagem->name = $name;
    R::store($linguagem);

    R::close();
    return [
        'status' => true,
        $_SESSION['name'] = $name,
        header("Location: crudLinguagem.php"), 
        exit()
    ];
}

function removerLinguagem($idRemover){
    session_start();
    $linguagem = R::load('language', $idRemover);
    R::trash( $linguagem );
    R::close();
    return [
        'status' => true,
        $_SESSION['idRemover'] = $idRemover,
        header("Location: crudLinguagem.php"), 
        exit()
    ];
}

function atualizarLinguagem($idAtualizacao, $nome){
    session_start();
    $linguagem = R::load('language', $idAtualizacao);
    $linguagem -> name = $nome;
    R::store($linguagem);
    R::close();
    return [
        'status' => true,
        $_SESSION['idAtualizar'] = $idRemover,
        header("Location: crudLinguagem.php"), 
        exit()
    ];
}


include '../template/template.php';