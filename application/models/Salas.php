<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Salas extends CI_Model {

	
	
	  public function inserirSala($data){
	     $this->db->insert('salas',$data);	
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
	
	function listarSalas(){
    
    $query = $this->db->query("SELECT * FROM salas");

    return $query->result();
	}
	
	public function excluirSalas($data){
		$tables = array('salas');
        $this->db->where('idsalas', $data);
        $this->db->delete($tables);
		
		
		}
		
		function editarSalas($id) {
        $this->db->where('idsalas', $id);
        return $this->db->get('salas')->result();
}
function alterar($data) {
    $this->db->where('idsalas', $data['idsalas']);
    $this->db->set($data);
    return $this->db->update('salas');
}
		
}
