<style>
.kotak {
    width: 18rem;
    height: 200px;
    border-radius: 5px;
    overflow: hidden;
}

.kotak img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
</style>

<div class="banner-news-galeri">
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h3 class="text-header">Galeri STIT Otista</h3>
                <hr class="garis">
            </div>

        </div>
    </div>
</div>

<div class="galeri-foto-video">
    <div class="container">
        <div>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="personal-tab" data-toggle="tab" data-target="#personal"
                        type="button" role="tab" aria-controls="personal" aria-selected="true">
                        Foto</button>
                </li>
                <li class="nav-item" role="presentation" style="margin-left: 10px;">
                    <button class="nav-link" id="employment-tab" data-toggle="tab" data-target="#employment"
                        type="button" role="tab" aria-controls="employment" aria-selected="false">
                        Video</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="personal" role="tabpanel" aria-labelledby="personal-tab">
                    <div class="row" style="margin-top:30px;">
                        <?php  foreach($foto as $val) : ?>

                        <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                            <div class="card" style="width: 18rem;">
                                <div class="kotak">
                                    <img class="card-img-top"
                                        src="<?= base_url('assets_admin/dist/img/galeri/') . $val['GaleryImg'] ?>"
                                        alt="Card image cap">
                                    <div class="card-header">
                                    </div>


                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"><?= $val['GaleryName'] ?></h5>

                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="tab-pane fade" id="employment" role="tabpanel" aria-labelledby="employment-tab">
                    <div class="row row_video">
                        <?php foreach($video as $val) : ?>
                        <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                            <div class="video_background">
                                <iframe style="width: 100%; height: 15.5rem" src="<?= $val['VideoSrc'] ?>"
                                    allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>