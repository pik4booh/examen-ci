<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct(){
		parent:: __construct();
	}

	public function index(){
		$this->load->view('index');
	}

	public function login()
	{

		$mail = $this->input->post("email");
		$pass = $this->input->post("mdp");

		$this->load->model('Model');
		if($this->Model->checkLogin($mail,$pass))
		{
			if($this->session->userdata('typeUser') == 0){
				redirect('admin/index');
			}else{
				redirect('client/index');
			}
		}else{

			$data['error'] = "ERREUR";
			redirect('welcome/index',$data);
			
		}
	}
}
