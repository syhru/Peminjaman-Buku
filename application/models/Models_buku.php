<?php  
class Models_buku extends CI_Model {

	public function getAllData(){
		return $this->db->get('buku');
	}

}
?>
