<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3"><?= $this->session->userdata('username')?> <sup><?= $this->session->userdata('status')?></sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">
<?php if($this->session->userdata('authenticated')) {?>

    <!-- KONDISI JIKA STATUSNYA SAMA DENGAN ADMIN -->
    <?php if($this->session->userdata('status') == 'Admin'){ // Jika role-nya admin?>
        
        <!-- KONDISI TERTENTU UNTUK AKUN/USERNAME ADMIN2 -->
        <?php if($this->session->userdata('username') == 'admin2') {?>
            <li class="nav-item <?= $this->uri->segment(1) == 'Dashboard' || $this->uri->segment(1) == '' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url()?>Dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item <?= $this->uri->segment(1) == 'Pancang' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url()?>Pancang">
                    <i class="fa fa-map-pin"></i>
                    <span>Tiang Pancang</span></a>
            </li>
            <li class="nav-item <?= $this->uri->segment(1) == 'Sheet_pile' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url()?>Sheet_pile">
                    <i class="fas fa-igloo"></i>
                    <span>Sheet Pile</span></a>
            </li>
        
        <!-- KONDISI JIKA BUKAN AKUN/USERNAME ADMIN2 OPEN SEMUA -->
        <?php } else {?>
            <li class="nav-item <?= $this->uri->segment(1) == 'Dashboard' || $this->uri->segment(1) == '' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url()?>Dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item <?= $this->uri->segment(1) == 'Alat' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url()?>Alat">
                    <i class="fas fa-truck"></i>
                    <span>Alat Berat</span></a>
            </li>
            <li class="nav-item <?= $this->uri->segment(1) == 'Aspal' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url()?>Aspal">
                    <i class="fas fa-drum-steelpan"></i>
                    <span>Aspal</span></a>
            </li>
            <li class="nav-item <?= $this->uri->segment(1) == 'Uditch' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url()?>Uditch">
                    <i class="fas fa-archway"></i>
                    <span>Uditch</span></a>
            </li>
            <li class="nav-item <?= $this->uri->segment(1) == 'Marka' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url()?>Marka">
                    <i class="fa fa-map-signs"></i>
                    <span>Marka Jalan</span></a>
            </li>
            <li class="nav-item <?= $this->uri->segment(1) == 'Pancang' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url()?>Pancang">
                    <i class="fa fa-map-pin"></i>
                    <span>Tiang Pancang</span></a>
            </li>
            <li class="nav-item <?= $this->uri->segment(1) == 'Panel' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url()?>Panel">
                    <i class="fa fa-archive"></i>
                    <span>Pagar Panel</span></a>
            </li>
            <li class="nav-item <?= $this->uri->segment(1) == 'Stensla' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url()?>Stensla">
                    <i class="fas fa-drafting-compass"></i>
                    <span>Stensla</span></a>
            </li>
            <li class="nav-item <?= $this->uri->segment(1) == 'Readymix' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url()?>Readymix">
                    <i class="fas fa-filter"></i>
                    <span>Ready Mix</span></a>
            </li>
            <li class="nav-item <?= $this->uri->segment(1) == 'Sheet_pile' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url()?>Sheet_pile">
                    <i class="fas fa-igloo"></i>
                    <span>Sheet Pile</span></a>
            </li>
            <li class="nav-item <?= $this->uri->segment(1) == 'Paving' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url()?>Paving">
                    <i class="fas fa-igloo"></i>
                    <span>Paving</span></a>
            </li>
            <li class="nav-item <?= $this->uri->segment(1) == 'Setting' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url()?>Setting">
                    <i class="fas fa-tools"></i>
                    <span>Tambah Akun</span></a>
            </li>
        <?php }?>


    <!-- KONDISI JIKA STATUSNYA SAMA DENGAN USER -->
    <?php } else { ?>
    <li class="nav-item <?= $this->uri->segment(1) == 'Dashboard' || $this->uri->segment(1) == '' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url()?>Dashboard">
            <i class="fas fa-calendar"></i>
            <span>Dashboard</span></a>
    </li>
    <li class="nav-item <?= $this->uri->segment(1) == 'Alat' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url()?>Alat">
            <i class="fas fa-truck"></i>
            <span>Alat Berat</span></a>
    </li>
    <li class="nav-item <?= $this->uri->segment(1) == 'Aspal' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url()?>Aspal">
            <i class="fas fa-drum-steelpan"></i>
            <span>Aspal</span></a>
    </li>
    <li class="nav-item <?= $this->uri->segment(1) == 'Uditch' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url()?>Uditch">
            <i class="fas fa-archway"></i>
            <span>Uditch</span></a>
    </li>
    <li class="nav-item <?= $this->uri->segment(1) == 'Marka' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url()?>Marka">
            <i class="fa fa-map-signs"></i>
            <span>Marka Jalan</span></a>
    </li>
    <li class="nav-item <?= $this->uri->segment(1) == 'Pancang' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url()?>Pancang">
            <i class="fa fa-map-pin"></i>
            <span>Tiang Pancang</span></a>
    </li>
    <li class="nav-item <?= $this->uri->segment(1) == 'Panel' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url()?>Panel">
            <i class="fa fa-archive"></i>
            <span>Pagar Panel</span></a>
    </li>
    <li class="nav-item <?= $this->uri->segment(1) == 'Stensla' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url()?>Stensla">
            <i class="fas fa-drafting-compass"></i>
            <span>Stensla</span></a>
    </li>
    <li class="nav-item <?= $this->uri->segment(1) == 'Readymix' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url()?>Readymix">
            <i class="fas fa-filter"></i>
            <span>Ready Mix</span></a>
    </li>
    <li class="nav-item <?= $this->uri->segment(1) == 'Sheet_pile' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url()?>Sheet_pile">
            <i class="fas fa-igloo"></i>
            <span>Sheet Pile</span></a>
    </li>
    <li class="nav-item <?= $this->uri->segment(1) == 'Paving' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url()?>Paving">
            <i class="fas fa-igloo"></i>
            <span>Paving</span></a>
    </li>
    <?php } ?>
<?php }?>

<li class="nav-item">
    <a class="nav-link" href="<?= base_url()?>Login/logout">
        <i class="fas fa-sign-out-alt"></i>
        <span>Logout</span></a>
</li>
<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>


</ul>
<!-- End of Sidebar -->
