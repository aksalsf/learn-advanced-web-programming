<main class="container-fluid py-5" style="background:#F2F2F2">
    <div class="col-md-11 mx-auto mb-5">
        <?= $this->session->flashdata('alert') ?>
        <div class="row">
            <div class="col-md-4">
                <div class="p-3 rounded shadow-sm bg-white">
                    <img src="<?= base_url().'assets/img/uploads/'.$ponsel['gambar']; ?>" class="img-fluid rounded">
                </div>
            </div>
            <div class="col-md-5">
                <div class="card p-5 shadow-sm border-0">
                    <h1 class="fw-bold">
                        <?= $ponsel['nama']; ?>
                    </h1>
                    <aside class="mb-4">
                        <span class="badge bg-primary rounded-pill">
                            <?= $merk['nama']; ?>
                        </span>
                    </aside>
                    <h5 class="fw-bold fs-6">Deskripsi:</h5>
                    <p class="text-secondary">
                        <?= $ponsel['spesifikasi']; ?>
                    </p>
                    <hr>
                    <?php 
                        // Cek Stok
                        if ($ponsel['stok'] <= 0) {
                            $stok = "Habis";
                        } else {
                            $stok = $ponsel['stok'];
                        }
                    ?>
                    <p class="text-black-50">Stok: <?= $stok; ?></p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-5 shadow-sm border-0">
                    <h2 class="h4 text-center fw-bold text-danger">
                        <?= "IDR " . number_format($ponsel['harga'],0,',','.'); ?>
                    </h2>
                    <hr>
                    <button type="button" class="btn btn-primary shadow-none" data-bs-toggle="modal" data-bs-target="#modal" <?php if($stok == 'Habis') echo 'disabled'; ?>>Beli</button>
                </div>
            </div>
        </div>
    </div>
</main>