<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Login extends RestController
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mlogin', 'login');
    }

    public function login()
    {

        $this->response([
            'status' => true,
            'message' => "uye uye"
        ], RestController::HTTP);

        if ($this->login->logged_id()) {
            // already login
            $this->response([
                'status' => true,
            ], RestController::HTTP_OK);
        } else {
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

                    // return
                    $this->response([
                        'status' => true,
                    ], RestController::HTTP_OK);
                }
            } else {
                // fail
                $this->response([
                    'status' => true,
                ], RestController::HTTP);
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy(); // Hapus semua session
    }
}
