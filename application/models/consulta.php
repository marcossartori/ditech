<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class consulta extends CI_Model {

	
	public function check_login($email,$senha){
		
		$this->db->from('usuarios');
		$this->db->where('email',$email);
		$this->db->where('senha',$senha);
		
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
