<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Reserva extends CI_Model {

	
	
	  public function inserirReserva($data){
	     $this->db->insert('reservas',$data);	
		}
		
	
	function listarSalasDisponiveis(){
    
    $query = $this->db->query("SELECT idsalas, nome FROM salas where idsalas not in(select idsalas from reservas)");

    return $query->result();
	}
	
	
	function listarSalasReservadas(){
    
    $query = $this->db->query("SELECT idsalas, nome FROM salas where idsalas in(select idsalas from reservas)");

     return $query->result();
	}
	
	function ListarSalas($id) {
		if(!empty($id)){ 
        $this->db->where('idsalas', $id);
        return $this->db->get('salas')->result();
		}
     }
	 
	 function ListarReservas($id) {
		if(!empty($id)){ 
        $query = $this->db->query("SELECT usuarios.nome as Locatario, reservas.datareserva, reservas.horaini, reservas.horafim, salas.nome as sala
FROM reservas,salas,usuarios 
 where  reservas.idusuario= usuarios.id  and
 reservas.idsalas= salas.idsalas and
reservas.idsalas=".$id."");
         return $query->result();
		}
     }
	 
	public function excluirSalas($data){
		$tables = array('salas');
        $this->db->where('idsalas', $data);
        $this->db->delete($tables);
				
		}
		
		function editarReserva($id) {
        $query = $this->db->query("SELECT * from salas where idsalas=".$id."");
         return $query->result();
}
    function alterar($data) {
    $this->db->where('idsalas', $data['idsalas']);
    $this->db->set($data);
    return $this->db->update('salas');
}
		
}
