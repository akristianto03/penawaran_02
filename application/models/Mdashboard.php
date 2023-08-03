<?php
defined('BASEPATH') OR exit('No direct scrprodukt access allowed');

class Mdashboard extends CI_Model {

  ///////// QUERY UNTUK SUPER ADMINISTRATION ///////////////

  public function total_penawaran()
  {
    $query1 = $this->db->query("select * from tbl_data_penawaran");
      if($query1->num_rows()>0)
      {
        return $query1->num_rows();
      }
      else
      {
        return 0;
      }
  }
  
  public function total_penawaran_selvy()
  {
    $query1 = $this->db->query("select * from tbl_data_penawaran where marketing='Selvy'");
      if($query1->num_rows()>0)
      {
        return $query1->num_rows();
      }
      else
      {
        return 0;
      }
  }
  public function total_penawaran_bulanan_selvy()
  {
    $query1 = $this->db->query("select MONTHNAME(tanggal) as bulan, YEAR(tanggal) as tahun, count(*) as total,count(goals) as goals from tbl_data_penawaran where marketing='Selvy' GROUP BY MONTH(tanggal)");
    return $query1->result();
  }

  public function total_penawaran_harris()
  {
    $query1 = $this->db->query("select * from tbl_data_penawaran where marketing='Harris'");
      if($query1->num_rows()>0)
      {
        return $query1->num_rows();
      }
      else
      {
        return 0;
      }
  }
  public function total_penawaran_bulanan_harris()
  {
    $query1 = $this->db->query("select MONTHNAME(tanggal) as bulan, YEAR(tanggal) as tahun, count(*) as total,count(goals) as goals from tbl_data_penawaran where marketing='Harris' GROUP BY MONTH(tanggal)");
    return $query1->result();
  }

  public function total_penawaran_yoshua()
  {
    $query1 = $this->db->query("select * from tbl_data_penawaran where marketing='Yoshua'");
      if($query1->num_rows()>0)
      {
        return $query1->num_rows();
      }
      else
      {
        return 0;
      }
  }
  public function total_penawaran_bulanan_yoshua()
  {
    $query1 = $this->db->query("select MONTHNAME(tanggal) as bulan, YEAR(tanggal) as tahun, count(*) as total,count(goals) as goals from tbl_data_penawaran where marketing='Yoshua' GROUP BY MONTH(tanggal)");
    return $query1->result();
  }

  public function total_penawaran_adhitya()
  {
    $query1 = $this->db->query("select * from tbl_data_penawaran where marketing='Adhitya'");
      if($query1->num_rows()>0)
      {
        return $query1->num_rows();
      }
      else
      {
        return 0;
      }
  }
  public function total_penawaran_bulanan_adhitya()
  {
    $query1 = $this->db->query("select MONTHNAME(tanggal) as bulan, YEAR(tanggal) as tahun, count(*) as total,count(goals) as goals from tbl_data_penawaran where marketing='Adhitya' GROUP BY MONTH(tanggal)");
    return $query1->result();
  }

  public function total_penawaran_nanang()
  {
    $query1 = $this->db->query("select * from tbl_data_penawaran where marketing='Nanang'");
      if($query1->num_rows()>0)
      {
        return $query1->num_rows();
      }
      else
      {
        return 0;
      }
  }
  public function total_penawaran_bulanan_nanang()
  {
    $query1 = $this->db->query("select MONTHNAME(tanggal) as bulan, YEAR(tanggal) as tahun, count(*) as total,count(goals) as goals from tbl_data_penawaran where marketing='Nanang' GROUP BY MONTH(tanggal)");
    return $query1->result();
  }
  
  public function total_penawaran_Teryluana()
  {
    $query1 = $this->db->query("select * from tbl_data_penawaran where marketing='Teryluana'");
      if($query1->num_rows()>0)
      {
        return $query1->num_rows();
      }
      else
      {
        return 0;
      }
  }
  public function total_penawaran_bulanan_teryluana()
  {
    $query1 = $this->db->query("select MONTHNAME(tanggal) as bulan, YEAR(tanggal) as tahun, count(*) as total,count(goals) as goals from tbl_data_penawaran where marketing='Teryluana' GROUP BY MONTH(tanggal)");
    return $query1->result();
  }
  
  public function total_penawaran_taufik()
  {
    $query1 = $this->db->query("select * from tbl_data_penawaran where marketing='Taufik'");
      if($query1->num_rows()>0)
      {
        return $query1->num_rows();
      }
      else
      {
        return 0;
      }
  }
  public function total_penawaran_bulanan_taufik()
  {
    $query1 = $this->db->query("select MONTHNAME(tanggal) as bulan, YEAR(tanggal) as tahun, count(*) as total,count(goals) as goals from tbl_data_penawaran where marketing='Taufik' GROUP BY MONTH(tanggal)");
    return $query1->result();
  }
  
  public function total_penawaran_indra()
  {
    $query1 = $this->db->query("select * from tbl_data_penawaran where marketing='Indra'");
      if($query1->num_rows()>0)
      {
        return $query1->num_rows();
      }
      else
      {
        return 0;
      }
  }
  public function total_penawaran_bulanan_indra()
  {
    $query1 = $this->db->query("select MONTHNAME(tanggal) as bulan, YEAR(tanggal) as tahun, count(*) as total,count(goals) as goals from tbl_data_penawaran where marketing='Indra' GROUP BY MONTH(tanggal)");
    return $query1->result();
  }
  
  public function total_penawaran_syamsul()
  {
    $query1 = $this->db->query("select * from tbl_data_penawaran where marketing='Syamsul'");
      if($query1->num_rows()>0)
      {
        return $query1->num_rows();
      }
      else
      {
        return 0;
      }
  }
  public function total_penawaran_bulanan_syamsul()
  {
    $query1 = $this->db->query("select MONTHNAME(tanggal) as bulan, YEAR(tanggal) as tahun, count(*) as total,count(goals) as goals from tbl_data_penawaran where marketing='Syamsul' GROUP BY MONTH(tanggal)");
    return $query1->result();
  }
  
  public function total_penawaran_zainul()
  {
    $query1 = $this->db->query("select * from tbl_data_penawaran where marketing='Zainul'");
      if($query1->num_rows()>0)
      {
        return $query1->num_rows();
      }
      else
      {
        return 0;
      }
  }
  public function total_penawaran_bulanan_zainul()
  {
    $query1 = $this->db->query("select MONTHNAME(tanggal) as bulan, YEAR(tanggal) as tahun, count(*) as total,count(goals) as goals from tbl_data_penawaran where marketing='Zainul' GROUP BY MONTH(tanggal)");
    return $query1->result();
  }

  public function total_penawaran_andri()
  {
    $query1 = $this->db->query("select * from tbl_data_penawaran where marketing='Andri'");
      if($query1->num_rows()>0)
      {
        return $query1->num_rows();
      }
      else
      {
        return 0;
      }
  }
  public function total_penawaran_bulanan_andri()
  {
    $query1 = $this->db->query("select MONTHNAME(tanggal) as bulan, YEAR(tanggal) as tahun, count(*) as total,count(goals) as goals from tbl_data_penawaran where marketing='Andri' GROUP BY MONTH(tanggal)");
    return $query1->result();
  }
  
  public function total_penawaran_aspal()
  {
    $query1 = $this->db->query("select * from tbl_data_penawaran where produk='Aspal'");
      if($query1->num_rows()>0)
      {
        return $query1->num_rows();
      }
      else
      {
        return 0;
      }
  }
  
  public function total_penawaran_alat()
  {
    $query1 = $this->db->query("select * from tbl_data_penawaran where produk='Alat Berat'");
      if($query1->num_rows()>0)
      {
        return $query1->num_rows();
      }
      else
      {
        return 0;
      }
  }
  
  public function total_penawaran_uditch()
  {
    $query1 = $this->db->query("select * from tbl_data_penawaran where produk='Uditch'");
      if($query1->num_rows()>0)
      {
        return $query1->num_rows();
      }
      else
      {
        return 0;
      }
  }
  
  public function total_penawaran_marka()
  {
    $query1 = $this->db->query("select * from tbl_data_penawaran where produk='Marka Jalan'");
      if($query1->num_rows()>0)
      {
        return $query1->num_rows();
      }
      else
      {
        return 0;
      }
  }
  public function total_penawaran_pancang()
  {
    $query1 = $this->db->query("select * from tbl_data_penawaran where produk='Tiang Pancang'");
      if($query1->num_rows()>0)
      {
        return $query1->num_rows();
      }
      else
      {
        return 0;
      }
  }
  public function total_penawaran_panel()
  {
    $query1 = $this->db->query("select * from tbl_data_penawaran where produk='Pagar Panel'");
      if($query1->num_rows()>0)
      {
        return $query1->num_rows();
      }
      else
      {
        return 0;
      }
  }
  public function total_penawaran_stensla()
  {
    $query1 = $this->db->query("select * from tbl_data_penawaran where produk='Stensla'");
      if($query1->num_rows()>0)
      {
        return $query1->num_rows();
      }
      else
      {
        return 0;
      }
  }
  
  public function total_penawaran_readymix()
  {
    $query1 = $this->db->query("select * from tbl_data_penawaran where produk='Ready Mix'");
      if($query1->num_rows()>0)
      {
        return $query1->num_rows();
      }
      else
      {
        return 0;
      }
  }

  public function total_penawaran_paving()
  {
    $query1 = $this->db->query("select * from tbl_data_penawaran where produk='Paving'");
      if($query1->num_rows()>0)
      {
        return $query1->num_rows();
      }
      else
      {
        return 0;
      }
  }


  ///////// QUERY UNTUK MARKETING ///////////////

  public function penawaran_kesimpulan($username)
  {
      $query1 = $this->db->query("SELECT produk, count(produk) jumlah_produk FROM `tbl_data_penawaran` where marketing='$username' ");
      return $query1->result();
  }
  
  public function hitung_data_penawaran($username)
  {
      $query1 = $this->db->query("select * from tbl_data_penawaran where marketing='$username' ");
      if($query1->num_rows()>0)
      {
        return $query1->num_rows();
      }
      else
      {
        return 0;
      }
  }

  public function hitung_data_alat($username)
  {
      $query1 = $this->db->query("select * from tbl_data_penawaran where marketing='$username' and produk='Alat Berat' ");
      if($query1->num_rows()>0)
      {
        return $query1->num_rows();
      }
      else
      {
        return 0;
      }
  }

  public function hitung_data_aspal($username)
  {
      $query1 = $this->db->query("select * from tbl_data_penawaran where marketing='$username' and produk='Aspal' ");
      if($query1->num_rows()>0)
      {
        return $query1->num_rows();
      }
      else
      {
        return 0;
      }
  }

  public function hitung_data_uditch($username)
  {
      $query1 = $this->db->query("select * from tbl_data_penawaran where marketing='$username' and produk='Uditch' ");
      if($query1->num_rows()>0)
      {
        return $query1->num_rows();
      }
      else
      {
        return 0;
      }
  }
  
  public function hitung_data_marka($username)
  {
      $query1 = $this->db->query("select * from tbl_data_penawaran where marketing='$username' and produk='Marka Jalan' ");
      if($query1->num_rows()>0)
      {
        return $query1->num_rows();
      }
      else
      {
        return 0;
      }
  }
  public function hitung_data_pancang($username)
  {
      $query1 = $this->db->query("select * from tbl_data_penawaran where marketing='$username' and produk='Tiang Pancang' ");
      if($query1->num_rows()>0)
      {
        return $query1->num_rows();
      }
      else
      {
        return 0;
      }
  }
  public function hitung_data_panel($username)
  {
      $query1 = $this->db->query("select * from tbl_data_penawaran where marketing='$username' and produk='Pagar Panel' ");
      if($query1->num_rows()>0)
      {
        return $query1->num_rows();
      }
      else
      {
        return 0;
      }
  }
  public function hitung_data_stensla($username)
  {
      $query1 = $this->db->query("select * from tbl_data_penawaran where marketing='$username' and produk='Stensla' ");
      if($query1->num_rows()>0)
      {
        return $query1->num_rows();
      }
      else
      {
        return 0;
      }
  }
  
  public function hitung_data_readymix($username)
  {
      $query1 = $this->db->query("select * from tbl_data_penawaran where marketing='$username' and produk='Ready Mix' ");
      if($query1->num_rows()>0)
      {
        return $query1->num_rows();
      }
      else
      {
        return 0;
      }
  }

  public function hitung_data_paving($username)
  {
      $query1 = $this->db->query("select * from tbl_data_penawaran where marketing='$username' and produk='Paving' ");
      if($query1->num_rows()>0)
      {
        return $query1->num_rows();
      }
      else
      {
        return 0;
      }
  }
  
  public function klasemen(){
     $query = $this->db->query("SELECT MONTH(NOW()) as bulan_ini, marketing, COUNT(*), COUNT(marketing) as total FROM tbl_data_penawaran WHERE status=1 AND goals=1 AND MONTH(tanggal) = MONTH(NOW()) GROUP BY marketing ORDER BY count(*) DESC");
    // $query = $this->db->query("SELECT marketing, MONTHNAME(tanggal) as bulan, YEAR(tanggal) as tahun, count(*) as total,count(goals) as goals from tbl_data_penawaran GROUP BY MONTH(tanggal)");
     return $query->result();
  }
  
  
}