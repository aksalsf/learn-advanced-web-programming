<div class="container-fluid d-flex">
<!-- mx tengah horizontal, my tengah vertikal
p5 jarak konten ke border -->
<div class="col-md-6 card p-5 mx-auto mt-3">
    <h1 class="text-center fw-bold">
        <?= $data['title']; ?>
    </h1>
    <hr>
    <!-- perulangan database -->
    <?php foreach($data['dataMerk'] as $key => $merk): ?>
        <div class="alert alert-info d-flex justify-content-between">
            <h6 class="mb-0">
            <?= $merk['nama']; ?>
            </h6>
            <div class="d-flex">
            <!-- rounded pill lengkung, bg info : bg warna biru -->
                <a href="<?= BASEURL; ?>/Merk/detail/<?= $merk['id_merk'];?>" class="btn badge bg-primary rounded-pill text-decoration-none text-white ms-1">Detail</a>
                <a href="<?= BASEURL; ?>/Merk/ubah/<?= $merk['id_merk'];?>" class="btn badge bg-warning rounded-pill text-decoration-none text-white ms-1">Edit</a>
                <!-- Form Hapus -->
                <form action="<?= BASEURL; ?>/Merk/hapus" method="POST">
                <input type="hidden" name="id" value="<?= $merk['id_merk'] ?>">
                <button type="submit" class="btn badge bg-danger rounded-pill text-decoration-none text-white ms-1" onclick="return confirm('Yakin mau dihapus?')">Hapus</button>
                </form>
            </div>
        </div>
        <?php endforeach; ?>
        <a href="<?= BASEURL ?>/Merk/tambah" class="btn bg-info">Tambah</a>
</div>
</div>