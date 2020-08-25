<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_m extends CI_Model
{
    public function login($post)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $post['username']);
        $this->db->where('password', sha1($post['password']));
        $query = $this->db->get();
        return $query;
    }
    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('user');
        if ($id != null) {
            $this->db->where('user_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function getconfirm($id = null)
    {
        $this->db->select('*');
        $this->db->from('user');
        if ($id != null) {
            $this->db->where('user_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function listing_akun_register()
    {
        $this->db->select('*');
        $this->db->from('user');

        $query = $this->db->get();
        return $query->result();
    }
    public function listing_pesan()
    {
        $this->db->select('*');
        $this->db->from('pesan');

        $query = $this->db->get();
        return $query->result();
    }
    public function delete_akun_user($id)
    {
        $this->db->where('user_id', $id);
        $this->db->delete('user');
    }
    public function detail_message($id)
    {
        $this->db->select('*');
        $this->db->from('pesan');
        $this->db->where('id_pesan', $id);

        $query = $this->db->get();
        return $query->row();
    }
    public function delete_message($id)
    {
        $this->db->where('id_pesan', $id);
        $this->db->delete('pesan');
    }
    public function listing_kategori()
    {
        $this->db->select('*');
        $this->db->from('kategori');

        $query = $this->db->get();
        return $query->result();
    }

    public function delete_kategori($id)
    {
        $this->db->where('id_kategori', $id);
        $this->db->delete('kategori');
    }
    public function get_ketegori($id)
    {
        $this->db->select('*');
        $this->db->from('kategori');
        if ($id != null) {
            $this->db->where('id_kategori', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function edit_kategori($post)
    {
        $params['nama'] = $post['nama'];
        $params['slug'] = slug($post['nama']);

        $this->db->where('id_kategori', $post['id_kategori']);
        $this->db->update('kategori', $params);
    }
    public function tambah_berita($post)
    {
        $params['judul'] = $post['judul'];
        $params['slug_berita'] = slug($post['judul']);
        $params['id_kategori'] = $post['id_kategori'];
        $params['deskripsi'] = $post['deskripsi'];
        $params['gambar'] = $_FILES['gambar'];
        $params['tanggal'] = date('Y-m-d H:i:s');
        if ($params['gambar'] = '') {
        } else {
            $config['upload_path'] = './assets/gambar';
            $config['allowed_types'] = 'jpg';
            $config['max_size'] = 10000;
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal upload gambar</div>');
                redirect('dashboard/tambah_berita');
            } else {
                $params['gambar'] = $this->upload->data('file_name');
            }
        }
        $this->db->insert('berita', $params);
    }

    public function listing_berita()
    {
        $this->db->select('berita.*, kategori.*');
        $this->db->from('berita');
        $this->db->join('kategori', 'kategori.id_kategori = berita.id_kategori', 'left');
        $query = $this->db->get();
        return $query->result();
    }

    public function listing_berita_kategori()
    {
        $this->db->select('berita.*, kategori.*');
        $this->db->from('berita');
        $this->db->join('kategori', 'kategori.id_kategori = berita.id_kategori', 'left');
        $this->db->group_by('berita.id_kategori');
        $query = $this->db->get();
        return $query->result();
    }

    public function listing_berita_pagination($limit, $start)
    {
        $query = $this->db->get('berita', $limit, $start);
        return $query->result();
    }

    public function listing_berita_beranda()
    {
        $this->db->select('berita.*, kategori.*');
        $this->db->from('berita');
        $this->db->join('kategori', 'kategori.id_kategori = berita.id_kategori', 'left');
        $this->db->limit(3);
        $this->db->order_by('berita.id_berita', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    public function detail_berita($id)
    {
        $this->db->select('*');
        $this->db->from('berita');
        $this->db->where('id_berita', $id);

        $query = $this->db->get();
        return $query->row();
    }
    public function delete_berita($id)
    {
        $this->db->where('id_berita', $id);
        $this->db->delete('berita');
    }
    public function read_berita($slug)
    {
        $this->db->select('berita.*, kategori.*');
        $this->db->from('berita');
        $this->db->join('kategori', 'kategori.id_kategori = berita.id_kategori', 'left');

        $this->db->group_by('berita.id_berita');
        $this->db->where('berita.slug_berita', $slug);
        $query = $this->db->get();
        return $query->row();
    }

    public function get_berita_acara($id)
    {
        $this->db->select('*');
        $this->db->from('berita');
        if ($id != null) {
            $this->db->where('id_berita', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function edit_berita($post)
    {
        $params['judul'] = $post['judul'];
        $params['slug_berita'] = slug($post['judul']);
        $params['id_kategori'] = $post['id_kategori'];
        $params['deskripsi'] = $post['deskripsi'];
        $params['tanggal'] = date('Y-m-d H:i:s');

        if ($_FILES['gambar'] != null) {
            $config['upload_path'] = './assets/gambar';
            $config['allowed_types'] = 'jpg';
            $config['max_size'] = 10000;
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('gambar')) {

                $params['gambar'] = $this->upload->data('file_name');
            }
        }

        $this->db->where('id_berita', $post['id_berita']);
        $this->db->update('berita', $params);
    }

    public function count_berita()
    {
        return $this->db->get('berita')->num_rows();
    }

    public function read_kategori($slug_kategori)
    {
        $this->db->select('*');
        $this->db->from('kategori');
        $this->db->where('kategori.slug', $slug_kategori);
        $query = $this->db->get();
        return $query->row();
    }

    public function read_berita_kategori($id_kategori)
    {
        $this->db->select('berita.*, kategori.*');
        $this->db->from('berita');
        $this->db->join('kategori', 'kategori.id_kategori = berita.id_kategori', 'left');

        $this->db->where('berita.id_kategori', $id_kategori);
        $this->db->group_by('berita.id_berita');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_keyword_berita($keyword)
    {
        $this->db->select('*');
        $this->db->from('berita');
        $this->db->like('judul', $keyword);
        $this->db->or_like('deskripsi', $keyword);
        $this->db->or_like('tanggal', $keyword);
        return $this->db->get()->result();
    }

    public function tambah_pelatihan($post)
    {
        $params['user_id'] = $this->session->userdata('user_id');
        $params['nama_peserta'] = $post['nama_peserta'];
        $params['nim'] = $post['nim'];
        $params['jurusan'] = $post['jurusan'];
        $params['divisi'] = $post['divisi'];
        $params['email'] = $post['email'];
        $params['telp'] = $post['telp'];
        $params['tanggal'] = date('Y-m-d H:i:s');
        $params['status'] = 1;

        $this->db->insert('pelatihan', $params);
    }

    public function tampil_info_pelatihan()
    {
        $this->db->select('*');
        $this->db->from('pelatihan');
        $this->db->join('user', 'user.user_id = pelatihan.user_id', 'left');
        $this->db->where('user.user_id', $this->session->userdata('user_id'));

        $query = $this->db->get();
        return $query->row();
    }

    public function get_info_pelatihan($id)
    {
        $this->db->select('*');
        $this->db->from('pelatihan');
        if ($id != null) {
            $this->db->where('id_pelatihan', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function edit_pelatihan($post)
    {
        $params['user_id'] = $post['user_id'];
        $params['nama_peserta'] = $post['nama_peserta'];
        $params['nim'] = $post['nim'];
        $params['jurusan'] = $post['jurusan'];
        $params['divisi'] = $post['divisi'];
        $params['email'] = $post['email'];
        $params['telp'] = $post['telp'];
        $params['tanggal'] = date('Y-m-d H:i:s');
        $params['status'] = 1;

        $this->db->where('id_pelatihan', $post['id_pelatihan']);
        $this->db->update('pelatihan', $params);
    }

    public function ubah_status_daftar_pelatihan()
    {
        $params['status_daftar_pelatihan'] = 1;
        $this->db->where('user_id', $this->session->userdata('user_id'));
        $this->db->update('user', $params);
    }

    public function listing_pendaftar_pelatihan()
    {
        $this->db->select('*');
        $this->db->from('pelatihan');
        $query = $this->db->get();
        return $query->result();
    }

    public function count_peserta_pelatihan()
    {
        return $this->db->get('pelatihan')->num_rows();
    }

    public function count_pesan_masuk()
    {
        return $this->db->get('pesan')->num_rows();
    }
    public function count_all_users()
    {
        return $this->db->get('user')->num_rows();
    }
}
