<table class="table">
    <thead>
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Foto</th>
            <th>Caminho</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($sites as $site): ?>
            <tr>
                <td><?php echo $site["idSite"]; ?></td>
                <td><?php echo $site["name"]; ?></td>
                <td><?php echo $site["description"]; ?></td>
                <td><?php echo $site["photo"]; ?></td>
                <td><?php echo $site["link"]; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>