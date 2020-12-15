<?php

// Convenções do RedBeanPHP dificultam a definição de namespace
// para models. Assim, trabalha-se com a convenção de nome da classe
// Modelo_... e configura-se o AutoLoader para fazer a importação
// dos arquivos no diretório especial 'Model'
//namespace Model;
//define('REDBEAN_MODEL_PREFIX', '\\Model\\');

use \RedBeanPHP\SimpleModel;

/**
 * Postagem realizada no <i>blog</i>
 *
 * @author Luis Guisso <luis dot guisso at ifnmg dot edu dot br>
 * @version 0.0.1, 08/12/2020
 */
class Model_User extends SimpleModel {

    public $id = 0;
    public $firstName = null;
    public $lastName = null;
    public $email = null;
    public $passwordHash = null;
    
    function getId() {
        return $this->bean->id;
    }

    function getFirstName() {
        return $this->bean->firstName;
    }

    function getlastName() {
        return $this->bean->lastName;
    }

    function getEmail() {
        return $this->bean->email;
    }

    function getPasswordHash() {
        return $this->bean->passwordHash;
    }

    function setId($id): void {
        $this->bean->id = $id;
    }

    function setFirstName($firstName): void {
        $this->bean->firstName = $firstName;
    }

    function setLastName($lastName): void {
        $this->bean->lastName = $lastName;
    }

    function setEmail($email): void {
        $this->bean->email = $email;
    }

    function setPasswordHash($passwordHash): void {
        $this->bean->passwordHash = $passwordHash;
    }
}