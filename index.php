<?php
    include "config.php";
    $controller = ucfirst(strtolower(addslashes(filter_input(INPUT_GET, 'controller')))) . "Controller";
    $controller =  new $controller();
    $action = addslashes(filter_input(INPUT_GET, 'action')) . "Action";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Henrique Antonio Buzin Vargas">
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.mask.min.js"></script>
        <script src="assets/js/index.js"></script>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/datatables.min.css">
        <link rel="stylesheet" href="assets/css/index.css">
    </head>
    <body>
        <?php
            include_once "header.php";
            if(method_exists($controller, $action)){
                $controller->$action();
            }else {
                include_once "admin/view/error/404.php";
            }
            include_once "footer.php";
        ?>
    </body>
</html>


