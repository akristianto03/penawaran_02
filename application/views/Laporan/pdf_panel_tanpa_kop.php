<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Laporan</title>
  <link href="<?= base_url() ?>assets/css/sb-admin-2.min.css" rel="stylesheet">
  <style>
    body {
      font-size: 12px;
      margin-left: 10px;
      margin-right: 10px;
      font-family: "Times New Roman", Times, sans-serif;
    }

    .tabless {
      border-collapse: collapse;
      width: 100%;
    }

    .tds {
      border: 1px solid #000;
      text-align: left;
      padding: 1px;
    }

    .ths {
      border: 1px solid #000;
      color: white;
      padding: 1px;
      background-color: #ec3289;
    }

    ol {
      padding-left: 1.8em;
      margin-top: 3.5px;
    }

    p,
    strong {
      margin: 0;
      padding: 0;
    }
  </style>
</head>

<body>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <div style="position:absolute;top:-64px !important;left:-60px !important;"><img src="" style="height:160px;width:800px"></div>
  <div style="position:absolute;bottom:-50px !important;left:-60px !important;"><img src="" style="height:160px;width:800px"></div>
  <p align="center">
    PENAWARAN HARGA PAGAR PANEL
    <br>
    <b>No. <?php foreach ($pdf_data_all_panel as $row) : ?><?= $row['no_surat'] ?><?php endforeach; ?>/
      <?php foreach ($pdf_data_all_panel as $row) : ?>
        <?php if ($row['marketing'] == 'Harris') { ?>
          <?php echo 'HPH' ?>
        <?php } else { ?>
          <?= substr(strtoupper($row['marketing']), 0, 3) ?>
        <?php } ?>
        <?php endforeach; ?>/
        <?php foreach ($pdf_data_bulan_panel as $row) : ?>
          <?php if ($row['tanggal'] == '1') { ?>
            <?php echo 'I' ?>
          <?php } elseif ($row['tanggal'] == '2') { ?>
            <?php echo 'II' ?>
          <?php } elseif ($row['tanggal'] == '3') { ?>
            <?php echo 'III' ?>
          <?php } elseif ($row['tanggal'] == '4') { ?>
            <?php echo 'IV' ?>
          <?php } elseif ($row['tanggal'] == '5') { ?>
            <?php echo 'V' ?>
          <?php } elseif ($row['tanggal'] == '6') { ?>
            <?php echo 'VI' ?>
          <?php } elseif ($row['tanggal'] == '7') { ?>
            <?php echo 'VII' ?>
          <?php } elseif ($row['tanggal'] == '8') { ?>
            <?php echo 'VIII' ?>
          <?php } elseif ($row['tanggal'] == '9') { ?>
            <?php echo 'IX' ?>
          <?php } elseif ($row['tanggal'] == '10') { ?>
            <?php echo 'X' ?>
          <?php } elseif ($row['tanggal'] == '11') { ?>
            <?php echo 'XI' ?>
          <?php } elseif ($row['tanggal'] == '12') { ?>
            <?php echo 'XII' ?>
          <?php } ?>
          <?php endforeach; ?>/
          <?php foreach ($pdf_data_tahun_panel as $row) : ?><?= $row['tanggal'] ?><?php endforeach; ?>
  </p>
  <p align="right" style="font-weight:bold">Surabaya,
    <?php foreach ($pdf_data_tanggal_panel as $row) : ?>
      <?= $row['tanggal'] ?>
    <?php endforeach; ?>
    <?php foreach ($pdf_data_bulan_panel as $row) : ?>
      <?php if ($row['tanggal'] == '1') { ?>
        <?php echo 'Januari' ?>
      <?php } elseif ($row['tanggal'] == '2') { ?>
        <?php echo 'Februari' ?>
      <?php } elseif ($row['tanggal'] == '3') { ?>
        <?php echo 'Maret' ?>
      <?php } elseif ($row['tanggal'] == '4') { ?>
        <?php echo 'April' ?>
      <?php } elseif ($row['tanggal'] == '5') { ?>
        <?php echo 'Mei' ?>
      <?php } elseif ($row['tanggal'] == '6') { ?>
        <?php echo 'Juni' ?>
      <?php } elseif ($row['tanggal'] == '7') { ?>
        <?php echo 'Juli' ?>
      <?php } elseif ($row['tanggal'] == '8') { ?>
        <?php echo 'Agustus' ?>
      <?php } elseif ($row['tanggal'] == '9') { ?>
        <?php echo 'September' ?>
      <?php } elseif ($row['tanggal'] == '10') { ?>
        <?php echo 'Oktober' ?>
      <?php } elseif ($row['tanggal'] == '11') { ?>
        <?php echo 'November' ?>
      <?php } elseif ($row['tanggal'] == '12') { ?>
        <?php echo 'Desember' ?>
      <?php } ?>
    <?php endforeach; ?>
    <?php foreach ($pdf_data_tahun_panel as $row) : ?><?= $row['tanggal'] ?><?php endforeach; ?>
  </p>
  <strong>A. DATA CUSTOMER & PROYEK</strong>
  <table class="tabless">
    <thead>
      <tr>
        <th colspan="2" class="ths" align="center">DATA CUSTOMER</th>
        <th colspan="2" class="ths" align="center">DATA PROYEK</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($pdf_data_all_panel as $row) : ?>
        <tr>
          <td class="tds">Nama Instansi</td>
          <td class="tds"><?= $row['nama_instansi'] ?></td>
          <td class="tds">Nama Proyek</td>
          <td class="tds"><?= $row['nama_proyek'] ?></td>
        </tr>
        <tr>
          <td class="tds">Alamat Kantor</td>
          <td class="tds"><?= $row['alamat_customer'] ?></td>
          <td class="tds">Periode Pelaksanaan</td>
          <td class="tds"><?= $row['periode_pelaksana'] ?></td>
        </tr>
        <tr>
          <td class="tds">Contact Person</td>
          <td class="tds"><?= $row['nama_customer'] ?></td>
          <td class="tds">Penanggung Jawab Lapangan</td>
          <td class="tds"><?= $row['nama_penanggung_jawab'] ?></td>
        </tr>
        <tr>
          <td class="tds">Mobile Phone</td>
          <td class="tds"><?= $row['telepon_customer'] ?></td>
          <td class="tds">Mobile Phone</td>
          <td class="tds"><?= $row['telepon_penanggung_jawab'] ?></td>
        </tr>
        <tr>
          <td class="tds">Email</td>
          <td class="tds"><?= $row['email'] ?></td>
          <td class="tds">Alamat Penagihan</td>
          <td class="tds"><?= $row['alamat_penagihan'] ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

  <strong>B. SPESIFIKASI & HARGA</strong>
  <table class="tabless">
    <thead>
      <tr>
        <th class="ths" style="text-align:left !important">No.</th>
        <th class="ths" style="text-align:left !important">Item</th>
        <th class="ths" style="text-align:left !important">Jumlah</th>
        <th class="ths" style="text-align:left !important">Satuan</th>
        <th class="ths" style="text-align:left !important">Harga Satuan</th>
        <th class="ths" style="text-align:left !important">Total Harga</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no = 1;
      foreach ($pdf_data_permintaan_panel as $row) :
      ?>
        <tr>
          <td class="tds"><?= $no++ ?></td>
          <td class="tds"><?= $row->item ?></td>
          <td class="tds"><?= $row->jumlah ?></td>
          <td class="tds"><?= $row->satuan ?></td>
          <td class="tds">Rp. <?= number_format($row->harga_satuan, 2, ',', '.') ?></td>
          <td class="tds">Rp. <?= number_format($row->total_perkalian, 2, ',', '.') ?></td>
        </tr>
      <?php endforeach; ?>
      <?php
      foreach ($pdf_total_jumlah as $rows) :
      ?>
        <tr>
          <td class="tds" colspan="5">Total</td>
          <td class="tds">Rp. <?= number_format($rows['total_jumlah'], 2, ',', '.') ?></td>
        </tr>
      <?php endforeach; ?>
      <?php
      foreach ($pdf_hitung_ppn as $rows) :
      ?>
        <tr>
          <td class="tds" colspan="5">Total PPN</td>
          <?php if ($rows['ppn'] == 'Ya') { ?>
            <td class="tds">Rp. <?= number_format($rows['total_ppn'], 2, ',', '.') ?></td>
          <?php } else { ?>
            <td class="tds">Rp. 0</td>
          <?php } ?>
        </tr>
      <?php endforeach; ?>
      <?php
      foreach ($pdf_total_jumlah_total_ppn as $rows) :
      ?>
        <tr>
          <td class="tds" colspan="5">Total BAYAR</td>
          <?php if ($rows['ppn'] == 'Ya') { ?>
            <td class="tds">Rp. <?= number_format($rows['total_ppn'] + $rows['total_jumlah'], 2, ',', '.') ?></td>
          <?php } else { ?>
            <td class="tds">Rp. <?= number_format($rows['total_jumlah'], 2, ',', '.') ?></td>
          <?php } ?>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

  <!-- KETERANGAN  TAMBAHAN JIKA ADA -->
  <?php foreach ($pdf_data_all_panel as $row) : ?>
    <?php if ($row['keterangan_tambahan'] != NULL) { ?>
      <strong>Keterangan Tambahan :</strong>
      <p><?= nl2br($row['keterangan_tambahan']) ?></p>
    <?php } else { ?>
    <?php } ?>
  <?php endforeach; ?>

  <strong>C. SYARAT & KETENTUAN</strong>
  <ol>
    <li>Harga SUDAH TERMASUK PENGIRIMAN SAMPAI KE LOKASI</li>
    <li>Bila muatan tidak mencapai jumlah penuh, maka pembeli akan dikenakan ongkos kirim</li>
    <li>Harga sewaktu-waktu dapat berubah, apabila terjadi force majeure, perubahan moneter, BBM, dari pemerintah</li>
    <li>Biaya pengetesan di laboratorium independent menjadi tanggungan pemberi tugas</li>
    <li>Harga belum termasuk biaya langsir, jika mobil tidak bisa masuk ke lokasi proyek</li>
  </ol>
  <strong>D. SYARAT & METODE PEMBAYARAN</strong>
  <ol>
    <?php foreach ($pdf_data_all_panel as $row) : ?>
      <?php if ($row['ppn'] == 'Ya') { ?>
        <b>Harga Sudah Termasuk PPN</b>
        <p>Nomor Rekening : 1840628899</p>
        <p>Bank : BCA</p>
        <p>Atas Nama : PT BUMINDO SAKTI</p>
      <?php } else { ?>
        <b>Harga Belum Termasuk PPN</b>
        <!-- <p>Nomor Rekening : 6170809899</p>
        <p>Bank : BCA</p>
        <p>Atas Nama : Harris Pratama Halim Mohon menyertakan bukti transfer, Terimakasih banyak</p> -->
      <?php } ?>
    <?php endforeach; ?>
    <?php foreach ($pdf_data_all_panel as $row) : ?>
      <p><?= nl2br($row['metode_pembayaran']) ?></p>
    <?php endforeach; ?>
  </ol>
  <p>Demikian penawaran harga dari kami, besar harapan kami untuk menjalin kerjasama yang baik dengan bapak/ibu.Atas perhatian dan kerjasamanya kami ucapkan terimakasih</p>

  <table class="tabless">
    <thead>
      <tr>
        <th align="left">Hormat Kami</th>
        <th align="right" style="margin-right:20px !important">Disetujui Oleh,</th>
      </tr>
    </thead>
    <br>
    <br>
  </table>
  <table class="tabless" style="margin-top:50px">
    <thead>
      <?php foreach ($pdf_data_all_panel as $row) : ?>
        <?php if ($row['marketing'] == 'Selvy') { ?>
          <tr>
            <th align="left" style="text-decoration: underline;">Selvy Lestari Halim</th>
            <th align="right">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</th>
          </tr>
        <?php } elseif ($row['marketing'] == 'Harris') { ?>
          <tr>
            <th align="left" style="text-decoration: underline;">Harris Pratama Halim</th>
            <th align="right">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</th>
          </tr>
        <?php } elseif ($row['marketing'] == 'Yoshua') { ?>
          <tr>
            <th align="left" style="text-decoration: underline;">Yoshua Ian Torana</th>
            <th align="right">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</th>
          </tr>
        <?php } elseif ($row['marketing'] == 'Adhitya') { ?>
          <tr>
            <th align="left" style="text-decoration: underline;">Adhitya Eka Widagdo</th>
            <th align="right">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</th>
          </tr>
        <?php } elseif ($row['marketing'] == 'Wikan') { ?>
          <tr>
            <th align="left" style="text-decoration: underline;">Bramantya Wikan Driasmara</th>
            <th align="right">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</th>
          </tr>
        <?php } elseif ($row['marketing'] == 'Teryluana') { ?>
          <tr>
            <th align="left" style="text-decoration: underline;">Teryluana Septian</th>
            <th align="right">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</th>
          </tr>
        <?php } elseif ($row['marketing'] == 'Taufik') { ?>
          <tr>
            <th align="left" style="text-decoration: underline;">Taufik Arianto</th>
            <th align="right">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</th>
          </tr>
        <?php } elseif ($row['marketing'] == 'Indra') { ?>
          <tr>
            <th align="left" style="text-decoration: underline;">Indra Purwono S</th>
            <th align="right">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</th>
          </tr>
        <?php } elseif ($row['marketing'] == 'Jeffryanto') { ?>
          <tr>
            <th align="left" style="text-decoration: underline;">Jeffryanto</th>
            <th align="right">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</th>
          </tr>
        <?php } elseif ($row['marketing'] == 'Zainul') { ?>
          <tr>
            <th align="left" style="text-decoration: underline;">Zainul</th>
            <th align="right">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</th>
          </tr>
        <?php } elseif ($row['marketing'] == 'Syamsul') { ?>
          <tr>
            <th align="left" style="text-decoration: underline;">Much. Syamsul Arif</th>
            <th align="right">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</th>
          </tr>
        <?php } elseif ($row['marketing'] == 'Andri') { ?>
          <tr>
            <th align="left" style="text-decoration: underline;">Andri Susanto</th>
            <th align="right">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</th>
          </tr>
        <?php } elseif ($row['marketing'] == 'Slamet') { ?>
          <tr>
            <th align="left" style="text-decoration: underline;">Slamet Deni Dwi Harnowo</th>
            <th align="right">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</th>
          </tr>
        <?php } elseif ($row['marketing'] == 'Magusmub') { ?>
          <tr>
            <th align="left" style="text-decoration: underline;">M Agus Mubarok</th>
            <th align="right">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</th>
          </tr>
        <?php } elseif ($row['marketing'] == 'yancesetio') { ?>
          <tr>
            <th align="left" style="text-decoration: underline;">Yance Setio Utomo</th>
            <th align="right">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</th>
          </tr>
        <?php } elseif ($row['marketing'] == 'candra5758') { ?>
          <tr>
            <th align="left" style="text-decoration: underline;">Candra Bagus</th>
            <th align="right">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</th>
          </tr>
        <?php } elseif ($row['marketing'] == 'Nico') { ?>
          <tr>
            <th align="left" style="text-decoration: underline;">Niko Aziz Firmansyah</th>
            <th align="right">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</th>
          </tr>
        <?php } elseif ($row['marketing'] == 'Agung') { ?>
          <tr>
            <th align="left" style="text-decoration: underline;">Agung Aditia Darma</th>
            <th align="right">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</th>
          </tr>
        <?php } elseif ($row['marketing'] == 'Mohamad') { ?>
          <tr>
            <th align="left" style="text-decoration: underline;">Mohamad Eko Wicahyo</th>
            <th align="right">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</th>
          </tr>
        <?php } ?>
      <?php endforeach; ?>
    </thead>
    <!-- <tbody>
        <tr>
          <td>082134337473</td>
        </tr>
      </tbody> -->
  </table>


</body>

</html>