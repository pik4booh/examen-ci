<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function index()
	{
        // $data['content'] = 'Admin';
		// $this->load->view('page/accueil', $data);
		$data['contents'] = 'page/statistique';
		$this->load->view('statistique',$data);
	}	
}