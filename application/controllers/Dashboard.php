<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mlogin', 'login'); 
        $this->load->model('Mdashboard', 'dashboard'); 
    }

	public function index()
	{
		$username = $_SESSION['username'];
		if($this->session->userdata('authenticated'))
		{
			$data['title'] =  'Dashboard';
			$data['back'] =  'Login';
			$data['header'] =  'Header/Header';
			$data['body'] =  'Body/Dashboard';
			$data['footer'] =  'Footer/Footer';
			
			$data['total_penawaran_semua'] =  $this->dashboard->total_penawaran();

			///dibawah ini untuk marketing
			$data['total_penawaran_selvy'] =  $this->dashboard->total_penawaran_selvy();
			$data['total_penawaran_bulanan_selvy'] =  $this->dashboard->total_penawaran_bulanan_selvy();
			$data['total_penawaran_harris'] =  $this->dashboard->total_penawaran_harris();
			$data['total_penawaran_bulanan_harris'] =  $this->dashboard->total_penawaran_bulanan_harris();
			$data['total_penawaran_yoshua'] =  $this->dashboard->total_penawaran_yoshua();
			$data['total_penawaran_bulanan_yoshua'] =  $this->dashboard->total_penawaran_bulanan_yoshua();
			$data['total_penawaran_adhitya'] =  $this->dashboard->total_penawaran_adhitya();
			$data['total_penawaran_bulanan_adhitya'] =  $this->dashboard->total_penawaran_bulanan_adhitya();
			$data['total_penawaran_nanang'] =  $this->dashboard->total_penawaran_nanang();
			$data['total_penawaran_bulanan_nanang'] =  $this->dashboard->total_penawaran_bulanan_nanang();
			$data['total_penawaran_teryluana'] =  $this->dashboard->total_penawaran_teryluana();
			$data['total_penawaran_bulanan_teryluana'] =  $this->dashboard->total_penawaran_bulanan_teryluana();
			$data['total_penawaran_taufik'] =  $this->dashboard->total_penawaran_taufik();
			$data['total_penawaran_bulanan_taufik'] =  $this->dashboard->total_penawaran_bulanan_taufik();
			$data['total_penawaran_syamsul'] =  $this->dashboard->total_penawaran_syamsul();
			$data['total_penawaran_bulanan_syamsul'] =  $this->dashboard->total_penawaran_bulanan_syamsul();
			$data['total_penawaran_indra'] =  $this->dashboard->total_penawaran_indra();
			$data['total_penawaran_bulanan_indra'] =  $this->dashboard->total_penawaran_bulanan_indra();
			$data['total_penawaran_zainul'] =  $this->dashboard->total_penawaran_zainul();
			$data['total_penawaran_bulanan_zainul'] =  $this->dashboard->total_penawaran_bulanan_zainul();
			$data['total_penawaran_andri'] =  $this->dashboard->total_penawaran_andri();
			$data['total_penawaran_bulanan_andri'] =  $this->dashboard->total_penawaran_bulanan_andri();
			
			///dibawah ini untuk material 
			$data['total_penawaran_aspal'] =  $this->dashboard->total_penawaran_aspal();
			$data['total_penawaran_alat'] =  $this->dashboard->total_penawaran_alat();
			$data['total_penawaran_uditch'] =  $this->dashboard->total_penawaran_uditch();
			$data['total_penawaran_marka'] =  $this->dashboard->total_penawaran_marka();
			$data['total_penawaran_pancang'] =  $this->dashboard->total_penawaran_pancang();
			$data['total_penawaran_panel'] =  $this->dashboard->total_penawaran_panel();
			$data['total_penawaran_stensla'] =  $this->dashboard->total_penawaran_stensla();
			$data['total_penawaran_readymix'] =  $this->dashboard->total_penawaran_readymix();
			$data['total_penawaran_paving'] =  $this->dashboard->total_penawaran_paving();
			$data['total_data_penawaran'] =  $this->dashboard->hitung_data_penawaran($username);
			$data['total_data_alat'] =  $this->dashboard->hitung_data_alat($username);
			$data['total_data_aspal'] =  $this->dashboard->hitung_data_aspal($username);
			$data['total_data_uditch'] =  $this->dashboard->hitung_data_uditch($username);
			$data['total_data_marka'] =  $this->dashboard->hitung_data_marka($username);
			$data['total_data_pancang'] =  $this->dashboard->hitung_data_pancang($username);
			$data['total_data_panel'] =  $this->dashboard->hitung_data_panel($username);
			$data['total_data_stensla'] =  $this->dashboard->hitung_data_stensla($username);
			$data['total_data_readymix'] =  $this->dashboard->hitung_data_readymix($username);
			$data['total_data_paving'] =  $this->dashboard->hitung_data_paving($username);
			
			///dibawah ini untuk kesimpulan marketing
			$data['penawaran_kesimpulan'] =  $this->dashboard->penawaran_kesimpulan($username);
			
			///dibawah ini untuk klasemen
			$data['klasemen'] = $this->dashboard->klasemen();
			
			$this->load->view('template',$data);	
		}else {
			redirect('Login');
		}
	}
}
