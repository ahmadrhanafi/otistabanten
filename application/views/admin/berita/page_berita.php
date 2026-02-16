<style>
    /* 1. Styling Tabel & Konten */
    .kotak {
        width: 80px;
        height: 60px;
        border-radius: 8px;
        overflow: hidden;
        margin: auto;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        border: 1px solid #eee;
    }

    .kotak img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .table thead th {
        background-color: #f8f9fa;
        text-align: center;
        font-size: 13px;
        color: #495057;
        border-bottom: 2px solid #dee2e6;
    }

    /* 2. Badge & Tombol */
    .date-badge {
        font-size: 11px;
        padding: 4px 8px;
        border-radius: 5px;
        background: #e9ecef;
        color: #495057;
        font-weight: 600;
    }

    .btn-group-action .btn {
        margin: 0 2px;
    }

    /* 3. Alert Floating (Muncul di pojok kanan) */
    .alert-floating {
        position: fixed;
        top: 20px;
        right: 20px;
        z-index: 9999;
        min-width: 300px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        border: none;
        border-radius: 10px;
    }
</style>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="font-weight-bold">Manajemen Berita</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Berita</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <?php if ($this->session->flashdata('success')) : ?>
        <div class="alert alert-success alert-floating animate__animated animate__fadeInRight" role="alert">
            <i class="fas fa-check-circle mr-2"></i> <?= $this->session->flashdata('success') ?>
        </div>
    <?php endif; ?>
    <?php if ($this->session->flashdata('error')) : ?>
        <div class="alert alert-danger alert-floating animate__animated animate__fadeInRight" role="alert">
            <i class="fas fa-exclamation-circle mr-2"></i> <?= $this->session->flashdata('error') ?>
        </div>
    <?php endif; ?>

    <section class="content">
        <div class="container-fluid">
            <div class="card card-outline card-primary shadow-sm">
                <div class="card-header bg-white">
                    <button type="button" data-toggle="modal" data-target="#modal_add" class="btn btn-primary btn-sm">
                        <i class="fas fa-plus mr-1"></i> Tambah Berita Baru
                    </button>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example2" class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th width="5%">No</th>
                                    <th width="15%">Gambar</th>
                                    <th>Judul Berita</th>
                                    <th width="18%">Tanggal</th>
                                    <th width="12%">Konten</th>
                                    <th width="12%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($berita->result_array() as $key) : ?>
                                    <tr>
                                        <td class="text-center"><?= $no++; ?></td>
                                        <td>
                                            <div class="kotak">
                                                <img src="<?= base_url('assets_admin/dist/img/berita/') . $key['NewsImg'] ?>" alt="News">
                                            </div>
                                        </td>
                                        <td class="font-weight-bold"><?= $key['NewsTitle'] ?></td>
                                        <td class="text-center">
                                            <span class="date-badge">
                                                <i class="far fa-calendar-alt mr-1"></i>
                                                <?= date('d M Y', strtotime($key['NewsDate'])) ?>
                                            </span>
                                        </td>
                                        <td class="text-center">
                                            <button class="btn btn-xs btn-info px-3" onclick="detail('<?= $key['NewsID']; ?>')" data-toggle="modal" data-target="#modal_isi_berita">
                                                <i class="fas fa-eye"></i> Detail
                                            </button>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group-action">
                                                <button onclick="edit_berita('<?= $key['NewsID']; ?>')" data-toggle="modal" data-target="#modal_edit_berita" class="btn btn-sm btn-warning text-white">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                <button onclick="delete_berita('<?= $key['NewsID']; ?>')" data-toggle="modal" data-target="#modal_delete_berita" class="btn btn-sm btn-danger">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="modal fade" id="modal_add" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white">Tambah Berita</h5>
                <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
            </div>
            <form action="<?= base_url('admin/Berita/create'); ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label>Judul Berita</label>
                                <input type="text" class="form-control" name="judul" placeholder="Masukkan judul..." required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Tanggal</label>
                                <input type="date" class="form-control" name="tanggal" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Isi Berita</label>
                        <textarea class="summernote" name="isi_berita">Tulis berita di sini...</textarea>
                    </div>
                    <div class="form-group">
                        <label>Upload Gambar</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputImg" name="image" accept="image/*" required>
                            <label class="custom-file-label" for="inputImg">Pilih File (Max 2MB)</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan Berita</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modal_isi_berita">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Isi Berita</h5><button class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body isi_berita"></div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal_edit_berita">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Edit Berita</h5><button class="close" data-dismiss="modal">&times;</button>
            </div>
            <form action="<?= base_url('admin/Berita/update'); ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body edit_berita"></div>
                <div class="modal-footer"><button class="btn btn-secondary" data-dismiss="modal">Batal</button><button type="submit" class="btn btn-primary">Simpan Perubahan</button></div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="modal_delete_berita">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="text-white">Hapus Berita</h5><button class="close" data-dismiss="modal">&times;</button>
            </div>
            <form action="<?= base_url('admin/Berita/delete'); ?>" method="post">
                <div class="modal-body delete_berita text-center"></div>
                <div class="modal-footer"><button class="btn btn-secondary" data-dismiss="modal">Batal</button><button type="submit" class="btn btn-danger">Ya, Hapus!</button></div>
            </form>
        </div>
    </div>
</div>

<script>
    // AJAX Loading Functions
    function detail(newsID) {
        $('.isi_berita').load('<?= base_url() ?>admin/Berita/load_isi_berita/' + newsID);
    };

    function edit_berita(newsID) {
        $('.edit_berita').load('<?= base_url() ?>admin/Berita/view_edit/' + newsID);
    };

    function delete_berita(newsID) {
        $('.delete_berita').load('<?= base_url() ?>admin/Berita/view_delete/' + newsID);
    };

    document.addEventListener("DOMContentLoaded", function() {
        // 1. Auto Hide Alert
        const alerts = document.querySelectorAll('.alert-floating');
        alerts.forEach(alert => {
            setTimeout(() => {
                alert.style.transition = "all 0.6s ease";
                alert.style.opacity = "0";
                alert.style.transform = "translateX(50px)";
                setTimeout(() => alert.remove(), 600);
            }, 3000);
        });

        // 2. Tampilkan Nama File saat pilih gambar
        $('.custom-file-input').on('change', function() {
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
        });
    });
</script>