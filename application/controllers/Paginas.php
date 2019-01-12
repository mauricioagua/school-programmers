<?php
	class Paginas extends CI_Controller{
		public function view($page = 'home'){
			if(!file_exists(APPPATH.'views/paginas/'.$page.'.php')){
				show_404();
			}

			$data['title'] = ucfirst($page);

			$this->load->view('templates/header');
			$this->load->view('paginas/'.$page, $data);
			$this->load->view('templates/footer');
		}
	}