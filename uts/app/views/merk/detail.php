<div class="container-fluid d-flex">
<!-- mx tengah horizontal, my tengah vertikal
p5 jarak konten ke border -->
<div class="col-md-6 card p-5 mx-auto mt-3">
    <h1 class="text-center fw-bold">
        <?= $data['title']; ?>
    </h1>
    <hr>
    <!-- perulangan database -->
        <div class="alert alert-info d-flex justify-content-between">
            <h6 class="mb-0">
            <!-- merujuk ke controller -->
                Id Merk : <?= $data['detailMerk']['id_merk']; ?>
            </h6>
        </div>
        <div class="alert alert-info d-flex justify-content-between">
            <h6 class="mb-0">
            <!-- merujuk ke controller -->
                Nama Merk : <?= $data['detailMerk']['nama']; ?>
            </h6>
        </div>
        <a href="<?= BASEURL; ?>/Merk" class="btn btn-info">
            Kembali
        </a>
</div>
</div>