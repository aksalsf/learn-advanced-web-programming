<div class="container-fluid d-flex">
    <div class="col-md-10 card p-5 mx-auto mt-3">
   
   <h1 class="text-center fw-bold">
        <?= $data['title']; ?>
   </h1>
   <hr>
   <!-- Perulangan data dari database -->
   <div class="alert alert-info d-flex justify-content-between">
       <h6 class="mb-0">
       Id : <?= $data['detailProduk']['id_ponsel']; ?>
       </h6>
       </div>
    <div class="alert alert-info d-flex justify-content-between">
       <h6 class="mb-0">
       Nama : <?= $data['detailProduk']['nama']; ?>
       </h6>
       </div>
       <div class="alert alert-info d-flex justify-content-between">
       <h6 class="mb-0">
       Merk : <?= $data['detailProduk']['id_merk']; ?>
       </h6>
       </div>
    <div class="alert alert-info d-flex justify-content-between">
       <h6 class="mb-0">
       Harga : <?= $data['detailProduk']['harga']; ?>
    </h6>
    </div>
    <div class="alert alert-info d-flex justify-content-between">
       <h6 class="mb-0">
       Berat : <?= $data['detailProduk']['berat']; ?>
    </h6>
    </div>
    <div class="alert alert-info d-flex justify-content-between">
       <h6 class="mb-0">
       Spesifikasi : <?= $data['detailProduk']['spesifikasi']; ?>
    </h6>
    </div>
    <div class="alert alert-info d-flex justify-content-between">
       <h6 class="mb-0">
      Stok : <?= $data['detailProduk']['stok']; ?>
    </h6>
    </div>

    <a href="<?= BASEURL; ?>/produk" class="btn btn-outline-primary"> Kembali
    </a>
    </div>
</div>   
</div>