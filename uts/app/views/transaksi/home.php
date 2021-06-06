<div class="container-fluid d-flex flex-column" style="height: 100vh">
	<div class="col-md-6 card p-5 mx-auto mt-3">
		<h1 class="text-center fw-bold">
			<?= $data['title']; ?>
		</h1><hr>
		<?php foreach ($data['dataUser'] as $key => $beli): ?>
		<div class="alert alert-success d-flex justify-content-between">
			<h6 class="mb-0"><?= $beli['nama_pembeli']?></h6>
			<div class="d-flex">
				<a href="<?= BASEURL; ?>/transaksi/detail/<?= $beli['id_transaksi'] ?>" class="badge bg-warning rounded-pill text-decoration-none text-white">Detail</a>
				<a href="<?= BASEURL; ?>/transaksi/status/<?= $beli['id_transaksi'] ?>" class="badge bg-info rounded-pill text-decoration-none text-white ms-1">Ubah Status</a>
			</div>
		</div>
		<?php endforeach ?>
	</div>	
</div>