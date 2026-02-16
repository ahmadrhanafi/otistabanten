<nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="<?= base_url('beranda') ?>">
        <img src="<?= base_url('assets/images/Logo-otista.png') ?>" alt="Logo SMK N 2 Purbalingga">
        <h1 class="no-mobile"><span class="sekolah">Sekolah Tinggi Ilmu Tarbiyah (STIT)</span><br>OTTO ISKANDAR DINANTA
            BANTEN</h1>
        <h1 class="mobile">STIT OTISTA BANTEN</h1>

    </a>

    <button class="navbar-toggler hamburger" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon" id="navbar-toggler"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto ml-auto">

            <li class="nav-item">
                <a href="#" class="nav-link dropdown-toggle" id="dropdownMenuLink" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Profil Otista
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                    <a class="dropdown-item" href="<?= base_url('sejarah-yayasan') ?>">Sejarah Yayasan</a>
                    <a class="dropdown-item" href="<?= base_url('visi-misi') ?>">Visi & Misi</a>
                    <a class="dropdown-item" href="<?= base_url('struktur-manajemen') ?>">Struktur
                        Manajemen</a>
                </div>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link dropdown-toggle" id="dropdownMenuLink" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Program Studi
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                    <a class="dropdown-item" href="<?= base_url('pendidikan-anak-usia-dini') ?>">PIAUD</a>
                    <a class="dropdown-item" href="<?= base_url('pendidikan-agama-islam') ?>">PAI</a>
                </div>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link dropdown-toggle" id="dropdownMenuLink" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Dosen & Staff
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                    <a class="dropdown-item" href="<?= base_url('dosen-program-studi') ?>">Dosen Program Studi
                    </a>
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
        <!-- <form class="form-inline my-2 my-lg-0">

            <input class="form-control sm-2" type="search" placeholder="Cari Artikel" aria-label="Search">

            <button class="btn btn-primary sm-0" type="submit">
                <i class="fas fa-search"></i>
            </button>

        </form> -->
    </div>
</nav>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const navbarToggler = document.getElementById("navbar-toggler");
        navbarToggler.addEventListener("click", function() {
            const icon = navbarToggler.querySelector("i");
            if (icon) {
                if (icon.classList.contains("fa-bars")) {
                    icon.classList.remove("fa-bars");
                    icon.classList.add("fa-times");
                } else {
                    icon.classList.remove("fa-times");
                    icon.classList.add("fa-bars");
                }
            } else {
                console.error("Unable to find the icon element");
            }
        });
    });
</script>