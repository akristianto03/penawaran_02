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
      margin-top: 0px;
    }

    p,
    strong {
      margin: 0px;
      padding: 0px;
    }
  </style>
</head>

<body>
  <div style="position:absolute;top:-45px !important;left:-60px !important;"><img src="./assets/kop_surat/header_new.png" style="height:160px;width:800px"></div>
  <hr class="line-title" style="margin-top:85px;color:white;opacity:0.2px">
  <div style="position:absolute;bottom:-50px !important;left:-60px !important;"><img src="./assets/kop_surat/footer_new.png" style="height:120px;width:800px"></div>
  <p align="center">
    PENAWARAN HARGA ASPAL
    <br>
    <b>No. <?php foreach ($pdf_data_all_aspal as $row) : ?><?= $row['no_surat'] ?><?php endforeach; ?>/
      <?php foreach ($pdf_data_all_aspal as $row) : ?>
        <?php if ($row['marketing'] == 'Harris') { ?>
          <?php echo 'HPH' ?>
        <?php } else { ?>
          <?= substr(strtoupper($row['marketing']), 0, 3) ?>
        <?php } ?>
        <?php endforeach; ?>/
        <?php foreach ($pdf_data_bulan_aspal as $row) : ?>
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
          <?php foreach ($pdf_data_tahun_aspal as $row) : ?><?= $row['tanggal'] ?><?php endforeach; ?>
  </p>
  <p align="right" style="font-weight:bold">Surabaya,
    <?php foreach ($pdf_data_tanggal_aspal as $row) : ?>
      <?= $row['tanggal'] ?>
    <?php endforeach; ?>
    <?php foreach ($pdf_data_bulan_aspal as $row) : ?>
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
    <?php foreach ($pdf_data_tahun_aspal as $row) : ?><?= $row['tanggal'] ?><?php endforeach; ?>
  </p>
  <strong>1. DATA CUSTOMER & PROYEK</strong>
  <table class="tabless">
    <thead>
      <tr>
        <th colspan="2" class="ths" align="center">DATA CUSTOMER</th>
        <th colspan="2" class="ths" align="center">DATA PROYEK</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($pdf_data_all_aspal as $row) : ?>
        <tr>
          <td class="tds">Nama Instansi</td>
          <td class="tds"><?= $row['nama_instansi'] ?></td>
          <td class="tds">Nama & Lokasi Proyek</td>
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

  <strong>2. SPESIFIKASI & HARGA</strong>
  <table class="tabless">
    <thead>
      <tr>
        <th class="ths" style="text-align:left !important">No.</th>
        <th class="ths" style="text-align:left !important">Item</th>
        <th class="ths" style="text-align:left !important">Ketebalan (CM)</th>
        <th class="ths" style="text-align:left !important">Jumlah</th>
        <th class="ths" style="text-align:left !important">Satuan</th>
        <th class="ths" style="text-align:left !important">Harga Satuan</th>
        <th class="ths" style="text-align:left !important">Total Harga</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no = 1;
      foreach ($pdf_data_permintaan_aspal as $row) :
      ?>
        <tr>
          <td class="tds"><?= $no++ ?></td>
          <td class="tds"><?= $row->item ?></td>
          <td class="tds"><?= $row->ketebalan ?></td>
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
          <td class="tds" colspan="6">Total</td>
          <td class="tds">Rp. <?= number_format($rows['total_jumlah'], 2, ',', '.') ?></td>
        </tr>
      <?php endforeach; ?>

    </tbody>
  </table>

  <!-- KETERANGAN  TAMBAHAN JIKA ADA -->
  <?php foreach ($pdf_data_all_aspal as $row) : ?>
    <?php if ($row['keterangan_tambahan'] != NULL) { ?>
      <strong>Keterangan Tambahan :</strong>
      <p><?= nl2br($row['keterangan_tambahan']) ?></p>
    <?php } else { ?>
    <?php } ?>
  <?php endforeach; ?>

  <strong>3. SYARAT & KETENTUAN</strong>
  <?php foreach ($pdf_data_all_aspal as $row) : ?>
    <?php if ($row['include'] == 'Tergelar Manual') { ?>
      <ol>
        <li>Harga
          <ol>
            <li>Harga SUDAH TERMASUK PENGIRIMAN dan PENGHAMPARAN menggunakan metode MANUAL (Pemadatan menggunakan Baby Roller 1 Ton, pembersihan menggunakan sapu)</li>
            <li>Harga sewaktu-waktu dapat berubah, apabila terjadi force majeure, perubahan moneter, BBM, dari pemerintah</li>
            <li>Biaya pengetesan di laboratorium independent menjadi tanggungan pemberi tugas</li>
            <li>Harga belum termasuk pekerjaan tambahan yang timbul di lapangan diluar lingkup pekerjaan (pembersihan lahan, levelling, pemadatan tanah dasar existing)</li>
          </ol>
        </li>
        <li>Keterangan
          <ol>
            <li>Spesifikasi Teknis produk mengacu pada SPESIFIKASI UMUM KEMENTRIAN PUPR DIRJEN BINA MARGA TAHUN 2018</li>
            <li>Aspal yang digunakan adalah Aspal Ex. Pertamina dengan Penetrasi 60/70</li>
            <li>Jangka waktu penawaran berlaku 2 minggu sejak penawaran diterbitkan</li>
            <li>PT BUMINDO SAKTI tidak bertanggung jawab atas penurunan suhu dan kualitas apabila Hotmix tidak dibongkar setelah 4 jam terhitung dari jam sampai di lokasi akibat kelalaian dari pemberi tugas. contoh : kerusakan alat hampar(bila alat bukan dari PT Bumindo Sakti), keterlambatan manpower, keterlambatan datang pihak lain (konsultan/PU/pemberi tugas), cuaca hujan, belum mendapat perijinan dari warga setempat</li>
            <li>Kerusakan pada akses yang ditimbulkan armada pengiriman menjadi tanggung jawab pemberi tugas</li>
            <li>Pekerjaan dapat dilaksanakan setelah PO dikirimkan ke pihak kami</li>
            <li>Segala macam biaya perijinan, LSM, iuran merupakan tanggung jawab pemberi tugas </li>
            <li>Segala keamanan di lokasi proyek adalah tanggung jawab pemberi tugas, bila terjadi kehilangan atau kerusakan di lokasi proyek maka pemberi tugas wajib mengganti segala kerugian yang telah ditimbulkan</li>
          </ol>
        </li>
        <li>Syarat & Metode Pembayaran
          <ol>
            <?php foreach ($pdf_data_all_aspal as $row) : ?>
              <?php if ($row['ppn'] == 'Ya') { ?>
                <b>Harga Sudah Termasuk PPN</b>
                <p style="margin:0 !important">Nomor Rekening : 1840628899 BCA a/n PT Bumindo Sakti</p>
              <?php } else { ?>
                <b>Harga Belum Termasuk PPN</b>
                <p style="margin:0 !important">Nomor Rekening : 6170809899 BCA a/n Harris Pratama Halim Mohon menyertakan bukti transfer</p>
              <?php } ?>
            <?php endforeach; ?>
            <?php foreach ($pdf_data_all_aspal as $row) : ?>
              <p style="margin:0 !important"><?= nl2br($row['metode_pembayaran']) ?></p>
            <?php endforeach; ?>
          </ol>
        </li>
      </ol>
    <?php } elseif ($row['include'] == 'Tergelar Paverset') { ?>
      <ol>
        <li>Harga
          <ol>
            <li>Harga SUDAH TERMASUK PENGIRIMAN dan PENGHAMPARAN menggunakan PAVERSET yaitu : 1 Asphalt Finisher, 1 Tandem Roller, 1 Tyre Roller, 1 Asphalt Sprayer, 1 Compressor. Bila ada request penambahan alat khusus, maka harga akan disesuaikan</li>
            <li>Harga sewaktu-waktu dapat berubah, apabila terjadi force majeure, perubahan moneter, BBM, dari pemerintah</li>
            <li>Biaya pengetesan di laboratorium independent menjadi tanggungan pemberi tugas</li>
            <li>Harga belum termasuk pekerjaan tambahan yang timbul di lapangan diluar lingkup pekerjaan (pembersihan lahan, levelling, pemadatan tanah dasar existing)</li>
          </ol>
        </li>
        <li>Keterangan
          <ol>
            <li>Spesifikasi Teknis produk mengacu pada SPESIFIKASI UMUM KEMENTRIAN PUPR DIRJEN BINA MARGA TAHUN 2018</li>
            <li>Aspal yang digunakan adalah Aspal Ex. Pertamina dengan Penetrasi 60/70</li>
            <li>Jangka waktu penawaran berlaku 2 minggu sejak penawaran diterbitkan</li>
            <li>PT BUMINDO SAKTI tidak bertanggung jawab atas penurunan suhu dan kualitas apabila Hotmix tidak dibongkar setelah 4 jam terhitung dari jam sampai di lokasi akibat kelalaian dari pemberi tugas. contoh : kerusakan alat hampar(bila alat bukan dari PT Bumindo Sakti), keterlambatan manpower, keterlambatan datang pihak lain (konsultan/PU/pemberi tugas), cuaca hujan, belum mendapat perijinan dari warga setempat</li>
            <li>Kerusakan pada akses yang ditimbulkan armada pengiriman menjadi tanggung jawab pemberi tugas</li>
            <li>Pekerjaan dapat dilaksanakan setelah PO dikirimkan ke pihak kami</li>
            <li>Segala macam biaya perijinan, LSM, iuran merupakan tanggung jawab pemberi tugas </li>
            <li>Segala keamanan di lokasi proyek adalah tanggung jawab pemberi tugas, bila terjadi kehilangan atau kerusakan di lokasi proyek maka pemberi tugas wajib mengganti segala kerugian yang telah ditimbulkan</li>
          </ol>
        </li>
        <li>Syarat & Metode Pembayaran
          <ol>
            <?php foreach ($pdf_data_all_aspal as $row) : ?>
              <?php if ($row['ppn'] == 'Ya') { ?>
                <b>Harga Sudah Termasuk PPN</b>
                <p style="margin:0 !important">Nomor Rekening : 1840628899 BCA a/n PT Bumindo Sakti</p>
              <?php } else { ?>
                <b>Harga Belum Termasuk PPN</b>
                <p style="margin:0 !important">Nomor Rekening : 6170809899 BCA a/n Harris Pratama Halim Mohon menyertakan bukti transfer</p>
              <?php } ?>
            <?php endforeach; ?>
            <?php foreach ($pdf_data_all_aspal as $row) : ?>
              <p style="margin:0 !important"><?= nl2br($row['metode_pembayaran']) ?></p>
            <?php endforeach; ?>
          </ol>
        </li>
      </ol>
    <?php } elseif ($row['include'] == 'Loco') { ?>
      <ol>
        <li>Harga
          <ol>
            <li>Harga berlaku untuk pengambilan di lokasi plant PT BUMINDO SAKTI (Loco)</li>
            <li>Harga sewaktu-waktu dapat berubah, apabila terjadi force majeure, perubahan moneter, BBM, dari pemerintah</li>
            <li>Biaya pengetesan di laboratorium independent menjadi tanggungan pemberi tugas</li>
            <li>Harga belum termasuk pekerjaan tambahan yang timbul di lapangan diluar lingkup pekerjaan (pembersihan lahan, levelling, pemadatan tanah dasar existing)</li>
          </ol>
        </li>
        <li>Keterangan
          <ol>
            <li>Spesifikasi Teknis produk mengacu pada SPESIFIKASI UMUM KEMENTRIAN PUPR DIRJEN BINA MARGA TAHUN 2018</li>
            <li>Aspal yang digunakan adalah Aspal Ex. Pertamina dengan Penetrasi 60/70</li>
            <li>Jangka waktu penawaran berlaku 2 minggu sejak penawaran diterbitkan</li>
            <li>PT BUMINDO SAKTI tidak bertanggung jawab atas penurunan suhu dan kualitas apabila Hotmix tidak dibongkar setelah 4 jam terhitung dari jam sampai di lokasi akibat kelalaian dari pemberi tugas. contoh : kerusakan alat hampar(bila alat bukan dari PT Bumindo Sakti), keterlambatan manpower, keterlambatan datang pihak lain (konsultan/PU/pemberi tugas), cuaca hujan, belum mendapat perijinan dari warga setempat</li>
            <li>Pekerjaan dapat dilaksanakan setelah PO dikirimkan ke pihak kami</li>
          </ol>
        </li>
        <li>Syarat & Metode Pembayaran
          <ol>
            <?php foreach ($pdf_data_all_aspal as $row) : ?>
              <?php if ($row['ppn'] == 'Ya') { ?>
                <b>Harga Sudah Termasuk PPN</b>
                <p style="margin:0 !important">Nomor Rekening : 1840628899 BCA a/n PT Bumindo Sakti</p>
              <?php } else { ?>
                <b>Harga Belum Termasuk PPN</b>
                <p style="margin:0 !important">Nomor Rekening : 6170809899 BCA a/n Harris Pratama Halim Mohon menyertakan bukti transfer</p>
              <?php } ?>
            <?php endforeach; ?>
            <?php foreach ($pdf_data_all_aspal as $row) : ?>
              <p style="margin:0 !important"><?= nl2br($row['metode_pembayaran']) ?></p>
            <?php endforeach; ?>
          </ol>
        </li>
      </ol>
    <?php } elseif ($row['include'] == 'Franco') { ?>
      <ol>
        <li>Harga
          <ol>
            <li>Harga SUDAH TERMASUK PENGIRIMAN SAMPAI KE LOKASI (Franco)</li>
            <li>Minimal volume pengiriman adalah 10 ton, bila dibawah 10 ton maka akan dikenakan charge Rp. 50.000/ton hingga mencapai 10 ton</li>
            <li>Harga sewaktu-waktu dapat berubah, apabila terjadi force majeure, perubahan moneter, BBM, dari pemerintah</li>
            <li>Biaya pengetesan di laboratorium independent menjadi tanggungan pemberi tugas</li>
            <li>Harga belum termasuk pekerjaan tambahan yang timbul di lapangan diluar lingkup pekerjaan (pembersihan lahan, levelling, pemadatan tanah dasar existing)</li>
          </ol>
        </li>
        <li>Keterangan
          <ol>
            <li>Spesifikasi Teknis produk mengacu pada SPESIFIKASI UMUM KEMENTRIAN PUPR DIRJEN BINA MARGA TAHUN 2018</li>
            <li>Aspal yang digunakan adalah Aspal Ex. Pertamina dengan Penetrasi 60/70</li>
            <li>Jangka waktu penawaran berlaku 2 minggu sejak penawaran diterbitkan</li>
            <li>PT BUMINDO SAKTI tidak bertanggung jawab atas penurunan suhu dan kualitas apabila Hotmix tidak dibongkar setelah 4 jam terhitung dari jam sampai di lokasi akibat kelalaian dari pemberi tugas. contoh : kerusakan alat hampar(bila alat bukan dari PT Bumindo Sakti), keterlambatan manpower, keterlambatan datang pihak lain (konsultan/PU/pemberi tugas), cuaca hujan, belum mendapat perijinan dari warga setempat</li>
            <li>Kerusakan pada akses yang ditimbulkan armada pengiriman menjadi tanggung jawab pemberi tugas</li>
            <li>Pekerjaan dapat dilaksanakan setelah PO dikirimkan ke pihak kami</li>
            <li>Segala macam biaya perijinan, LSM, iuran merupakan tanggung jawab pemberi tugas </li>
            <li>Segala keamanan di lokasi proyek adalah tanggung jawab pemberi tugas, bila terjadi kehilangan atau kerusakan di lokasi proyek maka pemberi tugas wajib mengganti segala kerugian yang telah ditimbulkan</li>
          </ol>
        </li>
        <li>Syarat & Metode Pembayaran
          <ol>
            <?php foreach ($pdf_data_all_aspal as $row) : ?>
              <?php if ($row['ppn'] == 'Ya') { ?>
                <b>Harga Sudah Termasuk PPN</b>
                <p style="margin:0 !important">Nomor Rekening : 1840628899 BCA a/n PT Bumindo Sakti</p>
              <?php } else { ?>
                <b>Harga Belum Termasuk PPN</b>
                <!-- <p style="margin:0 !important">Nomor Rekening : 6170809899 BCA a/n Harris Pratama Halim Mohon menyertakan bukti transfer</p> -->
              <?php } ?>
            <?php endforeach; ?>
            <?php foreach ($pdf_data_all_aspal as $row) : ?>
              <p style="margin:0 !important"><?= nl2br($row['metode_pembayaran']) ?></p>
            <?php endforeach; ?>
          </ol>
        </li>
      </ol>
    <?php } ?>
  <?php endforeach; ?>
  <p style="margin:0 !important">Demikian penawaran harga dari kami, besar harapan kami untuk menjalin kerjasama yang baik dengan bapak/ibu. Atas perhatian dan kerjasamanya kami ucapkan terimakasih </p>

  <table class="tabless">
    <thead>
      <tr>
        <th align="left">Hormat Kami</th>
        <th align="right" style="margin-right:20px !important">Disetujui Oleh,</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($pdf_data_all_aspal as $row) : ?>
        <?php if ($row['marketing'] == 'Harris') { ?>
          <tr>
            <td>
              <div style="position:relative;top:25px;left:-30px"><img src="./assets/ttd/stempel.png" style="width:120px"></div>
              <div style="position:absolute;top:10px"><img src="./assets/ttd/harris.png" style="width:85px"></div>
            </td>
            <td align="right"></td>
          </tr>
        <?php } elseif ($row['marketing'] == 'Selvy') { ?>
          <tr>
            <td>
              <div style="position:relative;top:25px;left:-30px"><img src="./assets/ttd/stempel.png" style="width:120px"></div>
              <div style="position:absolute;top:10px"><img src="./assets/ttd/selvy.png" style="width:85px"></div>
            </td>
            <td align="right"></td>
          </tr>
        <?php } elseif ($row['marketing'] == 'Yoshua') { ?>
          <tr>
            <td>
              <div style="position:relative;top:25px;left:-30px"><img src="./assets/ttd/stempel.png" style="width:120px"></div>
              <div style="position:absolute;top:10px"><img src="./assets/ttd/yoshua.png" style="width:85px"></div>
            </td>
            <td align="right"></td>
          </tr>
        <?php } elseif ($row['marketing'] == 'Adhitya') { ?>
          <tr>
            <td>
              <div style="position:relative;top:25px;left:-30px"><img src="./assets/ttd/stempel.png" style="width:120px"></div>
              <div style="position:absolute;top:10px"><img src="./assets/ttd/adhitya.png" style="width:85px"></div>
            </td>
            <td align="right"></td>
          </tr>
        <?php } elseif ($row['marketing'] == 'Wikan') { ?>
          <tr>
            <td>
              <div style="position:relative;top:25px;left:-30px"><img src="./assets/ttd/stempel.png" style="width:120px"></div>
              <div style="position:absolute;top:-10px"><img src="./assets/ttd/wikan.png" style="width:140px"></div>
            </td>
            <td align="right"></td>
          </tr>
        <?php } elseif ($row['marketing'] == 'Teryluana') { ?>
          <tr>
            <td>
              <div style="position:relative;top:25px;left:-30px"><img src="./assets/ttd/stempel.png" style="width:120px"></div>
              <div style="position:absolute;top:10px"><img src="./assets/ttd/terry.png" style="width:85px"></div>
            </td>
            <td align="right"></td>
          </tr>
        <?php } elseif ($row['marketing'] == 'Taufik') { ?>
          <tr>
            <td>
              <div style="position:relative;top:25px;left:-30px"><img src="./assets/ttd/stempel.png" style="width:120px"></div>
              <div style="position:absolute;top:10px"><img src="./assets/ttd/taufik.png" style="width:85px"></div>
            </td>
            <td align="right"></td>
          </tr>
        <?php } elseif ($row['marketing'] == 'Indra') { ?>
          <tr>
            <td>
              <div style="position:relative;top:25px;left:-30px"><img src="./assets/ttd/stempel.png" style="width:120px"></div>
              <div style="position:absolute;top:10px"><img src="./assets/ttd/indra.png" style="width:85px"></div>
            </td>
            <td align="right"></td>
          </tr>
        <?php } elseif ($row['marketing'] == 'Jeffryanto') { ?>
          <tr>
            <td>
              <div style="position:relative;top:25px;left:-30px"><img src="./assets/ttd/stempel.png" style="width:120px"></div>
              <div style="position:absolute;top:10px"><img src="./assets/ttd/jeffryanto.png" style="width:85px"></div>
            </td>
            <td align="right"></td>
          </tr>
        <?php } elseif ($row['marketing'] == 'Zainul') { ?>
          <tr>
            <td>
              <div style="position:relative;top:25px;left:-30px"><img src="./assets/ttd/stempel.png" style="width:120px"></div>
              <div style="position:absolute;top:10px"><img src="./assets/ttd/zainul.png" style="width:250px !important;position:absolute;top:-30px;left:-70px"></div>
            </td>
            <td align="right"></td>
          </tr>
        <?php } elseif ($row['marketing'] == 'Syamsul') { ?>
          <tr>
            <td>
              <div style="position:relative;top:25px;left:-30px"><img src="./assets/ttd/stempel.png" style="width:120px"></div>
              <div style="position:absolute;top:10px"><img src="./assets/ttd/syamsul.png" style="width:85px"></div>
            </td>
            <td align="right"></td>
          </tr>
        <?php } elseif ($row['marketing'] == 'Andri') { ?>
          <tr>
            <td>
              <div style="position:relative;top:25px;left:-30px"><img src="./assets/ttd/stempel.png" style="width:120px"></div>
              <div style="position:absolute;top:10px"><img src="./assets/ttd/andri-susanto.png" style="width:85px"></div>
            </td>
            <td align="right"></td>
          </tr>
        <?php } elseif ($row['marketing'] == 'Slamet') { ?>
          <tr>
            <td>
              <div style="position:relative;top:30px;left:-30px"><img src="./assets/ttd/stempel.png" style="width:120px"></div>
              <div style="position:absolute;top:-10px"><img src="./assets/ttd/Slamet.png" style="width:85px"></div>
            </td>
            <td align="right"></td>
          </tr>
        <?php } elseif ($row['marketing'] == 'Magusmub') { ?>
          <tr>
            <td>
              <div style="position:relative;top:30px;left:-30px"><img src="./assets/ttd/stempel.png" style="width:120px"></div>
              <div style="position:absolute;top:-10px"><img src="./assets/ttd/agusmubarok.png" style="width:85px"></div>
            </td>
            <td align="right"></td>
          </tr>
        <?php } elseif ($row['marketing'] == 'yancesetio') { ?>
          <tr>
            <td>
              <div style="position:relative;top:25px;left:-30px"><img src="./assets/ttd/stempel.png" style="width:120px"></div>
              <div style="position:absolute;top:10px"><img src="./assets/ttd/yance.png" style="width:85px"></div>
            </td>
            <td align="right"></td>
          </tr>
        <?php } elseif ($row['marketing'] == 'candra5758') { ?>
          <tr>
            <td>
              <div style="position:relative;top:25px;left:-30px"><img src="./assets/ttd/stempel.png" style="width:120px"></div>
              <div style="position:absolute;top:10px"><img src="./assets/ttd/candra.png" style="width:85px"></div>
            </td>
            <td align="right"></td>
          </tr>
        <?php } elseif ($row['marketing'] == 'Nico') { ?>
          <tr>
            <td>
              <div style="position:relative;top:25px;left:-30px"><img src="./assets/ttd/stempel.png" style="width:120px"></div>
              <div style="position:absolute;top:10px"><img src="./assets/ttd/nico.png" style="width:85px"></div>
            </td>
            <td align="right"></td>
          </tr>
        <?php } elseif ($row['marketing'] == 'Agung') { ?>
          <tr>
            <td>
              <div style="position:relative;top:25px;left:-30px"><img src="./assets/ttd/stempel.png" style="width:120px"></div>
              <div style="position:absolute;top:10px"><img src="./assets/ttd/Agung.png" style="width:85px"></div>
            </td>
            <td align="right"></td>
          </tr>
        <?php } elseif ($row['marketing'] == 'Mohamad') { ?>
          <tr>
            <td>
              <div style="position:relative;top:25px;left:-30px"><img src="./assets/ttd/stempel.png" style="width:120px"></div>
              <div style="position:absolute;top:10px"><img src="./assets/ttd/Mohamad.png" style="width:85px"></div>
            </td>
            <td align="right"></td>
          </tr>
        <?php } ?>
      <?php endforeach; ?>
    </tbody>
  </table>
  <table class="tabless" style="margin-top:50px">
    <thead>
      <?php foreach ($pdf_data_all_aspal as $row) : ?>
        <?php if ($row['marketing'] == 'Harris') { ?>
          <tr>
            <th align="left">Harris Pratama Halim</th>
            <th align="right">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</th>
          </tr>
        <?php } elseif ($row['marketing'] == 'Selvy') { ?>
          <tr>
            <th align="left">Selvy Lestari Halim</th>
            <th align="right">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</th>
          </tr>
        <?php } elseif ($row['marketing'] == 'Yoshua') { ?>
          <tr>
            <th align="left">Yoshua Ian Torana</th>
            <th align="right">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</th>
          </tr>
        <?php } elseif ($row['marketing'] == 'Adhitya') { ?>
          <tr>
            <th align="left">Adhitya Eka Widagdo</th>
            <th align="right">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</th>
          </tr>
        <?php } elseif ($row['marketing'] == 'Wikan') { ?>
          <tr>
            <th align="left">Bramantya Wikan Driasmara</th>
            <th align="right">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</th>
          </tr>
        <?php } elseif ($row['marketing'] == 'Teryluana') { ?>
          <tr>
            <th align="left">Teryluana Septian</th>
            <th align="right">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</th>
          </tr>
        <?php } elseif ($row['marketing'] == 'Taufik') { ?>
          <tr>
            <th align="left">Taufik Arianto</th>
            <th align="right">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</th>
          </tr>
        <?php } elseif ($row['marketing'] == 'Indra') { ?>
          <tr>
            <th align="left">Indra Purwono S</th>
            <th align="right">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</th>
          </tr>
        <?php } elseif ($row['marketing'] == 'Jeffryanto') { ?>
          <tr>
            <th align="left" style="text-decoration: underline;">Jeffryanto</th>
            <th align="right">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</th>
          </tr>
        <?php } elseif ($row['marketing'] == 'Zainul') { ?>
          <tr>
            <th align="left" style="text-decoration: underline;">Zainul Khakim ST, MT</th>
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
            <th align="left">Slamet Deni Dwi Harnowo</th>
            <th align="right">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</th>
          </tr>
        <?php } elseif ($row['marketing'] == 'Magusmub') { ?>
          <tr>
            <th align="left" style="text-decoration: underline;">M Agus Mubarok</th>
            <th align="right">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</th>
          </tr>
        <?php } elseif ($row['marketing'] == 'yancesetio') { ?>
          <tr>
            <th align="left">Yance Setio Utomo</th>
            <th align="right">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</th>
          </tr>
        <?php } elseif ($row['marketing'] == 'candra5758') { ?>
          <tr>
            <th align="left">Candra Bagus</th>
            <th align="right">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</th>
          </tr>
        <?php } elseif ($row['marketing'] == 'Nico') { ?>
          <tr>
            <th align="left">Niko Aziz Firmansyah</th>
            <th align="right">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</th>
          </tr>
        <?php } elseif ($row['marketing'] == 'Agung') { ?>
          <tr>
            <th align="left">Agung Aditia Darma</th>
            <th align="right">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</th>
          </tr>
        <?php } elseif ($row['marketing'] == 'Mohamad') { ?>
          <tr>
            <th align="left">Mohamad Eko Wicahyo</th>
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