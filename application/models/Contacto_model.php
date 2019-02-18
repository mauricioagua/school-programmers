<?php

/**
 * 
 */
class Contacto_model extends CI_Model
{
	public function __construct(){
		$this->load->database();
	}
	public function contacto()
	{
		$data=array(
			'nombre'=>$this->input->post('nombre'),
			'email'=>$this->input->post('email'),
			'telefono'=>$this->input->post('telefono'),
			'asunto'=>$this->input->post('asunto'),
			'mensaje'=>$this->input->post('mensaje')
		);
		return $this->db->insert('contactos',$data);
	}
}