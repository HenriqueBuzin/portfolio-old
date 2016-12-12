<?php

    spl_autoload_register(function ($class) {

        if (strpos($class, "Controller") > -1) {

            if (file_exists("controllers/{$class}.php")) {

                include_once "controllers/{$class}.php";

            }else if(!file_exists("controllers/{$class}.php")){

                include_once "views/error/404.php";

                die();

            }

        } else if (strpos($class, "DAO") > -1) {

            if (file_exists("dao/{$class}.php")) {

                include_once "dao/{$class}.php";

            }else{

                include_once "views/error/404.php";

                die();

            }

        } else if(file_exists("models/{$class}.php")) {

            include_once "models/{$class}.php";

        } else {

            include_once "core/{$class}.php";

        }

    });

?>