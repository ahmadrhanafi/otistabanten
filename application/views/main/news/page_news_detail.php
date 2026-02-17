<div class="news-detail-container" style="margin: 60px 60px;">
    <div class="container">
        <a href="<?= base_url('news') ?>" class="btn-back">
            ← Kembali ke Berita
        </a>

        <div class="row">
            <div class="col-lg-8">
                <header class="news-header">
                    <h1 class="news-title"><?= $artikel['NewsTitle'] ?></h1>
                    <div class="news-meta">
                        <span><i class="fa fa-calendar"></i> <?= date('d M Y', strtotime($artikel['NewsDate'])) ?></span>
                        <span><i class="fa fa-user"></i> Admin STIT Otista</span>
                    </div>
                </header>

                <img src="<?= base_url('assets_admin/dist/img/berita/') . $artikel['NewsImg'] ?>"
                    alt="<?= $artikel['NewsTitle'] ?>"
                    class="news-featured-img">

                <article class="news-content">
                    <?= $artikel['NewsBody'] ?>
                </article>

                <hr class="my-5">

                <?php
                $current_page_url = current_url();
                $share_title = urlencode($artikel['NewsTitle']);
                ?>

                <div class="share-section">
                    <p class="font-weight-bold">Bagikan Berita:</p>

                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?= $current_page_url ?>"
                        target="_blank" class="btn btn-sm btn-primary">
                        <i class="fab fa-facebook"></i> Facebook
                    </a>

                    <a href="https://twitter.com/intent/tweet?text=<?= $share_title ?>&url=<?= $current_page_url ?>"
                        target="_blank" class="btn btn-sm btn-info text-white">
                        <i class="fab fa-twitter"></i> Twitter
                    </a>

                    <a href="https://api.whatsapp.com/send?text=<?= $share_title ?>%20- %20<?= $current_page_url ?>"
                        target="_blank" class="btn btn-sm btn-success">
                        <i class="fab fa-whatsapp"></i> WhatsApp
                    </a>
                </div>
            </div>

            <div class="col-lg-4">
                <h4 class="mb-3">Berita Lainnya</h4>
                <hr class="garis" style="width: 50px; margin-left: 0;">

                <?php if (!empty($sidebar_news)) : ?>
                    <?php foreach ($sidebar_news as $row) : ?>
                        <div class="card sidebar-card mb-3">
                            <div class="row no-gutters">
                                <div class="col-4">
                                    <img src="<?= base_url('assets_admin/dist/img/berita/') . $row['NewsImg'] ?>"
                                        style="width:100%; height:80px; object-fit:cover;" alt="...">
                                </div>
                                <div class="col-8">
                                    <div class="card-body p-2">
                                        <h6 class="card-title mb-1" style="font-size: 0.9rem;">
                                            <a href="<?= base_url('news/detail/') . $row['NewsID'] ?>" class="text-dark">
                                                <?= (strlen($row['NewsTitle']) > 40) ? substr($row['NewsTitle'], 0, 40) . '...' : $row['NewsTitle'] ?>
                                            </a>
                                        </h6>
                                        <small class="text-muted"><?= date('d/m/Y', strtotime($row['NewsDate'])) ?></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <p class="text-muted small">Belum ada berita lainnya.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>