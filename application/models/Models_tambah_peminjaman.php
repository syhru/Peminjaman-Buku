<?php  

class Models_tambah_peminjaman extends CI_Model {

	public function getAllData(){
		return $this->db->get('peminjaman_buku');
	}

	public function getAnggota(){
		return $this->db->get('anggota');
	}

	// masukan data ke dalam database
	public function addData($data, $table){
		$this->db->insert($data, $table);
	}

	// batal peminjaman id s
	public function delData($where, $table){
		$this->db->where($where);
		$this->db->delete($table);
	}

}

?>