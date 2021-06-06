<section class="col-10 border border-light rounded p-5">
    <h1 class="text-white">Halo, <?= $username ?></h1>
    <hr class="bg-light">
    <div class="row">
        <div class="col-3 mb-4">
            <div class="col-12 border border-light rounded text-white p-3">
                <h3 class="fs-6 mb-0 mb-3">#OrderanBaru</h3>
                <hr>
                <span class="display-5 fw-bold">
                    <?= $orderan_baru ?>
                </span>
                <sup class="badge alert-<?= ($orderan_baru > $orderan_kemarin) ? 'success' : 'danger'; ?>">
                    <?php if($orderan_baru > $orderan_kemarin) echo '+'; ?>
                    <?= $orderan_baru - $orderan_kemarin; ?>
                </sup>
            </div>
        </div>
        <div class="col mb-4">
            <div class="col-12 border border-light rounded text-white p-3">
                <h3 class="fs-6 mb-0 mb-3">#PerluDiproses</h3>
                <hr>
                <span class="display-5 fw-bold">
                    <?= $proses ?>
                </span>
            </div>
        </div>
        <div class="col mb-4">
            <div class="col-12 border border-light rounded text-white p-3">
                <h3 class="fs-6 mb-0 mb-3">#MenungguPembayaran</h3>
                <hr>
                <span class="display-5 fw-bold">
                    <?= $tunggu_bayar ?>
                </span>
            </div>
        </div>
        <div class="col mb-4">
            <div class="col-12 border border-light rounded text-white p-3">
                <h3 class="fs-6 mb-0 mb-3">#ProsesPengiriman</h3>
                <hr>
                <span class="display-5 fw-bold">
                    <?= $dikirim ?>
                </span>
            </div>
        </div>
        <div class="col mb-4">
            <div class="col-12 border border-light rounded text-white p-3">
                <h3 class="fs-6 mb-0 mb-3">#BulanIni</h3>
                <hr>
                <sup>IDR</sup>
                <span class="display-5 fw-bold">
                    <?= ($pendapatan_bulan_ini/1000000).'JT' ?>
                </span>
                <sup class="badge alert-<?= ($pendapatan_bulan_ini > $pendapatan_bulan_lalu) ? 'success' : 'danger'; ?>">
                    <?php if($pendapatan_bulan_ini > $pendapatan_bulan_lalu) echo '+'; ?>
                    <?= (($pendapatan_bulan_ini - $pendapatan_bulan_lalu)/1000000) . 'JT'; ?>
                </sup>
            </div>
        </div>
        <div class="col">
            <div class="col-12 border border-light rounded text-white p-3">
                <h3 class="fs-6 mb-0 mb-3">#PalingLaris</h3>
                <hr>
                <span class="fs-1 fw-bold">
                    <?= $paling_laris ?>
                </span>
            </div>
        </div>
    </div>
</section>
</main>