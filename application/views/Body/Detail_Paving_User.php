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
            <?php foreach ($get_detail_paving as $row) : ?>
                <?php if ($row['status'] == "1") { ?>
                    <!-- <h1>Mohon Maaf Penawaran sudah di otoriasasi anda tidak dapat mengubah apapun</h1> -->
                <?php } else { ?>
                    <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modalPaving">Masukkan Barang</button>
                <?php } ?>
            <?php endforeach; ?>
            <div class="modal fade" id="modalPaving" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Paving</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url() ?>Paving/add_permintaan_paving" method="POST" enctype="multipart/form-data">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>Marketing</label>
                                        <input type="text" name="marketing" value="<?= $_SESSION['username'] ?>" class="form-control" readonly>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Produk</label>
                                        <input type="text" name="produk" value="<?php foreach ($get_detail_paving as $row) : ?><?= $row['produk'] ?><?php endforeach; ?>" class="form-control" readonly>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Nama & Lokasi Proyek</label>
                                        <input type="text" name="nama_proyek" value="<?php foreach ($get_detail_paving as $row) : ?><?= $row['nama_proyek'] ?><?php endforeach; ?>" class="form-control" readonly>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Item</label>
                                        <select name="item" class="form-control">
                                            <option value="">---Silahkan Pilih---</option>
                                            <option value="Persegi Panjang tb. 6cm (1 M2 = 43 pcs)">Persegi Panjang tb. 6cm</option>
                                            <option value="Persegi Panjang tb. 8cm (1 M2 = 43 pcs)">Persegi Panjang tb. 8cm</option>
                                            <option value="Persegi Panjang tb. 10cm (1 M2 = 43 pcs)">Persegi Panjang tb. 10cm</option>
                                            <option value="Persegi 10.5 x 10.5 cm tb. 6 cm (1 M2 = 86 pcs)">Persegi 10.5 x 10.5 cm tb. 6 cm</option>
                                            <option value="Persegi 10.5 x 10.5 cm tb. 8 cm (1 M2 = 86 pcs)">Persegi 10.5 x 10.5 cm tb. 8 cm</option>
                                            <option value="Topi Uskup tb. 6cm (1 M2 = 24 pcs)">Topi Uskup tb. 6cm</option>
                                            <option value="Uskup X3 tb. 6 cm (1 M2 = 24 pcs)">Uskup X3 tb. 6 cm</option>
                                            <option value="Topi Uskup tb. 8cm (1 M2 = 24 pcs)">Topi Uskup tb. 8cm</option>
                                            <option value="Uskup X3 tb. 8 cm (1 M2 = 24 pcs)">Uskup X3 tb. 8 cm</option>
                                            <option value="Topi Uskup tb. 10cm (1 M2 = 24 pcs)">Topi Uskup tb. 10cm</option>
                                            <option value="Corso 21x21 cm tb. 6cm (1 M2 = 22 pcs)">Corso 21x21 cm tb. 6cm</option>
                                            <option value="Corso 50x50 cm tb. 6cm (1 M2 = 4 pcs)">Corso 50x50 cm tb. 6cm</option>
                                            <option value="Corso 21x21 cm tb. 8cm (1 M2 = 22 pcs)">Corso 21x21 cm tb. 8cm</option>
                                            <option value="Rombo (3D) tb. 6cm (1 M2 = 30 pcs)">Rombo (3D) tb. 6cm</option>
                                            <option value="Rombo (3D) tb. 8cm (1 M2 = 30 pcs)">Rombo (3D) tb. 8cm</option>
                                            <option value="Classico tb. 6cm (1 M2 = 66 pcs)">Classico tb. 6cm</option>
                                            <option value="Classico tb. 8cm (1 M2 = 66 pcs)">Classico tb. 8cm</option>
                                            <option value="Kampak tb. 6cm (1 M2 = 22 pcs)">Kampak tb. 6cm</option>
                                            <option value="Kampak tb. 8cm (1 M2 = 22 pcs)">Kampak tb. 8cm</option>
                                            <option value="Kanstin 10.20.40">Kanstin 10.20.40</option>
                                            <option value="Kanstin 15.25.40">Kanstin 15.25.40</option>
                                            <option value="Kanstin 20.30.50">Kanstin 20.30.50</option>
                                            <option value="Kanstin 15.30.50">Kanstin 15.30.50</option>
                                            <option value="Kanstin IV 20">Kanstin IV 20</option>
                                            <option value="Kanstin 31,5 x 20 x 20">Kanstin 31,5 x 20 x 20</option>
                                            <option value="Street inlet 30 x 20 + tutup">Street inlet 30 x 20 + tutup</option>
                                            <option value="Stripping/Levelling Lahan">Stripping/Levelling Lahan</option>
                                            <option value="Pemadatan Lahan">Pemadatan Lahan</option>
                                            <option value="Pemasangan Kanstin">Pemasangan Kanstin</option>
                                            <option value="Pemasangan Paving">Pemasangan Paving</option>
                                            <option value="Ongkos Kirim">Ongkos Kirim</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Mutu Beton</label>
                                        <select name="mutu_beton" class="form-control">
                                            <option value="">-Kosong-</option>
                                            <option value="K-175">K-175</option>
                                            <option value="K-225">K-225</option>
                                            <option value="K-300">K-300</option>
                                            <option value="K-350">K-350</option>
                                            <option value="K-400">K-400</option>
                                            <option value="K-500">K-500</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Warna</label>
                                        <select name="warna" class="form-control">
                                            <option value="">-Kosong-</option>
                                            <option value="Abu-Abu">Abu-Abu</option>
                                            <option value="Merah">Merah</option>
                                            <option value="Hijau">Hijau</option>
                                            <option value="Kuning">Kuning</option>
                                            <option value="Biru">Biru</option>
                                            <option value="Hitam">Hitam</option>
                                            <option value="Putih">Putih</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Satuan</label>
                                        <select name="satuan" class="form-control">
                                            <option value="">-Kosong-</option>
                                            <option value="PCS">PCS</option>
                                            <option value="M2">M2</option>
                                            <option value="Ls">Ls</option>
                                            <option value="M'">M'</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Jumlah</label>
                                        <input type="text" id="numberonly" name="jumlah" class="form-control">
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
                <h6 class="m-0 font-weight-bold text-primary">Paving</h6>
            </div>
            <div class="card-body">
                <?php foreach ($get_detail_paving as $row) : ?>
                    <h4 style="text-align:center"><?= $row['marketing'] ?></h4>
                    <h4 style="text-align:center"><?= $row['nama_proyek'] ?></h4>
                <?php endforeach; ?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Item</th>
                                <th>Mutu Beton</th>
                                <th>Warna</th>
                                <th>Jumlah</th>
                                <th>Satuan</th>
                                <th>Harga</th>
                                <th>Hapus</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($detail_paving as $row) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $row->item ?></td>
                                    <td><?= $row->mutu_beton ?></td>
                                    <td><?= $row->warna ?></td>
                                    <td><?= $row->jumlah ?></td>
                                    <td><?= $row->satuan ?></td>
                                    <td><?= $row->harga_satuan ?></td>
                                    <?php if ($row->status == "1") { ?>
                                        <td><a href="#" class="btn btn-warning">Penawaran Apporved</a></td>
                                    <?php } else { ?>
                                        <td><a href="<?= base_url() ?>Paving/hapus_permintaan/<?= $row->ids ?>" class="btn btn-warning">Hapus</a></td>
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