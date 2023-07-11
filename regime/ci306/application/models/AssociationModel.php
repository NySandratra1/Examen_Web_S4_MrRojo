<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class AssociationModel extends CI_Model{
        public function selectAllSport(){
            $this->db->select('*');
            $this->db->from('sport');
            $query=$this->db->get();
            return $query->result();  
        }
        public function selectAllNumRegime(){
            $this->db->select('*');
            $this->db->from('vNumRegime');
            $query=$this->db->get();
            return $query->result();  
        }
        public function insertion($sport,$num,$duree,$i1,$i2,$objectif,$prix){
            $sql = "insert into association values(default,%s,%s,%s,%s,%s,%s,%s)";
            $sql=sprintf($sql,
                $this->db->escape($sport),
                $this->db->escape($num),
                $this->db->escape($duree),
                $this->db->escape($i1),
                $this->db->escape($i2),
                $this->db->escape($objectif),
                $this->db->escape($prix)
            );
            print_r($sql);
            $this->db->query($sql);
        }
    }
?>