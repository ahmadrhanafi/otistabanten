<div class="banner-sejarah-yayasan">
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h3 class="text-header">Staff STIT Otista</h3>
                <hr class="garis">
                <p class=" text-daftar">Beranda > Staff STIT Otista</p>
            </div>

        </div>
    </div>
</div>

<div class="dosen">
    <div class="container">
        <div class="row">
            <?php foreach($staff as $val): ?>

            <div class="col-sm-6 col-md-6 col-lg-6 col-12">
                <div class="background_card">
                    <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-4 col-6">
                            <div class="kotak_img">
                                <img src="<?= base_url('assets_admin/dist/img/dosen/'). $val['Img'] ?>" alt="">
                            </div>
                        </div>
                        <div class="col-sm-8 col-md-8 col-lg-8 col-12">
                            <h4><?= $val['Title'] ?></h4>
                            <p><?= $val['Name'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>


    </div>
</div>
