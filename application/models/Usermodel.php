<?php
class Usermodel extends CI_Model
{

    function __construct()
    {
        $this->load->database();
    }

    function get_user()
    {
        $query = $this->db->query("SELECT * FROM user");
        return $query->result_array();
    }

    function get_user2()
    {
        return $this->db->get('user')->result_array();
    }
    function insert($a, $cover)
    {
        $data = [
            'nama' => $a['nama'],
            'email' => $a['email'],
            'telepon' => $a['telepon'],
            'cover' => $cover
        ];
        return $this->db->insert('user', $data);
    }
    function update($a, $id)
    {
        $data = [
            'nama' => $a['nama'],
            'email' => $a['email'],
            'telepon' => $a['telepon']
        ];
        $this->db->where('id', $id);
        return $this->db->update('user', $data);
    }

    function update_cover($a, $id)
    {
        $data = [
            'cover' => $a
        ];
        $this->db->where('id', $id);
        return $this->db->update('user', $data);
    }

    function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('user');
    }
    function auth($email, $pwd)
    {
        $this->db->where('email', $email);
        $this->db->where('password', $pwd);
        if ($this->db->get('user')->num_rows() == 1) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function get_detail($email)
    {
        $this->db->where('email', $email);
        return $this->db->get('user')->row_array();
    }

    function get_detail_by_cookie($cookie)
    {
        $this->db->where('cookie', $cookie);
        return $this->db->get('user')->row_array();
    }

    function update_cookie($cookie, $id)
    {
        $data = [
            'cookie' => $cookie
        ];
        $this->db->where('id', $id);
        return $this->db->update('user', $data);
    }
}
