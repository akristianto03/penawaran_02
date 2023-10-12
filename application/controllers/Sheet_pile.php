<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sheet_pile extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mlogin', 'login');
		$this->load->model('Msheet_pile', 'sheet_pile');
		$this->load->model('Mdashboard', 'dashboard');
		$this->load->model('Mtoken', 'token');
		$this->load->library('user_agent');
	}

	public function index()
	{
		$username = $_SESSION['username'];
		if ($this->session->userdata('authenticated')) {
			if ($this->session->userdata('status') == 'Admin') {
				$data['title'] =  'Sheet Pile Admin';
				$data['back'] =  'Login';
				$data['header'] =  'Header/Header';
				$data['body'] =  'Body/Sheet_Pile_Admin';
				$data['footer'] =  'Footer/Footer';
				$data['data_sheet_pile_admin'] =  $this->sheet_pile->get_data_sheet_pile_admin();
				$data['klasemen'] = $this->dashboard->klasemen();
				$data['latest_update'] =  $this->sheet_pile->get_latest();
				$this->load->view('template', $data);
			} else {

				//modifikasi pada baris nosurat pada semua marketing//
				$dariDB = $this->sheet_pile->ceknosurat($username);
				$nourut = $dariDB + 1;
				$no_urut_sekarang = sprintf("%04d", $nourut);
				$data = array('no_surat' => $no_urut_sekarang);

				// jika no surat di reset di databse. fungsi ini saya akan kembalikan//
				/*$dariDB = $this->sheet_pile->ceknosurat($username);
				$nourut = substr($dariDB, 1, 4);
				$no_urut_sekarang = $nourut + 1;
				$data = array('no_surat' => $no_urut_sekarang);*/

				$data['title'] =  'Sheet Pile';
				$data['back'] =  'Login';
				$data['header'] =  'Header/Header';
				$data['body'] =  'Body/Sheet_Pile';
				$data['footer'] =  'Footer/Footer';
				$data['data_sheet_pile'] =  $this->sheet_pile->get_data_sheet_pile($username);
				$data['klasemen'] = $this->dashboard->klasemen();
				$this->load->view('template', $data);
			}
		} else {
			redirect('Login');
		}
	}

	public function add_sheet_pile()
	{
		if ($this->session->userdata('authenticated')) {
			if ($this->input->post('simpan')) {
				if ($this->sheet_pile->add_sheet_pile()) {
					$this->session->set_flashdata('title', 'Berhasil');
					$this->session->set_flashdata('msg', 'Tambah Artikel Berhasil');
					$this->session->set_flashdata('type', 'success');
					$this->token->sendNotification("Admin", "Menunggu persetujuan", "Penawaran sheet pile untuk " . $this->input->post('nama_proyek') . " oleh " . $this->input->post('marketing'));
					redirect(base_url('Sheet_pile'));
				} else {
					$this->session->set_flashdata('title', 'Gagal');
					$this->session->set_flashdata('msg', 'Tambah Artikel Gagal');
					$this->session->set_flashdata('type', 'error');
					redirect(base_url('Sheet_pile'));
				}
			} else {
				$this->session->set_flashdata('title', 'Gagal');
				$this->session->set_flashdata('msg', 'Tambah Artikel Gagal');
				$this->session->set_flashdata('type', 'error');
				redirect(base_url('Sheet_pile'));
			}
		} else {
			redirect('Login');
		}
	}

	public function add_permintaan_sheet_pile()
	{
		if ($this->session->userdata('authenticated')) {
			if ($this->input->post('simpan')) {
				if ($this->sheet_pile->add_permintaan_sheet_pile()) {
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
		if ($this->sheet_pile->get_row_data_sheet_pile($id)) {
			$datanya = $this->sheet_pile->get_row_data_sheet_pile($id);

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

			if ($this->sheet_pile->approve($id, $produk, $marketing, $no_surat, $nama_instansi, $alamat_customer, $nama_customer, $telepon_customer, $email, $nama_proyek, $periode_pelaksana, $nama_penanggung_jawab, $telepon_penanggung_jawab, $alamat_penagihan, $status, $include, $keterangan, $tanggal, $metode_pembayaran, $keterangan_tambahan, $goals)) {
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
		if ($this->sheet_pile->get_row_data_sheet_pile($id)) {
			$datanya = $this->sheet_pile->get_row_data_sheet_pile($id);

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

			if ($this->sheet_pile->unapprove($id, $produk, $marketing, $no_surat, $nama_instansi, $alamat_customer, $nama_customer, $telepon_customer, $email, $nama_proyek, $periode_pelaksana, $nama_penanggung_jawab, $telepon_penanggung_jawab, $alamat_penagihan, $status, $include, $keterangan, $tanggal, $metode_pembayaran, $keterangan_tambahan, $goals)) {
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
		if ($this->sheet_pile->get_row_data_sheet_pile($id)) {
			$datanya = $this->sheet_pile->get_row_data_sheet_pile($id);

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

			if ($this->sheet_pile->goals($id, $produk, $marketing, $no_surat, $nama_instansi, $alamat_customer, $nama_customer, $telepon_customer, $email, $nama_proyek, $periode_pelaksana, $nama_penanggung_jawab, $telepon_penanggung_jawab, $alamat_penagihan, $status, $include, $keterangan, $tanggal, $metode_pembayaran, $keterangan_tambahan, $goals)) {
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
		if ($this->sheet_pile->get_row_data_sheet_pile($id)) {
			$datanya = $this->sheet_pile->get_row_data_sheet_pile($id);

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

			if ($this->sheet_pile->ungoals($id, $produk, $marketing, $no_surat, $nama_instansi, $alamat_customer, $nama_customer, $telepon_customer, $email, $nama_proyek, $periode_pelaksana, $nama_penanggung_jawab, $telepon_penanggung_jawab, $alamat_penagihan, $status, $include, $keterangan, $tanggal, $metode_pembayaran, $keterangan_tambahan, $goals)) {
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

	public function detail_sheet_pile($id)
	{
		$username = $_SESSION['username'];
		if ($this->session->userdata('authenticated')) {
			if ($this->session->userdata('status') == 'Admin') {
				$data['title'] =  'Sheet Pile';
				$data['header'] =  'Header/Header';
				$data['body'] =  'Body/Detail_Sheet_Pile_Admin';
				$data['footer'] =  'Footer/Footer';
				$data['get_detail_sheet_pile_admin'] = $this->sheet_pile->get_detail_sheet_pile_admin($id);
				$data['detail_sheet_pile_admin'] = $this->sheet_pile->details_admin($id);
				$data['klasemen'] = $this->dashboard->klasemen();
				$this->load->view('template', $data);
			} else {
				$data['title'] =  'Sheet Pile';
				$data['header'] =  'Header/Header';
				$data['body'] =  'Body/Detail_Sheet_Pile_User';
				$data['footer'] =  'Footer/Footer';
				$data['get_detail_sheet_pile'] = $this->sheet_pile->get_detail_sheet_pile($id);
				$data['detail_sheet_pile'] = $this->sheet_pile->details($username, $id);
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
				if ($this->sheet_pile->update_permintaan_sheet_pile($this->input->post('ids'))) {
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
					$config['upload_path'] = './assets/upload_kontrak/sheet_pile';
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
						if ($this->sheet_pile->update_penawaran($this->input->post('id'), $this->upload->data('file_name'))) {
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
					if ($this->sheet_pile->update_penawaran($this->input->post('id'))) {
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
		if ($this->sheet_pile->hapusPenawaran($id)) {
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
		if ($this->sheet_pile->hapusPermintaan($ids)) {
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
