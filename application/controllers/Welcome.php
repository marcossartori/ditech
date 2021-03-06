<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$this->load->view('includes/head');
		$this->load->view('includes/nav');
	    $this->load->view('includes/menu');
		$this->load->view('welcome_message');
		$this->load->view('includes/footer');
	}
	
	public function branco()
	{
		$this->load->view('includes/head');
		$this->load->view('includes/nav');
	    $this->load->view('includes/menu');
		$this->load->view('includes/blank');
		$this->load->view('includes/footer');
	}
	
	public function entrar()
	{
		//$this->load->view('includes/head');
		//$this->load->view('includes/nav');
	    //$this->load->view('includes/menu');
		$this->load->view('conta/entrar');
		//$this->load->view('includes/footer');
	}
	
	public function salas()
	{
		$this->load->view('includes/head');
		$this->load->view('includes/nav');
	    $this->load->view('includes/menu');
		$this->load->view('salas');
		$this->load->view('includes/footer');
	}
	public function editar_usuarios()
	{  
	    
		
		$this->load->view('includes/head');
		$this->load->view('includes/nav');
	    $this->load->view('includes/menu');
		$this->load->view('editar_usuarios');
		$this->load->view('includes/footer');
	}
	public function editar_salas()
	{
		$this->load->view('includes/head');
		$this->load->view('includes/nav');
	    $this->load->view('includes/menu');
		$this->load->view('listar_salas');
		$this->load->view('includes/footer');
	}
	public function reservas()
	{
		$this->load->view('includes/head');
		$this->load->view('includes/nav');
	    $this->load->view('includes/menu');
		$this->load->view('reservas');
		$this->load->view('includes/footer');
	}
	
	public function FiltroReserva()
	{
		$this->load->view('includes/head');
		$this->load->view('includes/nav');
	    $this->load->view('includes/menu');
		$this->load->view('Reservas');
		$this->load->view('includes/footer');
	}
}
