<div class="container-fluid d-flex">
    <div class="col-md-6 card p-5 mx-auto mt-3">
        <!-- 
            merah => danger
            biru => primary, info
            kuning => warning
            hijau => success
            hitam => dark
         -->
        <h1 class="text-center fw-bold">
            <?= $data['title']; ?>
        </h1>
        <hr>
        <?php $data['form'] -> cetakForm(); ?>
    </div>
</div>