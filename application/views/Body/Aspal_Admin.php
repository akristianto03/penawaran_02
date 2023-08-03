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

        <div class="col-md-12">
            <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modalLatest">Latest Update</button>
            <div class="modal fade" id="modalLatest" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Aspal</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>User Pengedit</th>
                                        <th>Nama Proyek</th>
                                        <th>Tanggal Edit</th>
                                        <!-- <th>Produk</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($latest_update as $row):?>
                                    <tr>
                                        <td><?= $row->marketing?></td>
                                        <td><?= $row->nama_proyek?></td>
                                        <td><?= $row->tanggal?></td>
                                        <!-- <td><?= $row->produk?></td> -->
                                    </tr>
                                    <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer"><button class="btn btn-primary" type="button" data-dismiss="modal">Close</button></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Aspal</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table style="font-size:10px" class="table table-bordered" id="aspal" width="10%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Instansi</th>
                                <th>Nama & Lokasi Proyek</th>
                                <th>Marketing</th>
                                <th>PPN</th>
                                <th>Pengiriman</th>
                                <th>Tanggal</th>
                                <th>Keterangan</th>
                                <?php if($_SESSION['username'] == 'Rini') {?>
                                    <th>Cek</th>
                                <?php } else {?>
                                    <th>Goals</th>
                                    <th>Konfirmasi</th>
                                    <th>Berikan Penawaran</th>
                                    <th>Berikan Keterangan</th>
                                    <th>Cek</th>
                                <?php }?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            foreach($data_aspal_admin as $row ):?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $row->nama_instansi?></td>
                                <td><?= $row->nama_proyek?></td>
                                <td><?= $row->marketing?></td>
                                <td><?= $row->ppn?></td>
                                <td><?= $row->include?></td>
                                <td><?= $row->tanggal?></td>
                                <td><?= $row->keterangan?></td>
                                <?php if($_SESSION['username'] == 'Rini') {?>
                                    <td><a class="btn btn-warning btn-sm" href="<?= base_url()?>Laporan/cetak_aspal/<?= $row->id?>">Cek Dokumen Pdf</a></td>
                                <?php } else {?>

                                    <?php if($row->goals != NULL) {?>
                                        <td><a href="<?= base_url()?>Aspal/ungoals/<?= $row->id?>" class="btn btn-danger btn-sm">Ungoals</a></td>
                                    <?php } else {?>
                                        <td><a href="<?= base_url()?>Aspal/goals/<?= $row->id?>" class="btn btn-success btn-sm">Goals</a></td>
                                    <?php }?>

                                    <?php if($row->status > '0') {?>
                                        <td><a href="<?= base_url()?>Aspal/unapprove/<?= $row->id?>" class="btn btn-danger btn-sm">Unauthorized</a></td>
                                    <?php } else {?>
                                        <td><a href="<?= base_url()?>Aspal/approve/<?= $row->id?>" class="btn btn-success btn-sm">Authorization</a></td>
                                    <?php }?>
                                    <td><a href="<?= base_url()?>Aspal/detail_aspal/<?= $row->id?>" class="btn btn-info btn-sm">Berikan Harga</a></td>
                                    <td><a data-toggle="modal" href="#edit<?= $row->id?>"  class="btn btn-primary btn-sm">Edit</a></td>
                                    <td><a class="btn btn-warning btn-sm" href="<?= base_url()?>Laporan/cetak_aspal/<?= $row->id?>">Cek Dokumen Pdf</a></td>
                                <?php }?>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php foreach($data_aspal_admin as $pp) : ?>
    <div class="modal fade" id="edit<?= $pp->id?>" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Catatan Penawaran Aspal</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url()?>Aspal/update_penawaran" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $pp->id?>">
                        <input type="hidden" name="status" value="<?= $pp->status?>">
                        <input type="hidden" name="include" value="<?= $pp->include?>">
                        <input type="hidden" name="ppn" value="<?= $pp->ppn?>">
                        <input type="hidden" name="marketing" value="<?= $pp->marketing?>">
                        <input type="hidden" name="nama_instansi" value="<?= $pp->nama_instansi?>">
                        <input type="hidden" name="nama_customer" value="<?= $pp->nama_customer?>">
                        <input type="hidden" name="no_surat" value="<?= $pp->no_surat?>">
                        <input type="hidden" name="telepon_customer" value="<?= $pp->telepon_customer?>">
                        <input type="hidden" name="email" value="<?= $pp->email?>"> 
                        <input type="hidden" name="alamat_customer" value="<?= $pp->alamat_customer?>"> 
                        <input type="hidden" name="nama_proyek" value="<?= $pp->nama_proyek?>"> 
                        <input type="hidden" name="periode_pelaksana" value="<?= $pp->periode_pelaksana?>"> 
                        <input type="hidden" name="alamat_penagihan" value="<?= $pp->alamat_penagihan?>"> 
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Keterangan</label>
                                <textarea class="form-control" name="keterangan" value="<?= $pp->keterangan?>" cols="30" rows="10"><?= $pp->keterangan?></textarea>
                            </div>
                        </div>
                        <input type="submit" name="update_penawaran" class="btn btn-primary" value="Simpan">
                    </form>
                </div>
                <div class="modal-footer"><button class="btn btn-primary" type="button" data-dismiss="modal">Close</button></div>
            </div>
        </div>
    </div>
    <?php endforeach ;?>
</div>