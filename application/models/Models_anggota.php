<?php  

class Models_anggota extends CI_Model {

	public function getAllData(){
		return $this->db->get('anggota');
	}

}

?>