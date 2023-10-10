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
            <?php foreach ($get_detail_stensla as $row) : ?>
                <?php if ($row['status'] == "1") { ?>
                    <!-- <h1>Mohon Maaf Penawaran sudah di otoriasasi anda tidak dapat mengubah apapun</h1> -->
                <?php } else { ?>
                    <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modalStensla">Masukkan Barang</button>
                <?php } ?>
            <?php endforeach; ?>
            <div class="modal fade" id="modalStensla" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Data Stensla</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url() ?>Stensla/add_permintaan_stensla" method="POST" enctype="multipart/form-data">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>Marketing</label>
                                        <input type="text" name="marketing" value="<?= $_SESSION['username'] ?>" class="form-control" readonly>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Produk</label>
                                        <input type="text" name="produk" value="<?php foreach ($get_detail_stensla as $row) : ?><?= $row['produk'] ?><?php endforeach; ?>" class="form-control" readonly>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Nama & Lokasi Proyek</label>
                                        <input type="text" name="nama_proyek" value="<?php foreach ($get_detail_stensla as $row) : ?><?= $row['nama_proyek'] ?><?php endforeach; ?>" class="form-control" readonly>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Item</label>
                                        <select name="item" class="form-control">
                                            <option value="">---Silahkan Pilih---</option>
                                            <option value="Abu Batu (0-5 mm)">Abu Batu (0-5 mm)</option>
                                            <option value="Stensla 5x10 (5-10 mm)">Stensla 5x10 (5-10 mm)</option>
                                            <option value="Stensla 1x1 (10-15 mm)">Stensla 1x1 (10-15 mm)</option>
                                            <option value="Stensla 1x2 (15-20 mm)">Stensla 1x2 (15-20 mm)</option>
                                            <option value="Stensla 2x3 (20-30 mm)">Stensla 2x3 (20-30 mm)</option>
                                            <option value="Sirtu Ayak">Sirtu Ayak</option>
                                            <option value="Sirtu Urug">Sirtu Urug</option>
                                            <option value="Tanah Urug">Tanah Urug</option>
                                            <option value="Base Course A (LPA)">Base Course A (LPA)</option>
                                            <option value="Base Course B (LPB)">Base Course B (LPB)</option>
                                            <option value="Base Course S (LPS)">Base Course S (LPS)</option>
                                            <option value="Cement Treated Base (CTB)">Cement Treated Base (CTB)</option>
                                            <option value="Ongkos Kirim">Ongkos Kirim</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Armada</label>
                                        <select name="armada" class="form-control">
                                            <option value="">---Silahkan Pilih---</option>
                                            <option value="Colt Diesel (7 m3)">Colt Diesel (7 m3)</option>
                                            <option value="Tronton (21 m3)">Tronton (21 m3)</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Satuan</label>
                                        <select name="satuan" class="form-control">
                                            <option value="">---Silahkan Pilih---</option>
                                            <option value="M3">M3</option>
                                            <option value="Ton">Ton</option>
                                            <option value="Rit">Rit</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Jumlah</label>
                                        <input type="text" id="numberonly" name="jumlah" class="form-control">
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
                <h6 class="m-0 font-weight-bold text-primary">Alat Berat</h6>
            </div>
            <div class="card-body">
                <?php foreach ($get_detail_stensla as $row) : ?>
                    <h4 style="text-align:center"><?= $row['marketing'] ?></h4>
                    <h4 style="text-align:center"><?= $row['nama_proyek'] ?></h4>
                <?php endforeach; ?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Item</th>
                                <th>Armada</th>
                                <th>Jumlah</th>
                                <th>Satuan</th>
                                <th>Hapus</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($detail_stensla as $row) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $row->item ?></td>
                                    <td><?= $row->armada ?></td>
                                    <td><?= $row->jumlah ?></td>
                                    <td><?= $row->satuan ?></td>
                                    <?php if ($row->status == "1") { ?>
                                        <td><a href="#" class="btn btn-warning">Penawaran Apporved</a></td>
                                    <?php } else { ?>
                                        <td><a href="<?= base_url() ?>Stensla/hapus_permintaan/<?= $row->ids ?>" class="btn btn-warning">Hapus</a></td>
                                    <?php } ?>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function setInputFilter(textbox, inputFilter) {
        ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
            textbox.addEventListener(event, function() {
                if (inputFilter(this.value)) {
                    this.oldValue = this.value;
                    this.oldSelectionStart = this.selectionStart;
                    this.oldSelectionEnd = this.selectionEnd;
                } else if (this.hasOwnProperty("oldValue")) {
                    this.value = this.oldValue;
                    this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
                } else {
                    this.value = "";
                }
            });
        });
    }


    // filters.
    setInputFilter(document.getElementById("numberonly"), function(value) {
        return /^-?\d*$/.test(value);
    });
</script>