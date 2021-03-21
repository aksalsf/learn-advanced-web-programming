<?php 

require 'controller/db-connect.php';
require 'controller/project-id.php';
require 'view/header.php';

?>


<main class="col-md-8 mx-auto mt-5">
    <h1 class="text-center fw-bold mb-5">Data Mahasiswa</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">NIM</th>
                <th scope="col">Nama</th>
                <th scope="col">Tanggal Lahir</th>
            </tr>
        </thead>
        <?php
        
            $sql = "SELECT * FROM tb_identitas";
            $result = $conn->query($sql);
        
        ?>
        <?php if ($result->num_rows > 0): ?>
            <tbody>
                <?php while($dataMahasiswa = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $dataMahasiswa['identitas_nim']; ?></td>
                        <td><?php echo $dataMahasiswa['identitas_nama']; ?></td>
                        <td><?php echo date("j F Y", strtotime($dataMahasiswa['identitas_tanggal_lahir'])); ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        <?php endif; ?>
    </table>
</main>



<?php 

require 'view/footer.php';

?>