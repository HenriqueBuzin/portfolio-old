<?php

    error_reporting(-1);

    ini_set('display_errors', 'On');

    define('BASE', 'http://localhost/portifolio/admin/');

    include_once "autoload.php";

    global $config;

    $config = array();

    $config['dbname'] = '';

    $config['host'] = 'localhost';

    $config['charset'] = 'utf8';

    $config['dbuser'] = '';

    $config['pass'] = '';

?>