<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function login()
    {
        check_already_login();
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['judul'] = "Login";
            $this->load->view('auth/login', $data);
        } else {
            $this->_login_process();
        }
    }

    private function _login_process()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'user_id' => $user['user_id'],
                    'status' => $user['status']
                ];
                $this->session->set_userdata($data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat login berhasil!</div>');
                redirect('dashboard');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Maaf password salah!</div>');
                redirect('auth/login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Maaf username belum terdaftar!</div>');
            redirect('auth/login');
        }
    }

    // public function process()
    // {
    //     $post = $this->input->post(null, TRUE);
    //     if (isset($post['login'])) {
    //         $query = $this->User_m->login($post);
    //         if ($query->num_rows() > 0) {
    //             $row = $query->row();
    //             $params = array(
    //                 'user_id' => $row->user_id,
    //                 'status' => $row->status
    //             );
    //             $this->session->set_userdata($params);
    //             echo "<script>
    //                 alert('Selamat, login berhasil');
    //                 window.location='" . base_url('dashboard') . "';
    //             </script>";
    //         } else {
    //             echo "<script>
    //                 alert('Maaf, login gagal');
    //                 window.location='" . base_url('auth/login') . "';
    //             </script>";
    //         }
    //     }
    // }
    public function logout()
    {
        $params = array('user_id', 'status');
        $this->session->unset_userdata($params);
        redirect('beranda');
    }
}
