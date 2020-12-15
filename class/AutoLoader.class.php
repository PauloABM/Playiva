<?php

/**
 * Autoloader produzido por Thomas Hunter
 * https://thomashunter.name/posts/2011-08-23-simple-php-namespace-friendly-autoloader-class
 *
 * @author Luis Guisso <luis dot guisso at ifnmg dot edu dot br>
 * @version 0.0.1, 04/12/2020
 */
class Autoloader {

    public static function loader($classe) {

        if (substr($classe, 0, strlen('Model')) === 'Model') {
            // Importação de modelos do RedBeanPHP
            $diretorio = '/Playiva/class/model/';
        } else {
            $diretorio = '/Playiva/class/';
        }

        $arquivo = $_SERVER['DOCUMENT_ROOT']
                . $diretorio
                . str_replace("\\", '/', $classe) . '.class.php';

//        echo "<p>Tentando carregar arquivo '$arquivo'...</p>";

        if (file_exists($arquivo)) {
            // Adaptação: require ao invés de include
            require_once($arquivo);
//            echo "<p>Arquivo '$arquivo' carregado com sucesso.</p>";

            if (class_exists($classe)) {
                return true;
            }
        }
        return false;
    }

    public static function importar($arquivo, $subdiretorio) {
        require_once $_SERVER['DOCUMENT_ROOT']
                . '/Playiva'
                . ($subdiretorio ? "/$subdiretorio/" : '/')
                . $arquivo;
    }

}

spl_autoload_extensions('.class.php');
spl_autoload_register('Autoloader::loader');