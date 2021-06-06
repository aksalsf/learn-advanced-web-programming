<div class="container-fluid d-flex">
    <div class="col-md-6 card p-5 mx-auto mt-3">
        <!-- 
            merah => danger
            biru => primary, info
            kuning => warning
            hijau => success
            hitam => dark
         -->
        <h1 class="text-center fw-bold">
            <?= $data['title']; ?>
        </h1>
        <hr>
        <!-- 
            Ini untuk perulangan data dari database
         -->
        <div class="alert alert-primary d-flex justify-content-between">
            <h6 class="mb-0">
                Nama: <?= $data['detailUser']['nama']; ?>
            </h6>
        </div>

        <div class="alert alert-primary d-flex justify-content-between">
            <h6 class="mb-0">
                Email: <?= $data['detailUser']['email']; ?>
            </h6>
        </div>

        <a href="<?= BASEURL; ?>/user" class="btn btn-outline-primary">
            Kembali
        </a>
    </div>
</div>