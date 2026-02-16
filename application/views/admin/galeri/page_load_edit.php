<?php if ($tipe == 'poto') : ?>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="font-weight-bold">Nama Foto</label>
                <input type="text" class="form-control" value="<?= $galeri->GaleryName ?>" name="nama" placeholder="Masukkan nama foto..." required>
                <input type="hidden" name="tipe" value="poto">
                <input type="hidden" name="id" value="<?= $galeri->GaleryID ?>">
                <input type="hidden" name="img_old" value="<?= $galeri->GaleryImg ?>">
            </div>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-md-12">
            <label class="font-weight-bold">Gambar Galeri</label>
            <div class="d-flex align-items-start border p-3 rounded bg-light">
                <div class="mr-3 text-center">
                    <small class="text-muted d-block mb-1">Preview:</small>
                    <img id="preview_edit_galeri"
                        src="<?= base_url('assets_admin/dist/img/galeri/') . $galeri->GaleryImg ?>"
                        class="img-thumbnail shadow-sm"
                        style="width: 120px; height: 90px; object-fit: cover;">
                </div>
                <div class="flex-grow-1">
                    <small class="text-muted d-block mb-2">Ganti Gambar (Biarkan kosong jika tidak diubah):</small>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="file_galeri" name="image" accept="image/*">
                        <label class="custom-file-label" for="file_galeri">Pilih file baru...</label>
                    </div>
                    <small class="text-info mt-2 d-block" style="font-size: 11px;">
                        <i class="fas fa-info-circle"></i> Gunakan gambar dengan rasio 4:3 untuk hasil terbaik.
                    </small>
                </div>
            </div>
        </div>
    </div>

<?php else : ?>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="font-weight-bold">Video Source (Link URL)</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-danger text-white"><i class="fab fa-youtube"></i></span>
                    </div>
                    <input type="url" class="form-control" value="<?= $galeri->VideoSrc ?>" name="src" placeholder="https://www.youtube.com/watch?v=..." required>
                </div>
                <small class="text-muted mt-2 d-block">Pastikan URL valid (Youtube, Vimeo, atau link video lainnya).</small>
                <input type="hidden" name="tipe" value="video">
                <input type="hidden" name="id" value="<?= $galeri->VideoID ?>">
            </div>
        </div>
    </div>
<?php endif; ?>

<script>
    $(document).ready(function() {
        // Fungsi Preview Gambar & Update Label
        $('#file_galeri').change(function() {
            var file = this.files[0];
            if (file) {
                // Update Label Nama File
                $(this).next('.custom-file-label').html(file.name);

                // Update Gambar Preview
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#preview_edit_galeri').attr('src', e.target.result);
                }
                reader.readAsDataURL(file);
            }
        });
    });
</script>