<?php

require_once '../../config/db.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/class/AutoLoader.class.php';

$prefix = basename($_SERVER['SCRIPT_FILENAME'], '.php');
$css = file_exists(realpath(__DIR__) . '/' . $prefix . '.styles.css') ? realpath(__DIR__) . '\\' . $prefix . '.styles.css' : false;
$js = file_exists(realpath(__DIR__) . '/' . $prefix . '.script.js') ? realpath(__DIR__) . '\\' . $prefix . '.script.js' : false;

$title = 'Playiva - Cadastro de Instrumento';

R::setup(DB_STRING, DB_USER, DB_PASSWORD);

function cadastroinstrumento($name){
    session_start();
    $failed = [
        'status' => false,
        'message' => 'Falha ao cadastrar'
    ];
    
    $instrument = R::dispense('instrument');
    $instrument->name = $name;
    R::store($instrument);

    R::close();
    return [
        'status' => true,
        $_SESSION['name'] = $name,
        header("Location: crudInstrumento.php"), 
        exit()
    ];
}

function removerInstrumento($idRemover){
    session_start();
    $instrumento = R::load('instrument', $idRemover);
    R::trash( $instrumento );
    R::close();
    return [
        'status' => true,
        $_SESSION['idRemover'] = $idRemover,
        header("Location: crudInstrumento.php"), 
        exit()
    ];
}

function atualizarInstrumento($idAtualizacao, $nome){
    session_start();
    $instrumento = R::load('instrument', $idAtualizacao);
    $instrumento -> name = $nome;
    R::store($instrumento);
    R::close();
    return [
        'status' => true,
        $_SESSION['idAtualizar'] = $idRemover,
        header("Location: crudInstrumento.php"), 
        exit()
    ];
}


include '../template/template.php';