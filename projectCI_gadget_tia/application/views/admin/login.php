<main class="min-vh-100 bg-dark container-fluid d-flex flex-column align-items-center justify-content-center">
    <?php if($this->session->flashdata('login_message')): ?>
    <div class="col-4 mx-auto">
        <?= $this->session->flashdata('login_message'); ?>
    </div>
    <?php endif; ?>
    <form method="POST" class="col-4 mx-auto border border-light p-5 rounded">
        <h1 class="text-white text-center">Login</h1>
        <hr class="bg-light">
        <div class="input-group <?= (validation_errors()) ? 'mb-1' : 'mb-3'; ?>">
            <span class="input-group-text bg-transparent text-white">
                <i class="bi bi-at"></i>
            </span>
            <?= form_input('email', set_value('email'), ['class' => 'form-control shadow-none bg-transparent text-light py-2 px-4', 'placeholder' => 'Isi dengan email Anda 😊']) ?>
        </div>
        <?= form_error('email', '<small class="text-danger d-block mb-3">*', '</small>') ?>
        <div class="input-group <?= (validation_errors()) ? 'mb-1' : 'mb-3'; ?>">
            <span class="input-group-text bg-transparent text-white">
                <i class="bi bi-key"></i>
            </span>
            <?= form_password('password', set_value('password'), ['class' => 'form-control shadow-none bg-transparent text-light py-2 px-4', 'placeholder' => 'Kata sandi']) ?>
        </div>
        <?= form_error('password', '<small class="text-danger d-block mb-3">*', '</small>') ?>
        <?= form_submit('Login', 'Login', ['class' => 'col-12 text-center btn btn-primary']) ?>
    </form>
</main>