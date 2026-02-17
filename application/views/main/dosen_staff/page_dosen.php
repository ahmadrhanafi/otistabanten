<div class="banner-sejarah-yayasan">
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h3 class="text-header">Dosen Program Studi</h3>
                <hr class="garis">
                <p class="text-daftar">Beranda > Dosen Program Studi</p>
            </div>
        </div>
    </div>
</div>

<div class="dosen">
    <div class="container">
        <div class="row">
            <?php if (!empty($dosen)) : ?>
                <?php foreach ($dosen as $val) : ?>
                    <div class="col-sm-6 col-md-6 col-lg-6 col-12 mb-4">
                        <div class="background_card">
                            <div class="row align-items-center">
                                <div class="col-sm-4 col-md-4 col-lg-4 col-6">
                                    <div class="kotak_img">
                                        <img src="<?= base_url('assets_admin/dist/img/dosen/') . $val['DosenImg'] ?>"
                                            alt="<?= $val['DosenName'] ?>"
                                            style="width: 100%; border-radius: 5px;">
                                    </div>
                                </div>
                                <div class="col-sm-8 col-md-8 col-lg-8 col-12">
                                    <h4 style="font-size: 1.1rem; margin-bottom: 5px;"><?= $val['DosenJabatan'] ?></h4>
                                    <p style="color: #666;"><?= $val['DosenName'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            <?php else : ?>
                <div class="col-12">
                    <div class="alert alert-light text-center py-5" style="border: 2px dashed #ddd; border-radius: 10px;">
                        <i class="fas fa-user-tie fa-3x text-muted mb-3"></i>
                        <h4 class="text-muted">Data Dosen Belum Tersedia</h4>
                        <p class="text-secondary">Mohon maaf, daftar dosen program studi saat ini sedang dalam proses pembaharuan.</p>
                    </div>
                </div>
            <?php endif; ?>

        </div>
    </div>
</div>