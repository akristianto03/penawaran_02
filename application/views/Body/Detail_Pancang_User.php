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
            <?php foreach($get_detail_pancang as $row ):?>
                <?php if($row['status'] == "1") {?>
                    <!-- <h1>Mohon Maaf Penawaran sudah di otoriasasi anda tidak dapat mengubah apapun</h1> -->
                <?php } else {?>
                    <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modalPancang">Masukkan Barang</button>
                <?php } ?>
            <?php endforeach;?>
            <div class="modal fade" id="modalPancang" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Data Tiang Pancang</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url()?>Pancang/add_permintaan_pancang" method="POST" enctype="multipart/form-data">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>Marketing</label>
                                        <input type="text" name="marketing" value="<?= $_SESSION['username']?>" class="form-control" readonly>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Produk</label>
                                        <input type="text" name="produk" value="<?php foreach($get_detail_pancang as $row):?><?= $row['produk']?><?php endforeach;?>" class="form-control" readonly>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Nama & Lokasi Proyek</label>
                                        <input type="text" name="nama_proyek" value="<?php foreach($get_detail_pancang as $row):?><?= $row['nama_proyek']?><?php endforeach;?>" class="form-control" readonly>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Material</label>
                                        <select name="item" class="form-control">
                                            <?php foreach($get_detail_pancang as $row):?> 
                                                <?php if($row['include'] == 'Barang & Jasa') {?>
                                                    <option value="">---Silahkan Pilih---</option>
                                                    <option value="Tiang Pancang 20x20">Tiang Pancang 20x20</option>
                                                    <option value="Tiang Pancang 25x25">Tiang Pancang 25x25</option>
                                                    <option value="Tiang Pancang 30x30">Tiang Pancang 30x30</option>
                                                    <option value="Tiang Pancang 35x35">Tiang Pancang 35x35</option>
                                                    <option value="Tiang Pancang 40x40">Tiang Pancang 40x40</option>
                                                    <option value="Jasa Inject Tiang Pancang 20x20">Jasa Inject Tiang Pancang 20x20</option>
                                                    <option value="Jasa Inject Tiang Pancang 25x25">Jasa Inject Tiang Pancang 25x25</option>
                                                    <option value="Jasa Inject Tiang Pancang 30x30">Jasa Inject Tiang Pancang 30x30</option>
                                                    <option value="Jasa Inject Tiang Pancang 35x35">Jasa Inject Tiang Pancang 35x35</option>
                                                    <option value="Jasa Inject Tiang Pancang 40x40">Jasa Inject Tiang Pancang 40x40</option>
                                                    <option value="Mob De Mob (90 T)">Mob De Mob (90 T)</option>
                                                    <option value="Mob De Mob (120 T)">Mob De Mob (120 T)</option>
                                                    <option value="Mob De Mob (260 T)">Mob De Mob (260 T)</option>
                                                    <option value="Penurunan Tiang">Penurunan Tiang</option>
                                                    <option value="Pengelasan Joint">Pengelasan Joint</option>
                                                    <option value="Ongkos Kirim">Ongkos Kirim</option>
                                                <?php } if($row['include'] == 'Barang') {?>
                                                    <option value="">---Silahkan Pilih---</option>
                                                    <option value="Tiang Pancang 20x20">Tiang Pancang 20x20</option>
                                                    <option value="Tiang Pancang 25x25">Tiang Pancang 25x25</option>
                                                    <option value="Tiang Pancang 30x30">Tiang Pancang 30x30</option>
                                                    <option value="Tiang Pancang 35x35">Tiang Pancang 35x35</option>
                                                    <option value="Tiang Pancang 40x40">Tiang Pancang 40x40</option>
                                                    <option value="Mob De Mob (90 T)">Mob De Mob (90 T)</option>
                                                    <option value="Mob De Mob (120 T)">Mob De Mob (120 T)</option>
                                                    <option value="Mob De Mob (260 T)">Mob De Mob (260 T)</option>
                                                    <option value="Penurunan Tiang">Penurunan Tiang</option>
                                                    <option value="Pengelasan Joint">Pengelasan Joint</option>
                                                    <option value="Ongkos Kirim">Ongkos Kirim</option>
                                                <?php } if($row['include'] == 'Jasa') {?>
                                                    <option value="">---Silahkan Pilih---</option>
                                                    <option value="Jasa Inject Tiang Pancang 20x20">Jasa Inject Tiang Pancang 20x20</option>
                                                    <option value="Jasa Inject Tiang Pancang 25x25">Jasa Inject Tiang Pancang 25x25</option>
                                                    <option value="Jasa Inject Tiang Pancang 30x30">Jasa Inject Tiang Pancang 30x30</option>
                                                    <option value="Jasa Inject Tiang Pancang 35x35">Jasa Inject Tiang Pancang 35x35</option>
                                                    <option value="Jasa Inject Tiang Pancang 40x40">Jasa Inject Tiang Pancang 40x40</option>
                                                    <option value="Mob De Mob (90 T)">Mob De Mob (90 T)</option>
                                                    <option value="Mob De Mob (120 T)">Mob De Mob (120 T)</option>
                                                    <option value="Mob De Mob (260 T)">Mob De Mob (260 T)</option>
                                                    <option value="Penurunan Tiang">Penurunan Tiang</option>
                                                    <option value="Pengelasan Joint">Pengelasan Joint</option>
                                                    <option value="Ongkos Kirim">Ongkos Kirim</option>
                                                <?php }?>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Panjang (Meter)</label>
                                        <input type="text" id="numberonly" name="panjang" class="form-control">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Jumlah (Batang/Titik)</label>
                                        <input type="text" id="numberonly2" name="jumlah" class="form-control">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Volume Total</label>
                                        <input type="text" id="numberonly3" name="volume" class="form-control">
                                    </div>
                                    <?php 
                                    $username = $_SESSION['username'];
                                    if($username == "Zainul") {
                                    ?>
                                        <div class="form-group col-md-3">
                                            <label>Harga Satuan</label>
                                            <input type="text" name="harga_satuan" class="form-control">
                                        </div>
                                    <?php } else {?>
                                    <?php }?>
                                    <div class="form-group col-md-3">
                                        <label>Keterangan</label>
                                        <input type="text" name="keterangan" class="form-control">
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
                <h6 class="m-0 font-weight-bold text-primary">Tiang Pancang</h6>
            </div>
            <div class="card-body">
                <?php foreach($get_detail_pancang as $row):?>
                    <h4 style="text-align:center"><?= $row['marketing'] ?></h4>
                    <h4 style="text-align:center"><?= $row['nama_proyek'] ?></h4>
                <?php endforeach;?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Item</th>
                                <th>Jumlah</th>
                                <th>Panjang</th>
                                <th>Volume Total</th>
                                <?php 
                                    $username = $_SESSION['username'];
                                    if($username == "Zainul") {
                                    ?>
                                <th>Harga Satuan</th>
                                <?php } else {?>
                                <?php }?>
                                <th>Keterangan</th>
                                <th>Hapus</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            foreach($detail_pancang as $row ):?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $row->item?></td>
                                <td><?= $row->jumlah?></td>
                                <td><?= $row->panjang?></td>
                                <td><?= $row->volume?></td>
                                <?php 
                                $username = $_SESSION['username'];
                                if($username == "Zainul") { ?>
                                    <td><?= $row->harga_satuan?></td>
                                <?php } else {?>
                                <?php }?>
                                <td><?= $row->keterangan?></td>
                                <?php if($row->status == "1") {?>
                                    <td><a href="#" class="btn btn-warning">Penawaran Apporved</a></td>
                                <?php } else {?>
                                    <td><a href="<?= base_url()?>Pancang/hapus_permintaan/<?= $row->ids?>" class="btn btn-warning">Hapus</a></td>
                                <?php } ?>
                            </tr>
                            <?php endforeach;?>
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
  return /^-?\d*[.,]?\d*$/.test(value);  });
setInputFilter(document.getElementById("numberonly2"), function(value) {
  return /^-?\d*[.,]?\d*$/.test(value);  });
setInputFilter(document.getElementById("numberonly3"), function(value) {
  return /^-?\d*[.,]?\d*$/.test(value);  });
</script>