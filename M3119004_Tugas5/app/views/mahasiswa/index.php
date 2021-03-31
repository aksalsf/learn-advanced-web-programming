<main class="d-md-flex">
    <section class="col-md-6 d-flex align-items-center bg-danger p-md-5 p-3">
        <img src="<?= BASEURL; ?>/img/img-02.png" class="img-fluid">
    </section>
    <section class="col-md-6 p-md-5 p-3">
        <h1 class="text-danger display-3 fw-bold mb-4">
            <?= $data['title']; ?>
        </h1>
        <a href="<?= BASEURL; ?>/form" class="btn btn-sm btn-success bg-gradient">[+] New</a>
        <hr>
        <ul class="list-group list-group-flush">
            <?php foreach ($data['mhs'] as $key => $mahasiswa):?>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?= $mahasiswa['nama']; ?>
                <span>
                    <!-- Detail -->
                    <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mahasiswa['nim']; ?>"
                        class="btn badge bg-primary bg-gradient text-white text-decoration-none rounded-pill">Detail</a>
                    <!-- Ubah -->
                    <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mahasiswa['nim']; ?>"
                        class="btn badge bg-warning bg-gradient text-white text-decoration-none rounded-pill">Ubah</a>
                    <!-- Hapus -->
                    <form action="<?= BASEURL; ?>/mahasiswa/hapus" method="post" class="d-inline">
                        <input type="hidden" name="nim" value="<?= $mahasiswa['nim']; ?>">
                        <button type="submit"
                            class="btn btn-sm badge bg-danger bg-gradient text-white text-decoration-none rounded-pill">
                            Hapus
                        </button>
                    </form>
                </span>
            </li>
            <?php endforeach; ?>
        </ul>
    </section>
</main>