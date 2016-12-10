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
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="author" content="Henrique Antonio Buzin Vargas">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <base href="<?php echo BASE; ?>">
        <!-- JS -->
        <script src="admin/assets/js/bibliotecas/jquery.min.js"></script>
        <script src="admin/assets/js/bibliotecas/bootstrap.min.js"></script>
        <script src="assets/js/index.js"></script>
        <!-- CSS -->
        <link rel="stylesheet" href="assets/css/index.css">
        <link rel="stylesheet" href="admin/assets/css/bibliotecas/bootstrap.min.css">
    </head>
    <body>
        <nav class="navbar navbar-static-top navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="./">Henrique Buzin Dev</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="./">Sites</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <div class="pull-right" id="form">
                                <input class="form-control" type="search" placeholder="Pesquisar - Em Breve">
                                <button id="lupa"><img src="assets/images/lupa.png"></button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="body">
            <?php
                if(method_exists($controller, $action)){
                    $controller->$action();
                }else {
                    include_once "admin/view/error/404.php";
                }
            ?>
        </div>
    </body>
</html>


