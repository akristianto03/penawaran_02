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
  <?php foreach ($pdf_data_all_pancang as $row) : ?>
    <?php if ($row['include'] == 'Barang & Jasa') { ?>
      <div style="position:absolute;top:-45px !important;left:-60px !important;"><img src="./assets/kop_surat/header_new.png" style="height:160px;width:800px"></div>
      <hr class="line-title" style="margin-top:85px;color:white;opacity:0.2px">
      <div style="position:absolute;bottom:-50px !important;left:-60px !important;"><img src="./assets/kop_surat/footer_new.png" style="height:120px;width:800px"></div>
    <?php } elseif ($row['include'] == 'Barang') { ?>
      <div style="position:absolute;top:-45px !important;left:-60px !important;"><img src="./assets/kop_surat/header_new.png" style="height:160px;width:800px"></div>
      <hr class="line-title" style="margin-top:85px;color:white;opacity:0.2px">
      <div style="position:absolute;bottom:-50px !important;left:-60px !important;"><img src="./assets/kop_surat/footer_new.png" style="height:120px;width:800px"></div>
    <?php } elseif ($row['include'] == 'Jasa') { ?>
      <div style="position:absolute;top:-14px !important;left:-60px !important;"><img src="./assets/kop_surat/srikandi_header.png" style="height:100px;width:800px"></div>
      <div style="position:absolute;top: 280px !important;"><img src="./assets/kop_surat/srikandi_middle.png"></div>
      <hr class="line-title" style="margin-top:85px">
      <div style="position:absolute;bottom:-50px !important;left:-60px !important;"><img src="./assets/kop_surat/srikandi_footer.png" style="height:60px;width:800px"></div>
    <?php } ?>
  <?php endforeach; ?>
  <div style="position:relative">
    <p align="center">
      <?php foreach ($pdf_data_all_pancang as $row) : ?>
        <?php if ($row['include'] == 'Jasa') { ?>
          PENAWARAN HARGA PEMANCANGAN
        <?php } else { ?>
          PENAWARAN HARGA TIANG PANCANG
        <?php } ?>
      <?php endforeach; ?>
      <br>
      <b>No. <?php foreach ($pdf_data_all_pancang as $row) : ?><?= $row['no_surat'] ?><?php endforeach; ?>/
        <?php foreach ($pdf_data_all_pancang as $row) : ?>
          <?php if ($row['marketing'] == 'Harris') { ?>
            <?php echo 'HPH' ?>
          <?php } else { ?>
            <?= substr(strtoupper($row['marketing']), 0, 3) ?>
          <?php } ?>
          <?php endforeach; ?>/
          <?php foreach ($pdf_data_bulan_pancang as $row) : ?>
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
            <?php foreach ($pdf_data_tahun_pancang as $row) : ?><?= $row['tanggal'] ?><?php endforeach; ?>
    </p>
    <p align="right" style="font-weight:bold">Surabaya,
      <?php foreach ($pdf_data_tanggal_pancang as $row) : ?>
        <?= $row['tanggal'] ?>
      <?php endforeach; ?>
      <?php foreach ($pdf_data_bulan_pancang as $row) : ?>
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
      <?php foreach ($pdf_data_tahun_pancang as $row) : ?><?= $row['tanggal'] ?><?php endforeach; ?>
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
        <?php foreach ($pdf_data_all_pancang as $row) : ?>
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
          <th class="ths" style="text-align:left !important">Material</th>
          <th class="ths" style="text-align:left !important">Ket.</th>
          <th class="ths" style="text-align:left !important">Panjang (Meter)</th>
          <th class="ths" style="text-align:left !important">Jumlah (Batang/Titik)</th>
          <th class="ths" style="text-align:left !important">Volume Total</th>
          <th class="ths" style="text-align:left !important">Harga Satuan</th>
          <th class="ths" style="text-align:left !important">Total Harga</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        foreach ($pdf_data_permintaan_pancang as $row) :
        ?>
          <tr>
            <td class="tds"><?= $no++ ?></td>
            <td class="tds"><?= $row->item ?></td>
            <td class="tds"><?= $row->keterangan ?></td>
            <td class="tds"><?= $row->panjang ?></td>
            <td class="tds"><?= $row->jumlah ?></td>
            <td class="tds"><?= $row->volume ?></td>
            <td class="tds">Rp. <?= number_format($row->harga_satuan, 2, ',', '.') ?></td>
            <td class="tds">Rp. <?= number_format($row->total_perkalian, 2, ',', '.') ?></td>
          </tr>
        <?php endforeach; ?>
        <?php
        foreach ($pdf_total_jumlah as $rows) :
        ?>
          <tr>
            <td class="tds" colspan="7">Total</td>
            <td class="tds">Rp. <?= number_format($rows['total_volume'], 2, ',', '.') ?></td>
          </tr>
        <?php endforeach; ?>

        <?php foreach ($pdf_hitung_ppn as $rows) : ?>
          <?php if ($rows['ppn'] == 'Ya') { ?>

            <?php foreach ($pdf_hitung_ppn as $rows) : ?>
              <tr>
                <td class="tds" colspan="7">Total PPN</td>
                <?php if ($rows['ppn'] == 'Ya') { ?>
                  <td class="tds">Rp. <?= number_format($rows['total_ppn'], 2, ',', '.') ?></td>
                <?php } else { ?>
                  <td class="tds">Rp. 0</td>
                <?php } ?>
              </tr>
            <?php endforeach; ?>
            <?php foreach ($pdf_total_jumlah_total_ppn as $rows) : ?>
              <tr>
                <td class="tds" colspan="7">Total BAYAR</td>
                <?php if ($rows['ppn'] == 'Ya') { ?>
                  <td class="tds">Rp. <?= number_format($rows['total_ppn'] + $rows['total_volume'], 2, ',', '.') ?></td>
                <?php } else { ?>
                  <td class="tds">Rp. <?= number_format($rows['total_volume'], 2, ',', '.') ?></td>
                <?php } ?>
              </tr>
            <?php endforeach; ?>

          <?php } else { ?>
            <?php echo ""; ?>
          <?php } ?>

        <?php endforeach; ?>
      </tbody>
    </table>

    <!-- KETERANGAN  TAMBAHAN JIKA ADA -->
    <?php foreach ($pdf_data_all_pancang as $row) : ?>
      <?php if ($row['keterangan_tambahan'] != NULL) { ?>
        <strong>Keterangan Tambahan :</strong>
        <p><?= nl2br($row['keterangan_tambahan']) ?></p>
      <?php } else { ?>
      <?php } ?>
    <?php endforeach; ?>

    <strong>C. SYARAT & KETENTUAN</strong>
    <ol>
      <li>Harga
        <ol>
          <li>Jangka waktu penawaran berlaku 7 (Tujuh) hari dari tanggal terbit surat penawaran harga</li>
          <li>Harga sewaktu-waktu dapat berubah, apabila terjadi perubahan moneter, BBM, dan HPS Semen dari Pemerintah</li>
          <li>Harga diatas belum termasuk biaya potong tiang, ruyung/dolly</li>
          <li>Harga jasa pancang terhitung tiang terangkat</li>
        </ol>
      </li>
      <li>Mobilisasi Alat
        <ol>
          <li>Mobilisasi menggunakan armada trailer/tronton</li>
          <li>Akses menuju ke lokasi proyek harus disiapkan dengan baik agar bisa dilewati trailer/tronton (tidak ambles, tidak ada gangguan kabel,dll)</li>
          <li>Schedule mobilisasi sesuai dengan kesepakatan kedua belah pihak</li>
          <li>Harga belum termasuk biaya langsir, jika mobil tidak bisa masuk ke lokasi proyek</li>
        </ol>
      </li>
      <li>Biaya Tambahan
        <ol>
          <li>Biaya keamanan alat pancang dilokasi, biaya kawalan polisi/preman dan koordinasi dengan lingkungan menjadi tanggung jawab pemberi kerjaan</li>
          <li>Apabila ada kerusakan infrastruktur (paving, jalan aspal, pohon, dll) yang diakibatkan mobilisasi alat menjadi tanggung jawab pemberi kerja</li>
          <li>Apabila ada kerusakan/retak pada bangunan disekitar lokasi pemancangan maka perbaikan menjadi tanggung jawab pemberi kerja</li>
        </ol>
      </li>
      <li>Syarat & Metode Pembayaran
        <ol>
          <?php foreach ($pdf_data_all_pancang as $row) : ?>
            <?php if ($row['include'] != 'Jasa') { ?>
              <?php if ($row['ppn'] == 'Ya') { ?>
                <b>Harga Sudah Termasuk PPN</b>
                <p>Nomor Rekening : 1840628899</p>
                <p>Bank : BCA</p>
                <p>Atas Nama : PT BUMINDO SAKTI</p>
              <?php } else { ?>
                <b>Harga Belum Termasuk PPN</b>
                <!-- <p>Nomor Rekening : 6170809899</p>
                            <p>Bank : BCA</p>
                            <p>Atas Nama : Harris Pratama Halim, Mohon menyertakan bukti transfer, Terimakasih banyak</p> -->
              <?php } ?>
            <?php } else { ?>
              <?php if ($row['ppn'] == 'Ya') { ?>
                <b>Harga Sudah Termasuk PPN</b>
                <p>Nomor Rekening : 6170567879</p>
                <p>Bank : BCA</p>
                <p>Atas Nama : PT BUMI SRIKANDI NUSANTARA</p>
              <?php } else { ?>
                <b>Harga Belum Termasuk PPN</b>
                <!-- <p>Nomor Rekening : 6170567879</p>
                            <p>Bank : BCA</p>
                            <p>Atas Nama : PT BUMI SRIKANDI NUSANTARA, Mohon menyertakan bukti transfer, Terimakasih banyak</p> -->
              <?php } ?>
            <?php } ?>
          <?php endforeach; ?>
          <?php foreach ($pdf_data_all_pancang as $row) : ?>
            <p><?= nl2br($row['metode_pembayaran']) ?></p>
          <?php endforeach; ?>
        </ol>
      </li>
    </ol>
    <p>Demikian penawaran harga dari kami, besar harapan kami untuk menjalin kerjasama yang baik dengan bapak/ibu.Atas perhatian dan kerjasamanya kami ucapkan terimakasih </p>

    <table class="tabless">
      <thead>
        <tr>
          <th align="left">Hormat Kami</th>
          <th align="right" style="margin-right:20px !important">Disetujui Oleh,</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($pdf_data_all_pancang as $row) : ?>
          <?php if ($row['include'] != 'Jasa') { ?>
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
            <?php } elseif ($row['marketing'] == 'Indra') { ?>
              <tr>
                <td>
                  <div style="position:relative;top:25px;left:-30px"><img src="./assets/ttd/stempel.png" style="width:120px"></div>
                  <div style="position:absolute;top:10px"><img src="./assets/ttd/indra.png" style="width:85px"></div>
                </td>
                <td align="right"></td>
              </tr>
            <?php } elseif ($row['marketing'] == 'Slamet') { ?>
              <tr>
                <td>
                  <div style="position:relative;top:30px;left:-30px"><img src="./assets/ttd/stempel.png" style="width:120px"></div>
                  <div style="position:absolute;top:5px"><img src="./assets/ttd/Slamet.png" style="width:85px"></div>
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

          <?php } else { ?>

            <?php if ($row['marketing'] == 'Harris') { ?>
              <tr>
                <td>
                  <div style="position:relative;top:25px;left:-30px"><img src="./assets/ttd/stempel_bumi_srikandi.png" style="width:120px"></div>
                  <div style="position:absolute;top:10px"><img src="./assets/ttd/harris.png" style="width:85px"></div>
                </td>
                <td align="right"></td>
              </tr>
            <?php } elseif ($row['marketing'] == 'Selvy') { ?>
              <tr>
                <td>
                  <div style="position:relative;top:25px;left:-30px"><img src="./assets/ttd/stempel_bumi_srikandi.png" style="width:120px"></div>
                  <div style="position:absolute;top:10px"><img src="./assets/ttd/selvy.png" style="width:85px"></div>
                </td>
                <td align="right"></td>
              </tr>
            <?php } elseif ($row['marketing'] == 'Yoshua') { ?>
              <tr>
                <td>
                  <div style="position:relative;top:25px;left:-30px"><img src="./assets/ttd/stempel_bumi_srikandi.png" style="width:120px"></div>
                  <div style="position:absolute;top:10px"><img src="./assets/ttd/yoshua.png" style="width:85px"></div>
                </td>
                <td align="right"></td>
              </tr>
            <?php } elseif ($row['marketing'] == 'Adhitya') { ?>
              <tr>
                <td>
                  <div style="position:relative;top:25px;left:-30px"><img src="./assets/ttd/stempel_bumi_srikandi.png" style="width:120px"></div>
                  <div style="position:absolute;top:10px"><img src="./assets/ttd/adhitya.png" style="width:85px"></div>
                </td>
                <td align="right"></td>
              </tr>
            <?php } elseif ($row['marketing'] == 'Wikan') { ?>
              <tr>
                <td>
                  <div style="position:relative;top:25px;left:-30px"><img src="./assets/ttd/stempel_bumi_srikandi.png" style="width:120px"></div>
                  <div style="position:absolute;top:-10px"><img src="./assets/ttd/wikan.png" style="width:140px"></div>
                </td>
                <td align="right"></td>
              </tr>
            <?php } elseif ($row['marketing'] == 'Teryluana') { ?>
              <tr>
                <td>
                  <div style="position:relative;top:25px;left:-30px"><img src="./assets/ttd/stempel_bumi_srikandi.png" style="width:120px"></div>
                  <div style="position:absolute;top:10px"><img src="./assets/ttd/terry.png" style="width:85px"></div>
                </td>
                <td align="right"></td>
              </tr>
            <?php } elseif ($row['marketing'] == 'Taufik') { ?>
              <tr>
                <td>
                  <div style="position:relative;top:25px;left:-30px"><img src="./assets/ttd/stempel_bumi_srikandi.png" style="width:120px"></div>
                  <div style="position:absolute;top:10px"><img src="./assets/ttd/taufik.png" style="width:85px"></div>
                </td>
                <td align="right"></td>
              </tr>
            <?php } elseif ($row['marketing'] == 'Jeffryanto') { ?>
              <tr>
                <td>
                  <div style="position:relative;top:25px;left:-30px"><img src="./assets/ttd/stempel_bumi_srikandi.png" style="width:120px"></div>
                  <div style="position:absolute;top:10px"><img src="./assets/ttd/jeffryanto.png" style="width:85px"></div>
                </td>
                <td align="right"></td>
              </tr>
            <?php } elseif ($row['marketing'] == 'Zainul') { ?>
              <tr>
                <td>
                  <div style="position:relative;top:25px;left:-30px"><img src="./assets/ttd/stempel_bumi_srikandi.png" style="width:120px"></div>
                  <div style="position:absolute;top:10px"><img src="./assets/ttd/zainul.png" style="width:250px !important;position:absolute;top:-30px;left:-70px"></div>
                </td>
                <td align="right"></td>
              </tr>
            <?php } elseif ($row['marketing'] == 'Syamsul') { ?>
              <tr>
                <td>
                  <div style="position:relative;top:25px;left:-30px"><img src="./assets/ttd/stempel_bumi_srikandi.png" style="width:120px"></div>
                  <div style="position:absolute;top:10px"><img src="./assets/ttd/syamsul.png" style="width:85px"></div>
                </td>
                <td align="right"></td>
              </tr>
            <?php } elseif ($row['marketing'] == 'Indra') { ?>
              <tr>
                <td>
                  <div style="position:relative;top:25px;left:-30px"><img src="./assets/ttd/stempel_bumi_srikandi.png" style="width:120px"></div>
                  <div style="position:absolute;top:10px"><img src="./assets/ttd/indra.png" style="width:85px"></div>
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
                  <div style="position:relative;top:30px;left:-30px"><img src="./assets/ttd/stempel_bumi_srikandi.png" style="width:120px"></div>
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
          <?php } ?>
        <?php endforeach; ?>
      </tbody>
    </table>
    <table class="tabless" style="margin-top:50px">
      <thead>
        <?php foreach ($pdf_data_all_pancang as $row) : ?>
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
          <?php } elseif ($row['marketing'] == 'Jeffryanto') { ?>
            <tr>
              <th align="left" style="text-decoration: underline;">Jeffryanto</th>
              <th align="right">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</th>
            </tr>
          <?php } elseif ($row['marketing'] == 'Zainul') { ?>
            <tr>
              <th align="left" style="text-decoration: underline;">Zainul Khakim ST, MT.</th>
              <th align="right">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</th>
            </tr>
          <?php } elseif ($row['marketing'] == 'Syamsul') { ?>
            <tr>
              <th align="left" style="text-decoration: underline;">Much. Syamsul Arif</th>
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
  </div>

</body>

</html>