<?php

require_once '../../config/db.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/class/AutoLoader.class.php';

$prefix = basename($_SERVER['SCRIPT_FILENAME'], '.php');
$css = file_exists(realpath(__DIR__) . '/' . $prefix . '.styles.css') ? realpath(__DIR__) . '\\' . $prefix . '.styles.css' : false;
$js = file_exists(realpath(__DIR__) . '/' . $prefix . '.script.js') ? realpath(__DIR__) . '\\' . $prefix . '.script.js' : false;

$title = 'Playiva - CRUD de Tecnicas';

R::setup(DB_STRING, DB_USER, DB_PASSWORD);

function cadastroTecnica($name){
    session_start();
    $failed = [
        'status' => false,
        'message' => 'Falha ao cadastrar'
    ];
    
    $technique = R::dispense('technique');
    $technique->name = $name;
    R::store($technique);

    R::close();
    return [
        'status' => true,
        $_SESSION['name'] = $name,
        header("Location: crudTecnica.php"), 
        exit()
    ];
}

function removerTecnica($idRemover){
    session_start();
    $Tecnica = R::load('technique', $idRemover);
    R::trash( $Tecnica );
    R::close();
    return [
        'status' => true,
        $_SESSION['idRemover'] = $idRemover,
        header("Location: crudTecnica.php"), 
        exit()
    ];
}

function atualizarTecnica($idAtualizacao, $nome){
    session_start();
    $Tecnica = R::load('technique', $idAtualizacao);
    $Tecnica -> name = $nome;
    R::store($Tecnica);
    R::close();
    return [
        'status' => true,
        $_SESSION['idAtualizar'] = $idRemover,
        header("Location: crudTecnica.php"), 
        exit()
    ];
}


include '../template/template.php';