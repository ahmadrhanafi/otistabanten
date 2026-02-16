<div class="modal-header">
    <div class="'text_header">Delete <?= ($dosen->Tipe == 1) ? "Dosen" : "Staff" ?></div>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<form action="<?php echo base_url('admin/DosenStaff/delete');?>" method="post">
    <div class="modal-body">
        <p>Apakah Anda Yakin Untuk Menghapus <?= ($dosen->Tipe == 1) ? "Dosen" : "Staff" ?> Dengan Nama :
            <b><?= $dosen->Name; ?></b>
        </p>
        <input type="hidden" name="id" value="<?= $dosen->DosenID ?>">
        <input type="hidden" name="img_old" value="<?= $dosen->Img ?>">
        <input type="hidden" name="tipe" value="<?= $dosen->Tipe ?>">
    </div>
    <div class="modal-footer">
        <button class="btn btn-sm btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-sm btn-primary" id="btn">Save</button></a>
        </d iv>
</form>