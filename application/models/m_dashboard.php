<?php 

class M_dashboard extends CI_Model {

    public function detail_barang_produk ($id_brg = NULL){
		$query = $this->db->get_where('tb_barang', array('id_brg' => $id_brg))->result();
		return $query;
		}
}

?>