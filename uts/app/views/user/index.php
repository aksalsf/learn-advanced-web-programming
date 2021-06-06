<div class="container">
    <div class="row">
        <div class="col-md-6">
            <?php foreach ($data['dataUser'] as $key => $value):?>
            <div class="alert alert-danger">
                <?= $value['nama']; ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>