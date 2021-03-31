<main class="d-md-flex">
    <section class="col-md-6 d-flex align-items-center bg-danger p-md-5 p-3">
        <img src="<?= BASEURL; ?>/img/img-04.png" class="img-fluid">
    </section>
    <section class="col-md-6 p-md-5 p-3">
        <h1 class="text-danger display-3 fw-bold"> <?= $data['title']; ?> </h1>
        <form action="<?= BASEURL; ?>/mahasiswa/update" method="POST" class="mt-md-4 mt-3 text-danger">
            <?php foreach ($data['mhs'] as $key => $mahasiswa) : ?> <div class="form-group mb-4">
                <label for="nama" class="form-label fw-bold"> Nama </label>
                <input type="text" name="nama"
                    class="form-control shadow-none text-secondary fw-bold rounded-0 border-top-0 border-start-0 border-end-0 border-warning border-2"
                    value="<?= $mahasiswa['nama']; ?>" required>
            </div>
            <div class="form-group mb-4">
                <label for="password" class="form-label fw-bold"> Password </label>
                <input type="password" name="password"
                    class="form-control shadow-none text-secondary fw-bold rounded-0 border-top-0 border-start-0 border-end-0 border-warning border-2"
                    required>
            </div>
            <div class="form-group mb-4">
                <label for="tanggal_lahir" class="form-label fw-bold"> Tanggal Lahir </label>
                <input type="date" name="tanggal_lahir"
                    class="form-control shadow-none text-secondary fw-bold rounded-0 border-top-0 border-start-0 border-end-0 border-warning border-2"
                    value="<?= $mahasiswa['tanggal_lahir']; ?>" required>
            </div>
            <!-- Prodi -->
            <div class="form-group mb-4">
                <label for="prodi" class="form-label fw-bold"> Program Studi </label>
                <select class="form-select text-secondary fw-bold" name="prodi" required>
                    <option value="D3 Teknik Informatika"
                        <?php if($mahasiswa['prodi'] == 'D3 Teknik Informatika') echo 'selected' ; ?>> D3 Teknik
                        Informatika
                    </option>
                    <option value="S1 Teknik Informatika"
                        <?php if($mahasiswa['prodi'] == 'S1 Teknik Informatika') echo 'selected' ; ?>> S1 Teknik
                        Informatika
                    </option>
                    <option value="S1 Sistem Informasi"
                        <?php if($mahasiswa['prodi'] == 'S1 Sistem Informasi') echo 'selected' ; ?>> S1 Sistem Informasi
                    </option>
                </select>
            </div>
            <!-- Jenis Kelamin -->
            <label for="jenis_kelamin" class="form-label fw-bold">Jenis Kelamin</label>
            <div class="form-group fw-bold mb-4 text-secondary">
                <div class="form-check form-check-inline">
                    <input type="radio" name="jenis_kelamin" class="form-check-input" value="L" required
                        <?php if($mahasiswa['jenis_kelamin'] == 'L') echo 'checked' ; ?>>
                    <label class="form-check-label" for="L">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" name="jenis_kelamin" class="form-check-input" value="P"
                        <?php if($mahasiswa['jenis_kelamin'] == 'P') echo 'checked' ; ?>>
                    <label class="form-check-label" for="P">Perempuan</label>
                </div>
            </div>
            <!-- Kewarganegaraan -->
            <div class="form-check form-check-inline mb-4">
                <input class="form-check-input shadow-none" type="checkbox" name="kewarganegaraan" value="1"
                    <?php if($mahasiswa['kewarganegaraan'] == 1) echo 'checked' ; ?>>
                <label class="form-check-label text-secondary fw-bold" for="kewarganegaraan">Saya warga negara
                    Indonesia</label>
            </div>
            <!-- Keterangan -->
            <div class="form-group mb-4">
                <label for="keterangan" class="form-label fw-bold">Keterangan</label>
                <textarea name="keterangan"
                    class="form-control shadow-none text-secondary fw-bold rounded-0 border-top-0 border-start-0 border-end-0 border-warning border-2"><?= $mahasiswa['keterangan']; ?></textarea>
            </div>
            <input type="hidden" name="nim" value="<?= $mahasiswa['nim']; ?>"> <?php endforeach; ?>
            <!-- Submit button -->
            <div class="form-group">
                <a href="<?= BASEURL; ?>/mahasiswa" class="btn btn-outline-secondary fw-bold">[<] Kembali</a>
                <button class="btn btn-danger fw-bold" type="submit" name="submit">Ubah</button>
            </div>
        </form>
    </section>
</main>