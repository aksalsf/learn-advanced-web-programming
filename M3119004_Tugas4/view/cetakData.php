<?php
	require 'controller/cetakData.php';
?>

<div class="table-responsive">
    <table class="table table-borderless" style="border-collapse:separate; 
  border-spacing: 0 1em;">
        <thead class="bg-danger bg-gradient text-white">
            <tr style="height:56px;" class="align-middle">
                <th scope="col" class="rounded-start">Email</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col" class="rounded-end">Prodi</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_object($result)): ?>
            <tr class="table-warning align-middle" style="height:56px;">
                <td class="rounded-start">
                    <?= $row->email ?>
                </td>
                <td>
                    <?= $row->nama ?>
                </td>
                <td>
                    <?php
					switch ($row->gender) {
						case 'L':
							echo 'Cowok';
							break;

						default:
							echo 'Cewek';
							break;
					}
					 ?>
                </td>
                <td class="rounded-end">
                    <?= $row->prodi ?>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>