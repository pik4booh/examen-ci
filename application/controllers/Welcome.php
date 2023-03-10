<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
		$this->load->view('index');
		
	}
	
	public function login()
	{
		$this->load->view('accueil');
		
	}	

	public function url()
	{
		$this->load->view('page/inscription');
		
	}
	public function urlLogin()
	{
		$this->load->view('index');
		
	}	

	public function profil()
	{
		$this->load->view('profil');
		
	}
	
	public function stat()
	{
		$this->load->view('statistique');
		
	}
	
	public function detail()
	{
		$idObj = $this->input->get('idObj');

		$this->load->model('Objet');
		$data['Objet'] = $this->Objet->findObjet($idObj);
		$data['contents'] = 'page/detail';

		$this->load->view('detail',$data);
		
	}
}
