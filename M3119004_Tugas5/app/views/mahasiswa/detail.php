<main class="d-md-flex">
    <section class="col-md-6 d-flex align-items-center bg-danger p-md-5 p-3">
        <img src="<?= BASEURL; ?>/img/img-03.png" class="img-fluid">
    </section>
    <section class="col-md-6 p-md-5 p-3">
        <h1 class="text-danger display-3 fw-bold mb-4">
            <?= $data['title']; ?>
        </h1>
        <hr>
        <ul class="list-group list-group-flush">
            <li class="text-danger list-group-item d-flex justify-content-between align-items-center">
                <b class="text-secondary">NIM</b> <?= $data['mhs']['nim']; ?>
            </li>
            <li class="text-danger list-group-item d-flex justify-content-between align-items-center">
                <b class="text-secondary">Nama</b> <?= $data['mhs']['nama']; ?>
            </li>
            <li class="text-danger list-group-item d-flex justify-content-between align-items-center">
                <b class="text-secondary">Tanggal Lahir</b> <?= date("j F Y", strtotime($data['mhs']['tanggal_lahir'])); ?>
            </li>
            <li class="text-danger list-group-item d-flex justify-content-between align-items-center">
                <b class="text-secondary">Program Studi</b> <?= $data['mhs']['prodi']; ?>
            </li>
            <li class="text-danger list-group-item d-flex justify-content-between align-items-center">
                <b class="text-secondary">Jenis Kelamin</b> <?= ($data['mhs']['jenis_kelamin'] == 'L') ? 'Laki-laki' : 'Perempuan'; ?>
            </li>
            <li class="text-danger list-group-item d-flex justify-content-between align-items-center">
                <b class="text-secondary">Kewarganegaraan</b> <?= ($data['mhs']['kewarganegaraan'] == 1) ? 'WNI' : 'WNA'; ?>
            </li>
            <li class="text-danger list-group-item d-flex justify-content-between align-items-center">
                <b class="text-secondary">Status</b> <?= ($data['mhs']['status'] == 1) ? 'Aktif' : 'Tidak Aktif'; ?>
            </li>
            <li class="text-danger list-group-item d-flex justify-content-between align-items-center">
                <b class="text-secondary">Keterangan</b> <?= $data['mhs']['keterangan']; ?>
            </li>
        </ul>
        <hr>
        <a href="<?= BASEURL; ?>/mahasiswa" class="btn btn-outline-primary fw-bold">[<] Kembali</a>
    </section>
</main>