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
            <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modalAlat">Buat Penawaran Baru</button>
            <div class="modal fade" id="modalAlat" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Alat Berat</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url()?>Alat/add_alat" method="POST" enctype="multipart/form-data">
                                <div class="form-row">
                                    <div class="form-group col-md-3"></div>
                                    <div class="form-group col-md-3">
                                        <label>Pilih Include Solar & UM Operator</label>
                                        <select name="include" class="form-control">
                                            <option value="Alat Saja">Alat Saja</option>
                                            <option value="Alat dan UM Operator">Alat dan UM Operator</option>
                                            <option value="Alat, Solar dan UM Operator">Alat, Solar dan UM Operator</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Pilih Status PPN</label>
                                        <select name="ppn" class="form-control">
                                            <option value="Ya">Ya</option>
                                            <option value="Tidak">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3"></div>
                                </div>
                                <h5 class="modal-title">Data Customer</h5>
                                <hr>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>Marketing</label>
                                        <input type="text" name="marketing" value="<?= $_SESSION['username']?>" class="form-control" readonly>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>No Surat</label>
                                        <input type="text" name="no_surat" value="<?php echo sprintf("%04s", $no_surat) ?>" class="form-control" readonly>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Nama Instansi</label>
                                        <input type="text" name="nama_instansi" class="form-control">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Nama Customer</label>
                                        <input type="text" name="nama_customer" class="form-control">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Telepon Customer</label>
                                        <input type="text" name="telepon_customer" class="form-control">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Email</label>
                                        <input type="text" name="email" class="form-control">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Alamat Customer</label>
                                        <input type="text" name="alamat_customer" class="form-control">
                                    </div>
                                </div>
                                <br>
                                <h5 class="modal-title">Data Proyek</h5>
                                <hr>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>Nama & Lokasi Proyek</label>
                                        <input type="text" name="nama_proyek" class="form-control">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Periode Pelaksanaan</label>
                                        <input type="date" name="periode_pelaksana" class="form-control">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Nama Penanggung Jawab</label>
                                        <input type="text" name="nama_penanggung_jawab" class="form-control">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Telepon Penanggung Jawab</label>
                                        <input type="text" name="telepon_penanggung_jawab" class="form-control">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Alamat Penagihan</label>
                                        <input type="text" name="alamat_penagihan" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Metode Pembayaran</label>
                                        <textarea class="form-control" name="metode_pembayaran" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Keterangan Tambahan</label>
                                        <textarea class="form-control" name="keterangan_tambahan" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                            <input type="submit" name="simpan" class="btn btn-primary" value="Simpan">
                            </form>
                        </div>
                        <div class="modal-footer"><button class="btn btn-primary" type="button" data-dismiss="modal">Close</button></div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Penawaran Alat Berat</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="dataTable" class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Marketing</th>
                                <th>Nama & Lokasi Proyek</th>
                                <th>Nama Instansi</th>
                                <th>Produk</th>
                                <th>PPN</th>
                                <th>Include Solar & Operator</th>
                                <th>Tanggal</th>
                                <th>Masukkan Barang</th>
                                <th>Cetak</th>
                                <th>Cetak Tanpa Kop</th>
                                <th>Edit</th>
                                <th>Hapus</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            foreach($data_alat as $row ):?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $row->marketing?></td>
                                <td><?= $row->nama_proyek?></td>
                                <td><?= $row->nama_instansi?></td>
                                <td><?= $row->produk?></td>
                                <td><?= $row->ppn?></td>
                                <td><?= $row->include?></td>
                                <td><?= $row->tanggal?></td>
                                <td><a class="btn btn-primary" href="<?= base_url()?>Alat/detail_alat/<?= $row->id?>">Masukkan Barang</a></td>
                                <?php if($row->status < 1) {?>
                                    <td><a class="btn btn-danger" href="#">Menunggu Konfirmasi</a></td>
                                <?php } else {?>
                                    <td><a class="btn btn-success" href="<?= base_url()?>Laporan/cetak_alat/<?= $row->id?>">Silahkan Download Pdf</a></td>
                                <?php }?>
                                <?php if($row->status < 1) {?>
                                    <td><a class="btn btn-danger" href="#">Menunggu Konfirmasi</a></td>
                                <?php } else {?>
                                    <td><a class="btn btn-success" href="<?= base_url()?>Laporan/cetak_alat_tanpa_kop/<?= $row->id?>">Download Pdf Tanpa Kop</a></td>
                                <?php }?>
                                <td><a data-toggle="modal" href="#edit<?= $row->id?>"  class="btn btn-primary">Edit</a></td>
                                <td><a href="<?= base_url()?>Alat/hapus/<?= $row->id?>" class="btn btn-warning">Hapus</a></td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <?php foreach($data_alat as $pp) : ?>
        <div class="modal fade" id="edit<?= $pp->id?>" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Berikan Harga</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url()?>Alat/update_penawaran" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $pp->id?>">
                        <input type="hidden" name="status" value="<?= $pp->status?>">
                        <div class="form-row">
                            <div class="form-group col-md-3"></div>
                                <div class="form-group col-md-3">
                                    <label>Pilih Include Solar & Operator</label>
                                    <select name="include" class="form-control">
                                        <option value="<?= $pp->include?>"><?= $pp->include?></option>
                                        <?php if($pp->include == 'Alat dan UM Operator') {?>
                                            <option value="Alat Saja">Alat Saja</option>
                                            <option value="Alat, Solar dan UM Operator">Alat, Solar dan UM Operator</option>
                                        <?php } elseif($pp->include == 'Alat, Solar dan UM Operator') {?>
                                            <option value="Alat Saja">Alat Saja</option>
                                            <option value="Alat dan UM Operator">Alat dan UM Operator</option>
                                        <?php } else {?>
                                            <option value="Alat dan UM Operator">Alat dan UM Operator</option>
                                            <option value="Alat, Solar dan UM Operator">Alat, Solar dan UM Operator</option>
                                        <?php }?>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Pilih Status PPN</label>
                                    <select name="ppn" class="form-control">
                                        <option value="<?= $pp->ppn?>"><?= $pp->ppn?></option>
                                        <?php if($pp->ppn == 'Ya') {?>
                                            <option value="Tidak">Tidak</option>
                                        <?php } else {?>
                                            <option value="Ya">Ya</option>
                                        <?php }?>
                                    </select>
                                </div>
                                <div class="form-group col-md-3"></div>
                            </div>
                            <h5 class="modal-title">Data Customer</h5>
                            <hr>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>Marketing</label>
                                    <input type="text" name="marketing" value="<?= $pp->marketing?>" class="form-control" readonly>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>No Surat</label>
                                    <input type="text" name="no_surat" value="<?= $pp->no_surat?>" class="form-control" readonly>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Nama Instansi</label>
                                    <input type="text" name="nama_instansi" value="<?= $pp->nama_instansi?>" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Nama Customer</label>
                                    <input type="text" name="nama_customer" value="<?= $pp->nama_customer?>" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Telepon Customer</label>
                                    <input type="text" name="telepon_customer" value="<?= $pp->telepon_customer?>" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Email</label>
                                    <input type="text" name="email" value="<?= $pp->email?>" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Alamat Customer</label>
                                    <input type="text" name="alamat_customer" value="<?= $pp->alamat_customer?>" class="form-control">
                                </div>
                            </div>
                            <br>
                            <h5 class="modal-title">Data Proyek</h5>
                            <hr>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>Nama Proyek</label>
                                    <input type="text" name="nama_proyek" value="<?= $pp->nama_proyek?>" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Periode Pelaksanaan</label>
                                    <input type="date" name="periode_pelaksana" value="<?= $pp->periode_pelaksana?>" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Nama Penanggung Jawab</label>
                                    <input type="text" name="nama_penanggung_jawab" value="<?= $pp->nama_penanggung_jawab?>" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Telepon Penanggung Jawab</label>
                                    <input type="text" name="telepon_penanggung_jawab" value="<?= $pp->telepon_penanggung_jawab?>" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Alamat Penagihan</label>
                                    <input type="text" name="alamat_penagihan" value="<?= $pp->alamat_penagihan?>" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Upload Kontrak</label>
                                    <input type="file" name="image" class="form-control">
                                    <img src="<?php echo base_url()?>assets/upload_kontrak/alat/<?= $pp->image; ?>" width="250px">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Metode Pembayaran</label>
                                    <textarea class="form-control" name="metode_pembayaran" cols="30" rows="10"><?= $pp->metode_pembayaran?></textarea>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Keterangan Tambahan</label>
                                    <textarea class="form-control" name="keterangan_tambahan" cols="30" rows="10"><?= $pp->keterangan_tambahan?></textarea>
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
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
