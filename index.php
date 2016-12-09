<?php
    include "config.php";
    if(isset($_GET["controller"])){
        $controller = ucfirst(strtolower(addslashes(filter_input(INPUT_GET, 'controller')))) . "Controller";
    }else{
        $controller = "SiteController";
    }
    $controller =  new $controller();
    if(isset($_GET["action"])){
        $action = addslashes(filter_input(INPUT_GET, 'action')) . "Action";
    }else{
        $action = "listarAction";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Henrique Antonio Buzin Vargas">
        <base href="<?php echo BASE; ?>">
        <script src="admin/assets/js/jquery.min.js"></script>
        <link rel="stylesheet" href="admin/assets/css/bootstrap.min.css">
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


