<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {
    public function index()
	{
        // $data['content'] = 'Client';
		// $this->load->view('page/accueil', $data);

		$data['contents'] = 'page/accueil';

		
		$this->load->view('accueil',$data);
	}	
}