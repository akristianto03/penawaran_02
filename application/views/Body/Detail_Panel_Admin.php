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
        <br>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Pagar Panel</h6>
            </div>
            <div class="card-body">
                <?php foreach($get_detail_panel_admin as $row):?>
                    <h4 style="text-align:center"><?= $row['marketing'] ?></h4>
                    <h4 style="text-align:center"><?= $row['nama_proyek'] ?></h4>
                <?php endforeach;?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Item</th>
                                <th>Satuan</th>
                                <th>Harga Satuan</th>
                                <th>Edit</th>
                                <th>Hapus</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            foreach($detail_panel_admin as $row ):?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $row->item?></td>
                                <td><?= $row->satuan?></td>
                                <td>Rp. <?= number_format($row->harga_satuan,2,',','.')?></td>
                                <td><a data-toggle="modal" href="#edit<?= $row->ids?>"  class="btn btn-primary">Edit</a></td>
                                <td><a href="<?= base_url()?>Panel/hapus_permintaan/<?= $row->ids?>" class="btn btn-warning">Hapus</a></td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <?php foreach($detail_panel_admin as $pp) : ?>
        <div class="modal fade" id="edit<?= $pp->ids?>" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Berikan Harga</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url()?>Panel/update" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="ids" value="<?= $pp->ids?>">
                            <h5 class="modal-title">Data Pagar Panel</h5>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>Marketing</label>
                                    <input type="text" name="marketing" value="<?= $pp->marketing?>" class="form-control" readonly>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Nama & Lokasi Proyek</label>
                                    <input type="text" name="nama_proyek" value="<?= $pp->nama_proyek?>" class="form-control" readonly>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Item</label>
                                    <input type="text" name="item" value="<?= $pp->item?>" class="form-control" >
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Satuan</label>
                                    <input type="text" name="satuan" value="<?= $pp->satuan?>" class="form-control" >
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Jumlah</label>
                                    <input type="text" name="jumlah" value="<?= $pp->jumlah?>" class="form-control" >
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Harga Satuan</label>
                                    <input type="text" name="harga_satuan" value="<?= $pp->harga_satuan?>" class="form-control">
                                </div>
                            </div>
                        <input type="submit" name="update" class="btn btn-primary" value="Simpan">
                        </form>
                    </div>
                    <div class="modal-footer"><button class="btn btn-primary" type="button" data-dismiss="modal">Close</button></div>
                </div>
            </div>
        </div>
        <?php endforeach ;?>
    </div>

</div>