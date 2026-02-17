<div class="banner-sejarah-yayasan">
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h3 class="text-header">Artikel Terbaru</h3>
                <hr class="garis">
                <p class=" text-daftar">Beranda > Berita</p>
            </div>

        </div>
    </div>
</div>



<div class="news-body">
    <div class="container">
        <div class="row">
            <?php foreach ($news as $key) : ?>

                <a href="<?= base_url('artikel/') . $key['NewsID'] ?>" style="text-decoration: none; color: inherit;">
                    <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top"
                                src="<?= base_url('assets_admin/dist/img/berita/') . $key['NewsImg'] ?>"
                                alt="Card image cap">
                            <div class="card-header">
                                <?php
                                $timestamp = strtotime($key['NewsDate']);
                                $dateTime = new DateTime();
                                $dateTime->setTimestamp($timestamp);

                                $dayName = $days[$dateTime->format('l')];
                                $monthName = $months[$dateTime->format('F')];

                                $newFormat =  $dayName . ', ' . $dateTime->format('j') . ' ' . $monthName . ' ' . $dateTime->format('Y');
                                ?>
                                <p class="jam"><i class="fas fa-calendar"></i> <?= $newFormat; ?></p>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?= $key['NewsTitle'] ?></h5>
                                <p class="card-text">
                                    <?php
                                    $body = $key['NewsBody'];

                                    echo substr($body, 0, 30) . "....";

                                    ?>

                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>

    </div>
</div>