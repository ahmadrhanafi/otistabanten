<style>
    .kotak {
        width: 80px;
        height: 80px;
        border-radius: 5px;
        overflow: hidden;
        margin: auto;
        border: 1px solid #ddd;
    }

    .kotak img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    th,
    td {
        text-align: center;
        vertical-align: middle !important;
    }

    /* Alert styling */
    .alert-fixed {
        position: fixed;
        top: 20px;
        right: 20px;
        z-index: 9999;
        min-width: 300px;
    }
</style>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dosen & Staff</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dosen - Staff</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <div class="alert-fixed">
        <?php if ($this->session->flashdata('success_poto') || $this->session->flashdata('success_video')) : ?>
            <div class="alert alert-success alert-dismissible fade show shadow">
                <i class="fas fa-check-circle"></i> <?= $this->session->flashdata('success_poto') . $this->session->flashdata('success_video') ?>
                <button type="button" class="close" data-dismiss="alert">&times;</button>
            </div>
        <?php endif; ?>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Data Dosen</h3>
                    <button type="button" data-toggle="modal" data-target="#modal_add_foto" class="btn btn-sm btn-primary float-right">
                        <i class="fas fa-plus"></i> Tambah Dosen
                    </button>
                </div>
                <div class="card-body">
                    <table id="example2" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Foto</th>
                                <th>Jabatan</th>
                                <th>Nama</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($dosen->result_array() as $key) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td>
                                        <div class="kotak"><img src="<?= base_url('assets_admin/dist/img/dosen/') . $key['Img'] ?>"></div>
                                    </td>
                                    <td><?= $key['Title'] ?></td>
                                    <td><?= $key['Name'] ?></td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modal_edit_galeri" onclick="edit_galery('<?= $key['DosenID']; ?>')">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal_delete_galeri" onclick="delete_galeri('<?= $key['DosenID']; ?>')">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card card-info card-outline mt-4">
                <div class="card-header">
                    <h3 class="card-title">Data Staff</h3>
                    <button type="button" data-toggle="modal" data-target="#modal_add_video" class="btn btn-sm btn-info float-right">
                        <i class="fas fa-plus"></i> Tambah Staff
                    </button>
                </div>
                <div class="card-body">
                    <table id="example3" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Foto</th>
                                <th>Jabatan</th>
                                <th>Nama</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($staff->result_array() as $key) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td>
                                        <div class="kotak"><img src="<?= base_url('assets_admin/dist/img/dosen/') . $key['Img'] ?>"></div>
                                    </td>
                                    <td><?= $key['Title'] ?></td>
                                    <td><?= $key['Name'] ?></td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modal_edit_galeri" onclick="edit_galery('<?= $key['DosenID']; ?>')">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal_delete_galeri" onclick="delete_galeri('<?= $key['DosenID']; ?>')">
                                            <i class="fas fa-trash"></i>
                                        </button>
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
            <div class="modal-header">
                <h5 class="modal-title">Tambah Dosen</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form action="<?= base_url('admin/DosenStaff/create'); ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama" required>
                        <input type="hidden" name="tipe" value="1">
                    </div>
                    <div class="form-group">
                        <label>Jabatan</label>
                        <input type="text" class="form-control" name="jabatan" required>
                    </div>
                    <div class="form-group">
                        <label>Foto</label>
                        <input type="file" name="image" class="form-control" accept="image/*" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modal_add_video" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Staff</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form action="<?= base_url('admin/DosenStaff/create'); ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama" required>
                        <input type="hidden" name="tipe" value="2">
                    </div>
                    <div class="form-group">
                        <label>Jabatan</label>
                        <input type="text" class="form-control" name="jabatan" required>
                    </div>
                    <div class="form-group">
                        <label>Foto</label>
                        <input type="file" name="image" class="form-control" accept="image/*" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-info">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modal_edit_galeri" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content edit_galeri">
        </div>
    </div>
</div>

<div class="modal fade" id="modal_delete_galeri" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content delete_galeri">
        </div>
    </div>
</div>

<script>
    function edit_galery(id) {
        $('.edit_galeri').html('<div class="p-5 text-center"><i class="fas fa-spinner fa-spin"></i> Loading...</div>');
        $('.edit_galeri').load('<?= base_url("admin/DosenStaff/view_edit/") ?>' + id);
    }

    function delete_galeri(id) {
        $('.delete_galeri').html('<div class="p-5 text-center"><i class="fas fa-spinner fa-spin"></i> Loading...</div>');
        $('.delete_galeri').load('<?= base_url("admin/DosenStaff/view_delete/") ?>' + id);
    }

    // Auto close alert
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 3000);
</script>