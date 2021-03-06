	<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Cadastro_usuario extends CI_Controller {
        
        
        
        public function cadastrar(){
            
            $alerta= null;
            
            if($this->input->post('salvar')==="salvar")
            {
              
             if($this->input->post('captcha')) redirect("conta/entrar");
             
             //define regras de validação
              $this->form_validation->set_rules('usuario','USUARIO','required|min_length[6]');
              $this->form_validation->set_rules('email','EMAIL','required|valid_email');
              $this->form_validation->set_rules('senha', 'SENHA','required|min_length[6]|max_length[20]');
              $this->form_validation->set_rules('confisenha', 'CONFIRMAR SENHA','required|matches[senha]');
              $this->form_validation->set_rules('setor','setor');
             
             //executa  as regras de validação
             if($this->form_validation->run()===TRUE)
             {   
                 echo $id= $this->input->post('id');
                 $data['usuario']=$this->input->post('usuario');
                 $data['nome']=$this->input->post('nome');
                 $data['setor']=$this->input->post('setor');
                 $data['email']=$this->input->post('email');
                 $data['senha']=$this->input->post('senha');
                 
                 
                //$confisenha=$this->input->post('confisenha');
                
                 $this->load->model('usuarios'); 
               
                 
                 $dado_existe=$this->usuarios->check_dados($data['email'],$data['usuario']);
                
                      if(!$dado_existe){
                
                           
                         $this->usuarios->inserirUsuario($data);
                    
                         $alerta=array(
                         "class"=>"success",
                         "mensagem"=>"Dados cadastrados com sucesso!<br>".validation_errors()
                         );
                       }	
                    
                    
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
              $this->load->view('includes/blank',$dados);
              $this->load->view('includes/footer');			
                      
              }
                      
            }
            
            public function listar_usuario(){
                $this->load->model('usuarios');
                $data['usuarios'] = $this->usuarios->listarUsuarios() ;
               $this->load->view('includes/head');
               $this->load->view('includes/nav');
               $this->load->view('includes/menu');
               $this->load->view('editar_usuarios', $data);
               $this->load->view('includes/footer');
                }
                
          public function excluirUsuario($id){
              
              $this->load->model('usuarios');
              if($this->usuarios->excluirUsuarios($id)){
                      
              redirect('editar_usuario');
          } else {
              log_message('error', 'Erro ao deletar...');
          }
              //redirect(base_url().'cadastro_usuario/listar_usuario');
              }
              
              function editarUsuario($id)  {
              //$data['titulo'] = "CRUD com CodeIgniter | Alteração de Pessoas";
   
               $this->load->model('usuarios');
               $data['usuario'] = $this->usuarios->editarUsuario($id);
              
               
                
               $this->load->view('includes/head');
               $this->load->view('includes/nav');
               $this->load->view('includes/menu');
               $this->load->view('alterarUsuario',$data);
			   $this->load->view('includes/footer');
             }
			 
			 
			 
		   public function atualizar(){
            
            $alerta= null;
            
            if($this->input->post('salvar')==="salvar")
            {
              
             if($this->input->post('captcha')) redirect("conta/entrar");
             
             //define regras de validação
              $this->form_validation->set_rules('usuario','USUARIO','required|min_length[6]');
              $this->form_validation->set_rules('email','EMAIL','required|valid_email');
              $this->form_validation->set_rules('senha', 'SENHA','required|min_length[6]|max_length[20]');
              $this->form_validation->set_rules('confisenha', 'CONFIRMAR SENHA','required|matches[senha]');
              $this->form_validation->set_rules('setor','setor');
             
             //executa  as regras de validação
             if($this->form_validation->run()===TRUE)
             {   
                 $data['id']= $this->input->post('id');
                 $data['usuario']=$this->input->post('usuario');
                 $data['nome']=$this->input->post('nome');
                 $data['setor']=$this->input->post('setor');
                 $data['email']=$this->input->post('email');
                 $data['senha']=$this->input->post('senha');
                 
                 
                //$confisenha=$this->input->post('confisenha');
                
                 $this->load->model('usuarios'); 
               
                                   
                         $this->usuarios->alterar($data);
                    
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
              
           
              redirect(base_url().'welcome/branco');
             		
                      
              }
                      
            }
      }
