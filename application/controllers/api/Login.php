<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mlogin', 'login');
    }

    public function login()
    {
        // if($this->login->logged_id()){
        //     redirect('Dashboard');
        // } else {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $checking = $this->login->check_login($username, $password);
        if ($checking == true) {
            foreach ($checking as $apps) {
                $session_data = array(
                    'authenticated' => true,
                    'id'   => $apps->id,
                    'username' => $apps->username,
                    'password' => $apps->password,
                    'status' => $apps->status
                );
                $this->session->set_userdata($session_data);

                // save logged user
                $nsid = md5("randomchars@**^110183+020283=101019*#~/!" . date("U.z"));
                $dt = new DateTime("now", new DateTimeZone('Asia/Jakarta'));

                $data = array(
                    'id'        => $nsid,
                    'created'   => $dt->format('Y-m-d H:i:s'),
                    'logged_ip' => $_SERVER['REMOTE_ADDR'],
                    'useragent' => $_SERVER['HTTP_USER_AGENT'],
                    'idadmin'   => $_SESSION['username'],
                );

                $insert = $this->db->insert('x_session', $data);

                $this->response($data, 200);
            }
        } else {
            $this->response(['message' => 'Login gagal'], 400);
        }
        // }
    }

    public function logout()
    {
        $this->session->sess_destroy(); // Hapus semua session
        redirect('Login'); // Redirect ke halaman login
    }
}
