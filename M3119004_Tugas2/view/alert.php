<?php if(session_status() === PHP_SESSION_NONE): ?>
<?php session_start(); ?>
<?php if(isset($_SESSION['isSuccess'])): ?>
<?php if($_SESSION['isSuccess'] == true): ?>
<div class="p-3 fixed-top">
    <div class="alert alert-success" role="alert">
        Pendaftaran berhasil. Selamat datang, <?php echo $_SESSION['username']; ?>!
    </div>
</div>
<?php else: ?>
<div class="p-3 fixed-top">
    <div class="alert alert-danger" role="alert">
        Pendaftaran gagal! <?php echo $_SESSION['errorMessage']; ?>
    </div>
</div>
<?php endif; ?>
<?php endif; ?>
<?php session_destroy(); ?>
<?php endif; ?>