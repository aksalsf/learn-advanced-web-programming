<div class="container-fluid d-flex">
    <div class="col-md-10 card p-5 mx-auto mt-3">
   
   <h1 class="text-center fw-bold">
        <?= $data['title']; ?>
   </h1>
   <hr>

   <?php $data['formProduk']-> cetakForm(); ?>
    <a href="<?= BASEURL; ?>/produk" class="btn btn-outline-primary mt-5"> Kembali
    </a>
    </div>
</div>   
</div>