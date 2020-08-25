<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['judul'] = "Beranda";
		$data['berita'] = $this->User_m->listing_berita_beranda();
		$this->template->load('template-layout', 'beranda', $data);
	}
	public function kontak()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('subjek', 'Subjek', 'required');
		$this->form_validation->set_rules('pesan', 'Pesan', 'required');

		$this->form_validation->set_message('required', '%s masih kosong, silahkan diisi');
		$this->form_validation->set_message('valid_email', '%s tidak valid, silahkan ganti');
		if ($this->form_validation->run() == false) {
			$data['judul'] = "Kontak";
			$this->template->load('template-layout', 'kontak', $data);
		} else {
			$data = [
				'email' => htmlspecialchars($this->input->post('email', true)),
				'nama' => htmlspecialchars($this->input->post('nama', true)),
				'subjek' => htmlspecialchars($this->input->post('subjek', true)),
				'pesan' => $this->input->post('pesan'),
				'tanggal' => date('Y-m-d H:i:s')
			];
			$this->db->insert('pesan', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat pesan anda terkirim</div>');
			redirect('beranda/kontak');
		}
	}
	public function berita()
	{
		$data['judul'] = "Berita & Acara";

		$config['base_url'] = 'http://localhost/dncc/beranda/berita';
		$config['total_rows'] = $this->User_m->count_berita();
		$config['per_page'] = 2;

		$config['full_tag_open'] = '<nav class="blog-pagination justify-content-center d-flex"><ul class="pagination">';
		$config['full_tag_close'] = '</ul></nav>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');




		$this->pagination->initialize($config);
		$data['start'] = $this->uri->segment(3);
		$data['berita'] = $this->User_m->listing_berita_pagination($config['per_page'], $data['start']);
		// $data['berita'] = $this->User_m->listing_berita_pagination();
		$this->template->load('template-layout', 'berita', $data);
	}
	public function tentang()
	{
		$data['judul'] = "Tentang";
		$this->template->load('template-layout', 'tentang', $data);
	}
	public function detail_berita($slug)
	{
		$data['berita'] = $this->User_m->read_berita($slug);

		$data['judul'] = "Detail Berita atau Acara";
		$this->template->load('template-layout', 'detail_berita_acara', $data);
	}

	public function kategori_berita($slug_kategori)
	{
		$kategori = $this->User_m->read_kategori($slug_kategori);
		$id_kategori = $kategori->id_kategori;
		$data['berita'] = $this->User_m->read_berita_kategori($id_kategori);


		$data['judul'] = "Berita & Acara";
		$this->template->load('template-layout', 'berita', $data);
	}

	public function search_berita()
	{
		$keyword_berita = $this->input->post('keyword');
		$data['berita'] =  $this->User_m->get_keyword_berita($keyword_berita);
		$data['judul'] = "Berita atau Acara";
		$this->template->load('template-layout', 'berita', $data);
	}
}
