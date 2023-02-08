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

	public function profil()
	{
		$this->load->model('Objet');
		$data['listCat'] = $this->Objet->selectAllCat();
		$data['listObjetUser'] = $this->Objet->getObjetUser($_SESSION['idUser']);
		$this->load->view('profil',$data);
	}

	public function ajouter(){

		$nom = $this->input->get('nom');
		$descri = $this->input->get('descri');
		$categ = $this->input->get('categ');
		$valeur = $this->input->get('valeur');
		$photo = $this->input->get('photo');

		$this->load->model('Objet');
		$this->Objet->insertObjet($nom,$descri,$categ,$valeur,$photo);

		$data['listCat'] = $this->Objet->selectAllCat();
		$data['listObjetUser'] = $this->Objet->getObjetUser($_SESSION['idUser']);
		$this->load->view('profil',$data);
	}
}