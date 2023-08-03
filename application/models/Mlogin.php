<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mlogin extends CI_Model {

    public function get($username){
        $this->db->where('username', $username); // Untuk menambahkan Where Clause : username='$username'
        $result = $this->db->get('users')->row(); // Untuk mengeksekusi dan mengambil data hasil query
        return $result;
    }

    public function logged_id(){
        return $this->session->userdata('id');
    }

    public function check_login($username,$password)
    {
        $this->db->where('username', $username);
        $query = $this->db->get('users');
        if ($query->num_rows() == 1) {
            $hash = $query->row('password');
            if (password_verify($password,$hash))
            {
                return $query->result();

            } else 
            {
                echo "Wrong Password. Try again.";
            }
        } else {
            echo "Account is not existed.";
        }
    }
}