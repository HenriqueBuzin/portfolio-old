<link rel="stylesheet" href="assets/css/sites/listar.css">
<script src="assets/js/sites/listar.js"></script>
<div class="row">
    <?php foreach($sites as $site): ?>
        <div class="col-sm-3">
            <div class="card">
                <img class="card-img-top" src="<?php echo $site["photo"] ?>">
                <div class="card-block">
                    <h4 class="card-title"><?php echo $site["name"]; ?></h4>
                    <p class="card-text"><?php echo $site["description"]; ?></p>
                </div>
                <div class="card-block" id="link">
                    <a href="<?php echo $site["link"]; ?>" class="btn btn-primary">Visualizar</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
