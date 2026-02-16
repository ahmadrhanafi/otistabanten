<div class="modal-header">
    <h5 class="modal-title">Edit <?= ($dosen->Tipe == 1) ? "Dosen" : "Staff" ?></h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<form action="<?= base_url('admin/DosenStaff/update'); ?>" method="post" enctype="multipart/form-data">
    <div class="modal-body">
        <div class="row">
            <input type="hidden" name="id" value="<?= $dosen->DosenID ?>">
            <input type="hidden" name="img_old" value="<?= $dosen->Img ?>">

            <div class="col-md-12">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" value="<?= $dosen->Name ?>" name="nama" placeholder="Nama Lengkap" required>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label>Jabatan</label>
                    <input type="text" class="form-control" value="<?= $dosen->Title ?>" name="jabatan" placeholder="Jabatan/Gelar" required>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label>Tipe Personel</label>
                    <select name="tipe" required class="form-control">
                        <option value="1" <?= ($dosen->Tipe == 1) ? "selected" : "" ?>>Dosen</option>
                        <option value="2" <?= ($dosen->Tipe == 2) ? "selected" : "" ?>>Staff</option>
                    </select>
                </div>
            </div>

            <div class="col-md-12">
                <label>Foto Profil</label>
                <div class="row align-items-center">
                    <div class="col-md-4 text-center">
                        <img src="<?= base_url('assets_admin/dist/img/dosen/') . $dosen->Img ?>"
                            class="img-thumbnail img-preview"
                            style="width: 120px; height: 120px; object-fit: cover;">
                    </div>
                    <div class="col-md-8">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="editImage" name="image" accept="image/*">
                            <label class="custom-file-label" for="editImage">Ganti foto...</label>
                        </div>
                        <small class="text-muted mt-2 d-block">*Biarkan kosong jika tidak ingin mengubah foto.</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary shadow-sm">Simpan Perubahan</button>
    </div>
</form>

<script>
    $(document).ready(function() {
        $('.custom-file-input').on('change', function() {
            let input = this;
            let label = $(this).next('.custom-file-label');

            if (input.files && input.files[0]) {
                let reader = new FileReader();

                reader.onload = function(e) {
                    $('.img-preview').attr('src', e.target.result);
                    label.text(input.files[0].name);
                };

                reader.readAsDataURL(input.files[0]);
            }
        });
    });
</script>