<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            <label><i class="fas fa-heading mr-1"></i> Judul Berita</label>
            <input type="text" class="form-control" value="<?= $berita->NewsTitle ?>" name="judul" required>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label><i class="fas fa-calendar-alt mr-1"></i> Tanggal</label>
            <input type="date" class="form-control" value="<?= $berita->NewsDate ?>" name="tanggal" required>
            <input type="hidden" name="id" value="<?= $berita->NewsID ?>">
            <input type="hidden" name="img_old" value="<?= $berita->NewsImg ?>">
        </div>
    </div>
</div>

<div class="row mt-2">
    <div class="col-md-12">
        <label><i class="fas fa-edit mr-1"></i> Isi Berita</label>
        <textarea class="summernote_edit" name="isi_berita"><?= $berita->NewsBody ?></textarea>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-12">
        <label><i class="fas fa-image mr-1"></i> Gambar Sampul</label>
        <div class="d-flex align-items-start border p-3 rounded bg-light">
            <div class="mr-3 text-center">
                <small class="text-muted d-block mb-2">Preview Saat Ini:</small>
                <img id="preview_edit" style="width: 120px; height: 80px; object-fit: cover;"
                    src="<?= base_url('assets_admin/dist/img/berita/') . $berita->NewsImg ?>"
                    class="img-thumbnail shadow-sm">
            </div>
            <div class="flex-grow-1">
                <small class="text-muted d-block mb-2">Ganti Gambar (Kosongkan jika tidak diubah):</small>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="file_edit" name="image" accept="image/*">
                    <label class="custom-file-label" for="file_edit">Pilih file...</label>
                </div>
                <small class="text-danger mt-1 d-block" style="font-size: 11px;">*Format: JPG/PNG, Max 2MB</small>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.summernote_edit').summernote({
            height: 250,
            placeholder: 'Tulis isi berita di sini...',
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });

        $('#file_edit').change(function() {
            var file = this.files[0];
            if (file) {
                $(this).next('.custom-file-label').html(file.name);

                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#preview_edit').attr('src', e.target.result);
                }
                reader.readAsDataURL(file);
            }
        });
    });
</script>