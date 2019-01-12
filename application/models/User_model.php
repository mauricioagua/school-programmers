<?php
/**
 * 
 */
class User_model extends CI_Model
{
	public function __construct(){
		$this->load->database();
	}
	public function registro($enc_password){
		$data = array(
			'nombre' =>$this->input->post('nombre') ,
		     'usuario'=> $this->input->post('usuario'),
		 	 'email' => $this->input->post('email'),
		 	 'clave' => $enc_password,
		 	 'zipcode'=> $this->input->post('zipcode'));
		//insertar usuario
		return $this->db->insert('users',$data);
	}
	//logueo de usuarios
	public function login($usuario, $clave){
		//validacion de usuario
		$this->db->where('usuario',$usuario);
		$this->db->where('clave',$clave);
		$result = $this->db->get('users');
		if($result->num_rows()==1){
			return $result->row(0)->id;
		} else{
			return false;
		}
	}
	//check si usuario existe
	public function check_usuario_exists($usuario){
		$query = $this->db->get_where('users', array('usuario' => $usuario));
		if(empty($query->row_array())){
			return true;
		}else{
			return false;
		}
	}
	//check si el correo existe
	public function check_email_exists($email){
		$query = $this->db->get_where('users', array('email' => $email));
		if(empty($query->row_array())){
			return true;
		}else{
			return false;
		}
	}
}