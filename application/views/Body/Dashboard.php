<!-- Main Content -->
<div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>

    </nav>
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <?php if($this->session->userdata('authenticated')) { ?>
            <?php if($this->session->userdata('status') == 'Admin') { ?>
            <!-- Pending Requests Card Example -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">DATA PENAWARAN SELURUH MARKETING</h1>
            </div>
            <div class="row">
                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        Penawaran Semua Marketing</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_penawaran_semua?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-poll fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                        Nama Marketing : Selvy</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Total Seluruh Surat : <?= $total_penawaran_selvy?></div>
                                    <table id="dataTable_selvy" class="table table-bordered" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Bulan</th>
                                                <th>Tahun</th>
                                                <th>Total Surat</th>
                                                <th>Goals</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $no = 1;
                                            foreach($total_penawaran_bulanan_selvy as $row) :?>
                                            <tr>
                                                <td><?= $no++?></td>
                                                <td><?= $row->bulan?></td>
                                                <td><?= $row->tahun?></td>
                                                <td><?= $row->total?></td>
                                                <td><?= $row->goals?></td>
                                            </tr>
                                            <?php endforeach;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                    Nama Marketing : Harris</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    Total Seluruh Surat : <?= $total_penawaran_harris?></div>
                                    <table class="table table-bordered" id="dataTable_harris" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Bulan</th>
                                                <th>Tahun</th>
                                                <th>Total Surat</th>
                                                <th>Goals</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $no = 1;
                                            foreach($total_penawaran_bulanan_harris as $row) :?>
                                            <tr>
                                                <td><?= $no++?></td>
                                                <td><?= $row->bulan?></td>
                                                <td><?= $row->tahun?></td>
                                                <td><?= $row->total?></td>
                                                <td><?= $row->goals?></td>
                                            </tr>
                                            <?php endforeach;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                    Nama Marketing : Yoshua</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    Total Seluruh Surat : <?= $total_penawaran_yoshua?></div>
                                    <table class="table table-bordered" id="dataTable_yoshua" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Bulan</th>
                                                <th>Tahun</th>
                                                <th>Total Surat</th>
                                                <th>Goals</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $no = 1;
                                            foreach($total_penawaran_bulanan_yoshua as $row) :?>
                                            <tr>
                                                <td><?= $no++?></td>
                                                <td><?= $row->bulan?></td>
                                                <td><?= $row->tahun?></td>
                                                <td><?= $row->total?></td>
                                                <td><?= $row->goals?></td>
                                            </tr>
                                            <?php endforeach;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                    Nama Marketing : Adhitya</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    Total Seluruh Surat : <?= $total_penawaran_adhitya?></div>
                                    <table class="table table-bordered" id="dataTable_adhitya" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Bulan</th>
                                                <th>Tahun</th>
                                                <th>Total Surat</th>
                                                <th>Goals</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $no = 1;
                                            foreach($total_penawaran_bulanan_adhitya as $row) :?>
                                            <tr>
                                                <td><?= $no++?></td>
                                                <td><?= $row->bulan?></td>
                                                <td><?= $row->tahun?></td>
                                                <td><?= $row->total?></td>
                                                <td><?= $row->goals?></td>
                                            </tr>
                                            <?php endforeach;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                    Nama Marketing : Nanang</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    Total Seluruh Surat : <?= $total_penawaran_nanang?></div>
                                    <table class="table table-bordered" id="dataTable_nanang" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Bulan</th>
                                                <th>Tahun</th>
                                                <th>Total Surat</th>
                                                <th>Goals</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $no = 1;
                                            foreach($total_penawaran_bulanan_nanang as $row) :?>
                                            <tr>
                                                <td><?= $no++?></td>
                                                <td><?= $row->bulan?></td>
                                                <td><?= $row->tahun?></td>
                                                <td><?= $row->total?></td>
                                                <td><?= $row->goals?></td>
                                            </tr>
                                            <?php endforeach;?>
                                            </tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                    Nama Marketing : Teryluana</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    Total Seluruh Surat : <?= $total_penawaran_teryluana?></div>
                                    <table class="table table-bordered" id="dataTable_teryluana" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Bulan</th>
                                                <th>Tahun</th>
                                                <th>Total Surat</th>
                                                <th>Goals</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $no = 1;
                                            foreach($total_penawaran_bulanan_teryluana as $row) :?>
                                            <tr>
                                                <td><?= $no++?></td>
                                                <td><?= $row->bulan?></td>
                                                <td><?= $row->tahun?></td>
                                                <td><?= $row->total?></td>
                                                <td><?= $row->goals?></td>
                                            </tr>
                                            <?php endforeach;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                    Nama Marketing : Taufik</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    Total Seluruh Surat : <?= $total_penawaran_taufik?></div>
                                    <table class="table table-bordered" id="dataTable_taufik" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Bulan</th>
                                                <th>Tahun</th>
                                                <th>Total Surat</th>
                                                <th>Goals</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $no = 1;
                                            foreach($total_penawaran_bulanan_taufik as $row) :?>
                                            <tr>
                                                <td><?= $no++?></td>
                                                <td><?= $row->bulan?></td>
                                                <td><?= $row->tahun?></td>
                                                <td><?= $row->total?></td>
                                                <td><?= $row->goals?></td>
                                            </tr>
                                            <?php endforeach;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                    Nama Marketing : Indra</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    Total Seluruh Surat : <?= $total_penawaran_indra?></div>
                                    <table class="table table-bordered" id="dataTable_indra" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Bulan</th>
                                                <th>Tahun</th>
                                                <th>Total Surat</th>
                                                <th>Goals</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $no = 1;
                                            foreach($total_penawaran_bulanan_indra as $row) :?>
                                            <tr>
                                                <td><?= $no++?></td>
                                                <td><?= $row->bulan?></td>
                                                <td><?= $row->tahun?></td>
                                                <td><?= $row->total?></td>
                                                <td><?= $row->goals?></td>
                                            </tr>
                                            <?php endforeach;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                    Nama Marketing : Zainul</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    Total Seluruh Surat : <?= $total_penawaran_zainul?></div>
                                    <table class="table table-bordered" id="dataTable_zainul" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Bulan</th>
                                                <th>Tahun</th>
                                                <th>Total Surat</th>
                                                <th>Goals</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $no = 1;
                                            foreach($total_penawaran_bulanan_zainul as $row) :?>
                                            <tr>
                                                <td><?= $no++?></td>
                                                <td><?= $row->bulan?></td>
                                                <td><?= $row->tahun?></td>
                                                <td><?= $row->total?></td>
                                                <td><?= $row->goals?></td>
                                            </tr>
                                            <?php endforeach;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                    Nama Marketing : Syamsul</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    Total Seluruh Surat : <?= $total_penawaran_syamsul?></div>
                                    <table class="table table-bordered" id="dataTable_syamsul" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Bulan</th>
                                                <th>Tahun</th>
                                                <th>Total Surat</th>
                                                <th>Goals</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach($total_penawaran_bulanan_syamsul as $row) :?>
                                            <tr>
                                                <td><?= $no++?></td>
                                                <td><?= $row->bulan?></td>
                                                <td><?= $row->tahun?></td>
                                                <td><?= $row->total?></td>
                                                <td><?= $row->goals?></td>
                                            </tr>
                                            <?php endforeach;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                    Nama Marketing : Andri</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    Total Seluruh Surat : <?= $total_penawaran_andri?></div>
                                    <table class="table table-bordered" id="dataTable_andri" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Bulan</th>
                                                <th>Tahun</th>
                                                <th>Total Surat</th>
                                                <th>Goals</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach($total_penawaran_bulanan_andri as $row) :?>
                                            <tr>
                                                <td><?= $no++?></td>
                                                <td><?= $row->bulan?></td>
                                                <td><?= $row->tahun?></td>
                                                <td><?= $row->total?></td>
                                                <td><?= $row->goals?></td>
                                            </tr>
                                            <?php endforeach;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Penawaran Untuk Aspal</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_penawaran_aspal?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-drum-steelpan fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Penawaran Untuk Alat Berat</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_penawaran_alat?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-truck fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Penawaran Untuk Uditch</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_penawaran_uditch?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-archway fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Penawaran Untuk Marka</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_penawaran_marka?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fa fa-map-signs fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Penawaran Untuk Tiang Pancang</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_penawaran_pancang?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-map-pin fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Penawaran Untuk Pagar Panel</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_penawaran_panel?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fa fa-archive fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Penawaran Untuk Stensla</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_penawaran_stensla?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-filter fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Penawaran Untuk Readymix</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_penawaran_readymix?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-filter fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Penawaran Untuk Paving</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_penawaran_paving?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-filter fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <?php } else { ?>
            
            <!-- USER -->
            <div class="row">
                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                       Total Penawaran Saya</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_data_penawaran?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-chart-line fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs text-success text-uppercase mb-1">
                                       Berdasarkan Kalkulasi Anda Adalah Marketing Specialist 
                                       <?php foreach($penawaran_kesimpulan as $row) :?>
                                        <b style="font-size:15px;font-style:italic"><?= $row->produk?></b>
                                       <?php endforeach;?>
                                       </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-chart-line fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                        Alat Berat</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_data_alat?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-truck fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                        Aspal</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_data_aspal?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-drum-steelpan fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                        Uditch</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_data_uditch?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-archway fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                        Marka Jalan</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_data_marka?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-map-signs fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                        Tiang Pancang</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_data_pancang?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-map-pin fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                        Pagar Panel</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_data_panel?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fa fa-archive fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                        Stensla</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_data_stensla?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-filter fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                        Readymix</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_data_readymix?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-filter fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                        Paving</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_data_paving?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-filter fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        <?php } ?>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
