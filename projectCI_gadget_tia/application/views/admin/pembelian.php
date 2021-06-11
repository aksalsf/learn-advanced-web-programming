<h1 class="text-white"><?= $title ?></h1>
<hr class="bg-light">
<div class="bg-light p-4 rounded">
  <table class="table" id="tb_pembelian">
    <thead class="table-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama Pembeli</th>
        <th scope="col">Nama Ponsel</th>
        <th scope="col">Status</th>
        <th scope="col">Opsi</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1; ?>
      <?php foreach($data_pembelian as $detail_pembelian): ?>
          <tr style="vertical-align:middle">
              <td><?= $i ?></td>
              <td><?= $detail_pembelian['nama_pembeli'] ?></td>
              <td width="25%">
              <?php foreach($data_ponsel as  $detail_ponsel): ?>
                <?php 
                  if ($detail_ponsel -> id_ponsel == $detail_pembelian['id_ponsel'])
                  echo $detail_ponsel -> nama;
                ?>
              <?php endforeach; ?>
              </td>
              <td><?= $detail_pembelian['status'] ?></td>
              <td>
                <a href="#" class="btn btn-success btn-sm">
                  <i class="bi bi-eye-fill me-1"></i>Detail
                </a>
                <a href="#" class="btn btn-warning btn-sm">
                  <i class="bi bi-eye-fill me-1"></i>Ganti Status
                </a>
              </td>
          </tr>
          <?php $i++ ?>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
<script>
$(document).ready( function () {
    $('#tb_pembelian').DataTable();
} );
</script>