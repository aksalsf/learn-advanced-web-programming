<main class="d-md-flex">
    <section class="col-md-6 d-flex align-items-center bg-danger p-md-5 p-3">
        <img src="img/img-01.png" class="img-fluid">
    </section>
    <section class="col-md-6 p-md-5 p-3">
        <h1 class="text-danger fw-bold">Daftar</h1>
        <p class="text-secondary lead">Nikmati fitur kami, sepuasnya!</p>
        <form action="<?php echo $formAction; ?>" method="post" class="text-danger mt-4">
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
            <div class="form-group">
                <button class="btn btn-danger fw-bold" type="input" name="submit">Daftar</button>
            </div>
        </form>
    </section>
</main>