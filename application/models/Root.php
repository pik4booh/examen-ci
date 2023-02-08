<?php 
    if(! defined('BASEPATH')) exit('No direct script acces allowed');

    class Root extends CI_Model 
    {
        public function countUser(){
            $sql = "SELECT count(*) FROM users ";
            $query = $this->db->query($sql);
            $row = $query->row_array();

            return $row;
        }

        public function getObjets()
        {
            $sql = "SELECT * FROM objetprop";
            $query = $this->db->query($sql);
            $result = $query->result_array(); 

            return $result;
        }

        public function suppr($idObj){
            $sql = "DELETE FROM objet WHERE idObjet = ? ";
            $this->db->query($sql, $idObj);
        }

        public function getHistorique(){
            $sql = "SELECT * FROM historiqueTransac";
            $query = $this->db->query($sql);
            $result = $query->result_array(); 

            return $result;
        }

        public function getListProprio($idObj){
            $sql = "SELECT * FROM proprio WHERE idObj = ?";
            $query = $this->db->query($sql,$idObj);
            $result = $query->result_array();

            return $result;
        }

    }
?>