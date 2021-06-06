<?php foreach ($merk as $detail_merk): ?>
<section class="container-fluid px-5 pb-5 bg-light">
    <h1 class="fw-bold"><?= $detail_merk -> nama; ?></h1>
    <hr>
    <div>
        <div class="row">
            <?php 
                $result = $this -> model_ponsel -> get_by_merk($detail_merk -> id_merk);  
            ?>
            <?php foreach($result as $item): ?>
            <a class="col-md-2 text-dark text-decoration-none mb-4 card-item d-flex align-items-stretch" href="<?= base_url(). 'index.php/beli/lihat/' . $item -> id_ponsel; ?>" title="Beli <?= $item -> nama; ?> ">
                <div class="col-12 card p-3 shadow-sm border-0">
                    <img src="<?= base_url() . 'assets/img/uploads/'. $item -> id_ponsel . '.jpg'; ?>" class="card-img-top card-item-img" alt="...">
                    <div class="card-body card-item-body text-center">
                        <h3 class="fs-6 text-body">
                            <?= $item -> nama;?>
                        </h3>
                        <small class="text-danger">
                            <?= "IDR " . number_format($item -> harga,0,',','.'); ?>
                        </small>
                    </div>
                    <div class="btn btn-primary">
                        Beli
                    </div>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endforeach; ?>