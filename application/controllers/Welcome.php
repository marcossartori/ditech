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
}
