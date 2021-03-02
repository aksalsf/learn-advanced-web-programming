<main class="d-md-flex">
    <section class="col-md-6 d-flex align-items-center bg-danger p-md-5 p-3">
        <img src="img/img-01.png" class="img-fluid">
    </section>
    <section class="col-md-6 p-md-5 p-3">
        <h1 class="text-danger fw-bold">Daftar</h1>
        <p class="text-secondary lead">Nikmati fitur kami, sepuasnya!</p>
        <form action="controller/input-submit.php" method="post" class="text-danger mt-4">
            <!-- NIM -->
            <div class="form-group mb-4">
                <label for="identitas_nim" class="form-label fw-bold">NIM</label>
                <input type="text" name="identitas_nim" class="form-control shadow-none text-secondary fw-bold rounded-0 border-top-0 border-start-0 border-end-0 border-warning border-2" placeholder="M3119001" minlength="8" maxlength="8" title="Karakter pertama harus huruf kemudian diikuti angka sesuai format NIM!" pattern="^[A-Z]{1}[0-9]{7}" required>
            </div>
            <!-- Nama -->
            <div class="form-group mb-4">
                <label for="identitas_nama" class="form-label fw-bold">Nama</label>
                <input type="text" name="identitas_nama" class="form-control shadow-none text-secondary fw-bold rounded-0 border-top-0 border-start-0 border-end-0 border-warning border-2" minlength="2" title="Isi sesuai dengan nama Anda. Isian tidak mengandung angka atau simbol!" pattern="(^[a-zA-Z-' ]*$)" placeholder="Joko Widodo" required>
            </div>
            <!-- Password -->
            <div class="form-group mb-4">
                <label for="identitas_password" class="form-label fw-bold">Kata Sandi</label>
                <input type="password" name="identitas_password" class="form-control shadow-none text-secondary fw-bold rounded-0 border-top-0 border-start-0 border-end-0 border-warning border-2" minlength="8" title="Minimal delapan karakter!" required>
            </div>
            <!-- Tanggal Lahir -->
            <div class="form-group mb-4">
                <label for="identitas_tanggal_lahir" class="form-label fw-bold">Tanggal Lahir</label>
                <input type="date" max="<?php echo (date('Y')-16) ?>-01-01" name="identitas_tanggal_lahir" class="form-control shadow-none text-secondary fw-bold rounded-0 border-top-0 border-start-0 border-end-0 border-warning border-2" required>
            </div>
            <!-- Jenis Kelamin -->
            <label for="identitas_gender" class="form-label fw-bold">Jenis Kelamin</label>
            <div class="form-group fw-bold mb-4 text-secondary">
                <div class="form-check form-check-inline">
                    <input type="radio" name="identitas_gender" class="form-check-input" value="0" required>
                    <label class="form-check-label" for="0">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" name="identitas_gender" class="form-check-input" value="1">
                    <label class="form-check-label" for="1">Perempuan</label>
                </div>
            </div>
            <!-- Prodi -->
            <div class="form-group mb-4">
                <label for="identitas_prodi" class="form-label fw-bold">Program Studi</label>
                <select class="form-select text-secondary fw-bold" name="identitas_prodi" required>
                    <option value="te">D3 Teknik Elektro</option>
                    <option value="ti">D3 Teknik Informatika</option>
                    <option value="tm">D3 Teknik Mesin</option>
                    <option value="tf">D3 Teknik Fisika</option>
                    <option value="tk">D3 Teknik Kimia</option>
                </select>
            </div>
            <!-- Keterangan -->
            <div class="form-group mb-4">
                <label for="identitas_keterangan" class="form-label fw-bold">Keterangan</label>
                <textarea name="identitas_keterangan" class="form-control shadow-none text-secondary fw-bold rounded-0 border-top-0 border-start-0 border-end-0 border-warning border-2"></textarea>
            </div>
            <!-- Kewarganegaraan -->
            <div class="form-check form-check-inline mb-4">
                <input class="form-check-input shadow-none" type="checkbox" name="identitas_citizenship" value="1">
                <label class="form-check-label text-secondary fw-bold" for="identitas_citizenship">Saya warga negara Indonesia</label>
            </div>
            <!-- Status -->
            <input type="hidden" name="identitas_status" value="1">
            <div class="form-group">
                <button class="btn btn-danger fw-bold" type="input" name="submit">Daftar</button>
            </div>
        </form>
    </section>
</main>