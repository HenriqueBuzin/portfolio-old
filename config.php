<?php

    error_reporting(-1);

    ini_set('display_errors', 'On');

    define('BASE', 'http://localhost/portifolio/');

    include_once "autoload.php";

    global $config;

    $config = array();

    /*

    $config['dbname'] = 'u160804429_dev';

    $config['host'] = '185.28.21.242'; // localhost

    $config['charset'] = 'utf8';

    $config['dbuser'] = 'u160804429_dev';

    $config['pass'] = 'Ahenriluci012390';

    */

    $config['dbname'] = 'portifolio';

    $config['host'] = 'localhost';

    $config['charset'] = 'utf8';

    $config['dbuser'] = 'root';

    $config['pass'] = 'root';

?>