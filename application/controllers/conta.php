<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conta extends CI_Controller {

	
	public function entrar(){
		
		$alerta= null;
		
		if($this->input->post('entrar')==="entrar")
		{
		 if($this->input->post('captcha')) redirect("conta/entrar");
		 
		 //define regras de validação
		 $this->form_validation->set_rules('email','EMAIL','required|valid_email');
	   	 $this->form_validation->set_rules('senha', 'SENHA','required|min_length[6]|max_length[20]');
		 
		 //executa  as regras de validação
		 if($this->form_validation->run()===TRUE)
		 {
			$this->load->model('consulta'); 
			$email=$this->input->post('email');
			$senha=$this->input->post('senha');
			
			$login_existe=$this->consulta->check_login($email,$senha);
			
			if($login_existe)
			{
				//autorizado
				$usuario=$login_existe;
				//configurar dados da sessao
				$session = array(
                 'email'     => $usuario['email'],
				 'created'     => $usuario['created'],
                 'logado' => TRUE
               );
          //inicializa sessao
          $this->session->set_userdata($session);
		  		
				//iniciar sessao e redirecionar para area restrita
				redirect('welcome');
			}
			else
			{
				$alerta=array(
				 "class"=>"danger",
				  "mensagem"=>"Atenção email ou senha incorretos"
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
		     }
		$dados= array(
		 "alerta"=>$alerta
		);	 
		
		$this->load->view('conta/entrar',$dados);
		
			}
			
			
	public function sair(){
		$this->session->sess_destroy();
		 redirect('conta/entrar');
		}		
}
