<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {
    public function index()
	{
        // $data['content'] = 'Client';
		// $data['listeMarque'] = $this->Model->listeMarque();

		$this->load->model('Objet');
		$data['listOtherObjet'] = $this->Objet->getOtherObjets($_SESSION['idUser']);
		$data['contents'] = 'page/accueil';

		$this->load->view('accueil',$data);
	}	
}