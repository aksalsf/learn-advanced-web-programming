<div class="container-fluid d-flex">
<!-- mx tengah horizontal, my tengah vertikal
p5 jarak konten ke border -->
<div class="col-md-6 card p-5 mx-auto mt-3">
    <h1 class="text-center fw-bold">
        <?= $data['title']; ?>
    </h1>
    <hr>
    <?php $data['form'] -> cetakForm(); ?>
        <a href="<?= BASEURL; ?>/Merk" class="btn btn-info">
            Kembali
        </a>
</div>
</div>