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
            <?php foreach ($get_detail_aspal as $row) : ?>
                <?php if ($row['status'] == "1") { ?>
                    <!-- <h1>Mohon Maaf Penawaran sudah di otoriasasi anda tidak dapat mengubah apapun</h1> -->
                <?php } else { ?>
                    <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modalAlat">Masukkan Barang</button>
                <?php } ?>
            <?php endforeach; ?>
            <!-- <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modalAlat">Masukkan Barang</button> -->
            <div class="modal fade" id="modalAlat" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Data Aspal</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url() ?>Aspal/add_permintaan_aspal" method="POST" enctype="multipart/form-data">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>Marketing</label>
                                        <input type="text" name="marketing" value="<?= $_SESSION['username'] ?>" class="form-control" readonly>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Produk</label>
                                        <input type="text" name="produk" value="<?php foreach ($get_detail_aspal as $row) : ?><?= $row['produk'] ?><?php endforeach; ?>" class="form-control" readonly>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Nama & Lokasi Proyek</label>
                                        <input type="text" name="nama_proyek" value="<?php foreach ($get_detail_aspal as $row) : ?><?= $row['nama_proyek'] ?><?php endforeach; ?>" class="form-control" readonly>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Item</label>
                                        <select name="item" class="form-control">
                                            <option value="">---Silahkan Pilih---</option>
                                            <option value="AC">AC</option>
                                            <option value="ATB">ATB</option>
                                            <option value="AC-Base">AC-Base</option>
                                            <option value="AC-Base-MOD">AC-Base-MOD</option>
                                            <option value="AC-WC">AC-WC</option>
                                            <option value="AC-WC-MOD">AC-WC-MOD</option>
                                            <option value="AC-BC">AC-BC</option>
                                            <option value="AC-BC-MOD">AC-BC-MOD</option>
                                            <option value="HRS-WC">HRS-WC</option>
                                            <option value="HRS-Base">HRS-Base</option>
                                            <option value="STK">STK</option>
                                            <option value="STH">STH</option>
                                            <option value="Sand Sheet">Sand Sheet</option>
                                            <option value="Tack Coat">Tack Coat</option>
                                            <option value="Prime Coat">Prime Coat</option>
                                            <option value="Aspal Bakar">Aspal Bakar</option>
                                            <option value="Aspal Drum">Aspal Drum</option>
                                            <option value="Jurigen">Jurigen</option>
                                            <option value="Mob Lokal">Mob Lokal</option>
                                            <option value="Mob de Mob Paverset">Mob de Mob Paverset</option>
                                            <option value="Mob de Mob Baby Roller">Mob de Mob Baby Roller</option>
                                            <option value="Mob de Mob Three Wheel Roller">Mob de Mob Three Wheel Roller</option>
                                            <option value="Ongkos Kirim">Ongkos Kirim</option>
                                            <option value="Ongkos Gelar">Ongkos Gelar</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Ketebalan (CM)</label>
                                        <select name="ketebalan" class="form-control">
                                            <option value="">---Silahkan Pilih---</option>
                                            <option value="-">-</option>
                                            <option value="1">Liter</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Satuan</label>
                                        <select name="satuan" class="form-control">
                                            <option value="">---Silahkan Pilih---</option>
                                            <option value="Ton">Ton</option>
                                            <option value="Liter">Liter</option>
                                            <option value="Pp">Pp</option>
                                            <option value="M2">M2</option>
                                            <option value="M3">M3</option>
                                            <option value="Kg">Kg</option>
                                            <option value="Drum">Drum</option>
                                            <option value="Lokasi">Lokasi</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Jumlah</label>
                                        <input type="text" name="jumlah" class="form-control">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Harga</label>
                                        <input type="text" name="harga_satuan" class="form-control">
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
                <h6 class="m-0 font-weight-bold text-primary">Aspal</h6>
            </div>
            <div class="card-body">
                <?php foreach ($get_detail_aspal as $row) : ?>
                    <h4 style="text-align:center"><?= $row['marketing'] ?></h4>
                    <h4 style="text-align:center"><?= $row['nama_proyek'] ?></h4>
                <?php endforeach; ?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Item</th>
                                <th>Ketebalan</th>
                                <th>Satuan</th>
                                <th>Jumlah</th>
                                <th>Harga Satuan</th>
                                <th>Hapus</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($detail_aspal as $row) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $row->item ?></td>
                                    <td><?= $row->ketebalan ?></td>
                                    <td><?= $row->satuan ?></td>
                                    <td><?= $row->jumlah ?></td>
                                    <td><?= $row->harga_satuan ?></td>
                                    <?php if ($row->status == "1") { ?>
                                        <td><a href="#" class="btn btn-warning">Penawaran Apporved</a></td>
                                    <?php } else { ?>
                                        <td><a href="<?= base_url() ?>Aspal/hapus_permintaan/<?= $row->ids ?>" class="btn btn-warning">Hapus</a></td>
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