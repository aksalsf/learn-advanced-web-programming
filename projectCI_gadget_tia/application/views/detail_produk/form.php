<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">Pemesanan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?= form_open(); ?>
        <?= form_hidden('id_transaksi', ''); ?>
        <?= form_hidden('id_ponsel', set_value('id_ponsel', $ponsel['id_ponsel'])); ?>
        <div class="form-group mb-3">
            <?= form_label('Nama Lengkap', 'nama_pembeli', ['class' => 'fw-bold mb-2']) ?>
            <?= form_error('nama_pembeli'); ?>
            <?= form_input('nama_pembeli', set_value('nama_pembeli'), ['class' => 'form-control shadow-none']); ?>
        </div>
        <div class="form-group mb-3">
            <?= form_label('Alamat', 'alamat_pembeli', ['class' => 'fw-bold mb-2']) ?>
            <?= form_error('alamat_pembeli'); ?>
            <?= form_textarea(['name' => 'alamat_pembeli', 'rows' => 3, 'class' => 'form-control shadow-none'], set_value('alamat_pembeli')); ?>
        </div>
        <div class="form-group mb-3">
            <?= form_label('WhatsApp', 'wa_pembeli', ['class' => 'fw-bold mb-2']) ?>
            <?= form_error('wa_pembeli'); ?>
            <?= form_input(['name' => 'wa_pembeli', 'type' => 'tel', 'class' => 'form-control shadow-none'], set_value('wa_pembeli'), ['placeholder' => 'Contoh: 089691783679']); ?>
        </div>
        <div class="form-group mb-3">
            <?= form_label('Jumlah', 'kuantitas', ['class' => 'fw-bold mb-2']) ?>
            <?= form_error('kuantitas'); ?>
            <?= form_input(['name' => 'kuantitas', 'type' => 'number', 'class' => 'form-control shadow-none'], set_value('kuantitas')); ?>
        </div>
        <div class="d-flex justify-content-end">
          <?= form_hidden('harga', set_value('harga', $ponsel['harga'])); ?>
          <?= form_hidden('total', set_value('total', '')); ?>
          <?= form_hidden('status', set_value('status', '')); ?>
          <?= form_submit('submit', 'Beli', ['class' => 'btn btn-primary']) ?>
        </div>
      </div>
    </div>
  </div>
</div>