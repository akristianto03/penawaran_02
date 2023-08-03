<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Msetting extends CI_Model {

    function get_akun() 
    {
        return $this->db->get('users')->result();
    }

    public function add_akun()
    {
        $dt = new DateTime("now", new DateTimeZone('Asia/Jakarta'));
        $data = array(
            'username'     => $this->input->post('username'),
            'password'     => password_hash($this->input->post('password'),PASSWORD_BCRYPT),
            'status'     => $this->input->post('status'),
        );

        $save = $this->db
                     ->insert('users', $data);	
        
        if($save)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

    public function hapus_akun($id)
    {
        $hapus = $this->db->where('id',$id)->delete('users');
        
        if($hapus)
        {
            return TRUE;
        }else
        {
            return FALSE;
        }
    }
}