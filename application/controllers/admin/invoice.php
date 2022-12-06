<?php 

	class Invoice extends CI_Controller {
		public function index (){
			
			$this->load->view('template_admin/header');
			$this->load->view('template_admin/sidbar');
			$this->load->view('admin/invoice');
			$this->load->view('template_admin/footer');

		}

	}