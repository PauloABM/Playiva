<?php
require_once '../../config/db.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/class/AutoLoader.class.php';

$prefix = basename($_SERVER['SCRIPT_FILENAME'], '.php');
$css = file_exists(realpath(__DIR__) . '/' . $prefix . '.styles.css') ? realpath(__DIR__) . '\\' . $prefix . '.styles.css' : false;
$js = file_exists(realpath(__DIR__) . '/' . $prefix . '.script.js') ? realpath(__DIR__) . '\\' . $prefix . '.script.js' : false;

$title = 'Playiva';

R::setup(DB_STRING, DB_USER, DB_PASSWORD);

function login(string $email, string $passwordHash){
    session_start();
    $failed = [
        'status' => false,
        'message' => 'Email ou senha incorretos',
        
    ];

    $user = R::find('user', 'email = :email', [ 'email' => $email ]);
    if (count($user) != 1) {
        unset ($_SESSION['email']);
        unset ($_SESSION['passwordHash']);
        return $failed;
    }
    $user = array_values($user)[0];
    if (!password_verify($passwordHash, $user->passwordHash)) {
        unset ($_SESSION['email']);
        unset ($_SESSION['passwordHash']);
        return $failed;
    }
    return [
        'status' => true,
        //'message' => 'Login successful!'
        $_SESSION['email'] = $email,
        $_SESSION['passwordHash'] = $passwordHash,
        header("Location: /pages/main/main.php"), 
        exit()
    ];


}


include '../template/template.php';
