<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Firebase Cloud Messaging Authorization Key
define('FCM_AUTH_KEY', 'AAAADLOEZKM:APA91bF_oFRr58S5eMdZeEAWpvsaDVRjXYiUcBYuslSIPLu_bTfFYjVTk3BgRNIDki6Ng2AQCdqWFFyoSmFYl1vJtbyYzhM-TvUlXjVS1Pd7-vime_Dj6mnYXKRFUzUjMT9_i02GCcde');

class Alat extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mlogin', 'login');
		$this->load->model('Mdashboard', 'dashboard');
		$this->load->model('Malat', 'alat');
		$this->load->model('Mtoken', 'token');
		$this->load->library('user_agent');
	}

	public function index()
	{
		$username = $_SESSION['username'];
		if ($this->session->userdata('authenticated')) {
			if ($this->session->userdata('status') == 'Admin') {
				$data['title'] =  'Alat Admin';
				$data['back'] =  'Login';
				$data['header'] =  'Header/Header';
				$data['body'] =  'Body/Alat_Admin';
				$data['footer'] =  'Footer/Footer';
				$data['data_alat_admin'] =  $this->alat->get_data_alat_admin();
				$data['latest_update'] =  $this->alat->get_latest();
				///dibawah ini untuk klasemen
				$data['klasemen'] = $this->dashboard->klasemen();
				$this->load->view('template', $data);
			} else {

				//modifikasi pada baris nosurat pada semua marketing
				$dariDB = $this->alat->ceknosurat($username);
				$nourut = $dariDB + 1;
				$no_urut_sekarang = sprintf("%04d", $nourut);
				$data = array('no_surat' => $no_urut_sekarang);

				// jika no surat di reset di databse. fungsi ini saya akan kembalikan//
				/*$dariDB = $this->alat->ceknosurat($username);
				$nourut = substr($dariDB, 1, 4);
				$no_urut_sekarang = $nourut + 1;
				$data = array('no_surat' => $no_urut_sekarang);*/

				$data['title'] =  'Alat';
				$data['back'] =  'Login';
				$data['header'] =  'Header/Header';
				$data['body'] =  'Body/Alat';
				$data['footer'] =  'Footer/Footer';
				$data['data_alat'] =  $this->alat->get_data_alat($username);
				$data['klasemen'] = $this->dashboard->klasemen();
				$this->load->view('template', $data);
			}
		} else {
			redirect('Login');
		}
	}

	public function add_alat()
	{
		if ($this->session->userdata('authenticated')) {
			if ($this->input->post('simpan')) {
				if ($this->alat->add_alat()) {
					$this->session->set_flashdata('title', 'Berhasil');
					$this->session->set_flashdata('msg', 'Tambah Artikel Berhasil');
					$this->session->set_flashdata('type', 'success');

					$this->token->sendNotification("Admin", "Menunggu persetujuan", "Penawaran alat berat untuk " . $this->input->post('nama_proyek') . " oleh " . $this->input->post('marketing'));
					redirect(base_url('Alat'));
				} else {
					$this->session->set_flashdata('title', 'Gagal');
					$this->session->set_flashdata('msg', 'Tambah Artikel Gagal');
					$this->session->set_flashdata('type', 'error');
					redirect(base_url('Alat'));
				}
			} else {
				$this->session->set_flashdata('title', 'Gagal');
				$this->session->set_flashdata('msg', 'Tambah Artikel Gagal');
				$this->session->set_flashdata('type', 'error');
				redirect(base_url('Alat'));
			}
		} else {
			redirect('Login');
		}
	}

	public function add_permintaan_alat()
	{
		if ($this->session->userdata('authenticated')) {
			if ($this->input->post('simpan')) {
				if ($this->alat->add_permintaan_alat()) {
					$this->session->set_flashdata('title', 'Berhasil');
					$this->session->set_flashdata('msg', 'Tambah Artikel Berhasil');
					$this->session->set_flashdata('type', 'success');
					redirect($this->agent->referrer());
				} else {
					$this->session->set_flashdata('title', 'Gagal');
					$this->session->set_flashdata('msg', 'Tambah Artikel Gagal');
					$this->session->set_flashdata('type', 'error');
					redirect($this->agent->referrer());
				}
			} else {
				$this->session->set_flashdata('title', 'Gagal');
				$this->session->set_flashdata('msg', 'Tambah Artikel Gagal');
				$this->session->set_flashdata('type', 'error');
				redirect($this->agent->referrer());
			}
		} else {
			redirect('Login');
		}
	}

	public function approve($id)
	{
		if ($this->alat->get_row_data_alat($id)) {
			$datanya = $this->alat->get_row_data_alat($id);

			$id = $datanya['id'];
			$produk = $datanya['produk'];
			$marketing = $datanya['marketing'];
			$no_surat = $datanya['no_surat'];
			$nama_instansi = $datanya['nama_instansi'];
			$alamat_customer = $datanya['alamat_customer'];
			$nama_customer = $datanya['nama_customer'];
			$telepon_customer = $datanya['telepon_customer'];
			$email = $datanya['email'];
			$nama_proyek = $datanya['nama_proyek'];
			$periode_pelaksana = $datanya['periode_pelaksana'];
			$nama_penanggung_jawab = $datanya['nama_penanggung_jawab'];
			$telepon_penanggung_jawab = $datanya['telepon_penanggung_jawab'];
			$alamat_penagihan = $datanya['alamat_penagihan'];
			$status = $datanya['status'];
			$include = $datanya['include'];
			$ppn = $datanya['ppn'];
			$keterangan = $datanya['keterangan'];
			$tanggal = $datanya['tanggal'];
			$metode_pembayaran = $datanya['metode_pembayaran'];
			$keterangan_tambahan = $datanya['keterangan_tambahan'];
			$goals = $datanya['goals'];

			if ($this->alat->approve($id, $produk, $marketing, $no_surat, $nama_instansi, $alamat_customer, $nama_customer, $telepon_customer, $email, $nama_proyek, $periode_pelaksana, $nama_penanggung_jawab, $telepon_penanggung_jawab, $alamat_penagihan, $status, $include, $keterangan, $tanggal, $metode_pembayaran, $keterangan_tambahan, $goals)) {
				$this->session->set_flashdata('title', 'Berhasil');
				$this->session->set_flashdata('msg', 'Berhasil Approve User');
				$this->session->set_flashdata('type', 'success');
				redirect($this->agent->referrer());
			} else {
				$this->session->set_flashdata('title', 'Gagal');
				$this->session->set_flashdata('msg', 'Gagal Approve User');
				$this->session->set_flashdata('type', 'error');
				redirect($this->agent->referrer());
			}
		}
	}

	public function unapprove($id)
	{
		if ($this->alat->get_row_data_alat($id)) {
			$datanya = $this->alat->get_row_data_alat($id);

			$id = $datanya['id'];
			$produk = $datanya['produk'];
			$marketing = $datanya['marketing'];
			$no_surat = $datanya['no_surat'];
			$nama_instansi = $datanya['nama_instansi'];
			$alamat_customer = $datanya['alamat_customer'];
			$nama_customer = $datanya['nama_customer'];
			$telepon_customer = $datanya['telepon_customer'];
			$email = $datanya['email'];
			$nama_proyek = $datanya['nama_proyek'];
			$periode_pelaksana = $datanya['periode_pelaksana'];
			$nama_penanggung_jawab = $datanya['nama_penanggung_jawab'];
			$telepon_penanggung_jawab = $datanya['telepon_penanggung_jawab'];
			$alamat_penagihan = $datanya['alamat_penagihan'];
			$status = $datanya['status'];
			$include = $datanya['include'];
			$ppn = $datanya['ppn'];
			$keterangan = $datanya['keterangan'];
			$tanggal = $datanya['tanggal'];
			$metode_pembayaran = $datanya['metode_pembayaran'];
			$keterangan_tambahan = $datanya['keterangan_tambahan'];
			$goals = $datanya['goals'];

			if ($this->alat->unapprove($id, $produk, $marketing, $no_surat, $nama_instansi, $alamat_customer, $nama_customer, $telepon_customer, $email, $nama_proyek, $periode_pelaksana, $nama_penanggung_jawab, $telepon_penanggung_jawab, $alamat_penagihan, $status, $include, $keterangan, $tanggal, $metode_pembayaran, $keterangan_tambahan, $goals)) {
				$this->session->set_flashdata('title', 'Berhasil');
				$this->session->set_flashdata('msg', 'Berhasil Approve User');
				$this->session->set_flashdata('type', 'success');
				redirect($this->agent->referrer());
			} else {
				$this->session->set_flashdata('title', 'Gagal');
				$this->session->set_flashdata('msg', 'Gagal Approve User');
				$this->session->set_flashdata('type', 'error');
				redirect($this->agent->referrer());
			}
		}
	}

	public function goals($id)
	{
		if ($this->alat->get_row_data_alat($id)) {
			$datanya = $this->alat->get_row_data_alat($id);

			$id = $datanya['id'];
			$produk = $datanya['produk'];
			$marketing = $datanya['marketing'];
			$no_surat = $datanya['no_surat'];
			$nama_instansi = $datanya['nama_instansi'];
			$alamat_customer = $datanya['alamat_customer'];
			$nama_customer = $datanya['nama_customer'];
			$telepon_customer = $datanya['telepon_customer'];
			$email = $datanya['email'];
			$nama_proyek = $datanya['nama_proyek'];
			$periode_pelaksana = $datanya['periode_pelaksana'];
			$nama_penanggung_jawab = $datanya['nama_penanggung_jawab'];
			$telepon_penanggung_jawab = $datanya['telepon_penanggung_jawab'];
			$alamat_penagihan = $datanya['alamat_penagihan'];
			$status = $datanya['status'];
			$include = $datanya['include'];
			$ppn = $datanya['ppn'];
			$keterangan = $datanya['keterangan'];
			$tanggal = $datanya['tanggal'];
			$metode_pembayaran = $datanya['metode_pembayaran'];
			$keterangan_tambahan = $datanya['keterangan_tambahan'];
			$goals = $datanya['goals'];

			if ($this->alat->goals($id, $produk, $marketing, $no_surat, $nama_instansi, $alamat_customer, $nama_customer, $telepon_customer, $email, $nama_proyek, $periode_pelaksana, $nama_penanggung_jawab, $telepon_penanggung_jawab, $alamat_penagihan, $status, $include, $keterangan, $tanggal, $metode_pembayaran, $keterangan_tambahan, $goals)) {
				$this->session->set_flashdata('title', 'Berhasil');
				$this->session->set_flashdata('msg', 'Berhasil Approve User');
				$this->session->set_flashdata('type', 'success');
				redirect($this->agent->referrer());
			} else {
				$this->session->set_flashdata('title', 'Gagal');
				$this->session->set_flashdata('msg', 'Gagal Approve User');
				$this->session->set_flashdata('type', 'error');
				redirect($this->agent->referrer());
			}
		}
	}

	public function ungoals($id)
	{
		if ($this->alat->get_row_data_alat($id)) {
			$datanya = $this->alat->get_row_data_alat($id);

			$id = $datanya['id'];
			$produk = $datanya['produk'];
			$marketing = $datanya['marketing'];
			$no_surat = $datanya['no_surat'];
			$nama_instansi = $datanya['nama_instansi'];
			$alamat_customer = $datanya['alamat_customer'];
			$nama_customer = $datanya['nama_customer'];
			$telepon_customer = $datanya['telepon_customer'];
			$email = $datanya['email'];
			$nama_proyek = $datanya['nama_proyek'];
			$periode_pelaksana = $datanya['periode_pelaksana'];
			$nama_penanggung_jawab = $datanya['nama_penanggung_jawab'];
			$telepon_penanggung_jawab = $datanya['telepon_penanggung_jawab'];
			$alamat_penagihan = $datanya['alamat_penagihan'];
			$status = $datanya['status'];
			$include = $datanya['include'];
			$ppn = $datanya['ppn'];
			$keterangan = $datanya['keterangan'];
			$tanggal = $datanya['tanggal'];
			$metode_pembayaran = $datanya['metode_pembayaran'];
			$keterangan_tambahan = $datanya['keterangan_tambahan'];
			$goals = $datanya['goals'];

			if ($this->alat->ungoals($id, $produk, $marketing, $no_surat, $nama_instansi, $alamat_customer, $nama_customer, $telepon_customer, $email, $nama_proyek, $periode_pelaksana, $nama_penanggung_jawab, $telepon_penanggung_jawab, $alamat_penagihan, $status, $include, $keterangan, $tanggal, $metode_pembayaran, $keterangan_tambahan, $goals)) {
				$this->session->set_flashdata('title', 'Berhasil');
				$this->session->set_flashdata('msg', 'Berhasil Approve User');
				$this->session->set_flashdata('type', 'success');
				redirect($this->agent->referrer());
			} else {
				$this->session->set_flashdata('title', 'Gagal');
				$this->session->set_flashdata('msg', 'Gagal Approve User');
				$this->session->set_flashdata('type', 'error');
				redirect($this->agent->referrer());
			}
		}
	}

	public function detail_alat($id)
	{
		$username = $_SESSION['username'];
		if ($this->session->userdata('authenticated')) {
			if ($this->session->userdata('status') == 'Admin') {
				$data['title'] =  'Alat';
				$data['header'] =  'Header/Header';
				$data['body'] =  'Body/Detail_Alat_Admin';
				$data['footer'] =  'Footer/Footer';
				$data['get_detail_alat_admin'] = $this->alat->get_detail_alat_admin($id);
				$data['detail_alat_admin'] = $this->alat->details_admin($id);
				$data['klasemen'] = $this->dashboard->klasemen();
				$this->load->view('template', $data);
			} else {
				$data['title'] =  'Alat';
				$data['header'] =  'Header/Header';
				$data['body'] =  'Body/Detail_Alat_User';
				$data['footer'] =  'Footer/Footer';
				$data['get_detail_alat'] = $this->alat->get_detail_alat($id);
				$data['detail_alat'] = $this->alat->details($username, $id);
				$data['klasemen'] = $this->dashboard->klasemen();
				$this->load->view('template', $data);
			}
		} else {
			redirect('Login');
		}
	}


	public function update()
	{
		if ($this->session->userdata('authenticated')) {
			if ($this->input->post('update')) {
				if ($this->alat->update_permintaan_alat($this->input->post('ids'))) {
					$this->session->set_flashdata('title', 'Berhasil');
					$this->session->set_flashdata('msg', 'Tambah Artikel Berhasil');
					$this->session->set_flashdata('type', 'success');
					redirect($this->agent->referrer());
				} else {
					$this->session->set_flashdata('title', 'Gagal');
					$this->session->set_flashdata('msg', 'Tambah Artikel Gagal');
					$this->session->set_flashdata('type', 'error');
					redirect($this->agent->referrer());
				}
			} else {
				$this->session->set_flashdata('title', 'Gagal');
				$this->session->set_flashdata('msg', 'Tambah Artikel Gagal');
				$this->session->set_flashdata('type', 'error');
				redirect($this->agent->referrer());
			}
		} else {
			redirect('Login');
		}
	}

	public function update_penawaran()
	{
		if ($this->session->userdata('authenticated')) {
			if ($this->input->post('update_penawaran')) {
				if ($_FILES['image']['size'] != NULL) {
					$this->load->helper('file');
					$new_name = time() . $_FILES["userfiles"]['name'];
					$config['file_name'] = $new_name;
					$config['upload_path'] = './assets/upload_kontrak/alat';
					$config['allowed_types'] = 'gif|jpg|png|jpeg';
					$config['max_size']  = '20000';
					$config['max_width']  = '20000';
					$config['max_height']  = '20000';

					$this->load->library('upload');
					$this->upload->initialize($config);

					if (!$this->upload->do_upload('image')) {
						$this->session->set_flashdata('title', 'Gagal');
						$this->session->set_flashdata('msg', $this->upload->display_errors());
						$this->session->set_flashdata('type', 'error');
						redirect($this->agent->referrer());
					} else {
						if ($this->alat->update_penawaran($this->input->post('id'), $this->upload->data('file_name'))) {
							$this->session->set_flashdata('title', 'Berhasil');
							$this->session->set_flashdata('msg', 'Update Product Berhasil');
							$this->session->set_flashdata('type', 'success');
							redirect($this->agent->referrer());
						} else {
							$this->session->set_flashdata('title', 'Gagal');
							$this->session->set_flashdata('msg', 'Update Product Gagal');
							$this->session->set_flashdata('type', 'error');
							redirect($this->agent->referrer());
						}
					}
				} else {
					if ($this->alat->update_penawaran($this->input->post('id'))) {
						$this->session->set_flashdata('title', 'Berhasil');
						$this->session->set_flashdata('msg', 'Update Product Berhasil');
						$this->session->set_flashdata('type', 'success');
						redirect($this->agent->referrer());
					} else {
						$this->session->set_flashdata('title', 'Gagal');
						$this->session->set_flashdata('msg', 'Update Product Gagal');
						$this->session->set_flashdata('type', 'error');
						redirect($this->agent->referrer());
					}
				}
			} else {
				$this->session->set_flashdata('title', 'Gagal');
				$this->session->set_flashdata('msg', 'Tambah Artikel Gagal');
				$this->session->set_flashdata('type', 'error');
				redirect($this->agent->referrer());
			}
		} else {
			redirect('Login');
		}
	}

	public function hapus($id)
	{
		if ($this->alat->hapusPenawaran($id)) {
			$this->session->set_flashdata('title', 'Berhasil');
			$this->session->set_flashdata('msg', 'Tambah Artikel Berhasil');
			$this->session->set_flashdata('type', 'success');
			redirect($this->agent->referrer());
		} else {
			$this->session->set_flashdata('title', 'Gagal');
			$this->session->set_flashdata('msg', 'Tambah Artikel Gagal');
			$this->session->set_flashdata('type', 'error');
			redirect($this->agent->referrer());
		}
	}

	public function hapus_permintaan($ids)
	{
		if ($this->alat->hapusPermintaan($ids)) {
			$this->session->set_flashdata('title', 'Berhasil');
			$this->session->set_flashdata('msg', 'Tambah Artikel Berhasil');
			$this->session->set_flashdata('type', 'success');
			redirect($this->agent->referrer());
		} else {
			$this->session->set_flashdata('title', 'Gagal');
			$this->session->set_flashdata('msg', 'Tambah Artikel Gagal');
			$this->session->set_flashdata('type', 'error');
			redirect($this->agent->referrer());
		}
	}
}
