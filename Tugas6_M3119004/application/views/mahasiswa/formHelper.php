<div class="container-fluid p-5 min-vh-100 bg-light bg-gradient">
    <div class="d-flex">
        <div class="col-md-6 mx-auto bg-white shadow-sm rounded p-5">
            <h1 class="text-center"><?= $title; ?></h1>
            <hr>
            <?php
            
            // Pembuka Form
            echo form_open('mahasiswa/formHelper'); 

            // variabel untuk menambahkan atribut
            $labelAttribute = [
                'class' => 'fw-bold mb-2'
            ];
            $inputAttribute = [
                'class' => 'form-control shadow-none'
            ];
            $formCheckLabelAttribute = [
                'class' => 'form-check-label ms-1'
            ];
            $formCheckAttribute = [
                'class' => 'form-check-input'
            ];
            $dropdownAttribute = [
                'class' => 'form-select'
            ];
            $dropdownOptions = [
                'ti' => 'Teknik Informatika',
                'si' => 'Sistem Informasi',
                'ptik' => 'Pendidikan Teknik Informatika dan Komputer'
            ];
            $buttonAttribute = ['class' => 'btn btn-primary'];
            ?>
            <!-- Badan Form -->
            <!-- Nama [Teks] -->
            <div class="form-group mb-3">
                <?= form_label('Nama', 'nama', $labelAttribute); ?>
                <?= form_input('nama', set_value('nama'), $inputAttribute); ?>
                <?= form_error('nama', '<small class="text-danger">', '</small>') ?>
            </div>
            <!-- Password [Password] -->
            <div class="form-group mb-3">
                <?= form_label('Password', 'password', $labelAttribute); ?>
                <?= form_password('password', set_value('password'), $inputAttribute); ?>
                <?= form_error('password', '<small class="text-danger">', '</small>') ?>
            </div>
            <!-- Jenis Kelamin [Radio] -->
            <?= form_label('Jenis Kelamin', 'jenis_kelamin', $labelAttribute); ?>
            <div class="col-md-6 d-flex justify-content-between mb-3">
                <div class="form-check">
                    <?= form_radio('jenis_kelamin', 'laki-laki', false, $formCheckAttribute); ?>
                    <?= form_label('Laki-laki', 'jenis_kelamin', $formCheckLabelAttribute); ?>
                </div>
                <div class="form-check">
                    <?= form_radio('jenis_kelamin', 'perempuan', false, $formCheckAttribute); ?>
                    <?= form_label('Perempuan', 'jenis_kelamin', $formCheckLabelAttribute); ?>
                </div>
            </div>
            <?= form_error('jenis_kelamin', '<small class="text-danger mb-3">', '</small>') ?>
            <!-- Prodi [Dropdown] -->
            <div class="form-group mb-3">
                <?= form_label('Program Studi', 'prodi', $labelAttribute); ?>
                <?= form_dropdown('prodi', $dropdownOptions, set_value('prodi'), $dropdownAttribute); ?>
                <?= form_error('prodi', '<small class="text-danger">', '</small>') ?>
            </div>
            <!-- Alamat [Textarea] -->
            <?= form_label('Alamat', 'alamat', $labelAttribute); ?>
            <div class="form-floating mb-3">
                <?= form_textarea('alamat', set_value('alamat'), ['class' => 'form-control', 'style' => 'height:120px']); ?>
                <?= form_label('Alamat', 'alamat'); ?>
                <?= form_error('alamat', '<small class="text-danger">', '</small>') ?>
            </div>
            <!-- Kewarganegaraan [Checkbox] -->
            <div class="form-group mb-3">
                <?= form_checkbox('kewarganegaraan', 'wni', set_value('wni'), $formCheckAttribute); ?>
                <?= form_label('Saya warga negara Indonesia', 'kewarganegaraan', $formCheckLabelAttribute); ?>
                <?= form_error('kewarganegaraan', '<small class="text-danger">', '</small>') ?>
            </div>
            <?= form_submit('submit', 'Submit', $buttonAttribute); ?>
            <?= form_close(); ?>
        </div>        
    </div>
</div>