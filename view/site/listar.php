<link rel="stylesheet" href="assets/css/siteListar.css">
<?php foreach($sites as $site): ?>
    <div class="card">
        <img class="card-img-top" src="<?php echo $site["photo"] ?>">
        <div class="card-block">
            <h4 class="card-title"><?php echo $site["name"]; ?></h4>
            <p class="card-text"><?php echo $site["description"]; ?></p>
            <a href="<?php echo $site["link"]; ?>" class="btn btn-primary">Visualizar</a>
        </div>
    </div>
<?php endforeach; ?>