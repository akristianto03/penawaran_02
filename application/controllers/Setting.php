<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Msetting', 'setting');
        $this->load->model('Mdashboard', 'dashboard'); 
		$this->load->library('user_agent');
    }
	
	public function index()
	{
		$username = $_SESSION['username'];
		if($this->session->userdata('authenticated'))
		{
            $data['title'] =  'Setting';
            $data['back'] =  'Login';
            $data['header'] =  'Header/Header';
            $data['body'] =  'Body/Setting';
            $data['footer'] =  'Footer/Footer';
			$data['data_akun'] = $this->setting->get_akun();
			$data['klasemen'] = $this->dashboard->klasemen();
            $this->load->view('template',$data);	
		}else {
			redirect('Login');
		}
	}

	public function add_akun()
	{
		if($this->session->userdata('authenticated'))
		{
			if($this->input->post('simpan'))
			{
				if($this->setting->add_akun())
				{
					$this->session->set_flashdata('title', 'Berhasil');
					$this->session->set_flashdata('msg', 'Tambah Artikel Berhasil');
					$this->session->set_flashdata('type', 'success');
					redirect(base_url('Setting'));
				}
				else 
				{
					$this->session->set_flashdata('title', 'Gagal');
					$this->session->set_flashdata('msg', 'Tambah Artikel Gagal');
					$this->session->set_flashdata('type', 'error');
					redirect(base_url('Setting'));
				}
			}else {
				$this->session->set_flashdata('title', 'Gagal');
				$this->session->set_flashdata('msg', 'Tambah Artikel Gagal');
				$this->session->set_flashdata('type', 'error');
				redirect(base_url('Setting'));
			}
		}else {
			redirect('Login');
		}
	}

	public function hapus_akun($id)
	{
		if($this->session->userdata('authenticated'))
		{
			if($this->setting->hapus_akun($id))
			{
				$this->session->set_flashdata('title', 'Berhasil');
				$this->session->set_flashdata('msg', 'Tambah Artikel Berhasil');
				$this->session->set_flashdata('type', 'success');
				redirect(base_url('Setting'));
			}
			else 
			{
				$this->session->set_flashdata('title', 'Gagal');
				$this->session->set_flashdata('msg', 'Tambah Artikel Gagal');
				$this->session->set_flashdata('type', 'error');
				redirect(base_url('Setting'));
			}
		}else {
			redirect('Login');
		}
	}
}
