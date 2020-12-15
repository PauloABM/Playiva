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
class Model_Lecture extends SimpleModel {

    public $id = 0;
    public $url = null;
    public $name = null;
    
    function getId() {
        return $this->bean->id;
    }

    function getUrl() {
        return $this->bean->url;
    }

    function getName() {
        return $this->bean->name;
    }

    function setId($id): void {
        $this->bean->id = $id;
    }

    function setUrl($url): void {
        $this->bean->url = $url;
    }

    function setName($name): void {
        $this->bean->name = $name;
    }
}