<div class="banner-sejarah-yayasan">
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h3 class="text-header">Pendidikan Islam Anak Usia Dini</h3>
                <hr class="garis">
                <p class="text-daftar">Beranda > Program Studi > Pendidikan Islam Anak Usia Dini</p>
            </div>

        </div>
    </div>
</div>

<div class="prodi-pai">
    <div class="container">
        <div class="row row_utama">
            <div class="col-sm-4 col-md-4 col-lg-4 col-12">
                <div class="kotak">
                </div>
            </div>
            <div class="col-sm-8 col-md-8 col-lg-8 col-12">
                <h2>Program Studi</h2>
                <h3>Pendidikan Islam Anak Usia Dini</h3>
                <hr>
                <p>Profi Singkat</p>
                <p>Pendidikan Islam Anak Usia Dini memuat dua kata yang digabung menjadi satu yakni pendidikan dan agama
                    Islam.
                    Yang mana dari dua kata tersebut mempunyai makna yang berbeda-beda. Maka dari itu, pertama-tama
                    dibutuhkan pengertian yang logis terhadap pendidikan agama Islam. Apa itu pendidikan? Dan apa itu
                    agama Islam? ketika kedua kata tersebut digabung, maka akan dapat menjawab dari pertanya apa itu
                    pendidikan agama Islam?</p>

                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <button class="nav-link nav-tanda cek" id="button_visi">
                            <i class="fas fa-ribbon"></i>
                            <span>Visi & Misi</span>
                        </button>
                        <button class="nav-link nav-tanda " id="button_tujuan">
                            <i class="far fa-bookmark"></i>
                            <span>Tujuan</span>
                        </button>
                        <button class="nav-link nav-tanda" id="button_strategi">
                            <i class="far fa-star"></i>
                            <span>Strategi</span>
                        </button>
                        <button class="nav-link" id="button_pengelola">
                            <i class="far fa-user"></i>
                            <span>Pengelola</span>
                        </button>
                    </li>
                </ul>

                <div class="body">
                    <div class="isi_visi">
                        <h4>Visi Program Studi PIAUD</h4>
                        <p>Unggul dalam Pengembangan Keilmuan Pendidikan Islam Bagi Peradaban di Banten Pada Tahun 2024
                        </p>
                        <h4>Misi Program Studi PIAUD</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse aliquid similique, sequi nulla
                            sed, at accusantium nisi suscipit ex unde consequatur aliquam labore vero id maxime magni!
                            Magnam praesentium atque consequatur quas ratione quae voluptatibus cumque magni quaerat,
                            odit ipsum distinctio voluptate deserunt saepe itaque perspiciatis maiores non sequi est
                            laborum et. Quibusdam perspiciatis quis ipsam quasi commodi expedita optio amet, vero saepe
                            vel velit sunt, voluptate enim nostrum adipisci facere modi possimus et officiis est earum
                            eum in! Error velit eveniet quod, vitae eligendi illum nulla consectetur officia laboriosam
                            officiis modi dolore molestiae sit voluptatem reiciendis perspiciatis pariatur architecto?
                        </p>
                    </div>
                    <div class="isi_tujuan" style="display:none;">
                        <h4>Tujuan Pendidikan Islam Anak Usia Dini</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni minima veritatis quidem
                            maxime reiciendis rem fuga distinctio ipsam consequatur non praesentium, voluptas
                            perferendis temporibus, consequuntur iure tenetur ducimus, quo vitae.
                        </p>

                    </div>
                    <div class="isi_strategi" style="display:none;">
                        <h4>Strategi Pengembangan PIAUD</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, itaque consequuntur. Quae omnis
                            veniam consequatur, nisi nam, facilis repudiandae vero adipisci corrupti quia, nostrum nemo!
                            Harum, laborum. Magnam, omnis nemo!
                        </p>

                    </div>
                    <div class="isi_pengelola" style="display:none;">
                        <h4>Pengelola Program Studi PIAUD</h4>
                        <p>
                        </p>

                    </div>
                </div>


            </div>
        </div>
    </div>
</div>



<script>
var buttonVisi = document.getElementById("button_visi");
var buttonTujuan = document.getElementById("button_tujuan");
var buttonStrategi = document.getElementById("button_strategi");
var buttonPengelola = document.getElementById("button_pengelola");



var isiVisi = document.querySelector('.isi_visi');
var isiTujuan = document.querySelector('.isi_tujuan');
var isiStrategi = document.querySelector('.isi_strategi');
var isiPengelola = document.querySelector('.isi_pengelola');

buttonVisi.addEventListener("click", function() {
    this.classList.add('cek');
    buttonTujuan.classList.remove('cek');
    buttonStrategi.classList.remove('cek');
    buttonPengelola.classList.remove('cek');
    isiTujuan.style.display = "none";
    isiStrategi.style.display = "none";
    isiPengelola.style.display = "none";
    isiVisi.style.display = "block";
})

buttonTujuan.addEventListener("click", function() {
    this.classList.add('cek');
    buttonVisi.classList.remove('cek');
    buttonStrategi.classList.remove('cek');
    buttonPengelola.classList.remove('cek');
    isiTujuan.style.display = "block";
    isiStrategi.style.display = "none";
    isiPengelola.style.display = "none";
    isiVisi.style.display = "none";
})

buttonStrategi.addEventListener("click", function() {
    this.classList.add('cek');
    buttonTujuan.classList.remove('cek');
    buttonVisi.classList.remove('cek');
    buttonPengelola.classList.remove('cek');
    isiTujuan.style.display = "none";
    isiStrategi.style.display = "block";
    isiPengelola.style.display = "none";
    isiVisi.style.display = "none";
})

buttonPengelola.addEventListener("click", function() {
    this.classList.add('cek');
    buttonTujuan.classList.remove('cek');
    buttonStrategi.classList.remove('cek');
    buttonVisi.classList.remove('cek');
    isiTujuan.style.display = "none";
    isiStrategi.style.display = "none";
    isiPengelola.style.display = "block";
    isiVisi.style.display = "none";
})
</script>