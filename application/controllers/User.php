<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('form_validation', 'session'));
        $this->load->helper(array('text', 'url'));
        $this->load->model('usermodel');
    }

    public function index()
    {
        $data['list'] = $this->usermodel->get_user2();
        $this->load->view('user', $data);
    }
    public function detail($a = null)
    {
        $data['detail_user'] = $this->usermodel->get_user($a);
        $this->load->view('user/detail', $data);
    }

    public function add()
    {
        $this->load->view('user/add');
    }

    public function insert()
    {
        $cover = $_FILES['cover']['name'];
        $config = [
            'upload_path' => "./assets/images/avatar/",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2048000"
        ];
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $this->upload->do_upload('cover');
        if ($this->usermodel->insert($this->input->post(), $cover)) {
            $this->session->set_flashdata('pesan', 'Data berhasil ditambah');
            redirect(base_url('user'));
        }
    }

    public function edit($a)
    {
        $data['detail'] = $this->usermodel->get_user2($a);
        $this->load->view('user/edit', $data);
    }

    public function update($id)
    {
        $cover = $_FILES['cover']['name'];
        $config = [
            'upload_path' => "./assets/images/avatar/",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2048000"
        ];
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload('cover')) {
            $this->usermodel->update_cover($cover, $id);
        }
        if ($this->usermodel->update($this->input->post(), $id)) {
            $this->session->set_flashdata('pesan', 'Data berhasil diubah');
            redirect(base_url('user'));
        }
    }

    public function delete($id)
    {
        if ($this->usermodel->delete($id)) {
            $this->session->set_flashdata('pesan', 'Data berhasil dihapus');
            redirect(base_url('user'));
        }
    }
}
