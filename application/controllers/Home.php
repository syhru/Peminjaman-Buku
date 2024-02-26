<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index() {
		
		$data['judul'] = "Home";

		// load model
		$data['peminjam'] = $this->Models_tambah_peminjaman->getAllData('peminjaman_buku')->result();

		$data['anggota'] = $this->Models_tambah_peminjaman->getAnggota('anggota')->result();
		
		$data_buku = $this->Models_buku->getAllData()->result();

		$data['buku'] = $data_buku;
		// load view
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view('home/index', $data);
		$this->load->view('templates/footer');

	}

	// tambah data 
	public function tambah(){

		$data['judul'] = "Tambah Data";

		// load view
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view('home/tambah');
		$this->load->view('templates/footer');

	}

	// method untuk mengupload data
	public function upload(){

		// tangkap field
		$id_anggota = htmlspecialchars($this->input->post('id_anggota'));
		$id_buku = htmlspecialchars($this->input->post('id_buku'));
		$jml_pinjam = htmlspecialchars($this->input->post('jml_pinjam'));
		$tgl_pinjam = htmlspecialchars($this->input->post('tgl_pinjam'));;
		$tgl_kembali = htmlspecialchars($this->input->post('tgl_kembali'));;
		$lama_pinjam = htmlspecialchars($this->input->post('lama_pinjam'));
		$denda = htmlspecialchars($this->input->post('denda'));


		$data = array(

			'id_anggota'=>$id_anggota,
			'id_buku'=>$id_buku,
			'jml_pinjam'=>$jml_pinjam,
			'tgl_pinjam'=>$tgl_pinjam,
			'tgl_kembali'=>$tgl_kembali,
			'lama_pinjam'=>$lama_pinjam,
			'denda'=>$denda

		);

				// load data
		$this->Models_tambah_peminjaman->addData('peminjaman_buku', $data);

				// tampilkan pesan pemberitahuan 
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Data Berhasil di Tambah !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>');

				// kembalikan ke halaman index
		redirect('home/index');

	}

	// batal
	public function batal($id_pinjam){

		$data = array('id_pinjam'=>$id_pinjam);

		$this->Models_tambah_peminjaman->delData($data, 'peminjaman_buku');

			// tampilkan pesan pemberitahuan 
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Peminjaman Berhasil di Batalkan !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>');

				// kembalikan ke halaman index
		redirect('home/index');

	}

}


