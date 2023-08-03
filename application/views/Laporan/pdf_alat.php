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
      margin-top: 1.5px;
    }

    p,
    strong {
      margin: 6px;
      padding: 0;
    }
  </style>
</head>

<body>
  <div style="position:absolute;top:-45px !important;left:-60px !important;"><img src="./assets/kop_surat/header_new.png" style="height:160px;width:800px"></div>
  <hr class="line-title" style="margin-top:85px;color:white;opacity:0.2px">
  <div style="position:absolute;bottom:-50px !important;left:-60px !important;"><img src="./assets/kop_surat/footer_new.png" style="height:120px;width:800px"></div>
  <p align="center">
    PENAWARAN HARGA RENTAL ALAT BERAT
    <?php foreach ($pdf_data_all_alat as $row) : ?>
      <?php if ($row['include'] == 'Ya') { ?>
        <?php echo '(All IN)' ?>
      <?php } else { ?>
        <?php echo '' ?>
      <?php } ?>
    <?php endforeach; ?>
    <br>
    <b>No. <?php foreach ($pdf_data_all_alat as $row) : ?><?= $row['no_surat'] ?><?php endforeach; ?>/
      <?php foreach ($pdf_data_all_alat as $row) : ?>
        <?php if ($row['marketing'] == 'Harris') { ?>
          <?php echo 'HPH' ?>
        <?php } else { ?>
          <?= substr(strtoupper($row['marketing']), 0, 3) ?>
        <?php } ?>
        <?php endforeach; ?>/
        <?php foreach ($pdf_data_bulan_alat as $row) : ?>
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
          <?php foreach ($pdf_data_tahun_alat as $row) : ?><?= $row['tanggal'] ?><?php endforeach; ?>
  </p>
  <p align="right" style="font-weight:bold">Surabaya,
    <?php foreach ($pdf_data_tanggal_alat as $row) : ?>
      <?= $row['tanggal'] ?>
    <?php endforeach; ?>
    <?php foreach ($pdf_data_bulan_alat as $row) : ?>
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
    <?php foreach ($pdf_data_tahun_alat as $row) : ?><?= $row['tanggal'] ?><?php endforeach; ?>
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
      <?php foreach ($pdf_data_all_alat as $row) : ?>
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
      foreach ($pdf_data_permintaan_alat as $row) :
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

    </tbody>
  </table>

  <table class="tabless">
    <thead>
      <?php
      foreach ($table_th as $rew) : ?>
        <?php if ($rew->include == 'Alat Saja' || $rew->include == 'Tidak') { ?>
          <?php if ($rew->item == 'Mob de Mob Per Alat') { ?>
            <?php echo ""; ?>
          <?php } else { ?>
            <tr>
              <th class="ths" style="text-align:left !important">Item</th>
              <th class="ths" style="text-align:left !important">Uang Makan</th>
              <th class="ths" style="text-align:left !important">Satuan</th>
              <th class="ths" style="text-align:left !important">Jumlah</th>
            </tr>
          <?php } ?>
        <?php } else { ?>
          <?php echo ""; ?>
        <?php } ?>
      <?php endforeach; ?>
    </thead>
    <tbody>
      <?php foreach ($pdf_data_permintaan_alat as $rew) : ?>
        <?php if ($rew->include == 'Alat Saja' || $rew->include == 'Tidak') { ?>
          <?php if ($rew->item == 'Asphalt Finisher') { ?>
            <?php echo '
              <tr>
                <td class="tds">Asphalt Finisher</td>
                <td class="tds">Rp. 200.000,00</td>
                <td class="tds">Harian</td>
                <td class="tds">1 orang</td>
              </tr>
              '
            ?>
          <?php } elseif ($rew->item == 'Cold Milling Machine') { ?>
            <?php echo '
              <tr>
                <td class="tds">Cold Milling Machine</td>
                <td class="tds">Rp. 500.000,00</td>
                <td class="tds">Harian</td>
                <td class="tds">2 orang</td>
              </tr>
              '
            ?>
          <?php } elseif ($rew->item == 'Crane 25 Ton') { ?>
            <?php echo '
              <tr>
                <td class="tds">Crane 25 Ton</td>
                <td class="tds">Rp. 375.000,00</td>
                <td class="tds">Harian</td>
                <td class="tds">2 orang</td>
              </tr>
              '
            ?>
          <?php } elseif ($rew->item == 'Dozer D31') { ?>
            <?php echo '
              <tr>
                <td class="tds">Dozer D31</td>
                <td class="tds">Rp. 250.000,00</td>
                <td class="tds">Harian</td>
                <td class="tds">1 orang</td>
              </tr>
              '
            ?>
          <?php } elseif ($rew->item == 'Excavator PC 78 Bucket') { ?>
            <?php echo '
              <tr>
                <td class="tds">Excavator PC 78 Bucket</td>
                <td class="tds">Rp. 250.000,00</td>
                <td class="tds">Harian</td>
                <td class="tds">1 orang</td>
              </tr>
              '
            ?>
          <?php } elseif ($rew->item == 'Excavator PC 78 Auger') { ?>
            <?php echo '
              <tr>
                <td class="tds">Excavator PC 78 Auger</td>
                <td class="tds">Rp. 250.000,00</td>
                <td class="tds">Harian</td>
                <td class="tds">1 orang</td>
              </tr>
              '
            ?>
          <?php } elseif ($rew->item == 'Excavator PC 78 Breaker') { ?>
            <?php echo '
              <tr>
                <td class="tds">Excavator PC 78 Breaker</td>
                <td class="tds">Rp. 300.000, 00</td>
                <td class="tds">Harian</td>
                <td class="tds">1 orang</td>
              </tr>
              '
            ?>
          <?php } elseif ($rew->item == 'Excavator PC 200 Bucket') { ?>
            <?php echo '
              <tr>
                <td class="tds">Excavator PC 200 Bucket</td>
                <td class="tds">Rp. 250.000,00</td>
                <td class="tds">Harian</td>
                <td class="tds">1 orang</td>
              </tr>
              '
            ?>
          <?php } elseif ($rew->item == 'Excavator PC 200 Breaker') { ?>
            <?php echo '
              <tr>
                <td class="tds">Excavator PC 200 Breaker</td>
                <td class="tds">Rp. 300.000,00</td>
                <td class="tds">Harian</td>
                <td class="tds">1 orang</td>
              </tr>
              '
            ?>
          <?php } elseif ($rew->item == 'Excavator YOONA Wheel Crawler Bucket') { ?>
            <?php echo '
              <tr>
                <td class="tds">Excavator YOONA Wheel Crawler Bucket</td>
                <td class="tds">Rp. 250.000,00</td>
                <td class="tds">Harian</td>
                <td class="tds">1 orang</td>
              </tr>
              '
            ?>
          <?php } elseif ($rew->item == 'Excavator YOONA Wheel Crawler Breaker') { ?>
            <?php echo '
              <tr>
                <td class="tds">Excavator YOONA Wheel Crawler Breaker</td>
                <td class="tds">Rp. 300.000,00</td>
                <td class="tds">Harian</td>
                <td class="tds">1 orang</td>
              </tr>
              '
            ?>
          <?php } elseif ($rew->item == 'Forklift 3 Ton') { ?>
            <?php echo '
              <tr>
                <td class="tds">Forklift 3 Ton</td>
                <td class="tds">Rp. 150.000,00</td>
                <td class="tds">Harian</td>
                <td class="tds">1 orang</td>
              </tr>
              '
            ?>
          <?php } elseif ($rew->item == 'Forklift 10 Ton') { ?>
            <?php echo '
              <tr>
                <td class="tds">Forklift 10 Ton</td>
                <td class="tds">Rp. 150.000,00</td>
                <td class="tds">Harian</td>
                <td class="tds">1 orang</td>
              </tr>
              '
            ?>
          <?php } elseif ($rew->item == 'Hydraulic Static Pile Driver 90 Ton') { ?>
            <?php echo '
              <tr>
                <td class="tds">Hydraulic Static Pile Driver 90 Ton</td>
                <td class="tds">0</td>
                <td class="tds">Harian</td>
                <td class="tds">0</td>
              </tr>
              '
            ?>
          <?php } elseif ($rew->item == 'Hydraulic Static Pile Driver 120 Ton') { ?>
            <?php echo '
              <tr>
                <td class="tds">Hydraulic Static Pile Driver 120 Ton</td>
                <td class="tds">0</td>
                <td class="tds">Harian</td>
                <td class="tds">0</td>
              </tr>
              '
            ?>
          <?php } elseif ($rew->item == 'Motor Grader') { ?>
            <?php echo '
              <tr>
                <td class="tds">Motor Grader</td>
                <td class="tds">Rp. 300.000,00</td>
                <td class="tds">Harian</td>
                <td class="tds">1 orang</td>
              </tr>
              '
            ?>
          <?php } elseif ($rew->item == 'Road Sweeper') { ?>
            <?php echo '
              <tr>
                <td class="tds">Road Sweeper</td>
                <td class="tds">Rp. 250.000,00</td>
                <td class="tds">Harian</td>
                <td class="tds">1 orang</td>
              </tr>
              '
            ?>
          <?php } elseif ($rew->item == 'Tandem Roller') { ?>
            <?php echo '
              <tr>
                <td class="tds">Tandem Roller</td>
                <td class="tds">Rp. 200.000,00</td>
                <td class="tds">Harian</td>
                <td class="tds">1 orang</td>
              </tr>
              '
            ?>
          <?php } elseif ($rew->item == 'Tyre Roller') { ?>
            <?php echo '
              <tr>
                <td class="tds">Tyre Roller</td>
                <td class="tds">Rp. 200.000,00</td>
                <td class="tds">Harian</td>
                <td class="tds">1 orang</td>
              </tr>
              '
            ?>
          <?php } elseif ($rew->item == 'Vibratory Roller') { ?>
            <?php echo '
              <tr>
                <td class="tds">Vibratory Roller</td>
                <td class="tds">Rp. 250.000,00</td>
                <td class="tds">Harian</td>
                <td class="tds">1 orang</td>
              </tr>
              '
            ?>
          <?php } elseif ($rew->item == 'Truck Mitsubishi') { ?>
            <?php echo '
              <tr>
                <td class="tds">Truck Mitsubishi</td>
                <td class="tds">Rp. 250.000,00</td>
                <td class="tds">Harian</td>
                <td class="tds">1 orang</td>
              </tr>
              '
            ?>
          <?php } elseif ($rew->item == 'Vibratory Roller with Padfoot') { ?>
            <?php echo '
              <tr>
                <td class="tds">Vibratory Roller with Padfoot</td>
                <td class="tds">Rp. 250.000,00</td>
                <td class="tds">Harian</td>
                <td class="tds">1 orang</td>
              </tr>
              '
            ?>
          <?php } elseif ($rew->item == 'Baby Roller') { ?>
            <?php echo '
              <tr>
                <td class="tds">Baby Roller</td>
                <td class="tds">Rp. 200.000,00</td>
                <td class="tds">Harian</td>
                <td class="tds">1 orang</td>
              </tr>
              '
            ?>
          <?php } elseif ($rew->item == 'Mob de Mob Per Alat') { ?>
            <?php echo "";
            ?>
          <?php } elseif ($rew->item == 'Wheel Loader 1.8 m3') { ?>
            <?php echo '
              <tr>
                <td class="tds">Wheel Loader 1.8 m3</td>
                <td class="tds">Rp. 250.000,00</td>
                <td class="tds">Harian</td>
                <td class="tds">1 orang</td>
              </tr>
              '
            ?>
          <?php } elseif ($rew->item == 'Wheel Loader 3 m3') { ?>
            <?php echo '
              <tr>
                <td class="tds">Wheel Loader 3 m3</td>
                <td class="tds">Rp. 250.000,00</td>
                <td class="tds">Harian</td>
                <td class="tds">1 orang</td>
              </tr>
              '
            ?>
          <?php } elseif ($rew->item == 'Crane 15 Ton') { ?>
            <?php echo '
              <tr>
                <td class="tds">Crane 15 Ton</td>
                <td class="tds">Rp. 250.000,00</td>
                <td class="tds">Harian</td>
                <td class="tds">1 orang</td>
              </tr>
              '
            ?>
          <?php } else { ?>
            <?php echo ""; ?>
          <?php } ?>
        <?php } ?>
      <?php endforeach; ?>
    </tbody>
  </table>

  <!-- KETERANGAN  TAMBAHAN JIKA ADA -->
  <?php foreach ($pdf_data_all_alat as $row) : ?>
    <?php if ($row['keterangan_tambahan'] != NULL) { ?>
      <strong>Keterangan Tambahan :</strong>
      <p><?= nl2br($row['keterangan_tambahan']) ?></p>
    <?php } else { ?>
    <?php } ?>
  <?php endforeach; ?>

  <strong>C. SYARAT & KETENTUAN</strong>
  <?php foreach ($pdf_data_all_alat as $row) : ?>
    <?php if ($row['include'] == 'Alat dan UM Operator') { ?>
      <ol>
        <?php foreach ($pdf_data_permintaan_alat_bulanan as $row) : ?>
          <?php if ($row['satuan'] == 'Bulan') { ?>
            <li>Kuota waktu sewa adalah 30 hari kalender atau 200 jam, mana yg tercapai lebih dahulu.</li>
            <li>Tanggal libur nasional dan hari minggu termasuk terhitung dalam jumlah hari kalender</li>
            <li>Bila terjadi kerusakan alat/operator berhalangan datang karena kesalahan dari PT BUMINDO SAKTI maka jam penggunaan alat akan disesuaikan secara proporsional.</li>
            <li>Hari Minggu/Hari Libur Nasional tetap terhitung sebagai hari kalender</li>
            <li>Segala resiko yang terjadi seperti kerusakan alat dan kehilangan sparepart alat yang terjadi di luar kelalaian Operator maka sepenuhnya menjadi tanggung jawab pihak penyewa</li>
            <li>Keamanan/Safety unit dijamin oleh pihak penyewa selama operasional maupun non-operasional (standby)</li>
            <li>Apabila terjadi kerusakan pada unit, maka jam kerja disesuaikan dengan pemakaian alat tersebut</li>
            <li>Harga SUDAH TERMASUK Alat dan Uang Makan Operator</li>
            <li>Mess untuk operator menjadi tanggung jawab penyewa</li>
          <?php } else { ?>
            <li> Bila alat standby, penyewa akan dikenakan biaya 4 Jam per hari dan bila alat kerja dibawah 8 jam, penyewa akan dikenakan biaya sewa 8 jam</li>
            <li>Klausa pada nomor 1 tidak berlaku bila alat standby/tidak memenuhi 8 jam kerja disebabkan oleh kerusakan alat/kesalahan dari operator pihak PT Bumindo Sakti</li>
            <li>Hari libur nasional/Hari Minggu tidak ada charge standby bila alat libur</li>
            <li>Segala resiko yang terjadi seperti kerusakan alat dan kehilangan sparepart alat yang terjadi di luar kelalaian Operator maka sepenuhnya menjadi tanggung jawab pihak penyewa</li>
            <li>Keamanan/Safety unit dijamin oleh pihak penyewa selama operasional maupun non-operasional (standby)</li>
            <li>Apabila terjadi kerusakan pada unit, maka jam kerja disesuaikan dengan pemakaian alat tersebut</li>
            <li>Harga SUDAH TERMASUK Alat dan Uang Makan Operator</li>
            <li>Mess untuk operator menjadi tanggung jawab penyewa</li>
          <?php } ?>
        <?php endforeach; ?>
      </ol>
    <?php } elseif ($row['include'] == 'Alat, Solar dan UM Operator') { ?>
      <ol>
        <?php foreach ($pdf_data_permintaan_alat_bulanan as $row) : ?>
          <?php if ($row['satuan'] == 'Bulan') { ?>
            <li>Kuota waktu sewa adalah 30 hari kalender atau 200 jam, mana yg tercapai lebih dahulu.</li>
            <li>Tanggal libur nasional dan hari minggu termasuk terhitung dalam jumlah hari kalender</li>
            <li>Bila terjadi kerusakan alat/operator berhalangan datang karena kesalahan dari PT BUMINDO SAKTI maka jam penggunaan alat akan disesuaikan secara proporsional.</li>
            <li>Hari Minggu/Hari Libur Nasional tetap terhitung sebagai hari kalender</li>
            <li>Segala resiko yang terjadi seperti kerusakan alat dan kehilangan sparepart alat yang terjadi di luar kelalaian Operator maka sepenuhnya menjadi tanggung jawab pihak penyewa</li>
            <li>Keamanan/Safety unit dijamin oleh pihak penyewa selama operasional maupun non-operasional (standby)</li>
            <li>Apabila terjadi kerusakan pada unit, maka jam kerja disesuaikan dengan pemakaian alat tersebut</li>
            <li>Harga SUDAH TERMASUK Alat ,Solar dan Uang Makan Operator</li>
            <li>Mess untuk operator menjadi tanggung jawab penyewa</li>
          <?php } else { ?>
            <li> Bila alat standby, penyewa akan dikenakan biaya 4 Jam per hari dan bila alat kerja dibawah 8 jam, penyewa akan dikenakan biaya sewa 8 jam</li>
            <li>Klausa pada nomor 1 tidak berlaku bila alat standby/tidak memenuhi 8 jam kerja disebabkan oleh kerusakan alat/kesalahan dari operator pihak PT Bumindo Sakti</li>
            <li>Hari libur nasional/Hari Minggu tidak ada charge standby bila alat libur</li>
            <li>Segala resiko yang terjadi seperti kerusakan alat dan kehilangan sparepart alat yang terjadi di luar kelalaian Operator maka sepenuhnya menjadi tanggung jawab pihak penyewa</li>
            <li>Keamanan/Safety unit dijamin oleh pihak penyewa selama operasional maupun non-operasional (standby)</li>
            <li>Apabila terjadi kerusakan pada unit, maka jam kerja disesuaikan dengan pemakaian alat tersebut</li>
            <li>Harga SUDAH TERMASUK Alat ,Solar dan Uang Makan Operator</li>
            <li>Mess untuk operator menjadi tanggung jawab penyewa</li>
          <?php } ?>
        <?php endforeach; ?>
      </ol>
    <?php } else { ?>
      <ol>
        <?php foreach ($pdf_data_permintaan_alat_bulanan as $row) : ?>
          <?php if ($row['satuan'] == 'Bulan') { ?>
            <li>Kuota waktu sewa adalah 30 hari kalender atau 200 jam, mana yg tercapai lebih dahulu.</li>
            <li>Tanggal libur nasional dan hari minggu termasuk terhitung dalam jumlah hari kalender</li>
            <li>Bila terjadi kerusakan alat/operator berhalangan datang karena kesalahan dari PT BUMINDO SAKTI maka jam penggunaan alat akan disesuaikan secara proporsional.</li>
            <li>Hari Minggu/Hari Libur Nasional tetap terhitung sebagai hari kalender</li>
            <li>Penyewa wajib memberikan tambahan Uang Makan Operator sebesar Rp. 50.000 bila alat kerja pada malam hari (shift malam).</li>
            <li>Jam kerja standard shift pagi adalah 8 jam per hari = 08:00-17:00, jam kerja shift malam berlaku bila alat kerja mulai jam 18:00 dan lebih malam</li>
            <li>Bila lembur, maka uang makan operator akan dibayarkan : Rp. 50.000/Jam</li>
            <li>Harga BELUM TERMASUK solar, tambahan uang makan operator pada hari minggu/merah (2x dari uang makan harian biasa), keamanan alat, air, dan pembuangan material</li>
            <li>Hari libur nasional/Hari Minggu tidak ada charge standby, bila ada perintah kerja dari penyewa, maka penyewa akan dikenakan biaya sewa sama dengan hari biasa, UM Operator menyesuaikan dengan persetujuan awal</li>
            <li>BBM wajib menggunakan Solar Non Subsidi / Solar industry (HSD)</li>
            <li>Segala resiko yang terjadi seperti kerusakan alat dan kehilangan sparepart alat yang terjadi di luar kelalaian Operator maka sepenuhnya menjadi tanggung jawab pihak penyewa</li>
            <li>Keamanan/Safety unit dijamin oleh pihak penyewa selama operasional maupun non-operasional (standby)</li>
            <li>Apabila terjadi kerusakan pada unit, maka jam kerja disesuaikan dengan pemakaian alat tersebut</li>
            <li>Apabila bahan bakar tidak sesuai standard (solar subsidi, tercampur air) maka penyewa wajib mengganti dengan bahan bakar yang sesuai standard dan segala kerusakan yang ditimbulkan oleh solar tersebut akan menjadi tanggung jawab penyewa</li>
            <li>Mess untuk operator menjadi tanggung jawab penyewa</li>
          <?php } else { ?>
            <li>Bila alat standby, penyewa akan dikenakan biaya 4 Jam per hari dan bila alat kerja dibawah 8 jam, penyewa akan dikenakan biaya sewa 8 jam</li>
            <li>Klausa pada nomor 1 tidak berlaku bila alat standby/tidak memenuhi 8 jam kerja disebabkan oleh kerusakan alat/kesalahan dari operator pihak PT Bumindo Sakti</li>
            <li>Penyewa wajib memberikan tambahan Uang Makan Operator sebesar Rp. 50.000 bila alat kerja pada malam hari (shift malam).</li>
            <li>Jam kerja standard shift pagi adalah 8 jam per hari = 08:00-17:00, jam kerja shift malam berlaku bila alat kerja mulai jam 18:00 dan lebih malam</li>
            <li>Bila lembur, maka uang makan operator akan dibayarkan : Rp. 50.000/Jam</li>
            <li>Harga BELUM TERMASUK solar, tambahan uang makan operator pada hari minggu/merah (2x dari uang makan harian biasa), keamanan alat, air, dan pembuangan material</li>
            <li>Hari libur nasional/Hari Minggu tidak ada charge standby, bila ada perintah kerja dari penyewa, maka penyewa akan dikenakan biaya sewa sama dengan hari biasa, UM Operator menyesuaikan dengan persetujuan awal</li>
            <li>BBM wajib menggunakan Solar Non Subsidi / Solar industry (HSD)</li>
            <li>Segala resiko yang terjadi seperti kerusakan alat dan kehilangan sparepart alat yang terjadi di luar kelalaian Operator maka sepenuhnya menjadi tanggung jawab pihak penyewa</li>
            <li>Keamanan/Safety unit dijamin oleh pihak penyewa selama operasional maupun non-operasional (standby)</li>
            <li>Apabila terjadi kerusakan pada unit, maka jam kerja disesuaikan dengan pemakaian alat tersebut</li>
            <li>Apabila bahan bakar tidak sesuai standard (solar subsidi, tercampur air) maka penyewa wajib mengganti dengan bahan bakar yang sesuai standard dan segala kerusakan yang ditimbulkan oleh solar tersebut akan menjadi tanggung jawab penyewa</li>
            <li>Mess untuk operator menjadi tanggung jawab penyewa</li>
          <?php } ?>
        <?php endforeach; ?>
      </ol>
    <?php } ?>
  <?php endforeach; ?>
  <strong style="margin:0 !important">D. SYARAT & METODE PEMBAYARAN</strong>
  <ol style="margin:0 !important">
    <?php foreach ($pdf_data_all_alat as $row) : ?>
      <?php if ($row['ppn'] == 'Ya') { ?>
        <b>Harga Sudah Termasuk PPN</b>
        <p style="margin:0 !important">Nomor Rekening : 1840628899</p>
        <p style="margin:0 !important">Bank : BCA</p>
        <p style="margin:0 !important">Atas Nama : PT BUMINDO SAKTI</p>
      <?php } else { ?>
        <b>Harga Belum Termasuk PPN</b>
        <!-- <p style="margin:0 !important">Nomor Rekening : 6170809899</p>
        <p style="margin:0 !important">Bank : BCA</p>
        <p style="margin:0 !important">Atas Nama : Harris Pratama Halim Mohon menyertakan bukti transfer, Terimakasih banyak</p> -->
      <?php } ?>
    <?php endforeach; ?>
    <?php foreach ($pdf_data_all_alat as $row) : ?>
      <p style="margin:0 !important"><?= nl2br($row['metode_pembayaran']) ?></p>
    <?php endforeach; ?>
  </ol>
  <br>
  <p style="margin:0 !important">Demikian penawaran harga dari kami, besar harapan kami untuk menjalin kerjasama yang baik dengan bapak/ibu. Atas perhatian dan kerjasamanya kami ucapkan terimakasih </p>

  <table class="tabless">
    <thead>
      <tr>
        <th align="left">Hormat Kami</th>
        <th align="right" style="margin-right:20px !important">Disetujui Oleh,</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($pdf_data_all_alat as $row) : ?>
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
      <?php foreach ($pdf_data_all_alat as $row) : ?>
        <?php if ($row['marketing'] == 'Harris') { ?>
          <tr>
            <th align="left" style="text-decoration: underline;">Harris Pratama Halim</th>
            <th align="right">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</th>
          </tr>
        <?php } elseif ($row['marketing'] == 'Selvy') { ?>
          <tr>
            <th align="left" style="text-decoration: underline;">Selvy Lestari Halim</th>
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