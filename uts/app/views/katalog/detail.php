<main class="container-fluid py-5 mb-5" style="background:#F2F2F2">
    <div class="col-md-11 mx-auto mb-5">
        <div class="row">
            <div class="col-md-4">
                <div class="p-3 rounded shadow-sm bg-white">
                    <img src="<?= BASEURL.'/img/uploads/'.$data['produk']['gambar']; ?>" class="img-fluid rounded">
                </div>
            </div>
            <div class="col-md-5">
                <div class="card p-5 shadow-sm border-0">
                    <h1 class="fw-bold">
                        <?= $data['produk']['nama']; ?>
                    </h1>
                    <aside class="mb-4">
                        <span class="badge bg-primary rounded-pill">
                            <?= $data['merk']['nama']; ?>
                        </span>
                    </aside>
                    <h5 class="fw-bold fs-6">Deskripsi:</h5>
                    <p class="text-secondary">
                        <?= $data['produk']['spesifikasi']; ?>
                    </p>
                    <hr>
                    <p class="text-black-50">Stok: <?= $data['produk']['stok']; ?></p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-5 shadow-sm border-0">
                    <h2 class="h4 text-center fw-bold text-danger">
                        <?= "IDR " . number_format($data['produk']['harga'],0,',','.'); ?>
                    </h2>
                    <hr>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal">Beli</button>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">Pemesanan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php $data['form']->cetakForm(); ?>
      </div>
    </div>
  </div>
</div>
