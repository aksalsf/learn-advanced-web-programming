<main class="pb-5" style="background:#F2F2F2">
    <header class="container-fluid">
        <div class="col-md-11 mx-auto rounded p-5">
            <div class="row">
                <div class="col-md-6 my-md-auto mt-5 text-md-start text-center order-md-first order-last">
                    <p class="h3">iPhone 12</p>
                    <h1 class="display-3 fw-bold">Lebih Hebat <br> Dari Cepat.</h1>
                    <a class="btn btn-primary rounded-pill" style="width:5rem">Beli</a>
                </div>
                <div class="col-md-6 order-md-last order-first">
                    <img src="https://www.apple.com/id/iphone/home/images/overview/hero/iphone_12__d51ddqcc7oqe_large.jpg" class="img-fluid">
                </div>
            </div>
        </div>
    </header>
    <main class="container mt-5">
        <h2 class="h3">Rekomendasi Editor</h2>
        <hr>
        <div class="row">
            <?php foreach($data['produk'] as $key => $produk): ?>
            <div class="col-md-2 mb-3">
                <a class="card border-0 shadow-sm p-3 text-decoration-none" href="<?php echo BASEURL; ?>/katalog/detail/<?= $produk['id_ponsel'] ?>">
                    <img src="<?= BASEURL.'/img/uploads/'.$produk['gambar']; ?>">
                    <div class="card-body text-center">
                        <h3 class="fs-6 text-body">
                            <?= $produk['nama'] ?>
                        </h3>
                        <small class="text-danger">
                            <?= "IDR " . number_format($produk['harga'],0,',','.'); ?>
                        </small>
                    </div>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </main>
</main>
