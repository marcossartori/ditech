<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Usuarios extends CI_Model {

	
	public function check_login($email,$usuario){
		
		$this->db->from('usuarios');
		
		
		//executando a query
		$usuarios=$this->db->get();
		
		
		if($usuarios->num_rows())
		{
			$usuario=$usuarios->result_array();
			return $usuario[0];
		}
		else
		{ 
		return FALSE;
		}
		
	}
}
