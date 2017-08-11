	<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Reservas extends CI_Controller {
        
        
        public function FiltroReserva(){
			
			    
			      $this->load->model('Reserva');
				   $livre=$this->input->post('livre');
				  $reservado=$this->input->post('reservado');
				
                $data['unlock'] = $this->Reserva->listarSalasDisponiveis() ;
				$data['lock'] = $this->Reserva->listarSalasReservadas() ;
				//if(empty($reservado)){
				$data['Slock'] = $this->Reserva->ListarSalas($livre) ;
				//}//else if(empty($livre)){
				$data['Ulock'] = $this->Reserva->ListarReservas($reservado) ;
				//}
				
			  
			$this->load->view('includes/head');
            $this->load->view('includes/nav');
            $this->load->view('includes/menu');
		    $this->load->view('reservas', $data);
			   
			$this->load->view('includes/footer');
			
			} 
			
        public function cadastrar(){
            
            $alerta= null;
            
            if($this->input->post('salvar')==="salvar")
            {
              
             if($this->input->post('captcha')) redirect("conta/entrar");
             
            //echo date('d/m/y') . '<br />'; // Resultado: 18/03/13
              
             
             //executa  as regras de validação
                
                
                 $data['idusuario']=$this->input->post('idusuario');
				  $data['datareserva']=$this->input->post('datareserva');
				  $data['horafim']=$this->input->post('horafim');
                
				 $data['horaini']=$this->input->post('horaini');
				
                 $data['idsalas']=$this->input->post('idsala');            
                 
                                
                      $this->load->model('Reserva'); 
               
                                
                         $this->Reserva->inserirReserva($data);
                    
                         $alerta=array(
                         "class"=>"success",
                         "mensagem"=>"Dados cadastrados com sucesso!<br>".validation_errors()
                         );
                                                          
             
              $this->load->view('includes/head');
              $this->load->view('includes/nav');
              $this->load->view('includes/menu');
              $this->load->view('Reservas/FiltroReserva',$dados);
              $this->load->view('includes/footer');			
                      
              }
                      
            }
            
            public function listarSalasDisponiveis(){
                $this->load->model('Reserva');
                $data['unlock'] = $this->Reserva->listarSalasDisponiveis() ;
				var_dump($data);
               
              // $this->load->view('reservas', $data);
              // $this->load->view('includes/footer');
                }
                
          public function excluirSalas($id){
              
              $this->load->model('Salas');
              if($this->Salas->excluirSalas($id)){
                      
              redirect('listar_salas');
          } else {
              log_message('error', 'Erro ao deletar...');
          }
              //redirect(base_url().'cadastro_usuario/listar_usuario');
              }
              
              function fazerReserva($id)  {
              $data['titulo'] = "CRUD com CodeIgniter | Alteração de Pessoas";
   
               $this->load->model('Reserva');
               $data['Reserva'] = $this->Reserva->editarReserva($id);
                 //var_dump($data);  
                
             $this->load->view('includes/head');
              $this->load->view('includes/nav');
             $this->load->view('includes/menu');
              $this->load->view('includes/cadReserva',$data);
              $this->load->view('includes/footer');		
             }
			 
			 
			 
		   public function salvar(){
            
            $alerta= null;
            
            if($this->input->post('salvar')==="salvar")
            {
              
             if($this->input->post('captcha')) redirect("conta/entrar");
             
             //define regras de validação
             $this->form_validation->set_rules('numero','NUMERO','required');
              $this->form_validation->set_rules('predio','PREDIO','required');
              $this->form_validation->set_rules('nome', 'NOME','required');
             
             
             //executa  as regras de validação
             if($this->form_validation->run()===TRUE)
             {    $data['idsalas']= $this->input->post('idsalas');
                 $data['numero']=$this->input->post('numero');
                 $data['predio']=$this->input->post('predio');
                 $data['nome']=$this->input->post('nome');
                 
                //$confisenha=$this->input->post('confisenha');
                
                 $this->load->model('Salas'); 
               
                                   
                         $this->Salas->alterar($data);
                    
                         $alerta=array(
                         "class"=>"success",
                         "mensagem"=>"Dados cadastrados com sucesso!<br>".validation_errors()
                         );
                       	
                    
                    
                }
            else
               {
                 $alerta=array(
                 "class"=>"danger",
                 "mensagem"=>"falha na validação!<br>".validation_errors()
                   );
                 
                }	
    
              $dados= array(
               "alerta"=>$alerta
              );	 
              
              $this->load->view('includes/head');
              $this->load->view('includes/nav');
              $this->load->view('includes/menu');
              $this->load->view('cadastro_salas/listar_salas');
              $this->load->view('includes/footer');			
                      
              }
                      
            }
      }
