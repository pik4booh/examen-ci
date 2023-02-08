<?php 
    if(! defined('BASEPATH')) exit('No direct script acces allowed');

    class Objet extends CI_Model 
    {
        public function findObjet($idObj)
        {
            $sql = "SELECT * FROM objetprop WHERE idObjet = ?";
            $query = $this->db->query($sql, $idObj);
            $row = $query->row_array();

            return $row;
        }

        public function getObjetUser($idUser)
        {
            $sql = "SELECT * FROM objetprop WHERE idUser = ?";
            $query = $this->db->query($sql , $idUser);
            $result = $query->result_array();

            return $result;
        }

        public function getOtherObjets($idUser)
        {
            $sql = "SELECT * FROM objetprop WHERE idUser != ?";
            $query = $this->db->query($sql , $idUser);
            $result = $query->result_array(); 

            return $result;
        }

        public function selectAllCat()
        {
            $sql = "SELECT * FROM categorie";

            $query = $this->db->query($sql);
            $result = $query->result_array();

            return $result;
        }

        public function selectCatId($nom)
        {
            $sql = "SELECT id FROM categorie WHERE nomCat = ? ";

            $query = $this->db->query($sql, $nom);
            $row = $query->row_array();

            return $row;
        }

        public function selectNomCat($idCat)
        {
            $sql = "SELECT * FROM categorie WHERE idCat = ? ";

            $query = $this->db->query($sql, $idCat);
            $row = $query->row_array();

            return $row;
        }

        public function insertObjet($nom,$descri,$categ,$valeur,$cover)
        {
            $sql = "INSERT INTO Objet VALUES(NULL,?,?,?,?,?)";
            $this->db->query($sql, array($nom,$descri,$categ,$valeur,$cover));
        }

        public function search($tap,$idCat){
            if($idCat =='tout'){
                $sql = "SELECT * FROM objetprop WHERE nom= ? OR descri = ? ";
            }
            else{
                $categ = selectNomCat($idCat);
                $sql = "SELECT * FROM objetprop WHERE nom= ? OR descri = ? AND nomcat = '".$categ['nomCat']."'";
            }

            $query = $this->db->query($sql, array($tap,$tap));
            $result = $query->result_array();

            return $result;
        }

    }
?>