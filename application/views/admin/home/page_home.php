<style>
    /* Custom Styling untuk Dashboard */
    .dashboard-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: none !important;
        border-radius: 15px !important;
        overflow: hidden;
    }

    .dashboard-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1) !important;
    }

    .small-box .icon {
        top: 15px !important;
        right: 20px !important;
        transition: all 0.3s linear;
    }

    .dashboard-card:hover .icon {
        font-size: 80px !important;
        opacity: 0.3;
    }

    .card-footer-custom {
        background: rgba(0, 0, 0, 0.02) !important;
        border-top: 1px solid rgba(0, 0, 0, 0.05) !important;
        font-size: 0.9rem;
        font-weight: 600;
        padding: 12px !important;
        display: block;
        text-align: center;
        transition: background 0.3s;
    }

    .card-footer-custom:hover {
        background: rgba(0, 0, 0, 0.05) !important;
        text-decoration: none;
    }

    /* Badge untuk pengumuman */
    .announcement-badge {
        background: #e7f3ff;
        color: #007bff;
        padding: 5px 15px;
        border-radius: 50px;
        font-size: 12px;
        font-weight: 600;
    }
</style>

<div class="content-wrapper" style="overflow-x: hidden; background-color: #f4f6f9;">
    <section class="content-header py-4">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-6 text-center text-sm-left">
                    <h1 class="font-weight-bold text-dark" style="letter-spacing: -1px;">Selamat Datang, Admin</h1>
                    <p class="text-muted">Ringkasan aktivitas website STIT Otista hari ini.</p>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right bg-transparent p-0 justify-content-center">
                        <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-white dashboard-card shadow-sm border-left border-primary" style="border-left: 5px solid #007bff !important;">
                        <div class="inner p-4">
                            <p class="text-muted mb-1 text-uppercase font-weight-bold" style="font-size: 11px;">Total Berita</p>
                            <h3 class="font-weight-bold text-dark">12</h3>
                        </div>
                        <div class="icon">
                            <i class="fas fa-newspaper text-primary opacity-25"></i>
                        </div>
                        <a href="<?= base_url('admin-berita') ?>" class="card-footer-custom text-primary">
                            Kelola Berita <i class="fas fa-chevron-circle-right ml-1"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-white dashboard-card shadow-sm border-left border-success" style="border-left: 5px solid #28a745 !important;">
                        <div class="inner p-4">
                            <p class="text-muted mb-1 text-uppercase font-weight-bold" style="font-size: 11px;">Foto Galeri</p>
                            <h3 class="font-weight-bold text-dark">45</h3>
                        </div>
                        <div class="icon">
                            <i class="fas fa-images text-success"></i>
                        </div>
                        <a href="<?= base_url('admin-galeri') ?>" class="card-footer-custom text-success">
                            Lihat Galeri <i class="fas fa-chevron-circle-right ml-1"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-white dashboard-card shadow-sm border-left border-warning" style="border-left: 5px solid #ffc107 !important;">
                        <div class="inner p-4">
                            <p class="text-muted mb-1 text-uppercase font-weight-bold" style="font-size: 11px;">Dosen & Staff</p>
                            <h3 class="font-weight-bold text-dark">28</h3>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users text-warning"></i>
                        </div>
                        <a href="<?= base_url('admin-dosen-staff') ?>" class="card-footer-custom text-warning">
                            Detail Personel <i class="fas fa-chevron-circle-right ml-1"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-white dashboard-card shadow-sm border-left border-danger" style="border-left: 5px solid #dc3545 !important;">
                        <div class="inner p-4">
                            <p class="text-muted mb-1 text-uppercase font-weight-bold" style="font-size: 11px;">Admin Sistem</p>
                            <h3 class="font-weight-bold text-dark">2</h3>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-shield text-danger"></i>
                        </div>
                        <a href="#" class="card-footer-custom text-danger">
                            Keamanan <i class="fas fa-lock ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="card border-0 shadow-sm" style="border-radius: 15px;">
                        <div class="card-header bg-white border-0 pt-4 px-4">
                            <h3 class="card-title font-weight-bold">
                                <span class="announcement-badge mr-2"><i class="fas fa-bullhorn"></i> TIPS</span>
                                Pengumuman Internal
                            </h3>
                        </div>
                        <div class="card-body px-4 pb-4">
                            <div class="alert alert-light border-0 mb-0" style="background-color: #f8f9fa; border-radius: 10px;">
                                <p class="mb-0 text-secondary">
                                    <i class="fas fa-info-circle text-primary mr-2"></i>
                                    Gunakan panel ini untuk mengelola konten website resmi <strong>STIT Otista Banten</strong>.
                                    Pastikan setiap gambar yang diupload untuk berita memiliki ukuran maksimal <strong>2MB</strong> dan format <strong>.jpg / .png</strong> untuk menjaga performa loading website.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>