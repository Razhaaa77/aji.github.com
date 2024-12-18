<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {
    public function index() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required[user.username]');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('registrasi');
        } else {
            $this->registrasi();
        }
    }

    public function registrasi() {
        $level = 'User';
        $data = array(
            'id_user' => '',
            'nama' => $this->input->post('nama'),
            'username' => $this->input->post('username'),
            'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
            'level' => $level,
        );

        if ($this->db->insert('User', $data)) {
            $this->session->set_flashdata('alert', '
                <div class="alert alert-success" role="alert">
                    Berhasil menambahkan user,
                </div>
            ');
        } else {
            $this->session->set_flashdata('alert', '
                <div class="alert alert-danger" role="alert">
                    Gagal menambahkan user,
                </div>
            ');
        }
        redirect('auth');
    }
}