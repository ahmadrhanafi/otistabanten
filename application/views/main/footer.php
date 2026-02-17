<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-12 footer-contact-info mb-4">
                <div class="footer-brand-wrapper d-flex align-items-center mb-3">
                    <img src="<?= base_url('assets/images/Logo-otista.png') ?>" alt="Logo STIT Otista" class="footer-logo">
                    <div class="brand-text ml-3">
                        <span class="college-name-sub">Sekolah Tinggi Ilmu Tarbiyah (STIT)</span>
                        <h4 class="college-name-main">OTTO ISKANDARDINATA BANTEN</h4>
                    </div>
                </div>
                <p class="footer-description mb-4">
                    Mencetak generasi pendidik yang unggul, profesional, dan berintegritas tinggi berdasarkan nilai-nilai keislaman.
                </p>
                <div class="contact-details">
                    <a href="https://www.google.com/maps/search/?api=1&query=STIT+Otista+Serpong" target="_blank" class="d-flex mb-3 text-decoration-none text-white">
                        <div class="d-flex">
                            <i class="fas fa-map-marker-alt footer-icon" style="width: 20px; height: 20px;"></i>
                            <span> &nbsp;Jl. Raya Puspitek-Serpong Gg. Salem III, Serpong, Kota Tangerang Selatan</span>
                        </div>
                    </a>

                    <a href="mailto:otistabanten@gmail.com" class="d-flex mb-3 text-decoration-none text-white">
                        <div class="d-flex">
                            <i class="fas fa-envelope footer-icon"></i>
                            <span> &nbsp;otistabanten@gmail.com</span>
                        </div>
                    </a>

                    <a href="https://wa.me/6281282097569" target="_blank" class="d-flex text-decoration-none text-white">
                        <div class="d-flex">
                            <i class="fas fa-phone-alt footer-icon"></i>
                            <span> &nbsp;0812-8209-7569</span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12 mb-4">
                <h5 class="footer-title">Tautan Cepat</h5>
                <ul class="footer-links">
                    <li><a href="<?= base_url('sejarah-yayasan') ?>">Sejarah Yayasan</a></li>
                    <li><a href="<?= base_url('visi-misi') ?>">Visi & Misi</a></li>
                    <li><a href="<?= base_url('struktur-manajemen') ?>">Struktur Manajemen</a></li>
                    <li><a href="<?= base_url('news') ?>">Berita Terbaru</a></li>
                    <li><a href="<?= base_url('galeri') ?>">Galeri Foto & Video</a></li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <h5 class="footer-title">Program Studi</h5>
                <ul class="footer-links mb-4">
                    <li><a href="<?= base_url('pendidikan-anak-usia-dini') ?>">Pendidikan Islam Anak Usia Dini (PIAUD)</a></li>
                    <li><a href="<?= base_url('pendidikan-agama-islam') ?>">Pendidikan Agama Islam (PAI)</a></li>
                </ul>

                <h5 class="footer-title">Media Sosial</h5>
                <div class="footer-social-icons">
                    <a href="#" class="social-btn wa"
                        onclick="redirectToWhatsApp('6281282097569', 'Halo, saya ingin bertanya seputar STIT Otista Banten?')"
                        target="_blank" class="icon-footer wat">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <a href="https://www.facebook.com/stitotistabanten" class="social-btn fb"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/stitotistabanten" class="social-btn ig"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.youtube.com/@stitotista" class="social-btn yt"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 text-center">
                    <p class="mb-0">&copy; 2026 <strong>STIT OTTO ISKANDARDINATA BANTEN</strong>. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="<?= base_url('assets/js/script.js') ?>"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>

<script>
    function redirectToWhatsApp(phoneNumber, message) {
        var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);

        // Encode message to make it URL-safe
        var encodedMessage = encodeURIComponent(message);

        if (isMobile) {
            // Perangkat seluler, arahkan ke aplikasi WhatsApp jika tersedia
            window.location.href = 'whatsapp://send?phone=' + phoneNumber + '&text=' + encodedMessage;
        } else {
            // Perangkat desktop, arahkan ke WhatsApp Web
            window.open('https://web.whatsapp.com/send?phone=' + phoneNumber + '&text=' + encodedMessage, '_blank');
        }
    }
</script>

</body>


</html>