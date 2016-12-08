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
        <base href="<?php echo BASE; ?>">
        <script src="assets/js/jquery.min.js"></script>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    </head>
    <body>
        <?php
            if(method_exists($controller, $action)){
                $controller->$action();
            }else {
                include_once "admin/view/error/404.php";
            }
        ?>
    </body>
</html>


