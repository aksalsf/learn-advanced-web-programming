<div class="container-fluid d-flex flex-column" style="height: 100vh">
	<div class="col-md-8 card p-5 mx-auto mt-3">
		<h1 class="text-center fw-bold">
			<?= $data['title']; ?>
		</h1><hr>
		<div class="alert alert-info d-flex justify-content-between">
			Id Transaksi: <h6 class="mb-0"><?= $data['detailTransaksi']['id_transaksi'];?></h6>
		</div>

		<div class="alert alert-info d-flex justify-content-between">
			Nama Barang: <h6 class="mb-0"><?= $data['detailProduk']['nama'];?></h6>
		</div>

		<div class="alert alert-info d-flex justify-content-between">
			Nama Pembeli: <h6 class="mb-0"><?= $data['detailTransaksi']['nama_pembeli']?></h6>
		</div>

		<div class="alert alert-info d-flex justify-content-between">
			Alamat Pembeli: <h6 class="mb-0"><?= $data['detailTransaksi']['alamat_pembeli']?></h6>
		</div>

		<div class="alert alert-info d-flex justify-content-between">
			No Hp: <h6 class="mb-0"><?= $data['detailTransaksi']['wa_pembeli']?></h6>
		</div>

		<div class="alert alert-info d-flex justify-content-between">
			Jumlah Pembelian: <h6 class="mb-0"><?= $data['detailTransaksi']['kuantitas']?></h6>
		</div>

		<div class="alert alert-info d-flex justify-content-between">
			Total: <h6 class="mb-0">
			<?= "IDR " . number_format($data['detailTransaksi']['total'],0,',','.'); ?>
			</h6>
		</div>

		<div class="alert alert-info d-flex justify-content-between">
			Status: <h6 class="mb-0"><?= $data['detailTransaksi']['status']?></h6>
		</div>
		<a href="<?= BASEURL; ?>/transaksi" class="btn btn-outline-danger">Kembali</a>
	</div>	
</div>