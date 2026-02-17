<nav class="navbar navbar-expand-lg navbar-dark fixed-top main-navigation">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="<?= base_url('beranda') ?>">
            <img src="<?= base_url('assets/images/Logo-otista.png') ?>" alt="Logo STIT Otto Iskandardinata" class="logo-img">
            <div class="brand-text ml-2">
                <div class="desktop-brand d-none d-lg-block">
                    <span class="sub-title">Sekolah Tinggi Ilmu Tarbiyah (STIT)</span>
                    <h1 class="main-title">OTTO ISKANDARDINATA BANTEN</h1>
                </div>
                <div class="mobile-brand d-block d-lg-none">
                    <h1 class="main-title">STIT OTISTA BANTEN</h1>
                </div>
            </div>
        </a>

        <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="profilDrop" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Profil Otista
                    </a>
                    <div class="dropdown-menu border-0 shadow-sm" aria-labelledby="profilDrop">
                        <a class="dropdown-item" href="<?= base_url('sejarah-yayasan') ?>">Sejarah Yayasan</a>
                        <a class="dropdown-item" href="<?= base_url('visi-misi') ?>">Visi & Misi</a>
                        <a class="dropdown-item" href="<?= base_url('struktur-manajemen') ?>">Struktur Manajemen</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="profilDrop" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Program Studi
                    </a>
                    <div class="dropdown-menu border-0 shadow-sm" aria-labelledby="profilDrop">
                        <a class="dropdown-item" href="<?= base_url('pendidikan-agama-islam') ?>">PAI</a>
                        <a class="dropdown-item" href="<?= base_url('pendidikan-anak-usia-dini') ?>">PIAUD</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="profilDrop" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dosen & Staff
                    </a>
                    <div class="dropdown-menu border-0 shadow-sm" aria-labelledby="profilDrop">
                        <a class="dropdown-item" href="<?= base_url('dosen-program-studi') ?>">Dosen</a>
                        <a class="dropdown-item" href="<?= base_url('staff-otista') ?>">Staff</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('news') ?>">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('galeri') ?>">Galeri</a>
                </li>
            </ul>
        </div>
    </div>
</nav>