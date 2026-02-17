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

<div class="banner-sejarah-yayasan">
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h3 class="text-header">Galeri STIT Otista</h3>
                <hr class="garis">
                <p class=" text-daftar">Beranda > Galeri</p>
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
                        <?php if (!empty($foto)) : ?>
                            <?php foreach ($foto as $val) : ?>
                                <div class="col-12 col-sm-4 col-md-4 col-lg-4 mb-4">
                                    <div class="card" style="width: 100%;">
                                        <div class="kotak">
                                            <img class="card-img-top"
                                                src="<?= base_url('assets_admin/dist/img/galeri/') . $val['GaleryImg'] ?>"
                                                alt="<?= $val['GaleryName'] ?>">
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $val['GaleryName'] ?></h5>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <div class="col-12">
                                <div class="alert alert-light text-center py-5" style="border: 2px dashed #ddd; border-radius: 10px;">
                                    <i class="fas fa-image fa-3x text-muted mb-3"></i>
                                    <h4 class="text-muted">Belum Ada Foto</h4>
                                    <p class="text-secondary">Mohon maaf, saat ini Admin belum upload foto.</p>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="tab-pane fade" id="employment" role="tabpanel" aria-labelledby="employment-tab">
                    <div class="row row_video" style="margin-top:30px;">
                        <?php if (!empty($video)) : ?>
                            <?php foreach ($video as $val) : ?>
                                <div class="col-12 col-sm-4 col-md-4 col-lg-4 mb-4">
                                    <div class="video_background shadow-sm rounded overflow-hidden">
                                        <iframe style="width: 100%; height: 15.5rem; border: none;" src="<?= $val['VideoSrc'] ?>"
                                            allowfullscreen>
                                        </iframe>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <div class="col-12">
                                <div class="alert alert-light text-center py-5" style="border: 2px dashed #ddd; border-radius: 10px;">
                                    <i class="fas fa-video fa-3x text-muted mb-3"></i>
                                    <h4 class="text-muted">Belum Ada Video</h4>
                                    <p class="text-secondary">Mohon maaf, saat ini Admin belum upload video.</p>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>