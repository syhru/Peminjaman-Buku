<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {

	public function index(){

		$data['judul'] = "Anggota";

		// load model
		$data['buku'] = $this->Models_buku->getAllData('anggota')->result();

		// load view
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view('anggota/index', $data);
		$this->load->view('templates/footer');

	}

}

?>