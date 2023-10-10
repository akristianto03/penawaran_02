<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mtoken extends CI_Model
{

    function get_row_data_token($id)
    {
        return $this->db->where('id', $id)->get('tbl_message_token')->row_array();
    }

    function sendNotification($title, $body)
    {
        $query = $this->db->query("SELECT * FROM tbl_message_token ORDER BY id DESC");
        foreach ($query->result_array() as $q) {
            $this->sendPush($q['fcm_token'], $title, $body, null, null);
        }
    }

    function sendPush($to, $title, $body, $icon, $url)
    {
        $postdata = json_encode(
            [
                'notification' =>
                [
                    'title' => $title,
                    'body' => $body,
                    'icon' => $icon,
                    'click_action' => $url
                ],
                'to' => $to
            ]
        );

        $opts = array(
            'http' =>
            array(
                'method'  => 'POST',
                'header'  => 'Content-type: application/json' . "\r\n"
                    . 'Authorization: key=' . FCM_AUTH_KEY . "\r\n",
                'content' => $postdata
            )
        );

        $context  = stream_context_create($opts);

        $result = file_get_contents('https://fcm.googleapis.com/fcm/send', false, $context);
        if ($result) {
            return json_decode($result);
        } else return false;
    }

    // MODEL QUERY USER ALAT    

    public function get_data_token($userId)
    {
        $query = $this->db->query("SELECT * FROM tbl_message_token WHERE user_id='$userId' ORDER BY id DESC");
        return $query->result();
    }

    public function add_token()
    {
        $dt = new DateTime("now", new DateTimeZone('Asia/Jakarta'));
        $data = array(
            'user_id'     => $this->input->post('user_id'),
            'os'     => $this->input->post('os'),
            'fcm_token'     => $this->input->post('fcm_token'),
            "tanggal" => $dt->format('Y-m-d'),
        );

        $save = $this->db
            ->insert('tbl_message_token', $data);

        if ($save) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function update_token($id, $nama = null)
    {
        $dt = new DateTime("now", new DateTimeZone('Asia/Jakarta'));
        if ($nama != NULL) {
            $data['image']     = $nama;
        }
        $data['user_id']     = $this->input->post('user_id');
        $data['os']     = $this->input->post('os');
        $data['fcm_token']     = $this->input->post('fcm_token');
        $data['fcm_token']     = $dt->format('Y-m-d');

        $update = $this->db->where('id', $id)->update('tbl_message_token', $data);

        if ($update) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function hapusToken($id)
    {
        $hapus = $this->db->where('id', $id)->delete('tbl_message_token');
        if ($hapus) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}
