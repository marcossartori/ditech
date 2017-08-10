	<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Cadastro_salas extends CI_Controller {
        
        
        
        public function cadastrar(){
            
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
             {   
                
                 $data['numero']=$this->input->post('numero');
                 $data['predio']=$this->input->post('predio');
                 $data['nome']=$this->input->post('nome');
                 
                 
                 
                //$confisenha=$this->input->post('confisenha');
                
                 $this->load->model('Salas'); 
               
                 
                 //$dado_existe=$this->usuarios->check_dados($data['email'],$data['usuario']);
                
                     // if(!$dado_existe){
                
                           
                         $this->Salas->inserirSala($data);
                    
                         $alerta=array(
                         "class"=>"success",
                         "mensagem"=>"Dados cadastrados com sucesso!<br>".validation_errors()
                         );
                      // }	
                    
                    
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
              $this->load->view('salas',$dados);
              $this->load->view('includes/footer');			
                      
              }
                      
            }
            
            public function listar_salas(){
                $this->load->model('Salas');
                $data['salas'] = $this->Salas->listarSalas() ;
				//var_dump($data);
               $this->load->view('includes/head');
               $this->load->view('includes/nav');
               $this->load->view('includes/menu');
               $this->load->view('listar_salas', $data);
               $this->load->view('includes/footer');
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
              
              function editarSalas($id)  {
              //$data['titulo'] = "CRUD com CodeIgniter | Alteração de Pessoas";
   
               $this->load->model('Salas');
               $data['Salas'] = $this->Salas->editarSalas($id);
              
               
                
               $this->load->view('includes/head');
               $this->load->view('includes/nav');
               $this->load->view('includes/menu');
               $this->load->view('alterarSalas',$data);
             }
			 
			 
			 
		   public function atualizar(){
            
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
