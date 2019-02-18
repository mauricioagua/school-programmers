<?php
/**
 * 
 */
class Contactos extends CI_Controller
{
	
	//registro de contactos
		public function contacto()
		{
			$data['title']='Contactanos';
			$this->form_validation->set_rules('nombre', 'Nombre','required');
			$this->form_validation->set_rules('email','Email','required');
			$this->form_validation->set_rules('telefono','Telefono','required');
			$this->form_validation->set_rules('asunto','Asunto');
			$this->form_validation->set_rules('mensaje','Mensaje','required');
			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('paginas/contacto',$data);
				$this->load->view('templates/footer');
		}
		else{
			$this->session->set_flashdata('user register','you are now registered and can log in');
				redirect('home');
		}
	}
}