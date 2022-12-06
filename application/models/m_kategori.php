<?php

class M_kategori extends CI_Model {
		public function data_elektronik(){
			return $this->db->get_where('tb_barang', array('kategori' => 'elektronik'));
            
		}

        public function pakaian_pria(){
			return $this->db->get_where('tb_barang', array('kategori' => 'pakaian_pria'));
            
		}

        public function pakaian_wanita(){
			return $this->db->get_where('tb_barang', array('kategori' => 'pakaian_pria'));
            
		}

        public function pakaian_anak(){
			return $this->db->get_where('tb_barang', array('kategori' => 'pakaian_anak'));
            
		}

}