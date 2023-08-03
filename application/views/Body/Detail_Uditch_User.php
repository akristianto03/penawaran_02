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
            <?php foreach($get_detail_uditch as $row ):?>
                <?php if($row['status'] == "1") {?>
                    <!-- <h1>Mohon Maaf Penawaran sudah di otoriasasi anda tidak dapat mengubah apapun</h1> -->
                <?php } else {?>
                    <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modalUditch">Masukkan Barang</button>
                <?php } ?>
            <?php endforeach;?>
            <div class="modal fade" id="modalUditch" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Data Uditch</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url()?>Uditch/add_permintaan_uditch" method="POST" enctype="multipart/form-data">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>Marketing</label>
                                        <input type="text" name="marketing" value="<?= $_SESSION['username']?>" class="form-control" readonly>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Produk</label>
                                        <input type="text" name="produk" value="<?php foreach($get_detail_uditch as $row):?><?= $row['produk']?><?php endforeach;?>" class="form-control" readonly>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Nama & Lokasi Proyek</label>
                                        <input type="text" name="nama_proyek" value="<?php foreach($get_detail_uditch as $row):?><?= $row['nama_proyek']?><?php endforeach;?>" class="form-control" readonly>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Item</label>
                                        <input type="text" name="item" class="form-control">
                                        <!--<select name="item" class="form-control">-->
                                        <!--    <option value="U-Ditch">U-Ditch</option>-->
                                        <!--    <option value="Cover">Cover</option>-->
                                        <!--    <option value="Box Culvert">Box Culvert</option>-->
                                        <!--    <option value="Double U Box">Double U Box</option>-->
                                        <!--    <option value="Ongkir">Ongkir</option>-->
                                        <!--</select>-->
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Beban Gandar(Ton)</label>
                                        <input type="text" name="beban_gandar" class="form-control">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Jumlah</label>
                                        <input type="text" name="jumlah" class="form-control">
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
                <h6 class="m-0 font-weight-bold text-primary">Uditch</h6>
            </div>
            <div class="card-body">
                <?php foreach($get_detail_uditch as $row):?>
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
                                <th>Beban Gandar</th>
                                <th>Hapus</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            foreach($detail_uditch as $row ):?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $row->item?></td>
                                <td><?= $row->jumlah?></td>
                                <td><?= $row->beban_gandar?></td>
                                <?php if($row->status == "1") {?>
                                    <td><a href="#" class="btn btn-warning">Penawaran Apporved</a></td>
                                <?php } else {?>
                                    <td><a href="<?= base_url()?>Uditch/hapus_permintaan/<?= $row->ids?>" class="btn btn-warning">Hapus</a></td>
                                <?php }?>
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
</script>