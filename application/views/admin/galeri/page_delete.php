<?php if($tipe == 'poto' ) :  ?>
<p>Apakah Anda Yakin Untuk Menghapus Foto Dengan Nama : <b><?= $galeri->GaleryName; ?></b></p>
<input type="hidden" name="id" value="<?= $galeri->GaleryID ?>">
<input type="hidden" name="tipe" value="poto">
<?php else : ?>

<p>Apakah Anda Yakin Untuk Menghapus video dengan source berikut : <b><?= $galeri->VideoSrc; ?></b></p>
<input type="hidden" name="id" value="<?= $galeri->VideoID ?>">
<input type="hidden" name="tipe" value="video">
<?php endif; ?>