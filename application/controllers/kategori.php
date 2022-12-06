<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function elektronik()
	{
        $data ['elektronik'] = $this->m_kategori->data_elektronik()->result();

		$this->load->view('template/header');
        $this->load->view('template/sidbar');
        $this->load->view('elektronik', $data);
        $this->load->view('template/footer');
	}

    public function pakaian_pria()
	{
        $data ['pakaian_pria'] = $this->m_kategori->pakaian_pria()->result();

		$this->load->view('template/header');
        $this->load->view('template/sidbar');
        $this->load->view('pakaian_pria', $data);
        $this->load->view('template/footer');
	}

    public function pakaian_wanita()
	{
        $data ['pakaian_wanita'] = $this->m_kategori->pakaian_wanita()->result();

		$this->load->view('template/header');
        $this->load->view('template/sidbar');
        $this->load->view('pakaian_wanita', $data);
        $this->load->view('template/footer');
	}

    public function pakaian_anak()
	{
        $data ['pakaian_anak'] = $this->m_kategori->pakaian_anak()->result();

		$this->load->view('template/header');
        $this->load->view('template/sidbar');
        $this->load->view('pakaian_anak-anak', $data);
        $this->load->view('template/footer');
	}
}
