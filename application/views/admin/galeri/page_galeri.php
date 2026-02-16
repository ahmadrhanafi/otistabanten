<style>
    /* 1. Kontainer Gambar di Tabel */
    .kotak {
        width: 80px;
        height: 60px;
        border-radius: 6px;
        overflow: hidden;
        margin: auto;
        border: 1px solid #ddd;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .kotak img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* 2. Alert Melayang (Agar tidak dorong konten) */
    .alert-floating {
        position: fixed;
        top: 20px;
        right: 20px;
        z-index: 9999;
        min-width: 250px;
        border: none;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }

    /* 3. Styling Tabel */
    .table thead th {
        background-color: #f8f9fa;
        vertical-align: middle !important;
        text-align: center;
    }

    .table td {
        vertical-align: middle !important;
    }
</style>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="font-weight-bold text-dark">Manajemen Galeri</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Galeri</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <?php if ($this->session->flashdata('success_poto') || $this->session->flashdata('success_video')) : ?>
        <div class="alert alert-success alert-floating animate__animated animate__fadeInRight">
            <i class="fas fa-check-circle mr-2"></i>
            <?= $this->session->flashdata('success_poto') ?: $this->session->flashdata('success_video') ?>
        </div>
    <?php endif; ?>

    <section class="content">
        <div class="container-fluid">
            <div class="card card-outline card-primary">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="card-title"><i class="fas fa-image mr-1"></i> Daftar Foto</h3>
                    <div class="ml-auto">
                        <button type="button" data-toggle="modal" data-target="#modal_add_foto" class="btn btn-primary btn-sm">
                            <i class="fas fa-plus mr-1"></i> Tambah Foto
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th width="5%">No</th>
                                <th width="20%">Gambar</th>
                                <th>Judul/Nama Foto</th>
                                <th width="15%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($poto->result_array() as $key) : ?>
                                <tr>
                                    <td class="text-center"><?= $no++ ?></td>
                                    <td>
                                        <div class="kotak">
                                            <img src="<?= base_url('assets_admin/dist/img/galeri/') . $key['GaleryImg'] ?>">
                                        </div>
                                    </td>
                                    <td><?= $key['GaleryName'] ?></td>
                                    <td class="text-center">
                                        <button onclick="edit_galery('<?= $key['GaleryID'] ?>', 'poto')" data-toggle="modal" data-target="#modal_edit_galeri" class="btn btn-sm btn-warning text-white"><i class="fas fa-edit"></i></button>
                                        <button onclick="delete_galeri('<?= $key['GaleryID'] ?>', 'poto')" data-toggle="modal" data-target="#modal_delete_galeri" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <section class="content mt-4">
        <div class="container-fluid">
            <div class="card card-outline card-danger">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="card-title"><i class="fas fa-video mr-1"></i> Daftar Video</h3>
                    <div class="ml-auto">
                        <button type="button" data-toggle="modal" data-target="#modal_add_video" class="btn btn-danger btn-sm">
                            <i class="fas fa-plus mr-1"></i> Tambah Video
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <table id="example3" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th width="5%">No</th>
                                <th>Source URL</th>
                                <th width="15%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($video->result_array() as $key) : ?>
                                <tr>
                                    <td class="text-center"><?= $no++ ?></td>
                                    <td><a href="<?= $key['VideoSrc'] ?>" target="_blank" class="text-primary font-weight-bold"><?= $key['VideoSrc'] ?> <i class="fas fa-external-link-alt ml-1"></i></a></td>
                                    <td class="text-center">
                                        <button onclick="edit_galery('<?= $key['VideoID'] ?>', 'video')" data-toggle="modal" data-target="#modal_edit_galeri" class="btn btn-sm btn-warning text-white"><i class="fas fa-edit"></i></button>
                                        <button onclick="delete_galeri('<?= $key['VideoID'] ?>', 'video')" data-toggle="modal" data-target="#modal_delete_galeri" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="modal fade" id="modal_add_foto" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">Tambah Koleksi Foto</h5>
                <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
            </div>
            <form action="<?= base_url('admin/Galeri/create'); ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Judul Foto</label>
                        <input type="text" class="form-control" name="nama" placeholder="Contoh: Kegiatan Sosialisasi..." required>
                        <input type="hidden" name="tipe" value="poto">
                    </div>
                    <div class="row align-items-center mt-3">
                        <div class="col-md-4 text-center">
                            <img id="preview_foto" src="https://via.placeholder.com/150?text=Preview" class="img-thumbnail" style="max-height: 150px;">
                        </div>
                        <div class="col-md-8">
                            <label>Pilih Gambar</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputFoto" name="image" accept="image/*" required>
                                <label class="custom-file-label">Pilih file...</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan Foto</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modal_add_video" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title">Tambah Video Baru</h5>
                <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
            </div>
            <form action="<?= base_url('admin/Galeri/create'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label>URL Video (Youtube/Link)</label>
                        <input type="url" class="form-control" name="src" placeholder="https://youtube.com/..." required>
                        <input type="hidden" name="tipe" value="video">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger">Simpan Video</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modal_edit_galeri">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h5 class="text-white">Edit Galeri</h5><button class="close" data-dismiss="modal">&times;</button>
            </div>
            <form action="<?= base_url('admin/Galeri/update'); ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body edit_galeri"></div>
                <div class="modal-footer"><button class="btn btn-secondary" data-dismiss="modal">Batal</button><button type="submit" class="btn btn-primary">Update Data</button></div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="modal_delete_galeri">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="text-white">Hapus Data</h5><button class="close" data-dismiss="modal">&times;</button>
            </div>
            <form action="<?= base_url('admin/Galeri/delete'); ?>" method="post">
                <div class="modal-body delete_galeri"></div>
                <div class="modal-footer"><button class="btn btn-secondary" data-dismiss="modal">Batal</button><button type="submit" class="btn btn-danger">Ya, Hapus!</button></div>
            </form>
        </div>
    </div>
</div>

<script>
    function edit_galery(id, tipe) {
        $('.edit_galeri').load('<?= base_url() ?>admin/Galeri/view_edit/' + id + '/' + tipe);
    }

    function delete_galeri(id, tipe) {
        $('.delete_galeri').load('<?= base_url() ?>admin/Galeri/view_delete/' + id + '/' + tipe);
    }

    $(document).ready(function() {
        // 1. Auto-Hide Alert
        setTimeout(function() {
            $('.alert-floating').fadeOut('slow', function() {
                $(this).remove();
            });
        }, 3000);

        // 2. Live Preview Tambah Foto
        $('#inputFoto').change(function() {
            var file = this.files[0];
            if (file) {
                $(this).next('.custom-file-label').html(file.name);
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#preview_foto').attr('src', e.target.result);
                }
                reader.readAsDataURL(file);
            }
        });
    });
</script>