<h1 class="text-white"><?= $title ?></h1>
<hr class="bg-light">
<form action="<?= base_url('index.php/admin/ganti_password') ?>" method="POST">
    <input type="hidden" name="email" value="<?= $profil['email'] ?>">
    <input type="password" name="password" class="form-control">
    <br>
    <button type="submit" class="btn btn-primary">Ganti Password</button>
</form>