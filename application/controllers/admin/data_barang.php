<?php 

	class Data_barang extends CI_Controller {
		public function index (){

			$data ['barang'] = $this->m_barang->tampil_data('tb_barang')->result();
			
			$this->load->view('template_admin/header');
			$this->load->view('template_admin/sidbar');
			$this->load->view('admin/data_barang', $data);
			$this->load->view('template_admin/footer');

		}

		public function tambah_data (){
			$id_brg			= $this->input->post('id_brg');
			$nama_brg		= $this->input->post('nama_brg');
			$keterangan		= $this->input->post('keterangan');
			$kategori		= $this->input->post('kategori');
			$harga			= $this->input->post('harga');
			$stok 			= $this->input->post('stok');

			$gambar	  	= $_FILES['gambar'];
			if ($gambar='') {
				
			}else {
				$config ['upload_path']		= './asset/img';
				$config ['allowed_types']	= 'jpg|jpeg|gif|png';

				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('gambar')) {
					echo "upload gagal"; die();
				}else{
					$gambar = $this->upload->data('file_name');
				}
			}

			$data = array(
				'id_brg'		=> $id_brg,
				'nama_brg'		=> $nama_brg,
				'keterangan'	=> $keterangan,
				'kategori'		=> $kategori,
				'harga'			=> $harga,
				'stok'			=> $stok,
				'gambar'		=> $gambar
			);

			$this->m_barang->input_data($data,'tb_barang');
			redirect ('admin/data_barang/index');
		}

		public function edit ($id){
			$where = array ('id_brg' => $id);
			$data ['barang'] = $this->m_barang->edit_barang($where, 'tb_barang')->result();

			$this->load->view('template_admin/header');
			$this->load->view('template_admin/sidbar');
			$this->load->view('admin/edit_barang', $data);
			$this->load->view('template_admin/footer');
		}

		public function hapus ($id){
			$where = array ('id_brg' => $id);
			$this->m_barang->hapus_barang($where, 'tb_barang');
			redirect ('admin/data_barang/index');
		}

		public function update (){
			$nama_brg		= $this->input->post('nama_brg');
			$keterangan		= $this->input->post('keterangan');
			$kategori		= $this->input->post('kategori');
			$harga 			= $this->input->post('harga');
			$stok 			= $this->input->post('stok');

			$data = array (
				'id_brg'		=> $id_brg,
				'nama_brg'		=> $nama_brg,
				'keterangan'	=> $keterangan,
				'kategori'		=> $kategori,
				'harga'			=> $harga,
				'stok'			=> $stok
			);

			$where = array (
				'id_brg'	=> $id_brg
			);
			
			$this->m_barang->update_data ($where, $data, 'tb_barang');
			redirect ('admin/data_barang/index');
		}

		public function detail($id_brg){
			$this->load->model('m_barang');
			$dtl = $this->m_barang->detail_barang($id_brg);
			$data ['detail'] = $dtl;

			$this->load->view('template_admin/header');
			$this->load->view('template_admin/sidbar');
			$this->load->view('admin/detail_barang', $data);
			$this->load->view('template_admin/footer');
		}

		public function barang(){
			$this->load->view('template_admin/header');
			$this->load->view('template_admin/sidbar');
			$this->load->view('admin/data_barang');
			$this->load->view('template_admin/footer');
		}

	}

