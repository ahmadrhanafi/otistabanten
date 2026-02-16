<aside class="main-sidebar sidebar-dark-navy elevation-4 shadow-sm" style="background-color: #271e92;">
    <a href="<?= base_url('admin-dashboard') ?>" class="brand-link border-bottom-0 py-3 text-center">
        <img src="<?= base_url('assets/images/Logo-otista.png') ?>" alt="Otista Logo"
            class="brand-image img-circle elevation-2 float-none" style="opacity: .9; max-height: 40px;">
        <div class="brand-text font-weight-bold ml-2 mt-2 d-block">STIT OTISTA</div>
    </a>

    <div class="sidebar px-3">
        <div class="user-panel mt-3 pb-3 d-flex">
            <div class="image">
                <img src="<?= base_url('assets_admin/dist/img/user2-160x160.jpg') ?>"
                    class="img-circle elevation-2 border border-secondary mt-2"
                    alt="User Image"
                    style="width: 2rem; height: 2rem; object-fit: cover; margin-left: -5px;">
            </div>
            <div class="info">
                <small class="text-muted d-block text-uppercase" style="font-size: 10px;">Administrator</small>
                <div class="d-block text-white font-weight-600">
                    <?= $this->session->userdata('name') ?>
                </div>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent"
                data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-header text-uppercase text-muted p-2" style="font-size: 11px; letter-spacing: 1px;">Main Navigation</li>

                <li class="nav-item">
                    <a href="<?= base_url('admin-dashboard') ?>"
                        class="nav-link py-2 mb-1 <?= ($this->uri->segment(1) == 'admin-dashboard') ? 'active shadow-primary' : '' ?>">
                        <i class="nav-icon fas fa-th-large"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-header text-uppercase text-muted p-2 mt-3" style="font-size: 11px; letter-spacing: 1px;">Content Management</li>

                <li class="nav-item">
                    <a href="<?= base_url('admin-berita') ?>"
                        class="nav-link py-2 mb-1 <?= ($this->uri->segment(1) == 'admin-berita') ? 'active shadow-primary' : '' ?>">
                        <i class="nav-icon fas fa-paper-plane"></i>
                        <p>Berita & Artikel</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('admin-galeri') ?>"
                        class="nav-link py-2 mb-1 <?= ($this->uri->segment(1) == 'admin-galeri') ? 'active shadow-primary' : '' ?>">
                        <i class="nav-icon fas fa-images"></i>
                        <p>Galeri Media</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('admin-dosen-staff') ?>"
                        class="nav-link py-2 mb-1 <?= ($this->uri->segment(1) == 'admin-dosen-staff') ? 'active shadow-primary' : '' ?>">
                        <i class="nav-icon fas fa-id-card"></i>
                        <p>Dosen & Staff</p>
                    </a>
                </li>

                <li class="nav-item mt-5 border-top pt-3">
                    <a href="<?= base_url('admin/Auth/logout') ?>" class="nav-link logout-btn font-weight-bold text-lg" style="color: #f00000;">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>