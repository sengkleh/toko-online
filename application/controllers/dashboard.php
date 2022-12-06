<?php

	class Dashboard extends CI_Controller {
		public function index(){

			$data ['barang'] = $this->m_barang->tampil_data()->result();

			$this->load->view('template/header');
			$this->load->view('template/sidbar');
			$this->load->view('dashboard', $data);
			$this->load->view('template/footer');
	}

	public function tambah_ke_keranjang ($id){

			$barang = $this->m_barang->find($id);
			$data = array(

			        'id'      => $barang->id_brg,
			        'qty'     => 1,
			        'price'   => $barang->harga,
			        'name'    => $barang->nama_brg
			        
			);

			$this->cart->insert($data);
			redirect('dashboard');
	}

	public function detail_keranjang () {

			$this->load->view('template/header');
			$this->load->view('template/sidbar');
			$this->load->view('detail_keranjang');
			$this->load->view('template/footer');
	}

	public function hapus_keranjang (){
		$this->cart->destroy();
		redirect ('dashboard/index');
	}

	public function detail_barang($id_brg){
		$this->load->model('m_dashboard');
		$dtl = $this->m_dashboard->detail_barang_produk($id_brg);
		$data ['detail'] = $dtl;

		$this->load->view('template/header');
		$this->load->view('template/sidbar');
		$this->load->view('detail_barang', $data);
		$this->load->view('template/footer');
	}

	public function bayar_produk(){

		$this->load->view('template/header');
		$this->load->view('template/sidbar');
		$this->load->view('pembayaran');
		$this->load->view('template/footer');
	}

	public function proses_pesanan (){

		$this->load->view('template/header');
		$this->load->view('template/sidbar');
		$this->load->view('proses_pesanan');
		$this->load->view('template/footer');
	}


	
}