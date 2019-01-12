<?php
	
	class Usuarios extends CI_Controller
	{
		//registro de usuarios
		public function registro()
		{
			$data['title'] = 'Registro de usuarios';
			$this->form_validation->set_rules('nombre','Nombre','required');
			$this->form_validation->set_rules('usuario','Usuario','required|callback_check_usuario_exists');
			$this->form_validation->set_rules('email','Email','required|callback_check_email_exists');
			$this->form_validation->set_rules('clave','Clave','required');
			$this->form_validation->set_rules('password2','Confirm Password','matches[clave]');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('usuarios/registro',$data);
				$this->load->view('templates/footer');
			}else {
				//encrytar pass
				$enc_password=md5($this->input->post('clave'));
				$this->user_model->registro($enc_password);
				$this->session->set_flashdata('user register','you are now registered and can log in');
				redirect('home');
			}
		}
		//login usuarios

		public function login(){
			$data['title']='Iniciar Sesion';

			$this->form_validation->set_rules('usuario','Usuario','requerid');
			$this->form_validation->set_rules('clave','Clave','required');
			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('usuarios/login', $data);
				$this->load->view('templates/footer');
			 }
			  else {
				//get username
				$usuario=$this->input->post('usuario');
				//encrytcion de clave
				$clave=md5($this->input->post('clave'));
				//login de usuarios
				$user_id=$this->user_model->login($usuario, $clave);
				if($user_id){
					//crear session
					$user_data = array(
						'user_id'=>$user_id,
						'usuario'=>$usuario,
						'logged_in'=>true
					);
					$this->session->set_userdata($user_data);
					//mostrar mensaje
					$this->session->set_flashdata('user_loggedin','You are now logged in');
					redirect('posts');
				 }else {
					//mostra mensaje
					$this->session->set_flashdata('login_failed','login is invalid');
					redirect('usuarios/login');
				}
		}
	}

				public  function logout()
				{
					# user data
					$this->session->unset_userdat('logged_in');
					$this->session->unset_userdat('user_id');
					$this->session->unset_userdat('usuario');
					$this->session->set_flashdata('user_loggedout','you are now logged out');
					redirect('usurios/login');
				}

			//chequear si el nombre de usuario existe
			public function check_usuario_exists($usuario){
				$this->form_validation->set_message('check_usuario_exists','El usuario ya existe. Por favor eliga un usuario diferente');
				if($this->user_model->check_usuario_exists($usuario))
				{
					return true;
				}else {
					return FALSE;
				}

			}	

			public function check_email_exists($email){
				$this->form_validation->set_message('check_email_exists','El correo ya existe. Por favor eliga un correo diferente');
				if($this->user_model->check_email_exists($email))
				{
					return true;
				}else {
					return FALSE;
		}

	}	
}
