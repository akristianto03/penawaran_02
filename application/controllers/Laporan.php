<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Malat', 'alat');
        $this->load->model('Muditch', 'uditch');
        $this->load->model('Maspal', 'aspal');
        $this->load->model('Mmarka', 'marka');
        $this->load->model('Mpancang', 'pancang');
        $this->load->model('Mpanel', 'panel');
        $this->load->model('Mstensla', 'stensla');
        $this->load->model('Mreadymix', 'readymix');
        $this->load->model('Msheet_pile', 'sheet_pile');
        $this->load->model('Mpaving', 'paving');
    }

    public function cetak_alat($id)
    {
        $as = $_SESSION['username'];
        $this->load->library('mypdf');
        $data['table_th'] =  $this->alat->table_th($id);
        $data['pdf_data_all_alat'] =  $this->alat->pdf_data_all_alat($id);
        $data['pdf_data_permintaan_alat'] =  $this->alat->pdf_data_permintaan_alat($id);
        $data['pdf_data_permintaan_alat_bulanan'] =  $this->alat->pdf_data_permintaan_alat_bulanan($id);
        $data['pdf_hitung_ppn'] =  $this->alat->pdf_hitung_ppn($id);
        $data['pdf_total_jumlah'] =  $this->alat->pdf_total_jumlah($id);
        $data['pdf_total_jumlah_total_ppn'] =  $this->alat->pdf_total_jumlah_total_ppn($id);
        $data['pdf_data_tanggal_alat'] =  $this->alat->pdf_get_tanggal_alat($id);
        $data['pdf_data_bulan_alat'] =  $this->alat->pdf_get_bulan_alat($id);
        $data['pdf_data_tahun_alat'] =  $this->alat->pdf_get_tahun_alat($id);
        foreach($data['pdf_data_all_alat'] as $row){
            $surat = $row['no_surat'];
            $proyek = $row['nama_proyek'];
        }
        $this->mypdf->generate('Laporan/pdf_alat', $data, "$proyek - $as - $surat", 'A4', 'potrait');
    }

    public function cetak_aspal($id)
    {
        $as = $_SESSION['username'];
        $this->load->library('mypdf');
        $data['pdf_data_all_aspal'] =  $this->aspal->pdf_data_all_aspal($id);
        $data['pdf_data_permintaan_aspal'] =  $this->aspal->pdf_data_permintaan_aspal($id);
        $data['pdf_hitung_ppn'] =  $this->aspal->pdf_hitung_ppn($id);
        $data['pdf_total_jumlah'] =  $this->aspal->pdf_total_jumlah($id);
        $data['pdf_total_jumlah_total_ppn'] =  $this->aspal->pdf_total_jumlah_total_ppn($id);
        $data['pdf_data_tanggal_aspal'] =  $this->aspal->pdf_get_tanggal_aspal($id);
        $data['pdf_data_bulan_aspal'] =  $this->aspal->pdf_get_bulan_aspal($id);
        $data['pdf_data_tahun_aspal'] =  $this->aspal->pdf_get_tahun_aspal($id);
        foreach($data['pdf_data_all_aspal'] as $row){
            $surat = $row['no_surat'];
            $proyek = $row['nama_proyek'];
        }
        $this->mypdf->generate('Laporan/pdf_aspal', $data, "$proyek - $as - $surat", 'A4', 'potrait');
    }

    public function cetak_marka($id)
    {
        $as = $_SESSION['username'];
        $this->load->library('mypdf');
        $data['pdf_data_all_marka'] =  $this->marka->pdf_data_all_marka($id);
        $data['pdf_data_permintaan_marka'] =  $this->marka->pdf_data_permintaan_marka($id);
        $data['pdf_hitung_ppn'] =  $this->marka->pdf_hitung_ppn($id);
        $data['pdf_total_jumlah'] =  $this->marka->pdf_total_jumlah($id);
        $data['pdf_total_jumlah_total_ppn'] =  $this->marka->pdf_total_jumlah_total_ppn($id);
        $data['pdf_data_tanggal_marka'] =  $this->marka->pdf_get_tanggal_marka($id);
        $data['pdf_data_bulan_marka'] =  $this->marka->pdf_get_bulan_marka($id);
        $data['pdf_data_tahun_marka'] =  $this->marka->pdf_get_tahun_marka($id);
        foreach($data['pdf_data_all_marka'] as $row){
            $surat = $row['no_surat'];
            $proyek = $row['nama_proyek'];
        }
        $this->mypdf->generate('Laporan/pdf_marka', $data, "$proyek - $as - $surat", 'A4', 'potrait');
    }

    public function cetak_uditch($id)
    {
        $this->load->library('mypdf');
        $as = $_SESSION['username'];
        $this->load->library('mypdf');
        $data['pdf_data_all_uditch'] =  $this->uditch->pdf_data_all_uditch($id);
        $data['pdf_data_permintaan_uditch'] =  $this->uditch->pdf_data_permintaan_uditch($id);
        $data['pdf_hitung_ppn'] =  $this->uditch->pdf_hitung_ppn($id);
        $data['pdf_total_jumlah'] =  $this->uditch->pdf_total_jumlah($id);
        $data['pdf_total_jumlah_total_ppn'] =  $this->uditch->pdf_total_jumlah_total_ppn($id);
        $data['pdf_data_tanggal_uditch'] =  $this->uditch->pdf_get_tanggal_uditch($id);
        $data['pdf_data_bulan_uditch'] =  $this->uditch->pdf_get_bulan_uditch($id);
        $data['pdf_data_tahun_uditch'] =  $this->uditch->pdf_get_tahun_uditch($id);
        foreach($data['pdf_data_all_uditch'] as $row){
            $surat = $row['no_surat'];
            $proyek = $row['nama_proyek'];
        }
        $this->mypdf->generate('Laporan/pdf_uditch', $data, "$proyek - $as - $surat", 'A4', 'potrait');
    }
    
    public function cetak_pancang($id)
    {
        $this->load->library('mypdf');
        $as = $_SESSION['username'];
        $this->load->library('mypdf');
        $data['pdf_data_all_pancang'] =  $this->pancang->pdf_data_all_pancang($id);
        $data['pdf_data_permintaan_pancang'] =  $this->pancang->pdf_data_permintaan_pancang($id);
        $data['pdf_hitung_ppn'] =  $this->pancang->pdf_hitung_ppn($id);
        $data['pdf_total_jumlah'] =  $this->pancang->pdf_total_jumlah($id);
        $data['pdf_total_jumlah_total_ppn'] =  $this->pancang->pdf_total_jumlah_total_ppn($id);
        $data['pdf_data_tanggal_pancang'] =  $this->pancang->pdf_get_tanggal_pancang($id);
        $data['pdf_data_bulan_pancang'] =  $this->pancang->pdf_get_bulan_pancang($id);
        $data['pdf_data_tahun_pancang'] =  $this->pancang->pdf_get_tahun_pancang($id);
        foreach($data['pdf_data_all_pancang'] as $row){
            $surat = $row['no_surat'];
            $proyek = $row['nama_proyek'];
        }
        $this->mypdf->generate('Laporan/pdf_pancang', $data, "$proyek - $as - $surat", 'A4', 'potrait');
    }
    
    public function cetak_panel($id)
    {
        $as = $_SESSION['username'];
        $this->load->library('mypdf');
        $data['pdf_data_all_panel'] =  $this->panel->pdf_data_all_panel($id);
        $data['pdf_data_permintaan_panel'] =  $this->panel->pdf_data_permintaan_panel($id);
        $data['pdf_hitung_ppn'] =  $this->panel->pdf_hitung_ppn($id);
        $data['pdf_total_jumlah'] =  $this->panel->pdf_total_jumlah($id);
        $data['pdf_total_jumlah_total_ppn'] =  $this->panel->pdf_total_jumlah_total_ppn($id);
        $data['pdf_data_tanggal_panel'] =  $this->panel->pdf_get_tanggal_panel($id);
        $data['pdf_data_bulan_panel'] =  $this->panel->pdf_get_bulan_panel($id);
        $data['pdf_data_tahun_panel'] =  $this->panel->pdf_get_tahun_panel($id);
        foreach($data['pdf_data_all_panel'] as $row){
            $surat = $row['no_surat'];
            $proyek = $row['nama_proyek'];
        }
        $this->mypdf->generate('Laporan/pdf_panel', $data, "$proyek - $as - $surat", 'A4', 'potrait');
    }
    
    public function cetak_stensla($id)
    {
        $as = $_SESSION['username'];
        $this->load->library('mypdf');
        $data['pdf_data_all_stensla'] =  $this->stensla->pdf_data_all_stensla($id);
        $data['pdf_data_permintaan_stensla'] =  $this->stensla->pdf_data_permintaan_stensla($id);
        $data['pdf_hitung_ppn'] =  $this->stensla->pdf_hitung_ppn($id);
        $data['pdf_total_jumlah'] =  $this->stensla->pdf_total_jumlah($id);
        $data['pdf_total_jumlah_total_ppn'] =  $this->stensla->pdf_total_jumlah_total_ppn($id);
        $data['pdf_data_tanggal_stensla'] =  $this->stensla->pdf_get_tanggal_stensla($id);
        $data['pdf_data_bulan_stensla'] =  $this->stensla->pdf_get_bulan_stensla($id);
        $data['pdf_data_tahun_stensla'] =  $this->stensla->pdf_get_tahun_stensla($id);
        foreach($data['pdf_data_all_stensla'] as $row){
            $surat = $row['no_surat'];
            $proyek = $row['nama_proyek'];
        }
        $this->mypdf->generate('Laporan/pdf_stensla', $data, "$proyek - $as - $surat", 'A4', 'potrait');
    }
    
    public function cetak_readymix($id)
    {
        $as = $_SESSION['username'];
        $this->load->library('mypdf');
        $data['pdf_data_all_readymix'] =  $this->readymix->pdf_data_all_readymix($id);
        $data['pdf_data_permintaan_readymix'] =  $this->readymix->pdf_data_permintaan_readymix($id);
        $data['pdf_hitung_ppn'] =  $this->readymix->pdf_hitung_ppn($id);
        $data['pdf_total_jumlah'] =  $this->readymix->pdf_total_jumlah($id);
        $data['pdf_total_jumlah_total_ppn'] =  $this->readymix->pdf_total_jumlah_total_ppn($id);
        $data['pdf_data_tanggal_readymix'] =  $this->readymix->pdf_get_tanggal_readymix($id);
        $data['pdf_data_bulan_readymix'] =  $this->readymix->pdf_get_bulan_readymix($id);
        $data['pdf_data_tahun_readymix'] =  $this->readymix->pdf_get_tahun_readymix($id);
        foreach($data['pdf_data_all_readymix'] as $row){
            $surat = $row['no_surat'];
            $proyek = $row['nama_proyek'];
        }
        $this->mypdf->generate('Laporan/pdf_readymix', $data, "$proyek - $as - $surat", 'A4', 'potrait');
    }
    
    public function cetak_sheet_pile($id)
    {
        $this->load->library('mypdf');
        $as = $_SESSION['username'];
        $this->load->library('mypdf');
        $data['pdf_data_all_sheet_pile'] =  $this->sheet_pile->pdf_data_all_sheet_pile($id);
        $data['pdf_data_permintaan_sheet_pile'] =  $this->sheet_pile->pdf_data_permintaan_sheet_pile($id);
        $data['pdf_hitung_ppn'] =  $this->sheet_pile->pdf_hitung_ppn($id);
        $data['pdf_total_jumlah'] =  $this->sheet_pile->pdf_total_jumlah($id);
        $data['pdf_total_jumlah_total_ppn'] =  $this->sheet_pile->pdf_total_jumlah_total_ppn($id);
        $data['pdf_data_tanggal_sheet_pile'] =  $this->sheet_pile->pdf_get_tanggal_sheet_pile($id);
        $data['pdf_data_bulan_sheet_pile'] =  $this->sheet_pile->pdf_get_bulan_sheet_pile($id);
        $data['pdf_data_tahun_sheet_pile'] =  $this->sheet_pile->pdf_get_tahun_sheet_pile($id);
        foreach($data['pdf_data_all_sheet_pile'] as $row){
            $surat = $row['no_surat'];
            $proyek = $row['nama_proyek'];
        }
        $this->mypdf->generate('Laporan/pdf_sheet_pile', $data, "$proyek - $as - $surat", 'A4', 'potrait');
    }

    public function cetak_paving($id)
    {
        $this->load->library('mypdf');
        $as = $_SESSION['username'];
        $this->load->library('mypdf');
        $data['pdf_data_all_paving'] =  $this->paving->pdf_data_all_paving($id);
        $data['pdf_data_permintaan_paving'] =  $this->paving->pdf_data_permintaan_paving($id);
        $data['pdf_hitung_ppn'] =  $this->paving->pdf_hitung_ppn($id);
        $data['pdf_total_jumlah'] =  $this->paving->pdf_total_jumlah($id);
        $data['pdf_total_jumlah_total_ppn'] =  $this->paving->pdf_total_jumlah_total_ppn($id);
        $data['pdf_data_tanggal_paving'] =  $this->paving->pdf_get_tanggal_paving($id);
        $data['pdf_data_bulan_paving'] =  $this->paving->pdf_get_bulan_paving($id);
        $data['pdf_data_tahun_paving'] =  $this->paving->pdf_get_tahun_paving($id);
        foreach($data['pdf_data_all_paving'] as $row){
            $surat = $row['no_surat'];
            $proyek = $row['nama_proyek'];
        }
        $this->mypdf->generate('Laporan/pdf_paving', $data, "$proyek - $as - $surat", 'A4', 'potrait');
    }
    
    
    // LAPORAN PDF TANPA KOP SURAT ======================================================

    public function cetak_alat_tanpa_kop($id)
    {
        $as = $_SESSION['username'];
        $this->load->library('mypdf');
        $data['table_th'] = $this->alat->table_th($id);
        $data['pdf_data_all_alat'] =  $this->alat->pdf_data_all_alat($id);
        $data['pdf_data_permintaan_alat'] =  $this->alat->pdf_data_permintaan_alat($id);
        $data['pdf_data_permintaan_alat_bulanan'] =  $this->alat->pdf_data_permintaan_alat_bulanan($id);
        $data['pdf_hitung_ppn'] =  $this->alat->pdf_hitung_ppn($id);
        $data['pdf_total_jumlah'] =  $this->alat->pdf_total_jumlah($id);
        $data['pdf_total_jumlah_total_ppn'] =  $this->alat->pdf_total_jumlah_total_ppn($id);
        $data['pdf_data_tanggal_alat'] =  $this->alat->pdf_get_tanggal_alat($id);
        $data['pdf_data_bulan_alat'] =  $this->alat->pdf_get_bulan_alat($id);
        $data['pdf_data_tahun_alat'] =  $this->alat->pdf_get_tahun_alat($id);
        foreach($data['pdf_data_all_alat'] as $row){
            $surat = $row['no_surat'];
            $proyek = $row['nama_proyek'];
        }
        $this->mypdf->generate('Laporan/pdf_alat_tanpa_kop', $data, "$proyek - $as - $surat", 'A4', 'potrait');
    }

    public function cetak_aspal_tanpa_kop($id)
    {
        $as = $_SESSION['username'];
        $this->load->library('mypdf');
        $data['pdf_data_all_aspal'] =  $this->aspal->pdf_data_all_aspal($id);
        $data['pdf_data_permintaan_aspal'] =  $this->aspal->pdf_data_permintaan_aspal($id);
        $data['pdf_hitung_ppn'] =  $this->aspal->pdf_hitung_ppn($id);
        $data['pdf_total_jumlah'] =  $this->aspal->pdf_total_jumlah($id);
        $data['pdf_total_jumlah_total_ppn'] =  $this->aspal->pdf_total_jumlah_total_ppn($id);
        $data['pdf_data_tanggal_aspal'] =  $this->aspal->pdf_get_tanggal_aspal($id);
        $data['pdf_data_bulan_aspal'] =  $this->aspal->pdf_get_bulan_aspal($id);
        $data['pdf_data_tahun_aspal'] =  $this->aspal->pdf_get_tahun_aspal($id);
        foreach($data['pdf_data_all_aspal'] as $row){
            $surat = $row['no_surat'];
            $proyek = $row['nama_proyek'];
        }
        $this->mypdf->generate('Laporan/pdf_aspal_tanpa_kop', $data, "$proyek - $as - $surat", 'A4', 'potrait');
    }

    public function cetak_marka_tanpa_kop($id)
    {
        $as = $_SESSION['username'];
        $this->load->library('mypdf');
        $data['pdf_data_all_marka'] =  $this->marka->pdf_data_all_marka($id);
        $data['pdf_data_permintaan_marka'] =  $this->marka->pdf_data_permintaan_marka($id);
        $data['pdf_hitung_ppn'] =  $this->marka->pdf_hitung_ppn($id);
        $data['pdf_total_jumlah'] =  $this->marka->pdf_total_jumlah($id);
        $data['pdf_total_jumlah_total_ppn'] =  $this->marka->pdf_total_jumlah_total_ppn($id);
        $data['pdf_data_tanggal_marka'] =  $this->marka->pdf_get_tanggal_marka($id);
        $data['pdf_data_bulan_marka'] =  $this->marka->pdf_get_bulan_marka($id);
        $data['pdf_data_tahun_marka'] =  $this->marka->pdf_get_tahun_marka($id);
        foreach($data['pdf_data_all_marka'] as $row){
            $surat = $row['no_surat'];
            $proyek = $row['nama_proyek'];
        }
        $this->mypdf->generate('Laporan/pdf_marka_tanpa_kop', $data, "$proyek - $as - $surat", 'A4', 'potrait');
    }

    public function cetak_uditch_tanpa_kop($id)
    {
        $this->load->library('mypdf');
        $as = $_SESSION['username'];
        $this->load->library('mypdf');
        $data['pdf_data_all_uditch'] =  $this->uditch->pdf_data_all_uditch($id);
        $data['pdf_data_permintaan_uditch'] =  $this->uditch->pdf_data_permintaan_uditch($id);
        $data['pdf_hitung_ppn'] =  $this->uditch->pdf_hitung_ppn($id);
        $data['pdf_total_jumlah'] =  $this->uditch->pdf_total_jumlah($id);
        $data['pdf_total_jumlah_total_ppn'] =  $this->uditch->pdf_total_jumlah_total_ppn($id);
        $data['pdf_data_tanggal_uditch'] =  $this->uditch->pdf_get_tanggal_uditch($id);
        $data['pdf_data_bulan_uditch'] =  $this->uditch->pdf_get_bulan_uditch($id);
        $data['pdf_data_tahun_uditch'] =  $this->uditch->pdf_get_tahun_uditch($id);
        foreach($data['pdf_data_all_uditch'] as $row){
            $surat = $row['no_surat'];
            $proyek = $row['nama_proyek'];
        }
        $this->mypdf->generate('Laporan/pdf_uditch_tanpa_kop', $data, "$proyek - $as - $surat", 'A4', 'potrait');
    }
    
    public function cetak_pancang_tanpa_kop($id)
    {
        $this->load->library('mypdf');
        $as = $_SESSION['username'];
        $this->load->library('mypdf');
        $data['pdf_data_all_pancang'] =  $this->pancang->pdf_data_all_pancang($id);
        $data['pdf_data_permintaan_pancang'] =  $this->pancang->pdf_data_permintaan_pancang($id);
        $data['pdf_hitung_ppn'] =  $this->pancang->pdf_hitung_ppn($id);
        $data['pdf_total_jumlah'] =  $this->pancang->pdf_total_jumlah($id);
        $data['pdf_total_jumlah_total_ppn'] =  $this->pancang->pdf_total_jumlah_total_ppn($id);
        $data['pdf_data_tanggal_pancang'] =  $this->pancang->pdf_get_tanggal_pancang($id);
        $data['pdf_data_bulan_pancang'] =  $this->pancang->pdf_get_bulan_pancang($id);
        $data['pdf_data_tahun_pancang'] =  $this->pancang->pdf_get_tahun_pancang($id);
        foreach($data['pdf_data_all_pancang'] as $row){
            $surat = $row['no_surat'];
            $proyek = $row['nama_proyek'];
        }
        $this->mypdf->generate('Laporan/pdf_pancang_tanpa_kop', $data, "$proyek - $as - $surat", 'A4', 'potrait');
    }
    
    public function cetak_panel_tanpa_kop($id)
    {
        $as = $_SESSION['username'];
        $this->load->library('mypdf');
        $data['pdf_data_all_panel'] =  $this->panel->pdf_data_all_panel($id);
        $data['pdf_data_permintaan_panel'] =  $this->panel->pdf_data_permintaan_panel($id);
        $data['pdf_hitung_ppn'] =  $this->panel->pdf_hitung_ppn($id);
        $data['pdf_total_jumlah'] =  $this->panel->pdf_total_jumlah($id);
        $data['pdf_total_jumlah_total_ppn'] =  $this->panel->pdf_total_jumlah_total_ppn($id);
        $data['pdf_data_tanggal_panel'] =  $this->panel->pdf_get_tanggal_panel($id);
        $data['pdf_data_bulan_panel'] =  $this->panel->pdf_get_bulan_panel($id);
        $data['pdf_data_tahun_panel'] =  $this->panel->pdf_get_tahun_panel($id);
        foreach($data['pdf_data_all_panel'] as $row){
            $surat = $row['no_surat'];
            $proyek = $row['nama_proyek'];
        }
        $this->mypdf->generate('Laporan/pdf_panel_tanpa_kop', $data, "$proyek - $as - $surat", 'A4', 'potrait');
    }
    
    public function cetak_stensla_tanpa_kop($id)
    {
        $as = $_SESSION['username'];
        $this->load->library('mypdf');
        $data['pdf_data_all_stensla'] =  $this->stensla->pdf_data_all_stensla($id);
        $data['pdf_data_permintaan_stensla'] =  $this->stensla->pdf_data_permintaan_stensla($id);
        $data['pdf_hitung_ppn'] =  $this->stensla->pdf_hitung_ppn($id);
        $data['pdf_total_jumlah'] =  $this->stensla->pdf_total_jumlah($id);
        $data['pdf_total_jumlah_total_ppn'] =  $this->stensla->pdf_total_jumlah_total_ppn($id);
        $data['pdf_data_tanggal_stensla'] =  $this->stensla->pdf_get_tanggal_stensla($id);
        $data['pdf_data_bulan_stensla'] =  $this->stensla->pdf_get_bulan_stensla($id);
        $data['pdf_data_tahun_stensla'] =  $this->stensla->pdf_get_tahun_stensla($id);
        foreach($data['pdf_data_all_stensla'] as $row){
            $surat = $row['no_surat'];
            $proyek = $row['nama_proyek'];
        }
        $this->mypdf->generate('Laporan/pdf_stensla_tanpa_kop', $data, "$proyek - $as - $surat", 'A4', 'potrait');
    }

    public function cetak_readymix_tanpa_kop($id)
    {
        $as = $_SESSION['username'];
        $this->load->library('mypdf');
        $data['pdf_data_all_readymix'] =  $this->readymix->pdf_data_all_readymix($id);
        $data['pdf_data_permintaan_readymix'] =  $this->readymix->pdf_data_permintaan_readymix($id);
        $data['pdf_hitung_ppn'] =  $this->readymix->pdf_hitung_ppn($id);
        $data['pdf_total_jumlah'] =  $this->readymix->pdf_total_jumlah($id);
        $data['pdf_total_jumlah_total_ppn'] =  $this->readymix->pdf_total_jumlah_total_ppn($id);
        $data['pdf_data_tanggal_readymix'] =  $this->readymix->pdf_get_tanggal_readymix($id);
        $data['pdf_data_bulan_readymix'] =  $this->readymix->pdf_get_bulan_readymix($id);
        $data['pdf_data_tahun_readymix'] =  $this->readymix->pdf_get_tahun_readymix($id);
        foreach($data['pdf_data_all_readymix'] as $row){
            $surat = $row['no_surat'];
            $proyek = $row['nama_proyek'];
        }
        $this->mypdf->generate('Laporan/pdf_readymix_tanpa_kop', $data, "$proyek - $as - $surat", 'A4', 'potrait');
    }
    
    public function cetak_sheet_pile_tanpa_kop($id)
    {
        $this->load->library('mypdf');
        $as = $_SESSION['username'];
        $this->load->library('mypdf');
        $data['pdf_data_all_sheet_pile'] =  $this->sheet_pile->pdf_data_all_sheet_pile($id);
        $data['pdf_data_permintaan_sheet_pile'] =  $this->sheet_pile->pdf_data_permintaan_sheet_pile($id);
        $data['pdf_hitung_ppn'] =  $this->sheet_pile->pdf_hitung_ppn($id);
        $data['pdf_total_jumlah'] =  $this->sheet_pile->pdf_total_jumlah($id);
        $data['pdf_total_jumlah_total_ppn'] =  $this->sheet_pile->pdf_total_jumlah_total_ppn($id);
        $data['pdf_data_tanggal_sheet_pile'] =  $this->sheet_pile->pdf_get_tanggal_sheet_pile($id);
        $data['pdf_data_bulan_sheet_pile'] =  $this->sheet_pile->pdf_get_bulan_sheet_pile($id);
        $data['pdf_data_tahun_sheet_pile'] =  $this->sheet_pile->pdf_get_tahun_sheet_pile($id);
        foreach($data['pdf_data_all_sheet_pile'] as $row){
            $surat = $row['no_surat'];
            $proyek = $row['nama_proyek'];
        }
        $this->mypdf->generate('Laporan/pdf_sheet_pile_tanpa_kop', $data, "$proyek - $as - $surat", 'A4', 'potrait');
    }

    public function cetak_paving_tanpa_kop($id)
    {
        $this->load->library('mypdf');
        $as = $_SESSION['username'];
        $this->load->library('mypdf');
        $data['pdf_data_all_paving'] =  $this->paving->pdf_data_all_paving($id);
        $data['pdf_data_permintaan_paving'] =  $this->paving->pdf_data_permintaan_paving($id);
        $data['pdf_hitung_ppn'] =  $this->paving->pdf_hitung_ppn($id);
        $data['pdf_total_jumlah'] =  $this->paving->pdf_total_jumlah($id);
        $data['pdf_total_jumlah_total_ppn'] =  $this->paving->pdf_total_jumlah_total_ppn($id);
        $data['pdf_data_tanggal_paving'] =  $this->paving->pdf_get_tanggal_paving($id);
        $data['pdf_data_bulan_paving'] =  $this->paving->pdf_get_bulan_paving($id);
        $data['pdf_data_tahun_paving'] =  $this->paving->pdf_get_tahun_paving($id);
        foreach($data['pdf_data_all_paving'] as $row){
            $surat = $row['no_surat'];
            $proyek = $row['nama_proyek'];
        }
        $this->mypdf->generate('Laporan/pdf_paving_tanpa_kop', $data, "$proyek - $as - $surat", 'A4', 'potrait');
    }

    

}

/* End of file Laporan.php */
/* Location: ./application/controllers/Laporan.php */