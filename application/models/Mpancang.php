<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpancang extends CI_Model {

    function get_latest() 
    {
        $query = $this->db->query("SELECT * FROM latest_update WHERE produk='Tiang Pancang' ORDER BY tanggal DESC");
        return $query->result();
    }

    function get_row_data_pancang($id) 
    {
        return $this->db->where('id', $id)->get('tbl_data_penawaran')->row_array();
    }
    
    // MODEL QUERY USER pancang

    public function get_data_pancang($username)
    {
        $query = $this->db->query("SELECT * FROM tbl_data_penawaran WHERE marketing='$username' and produk='Tiang Pancang' ORDER BY id DESC");
        return $query->result();
    }

    public function get_detail_pancang($id){
        $query = $this->db->query("SELECT * from tbl_data_penawaran where id='$id'");
        $result = $query->result_array();
        return $result;
    }

    public function details($username,$id)
    {
        $query = $this->db->query("SELECT * FROM tbl_permintaan_pancang pancang JOIN tbl_data_penawaran penawaran on pancang.nama_proyek=penawaran.nama_proyek WHERE penawaran.marketing='$username' and penawaran.id='$id' and penawaran.produk='Tiang Pancang' ");
        return $query->result();
    }
    
    //Modifikasi pada baris function ceknosurat pada semua marketing jika no surat di reset di database. fungsi ini saya akan kembalikan//
    /*public function ceknosurat($username)
    {
        $query = $this->db->query("SELECT MAX(no_surat) as nosurat from tbl_data_penawaran where marketing='$username' ");
        $hasil = $query->row();
        return $hasil->nosurat;
    }*/

    public function ceknosurat($username)
    {
        $query = $this->db->query("SELECT MAX(CAST(no_surat AS UNSIGNED)) as nosurat FROM tbl_data_penawaran WHERE marketing = ?", array($username));
        $hasil = $query->row();
        return intval($hasil->nosurat);
    }

    public function add_pancang()
    {
        $dt = new DateTime("now", new DateTimeZone('Asia/Jakarta'));
        $data = array(
            'produk'     => 'Tiang Pancang',
            'marketing'     => $this->input->post('marketing'),
            'no_surat'     => $this->input->post('no_surat'),
            'nama_instansi'     => $this->input->post('nama_instansi'),
            'nama_customer'     => $this->input->post('nama_customer'),
            'alamat_customer'     => $this->input->post('alamat_customer'),
            'telepon_customer'     => $this->input->post('telepon_customer'),
            'email'     => $this->input->post('email'),
            'nama_proyek'     => $this->input->post('nama_proyek'),
            'periode_pelaksana'     => $this->input->post('periode_pelaksana'),
            'nama_penanggung_jawab'     => $this->input->post('nama_penanggung_jawab'),
            'telepon_penanggung_jawab'     => $this->input->post('telepon_penanggung_jawab'),
            'alamat_penagihan'     => $this->input->post('alamat_penagihan'),
            "tanggal" => $dt->format('Y-m-d'),
            'status'     => 0,
            'include'     => $this->input->post('include'),
            'ppn'     => $this->input->post('ppn'),
            'keterangan'     => "",
            'metode_pembayaran'     => $this->input->post('metode_pembayaran'),
            'keterangan_tambahan'     => $this->input->post('keterangan_tambahan'),
            'goals'     => $this->input->post('goals'),
        );

        $save = $this->db
                     ->insert('tbl_data_penawaran', $data);	
        
        if($save)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

    public function add_permintaan_pancang()
    {
        $dt = new DateTime("now", new DateTimeZone('Asia/Jakarta'));
        $data = array(
            'marketing'     => $this->input->post('marketing'),
            'nama_proyek'     => $this->input->post('nama_proyek'),
            'item'     => $this->input->post('item'),
            'panjang'     => $this->input->post('panjang'),
            'jumlah'     => $this->input->post('jumlah'),
            'volume'     => $this->input->post('volume'),
            'harga_satuan'     => $this->input->post('harga_satuan'),
            "tanggal" => $dt->format('Y-m-d H:i:s'),
            "keterangan" => $this->input->post('keterangan'),
        );

        $save = $this->db
                     ->insert('tbl_permintaan_pancang', $data);	
        
        if($save)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

    public function update_penawaran($id,$nama=null)
    {
        $dt = new DateTime("now", new DateTimeZone('Asia/Jakarta'));
        if($nama != NULL) {
            $data['image']     = $nama;
        }
        $data['produk']     = 'Tiang Pancang';
        $data['marketing']     = $this->input->post('marketing');
        $data['no_surat']     = $this->input->post('no_surat');
        $data['nama_instansi']     = $this->input->post('nama_instansi');
        $data['nama_customer']     = $this->input->post('nama_customer');
        $data['alamat_customer']     = $this->input->post('alamat_customer');
        $data['telepon_customer']     = $this->input->post('telepon_customer');
        $data['email']     = $this->input->post('email');
        $data['nama_proyek']     = $this->input->post('nama_proyek');
        $data['periode_pelaksana']     = $this->input->post('periode_pelaksana');
        $data['nama_penanggung_jawab']     = $this->input->post('nama_penanggung_jawab');
        $data['telepon_penanggung_jawab']     = $this->input->post('telepon_penanggung_jawab');
        $data['alamat_penagihan']     = $this->input->post('alamat_penagihan');
        $data['tanggal'] = $dt->format('Y-m-d');
        $data['status']     = $this->input->post('status');
        $data['include']     = $this->input->post('include');
        $data['ppn']     = $this->input->post('ppn');
        $data['keterangan']    = $this->input->post('keterangan');
        $data['metode_pembayaran']     = $this->input->post('metode_pembayaran');
        $data['keterangan_tambahan']     = $this->input->post('keterangan_tambahan');
        $data['goals']     = $this->input->post('goals');

        $update = $this->db->where('id', $id)->update('tbl_data_penawaran', $data);	

        if ($update) {
            $data = array(
                'produk'     => 'Tiang Pancang',
                'nama_proyek'     => $this->input->post('nama_proyek'),
                'marketing'     => $this->input->post('marketing'),
                "tanggal" => $dt->format('Y-m-d H:i:s'),
            );
            $insert = $this->db
                     ->insert('latest_update', $data);	
            // return TRUE;
        } else {
            return FALSE;
        }
    }

    public function hapusPenawaran($id)
    {
        $hapus = $this->db->where('id',$id)->delete('tbl_data_penawaran');
        if($hapus)
        {
            return TRUE;
        }else
        {
            return FALSE;
        }
    }

    public function hapusPermintaan($ids)
    {
        $hapus = $this->db->where('ids',$ids)->delete('tbl_permintaan_pancang');
        if($hapus)
        {
            return TRUE;
        }else
        {
            return FALSE;
        }
    }







    // MODEL QUERY ADMIN DIBAWAH 

    public function get_data_pancang_admin()
    {
        return $this->db->where('produk','Tiang Pancang')->order_by('id','DESC')->get('tbl_data_penawaran')->result();
    }

    public function get_detail_pancang_admin($id){
        $query = $this->db->query("SELECT * from tbl_data_penawaran where id='$id'");
        $result = $query->result_array();
        return $result;
    }

    public function details_admin($id)
    {
        $query = $this->db->query("SELECT penawaran.nama_proyek, penawaran.id, pancang.ids, pancang.nama_proyek, pancang.marketing, pancang.item, pancang.panjang, pancang.keterangan ,pancang.harga_satuan, pancang.volume, penawaran.ppn, pancang.jumlah FROM tbl_permintaan_pancang pancang JOIN tbl_data_penawaran penawaran on penawaran.nama_proyek=pancang.nama_proyek WHERE penawaran.id='$id' ");
        return $query->result();
    }

    public function update_permintaan_pancang($ids)
    {
        $dt = new DateTime("now", new DateTimeZone('Asia/Jakarta'));
        $data = array(
            'marketing'     => $this->input->post('marketing'),
            'nama_proyek'     => $this->input->post('nama_proyek'),
            'item'     => $this->input->post('item'),
            'panjang'     => $this->input->post('panjang'),
            'jumlah'     => $this->input->post('jumlah'),
            'volume'     => $this->input->post('volume'),
            'harga_satuan'     => $this->input->post('harga_satuan'),
            'keterangan'     => $this->input->post('keterangan'),
            "tanggal" => $dt->format('Y-m-d H:i:s'),
        );

        $update = $this->db->where('ids', $ids)->update('tbl_permintaan_pancang', $data);	

        if ($update) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function approve($id, $produk, $marketing, $no_surat, $nama_instansi, $alamat_customer, $nama_customer, $telepon_customer, $email, $nama_proyek, $periode_pelaksana, $nama_penanggung_jawab, $telepon_penanggung_jawab, $alamat_penagihan, $status, $include, $keterangan, $tanggal, $metode_pembayaran, $keterangan_tambahan,$goals)
    {
        $data = array(
            'status'     => '1'
        );

        $update = $this->db->where('id', $id)->update('tbl_data_penawaran', $data);	

        if ($update) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function unapprove($id, $produk, $marketing, $no_surat, $nama_instansi, $alamat_customer, $nama_customer, $telepon_customer, $email, $nama_proyek, $periode_pelaksana, $nama_penanggung_jawab, $telepon_penanggung_jawab, $alamat_penagihan, $status, $include, $keterangan, $tanggal, $metode_pembayaran, $keterangan_tambahan,$goals)
    {
        $data = array(
            'status'     => '0'
        );

        $update = $this->db->where('id', $id)->update('tbl_data_penawaran', $data);	

        if ($update) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function goals($id, $produk, $marketing, $no_surat, $nama_instansi, $alamat_customer, $nama_customer, $telepon_customer, $email, $nama_proyek, $periode_pelaksana, $nama_penanggung_jawab, $telepon_penanggung_jawab, $alamat_penagihan, $status, $include, $keterangan, $tanggal, $metode_pembayaran, $keterangan_tambahan,$goals)
    {
        $data = array(
            'goals'     => '1'
        );

        $update = $this->db->where('id', $id)->update('tbl_data_penawaran', $data);	

        if ($update) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function ungoals($id, $produk, $marketing, $no_surat, $nama_instansi, $alamat_customer, $nama_customer, $telepon_customer, $email, $nama_proyek, $periode_pelaksana, $nama_penanggung_jawab, $telepon_penanggung_jawab, $alamat_penagihan, $status, $include, $keterangan, $tanggal, $metode_pembayaran, $keterangan_tambahan,$goals)
    {
        $data = array(
            'goals'     => ''
        );

        $update = $this->db->where('id', $id)->update('tbl_data_penawaran', $data);	

        if ($update) {
            return TRUE;
        } else {
            return FALSE;
        }
    }





    // QUERY UNTUK CETAK PDF
    public function pdf_data_all_pancang($id)
    {
        $query = $this->db->query("SELECT * FROM tbl_data_penawaran where id='$id' and produk='Tiang Pancang' ");
        return $query->result_array();
    }

    public function pdf_data_permintaan_pancang($id)
    {
        $query = $this->db->query("SELECT penawaran.nama_proyek, penawaran.id, pancang.ids, pancang.nama_proyek, pancang.marketing, pancang.item, pancang.panjang, pancang.keterangan , pancang.volume ,pancang.harga_satuan , pancang.jumlah, penawaran.include ,penawaran.ppn ,(pancang.volume * pancang.harga_satuan) as total_perkalian  FROM tbl_permintaan_pancang pancang JOIN tbl_data_penawaran penawaran on penawaran.nama_proyek=pancang.nama_proyek WHERE penawaran.id='$id' and penawaran.produk='Tiang Pancang'");
        return $query->result();
    }

    public function pdf_hitung_ppn($id)
    {
        $query = $this->db->query("SELECT penawaran.nama_proyek, penawaran.id, pancang.ids, pancang.nama_proyek, pancang.harga_satuan , pancang.volume, pancang.keterangan ,pancang.jumlah, penawaran.ppn ,sum((pancang.volume * pancang.harga_satuan)*0.11) as total_ppn  FROM tbl_permintaan_pancang pancang JOIN tbl_data_penawaran penawaran on penawaran.nama_proyek=pancang.nama_proyek WHERE penawaran.id='$id'  and penawaran.produk='Tiang Pancang'");
        return $query->result_array();
    }


    public function pdf_total_jumlah($id)
    {
        $query = $this->db->query("SELECT penawaran.nama_proyek, penawaran.id, pancang.volume, pancang.ids, pancang.nama_proyek,pancang.harga_satuan, pancang.keterangan , pancang.jumlah, penawaran.ppn ,sum(pancang.volume * pancang.harga_satuan) as total_volume  FROM tbl_permintaan_pancang pancang JOIN tbl_data_penawaran penawaran on penawaran.nama_proyek=pancang.nama_proyek WHERE penawaran.id='$id' and penawaran.produk='Tiang Pancang'");
        return $query->result_array();
    }

    public function pdf_total_jumlah_total_ppn($id)
    {
        $query = $this->db->query("SELECT penawaran.nama_proyek, penawaran.id, pancang.ids, pancang.nama_proyek, pancang.harga_satuan , pancang.jumlah, pancang.keterangan, pancang.volume ,penawaran.ppn ,sum(pancang.volume * pancang.harga_satuan) as total_volume ,sum((pancang.volume * pancang.harga_satuan)*0.11) as total_ppn FROM tbl_permintaan_pancang pancang JOIN tbl_data_penawaran penawaran on penawaran.nama_proyek=pancang.nama_proyek WHERE penawaran.id='$id' and penawaran.produk='Tiang Pancang'");
        return $query->result_array();
    }

    public function pdf_get_bulan_pancang($id)
    {
        $query = $this->db->query("SELECT MONTH(tanggal) as tanggal from tbl_data_penawaran where id='$id' and produk='Tiang Pancang'");
        return $query->result_array();
    }

    public function pdf_get_tahun_pancang($id)
    {
        $query = $this->db->query("SELECT YEAR(tanggal) as tanggal from tbl_data_penawaran where id='$id' and produk='Tiang Pancang'");
        return $query->result_array();
    }

    public function pdf_get_tanggal_pancang($id)
    {
        $query = $this->db->query("SELECT DAY(tanggal) as tanggal from tbl_data_penawaran where id='$id' and produk='Tiang Pancang'");
        return $query->result_array();
    }
}