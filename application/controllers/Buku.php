<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

	public function index(){

		$data['judul'] = "Buku";

		// load model
		$data['buku'] = $this->Models_buku->getAllData('buku')->result();

		// load view
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view('buku/index', $data);
		$this->load->view('templates/footer');

	}

}

?>