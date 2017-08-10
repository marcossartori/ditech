<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Usuarios extends CI_Model {

	
	
	  public function inserirUsuario($data){
	     $this->db->insert('usuarios',$data);	
		}
		
		
	public function check_dados($email,$usuario){
		
		$this->db->from('usuarios');
		$this->db->where('email',$email);
		$this->db->where('senha',$usuario);
		
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
	
	function listarUsuarios(){
    
    $query = $this->db->query("SELECT * FROM usuarios;");

    return $query->result();
	}
	
	public function excluirUsuarios($data){
		$tables = array('usuarios');
        $this->db->where('id', $data);
        $this->db->delete($tables);
		
		
		}
		
		function editarUsuario($id) {
        $this->db->where('id', $id);
        return $this->db->get('usuarios')->result();
}
function alterar($data) {
    $this->db->where('id', $data['id']);
    $this->db->set($data);
    return $this->db->update('usuarios');
}
		
}
