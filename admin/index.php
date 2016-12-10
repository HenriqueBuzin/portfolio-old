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
            <script src="assets/js/bibliotecas/jquery.min.js"></script>
            <link rel="stylesheet" href="assets/css/bibliotecas/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/bibliotecas/adminlte.min.css">
        </head>
        <body>
        <header class="main-header">
            <nav class="navbar navbar-static-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a href="../../index2.html" class="navbar-brand"><b>Admin</b>LTE</a>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">Link</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">One more separated link</a></li>
                                </ul>
                            </li>
                        </ul>
                        <form class="navbar-form navbar-left" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
                            </div>
                        </form>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#">Link</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </header>
            <?php
                if(method_exists($controller, $action)){
                    $controller->$action();
                }else {
                    include_once "view/error/404.php";
                }
            ?>
        </body>
</html>