<?php

require_once '../../config/db.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/class/AutoLoader.class.php';

$prefix = basename($_SERVER['SCRIPT_FILENAME'], '.php');
$css = file_exists(realpath(__DIR__) . '/' . $prefix . '.styles.css') ? realpath(__DIR__) . '\\' . $prefix . '.styles.css' : false;
$js = file_exists(realpath(__DIR__) . '/' . $prefix . '.script.js') ? realpath(__DIR__) . '\\' . $prefix . '.script.js' : false;

$title = 'Playiva - Cadastro';

R::setup(DB_STRING, DB_USER, DB_PASSWORD);

function signup(string $firstName, string $lastName,  string $email, string $passwordHash){
    session_start();
    $failed = [
        'status' => false,
        'message' => 'Falha ao registrar'
    ];
    $user = R::find('user', 'email = :email', [ 'email' => $email ]);
    if (count($user) > 0) {
        unset ($_SESSION['email']);
        unset ($_SESSION['passwordHash']);
        return [
            'status' => false,
            'message' => 'Este email já está cadastrado!'
        ];
    }
    $userRole = R::findOne( 'role', 'name  = ?',['USER']);
    
    $user = R::dispense('user');
    $user->firstName = $firstName;
    $user->lastName = $lastName;
    $user->email = $email;
    $user->passwordHash = password_hash($passwordHash, PASSWORD_DEFAULT);
    $user->role = $userRole;
    $user_id = R::store($user);

    R::close();
    return [
        'status' => true,
        //'message' => 'Registrado com sucesso!'
        $_SESSION['email'] = $email,
        $_SESSION['passwordHash'] = $passwordHash,
        header("Location: /pages/main/main.php"), 
        exit()
    ];
}



include '../template/template.php';