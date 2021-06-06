<div class="container-fluid d-flex">
    <div class="col-md-10 card p-5 mx-auto mt-3">
   
   <h1 class="text-center fw-bold">
        <?= $data['title']; ?>
   </h1>
   <hr>
   <!-- Perulangan data dari database -->
   <?php foreach($data['dataProduk'] as $key => $produk): ?>
    <div class="alert alert-info d-flex justify-content-between">
       <h6 class="mb-0"><?= $produk['nama']; ?>
       </h6>
       <div class="d-flex">
        <a href="<?= BASEURL; ?>/produk/detailProduk/<?= $produk['id_ponsel']; ?>" class="badge bg-primary rounded-pill text-decoration-none text-white">Detail</a>
        <a href="<?= BASEURL; ?>/produk/ubahProduk/<?= $produk['id_ponsel']; ?>" class="badge bg-warning rounded-pill text-decoration-none text-white ms-1">Ubah</a>
        <!-- Form untuk menghapus -->
        <form action="<?= BASEURL; ?>/produk/hapus" method="POST"><input type="hidden" name="id" value="<?= $produk ['id_ponsel'];?>">
        <button type="submit" class="btn badge bg-danger rounded-pill text-decoration-none text-white ms-1" onclick="return confirm('Yakin mau dihapus?')" >Hapus</button>
        </form>
       </div>
    </div>
    <?php endforeach; ?>
    <a href="<?= BASEURL; ?>/produk/tambah" class="btn btn-primary">[+] Tambah Data </a>
</div>   
</div>