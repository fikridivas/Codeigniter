<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        check_not_login();
        $data['judul'] = "Dashboard DNCC";
        $this->template->load('template-dashboard', 'dashboard', $data);
    }
    public function tambah_akun()
    {
        check_not_login();
        check_admin();
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[4]');

        $this->form_validation->set_message('required', '%s masih kosong, silahkan diisi');
        $this->form_validation->set_message('is_unique', '{field} ini sudah dipakai, silahkan ganti');
        $this->form_validation->set_message('min_length', '{field} ini terlalu pendek, silahkan ganti minimal 4 karakter');
        if ($this->form_validation->run() == false) {
            $data['judul'] = "Tambah Akun";
            $this->template->load('template-dashboard', 'tambah-akun', $data);
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'username' => htmlspecialchars($this->input->post('username', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'status' => 2,
                'status_daftar_pelatihan' => 0
            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat akun sukses dibuat</div>');
            redirect('dashboard');
        }
    }
    public function tampil_akun()
    {
        check_not_login();
        check_admin();
        $data['judul'] = "Tampil Akun";
        $data['user'] = $this->User_m->listing_akun_register();
        $this->template->load('template-dashboard', 'tampil-akun', $data);
    }
    public function delete_akun_user($id)
    {
        check_not_login();
        check_admin();
        $this->User_m->delete_akun_user($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data akun berhasil dihapus</div>');
        }
        redirect('dashboard/tampil_akun');
    }
    public function tampil_pesan()
    {
        check_not_login();
        check_admin();
        $data['judul'] = "Tampil Pesan";
        $data['user'] = $this->User_m->listing_pesan();
        $this->template->load('template-dashboard', 'tampil-pesan', $data);
    }
    public function detail_pesan($id)
    {
        check_not_login();
        check_admin();
        $data['judul'] = "Detail Pesan";
        $data['user'] = $this->User_m->detail_message($id);
        $this->template->load('template-dashboard', 'detail-pesan', $data);
    }
    public function delete_pesan($id)
    {
        check_not_login();
        check_admin();
        $this->User_m->delete_message($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pesan berhasil dihapus</div>');
        redirect('dashboard/tampil_pesan');
    }
    public function tambah_kategori()
    {
        check_not_login();
        check_admin();
        $this->form_validation->set_rules('nama', 'Nama', 'required|is_unique[kategori.nama]');

        $this->form_validation->set_message('required', '%s masih kosong, silahkan diisi');
        $this->form_validation->set_message('is_unique', '{field} ini sudah dipakai, silahkan ganti');

        if ($this->form_validation->run() == false) {
            $data['judul'] = "Tambah Kategori";
            $this->template->load('template-dashboard', 'tambah-kategori', $data);
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'slug' => slug($this->input->post('nama', true)),
            ];
            $this->db->insert('kategori', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat Kategori sukses dibuat</div>');
            redirect('dashboard/tampil_kategori');
        }
    }

    public function tampil_kategori()
    {
        check_not_login();
        check_admin();
        $data['judul'] = "Tampil Kategori";
        $data['user'] = $this->User_m->listing_kategori();
        $this->template->load('template-dashboard', 'tampil-kategori', $data);
    }
    public function delete_kategori($id)
    {
        check_not_login();
        check_admin();
        $this->User_m->delete_kategori($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kategori berhasil dihapus</div>');
        redirect('dashboard/tampil_kategori');
    }
    public function edit_kategori($id)
    {
        check_not_login();
        check_admin();
        $data['judul'] = "Edit Kategori";
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nama', 'Nama', 'required|is_unique[kategori.nama]');

        $this->form_validation->set_message('required', '%s masih kosong, silahkan diisi');
        $this->form_validation->set_message('is_unique', '{field} ini sudah dipakai, silahkan ganti');

        if ($this->form_validation->run() == FALSE) {
            $query = $this->User_m->get_ketegori($id);
            if ($query->num_rows() > 0) {
                $data['row'] = $query->row();
                $this->template->load('template-dashboard', 'edit-kategori', $data);
            } else {
                echo "<script>
                    alert('Data Tidak Ditemukan');
                </script>";
                echo "<script>window.location='" . base_url('dashboard') . "';</script>";
            }
        } else {
            $post = $this->input->post(null, TRUE);
            $this->User_m->edit_kategori($post);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat Edit Kategori sukses dibuat</div>');
            redirect('dashboard/tampil_kategori');
        }
    }
    public function tambah_berita()
    {
        check_not_login();
        check_admin();
        $data['kategori'] = $this->User_m->listing_kategori();
        $data['judul'] = "Tambah Berita";

        $this->load->library('form_validation');
        $this->form_validation->set_rules('judul', 'Judul', 'required|is_unique[berita.judul]');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        $this->form_validation->set_message('required', '%s masih kosong, silahkan diisi');
        $this->form_validation->set_message('is_unique', '{field} ini sudah dipakai, silahkan ganti');


        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template-dashboard', 'tambah-berita', $data);
        } else {
            $post = $this->input->post(null, TRUE);
            $this->User_m->tambah_berita($post);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat Berita sukses dibuat</div>');
            redirect('dashboard');
        }
    }
    public function tampil_berita()
    {
        check_not_login();
        check_admin();
        $data['judul'] = "Tampil Berita atau Acara";
        $data['user'] = $this->User_m->listing_berita();
        $this->template->load('template-dashboard', 'tampil-berita', $data);
    }
    public function detail_berita($id)
    {
        check_not_login();
        check_admin();
        $data['judul'] = "Detail Berita atau Acara";
        $data['user'] = $this->User_m->detail_berita($id);
        $this->template->load('template-dashboard', 'detail-berita', $data);
    }
    public function delete_berita($id)
    {
        check_not_login();
        check_admin();
        $this->User_m->delete_berita($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berita berhasil dihapus</div>');
        redirect('dashboard/tampil_berita');
    }

    public function edit_berita($id)
    {
        check_not_login();
        check_admin();
        $data['judul'] = "Edit Berita atau Acara";
        $data['kategori'] = $this->User_m->listing_kategori();
        $this->load->library('form_validation');

        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        $this->form_validation->set_message('required', '%s masih kosong, silahkan diisi');

        if ($this->form_validation->run() == FALSE) {
            $query = $this->User_m->get_berita_acara($id);
            if ($query->num_rows() > 0) {
                $data['row'] = $query->row();
                $this->template->load('template-dashboard', 'edit-berita', $data);
            } else {
                echo "<script>
                    alert('Data Tidak Ditemukan');
                </script>";
                echo "<script>window.location='" . base_url('dashboard') . "';</script>";
            }
        } else {
            $post = $this->input->post(null, TRUE);
            $this->User_m->edit_berita($post);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat Edit Berita sukses dibuat</div>');
            redirect('dashboard/tampil_berita');
        }
    }
    public function daftar_pelatihan()
    {
        check_not_login();
        check_member();
        check_status_member_pendaftaran_pelatihan_sudah_terdaftar();
        $data['judul'] = "Daftar Pelatihan";

        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama_peserta', 'Nama Peserta', 'required|is_unique[pelatihan.nama_peserta]');
        $this->form_validation->set_rules('nim', 'Nim', 'required|is_unique[pelatihan.nim]');
        $this->form_validation->set_rules('jurusan', 'Asal Jurusan Kuliah', 'required');
        $this->form_validation->set_rules('divisi', 'Divisi Pelatihan', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|is_unique[pelatihan.email]|valid_email');
        $this->form_validation->set_rules('telp', 'Telp WA', 'required');

        $this->form_validation->set_message('required', '%s masih kosong, silahkan diisi');
        $this->form_validation->set_message('is_unique', '{field} ini sudah dipakai, silahkan ganti');
        $this->form_validation->set_message('valid_email', '%s tidak valid, silahkan ganti');


        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template-dashboard', 'daftar-pelatihan', $data);
        } else {
            $post = $this->input->post(null, TRUE);
            $this->User_m->tambah_pelatihan($post);
            $this->User_m->ubah_status_daftar_pelatihan();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat Pendaftaran Pelatihan Divisi sukses dibuat</div>');
            redirect('dashboard');
        }
    }

    public function info_pelatihan()
    {
        check_not_login();
        check_member();
        check_status_member_pendaftaran_pelatihan();
        $data['judul'] = "Info Pelatihan";
        $data['user'] = $this->User_m->tampil_info_pelatihan();
        $this->template->load('template-dashboard', 'info-pelatihan', $data);
    }

    public function edit_pelatihan($id)
    {
        check_not_login();
        check_member();
        check_status_member_pendaftaran_pelatihan();
        $data['judul'] = "Edit pendaftaran pelatihan";
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nama_peserta', 'Nama Peserta', 'required');
        $this->form_validation->set_rules('nim', 'Nim', 'required');
        $this->form_validation->set_rules('jurusan', 'Asal Jurusan Kuliah', 'required');
        $this->form_validation->set_rules('divisi', 'Divisi Pelatihan', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('telp', 'Telp WA', 'required');

        $this->form_validation->set_message('required', '%s masih kosong, silahkan diisi');
        $this->form_validation->set_message('valid_email', '%s tidak valid, silahkan ganti');

        if ($this->form_validation->run() == FALSE) {
            $query = $this->User_m->get_info_pelatihan($id);
            if ($query->num_rows() > 0) {
                $data['row'] = $query->row();
                $this->template->load('template-dashboard', 'edit-pelatihan', $data);
            } else {
                echo "<script>
                    alert('Data Tidak Ditemukan');
                </script>";
                echo "<script>window.location='" . base_url('dashboard') . "';</script>";
            }
        } else {
            $post = $this->input->post(null, TRUE);
            $this->User_m->edit_pelatihan($post);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat Edit Berita sukses dibuat</div>');
            redirect('dashboard');
        }
    }

    public function tampil_pendaftar_pelatihan()
    {
        check_not_login();
        check_admin();
        $data['judul'] = "Tampil Pendaftar Pelatihan";
        $data['user'] = $this->User_m->listing_pendaftar_pelatihan();
        $this->template->load('template-dashboard', 'tampil-pendaftar-pelatihan', $data);
    }
}
