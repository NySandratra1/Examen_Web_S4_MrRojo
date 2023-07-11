<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PoidsModel extends CI_Model {
    function selectGain(){
        $this->db->select('*');
            $this->db->from('association');
            $this->db->where('objectif =',"gain");
            $query=$this->db->get();
            return $query->result();
    }
    
    function selectPerte(){
        $this->db->select('*');
            $this->db->from('association');
            $this->db->where('objectif =',"perte");
            $query=$this->db->get();
            return $query->result();
    }

    function insertSuivi($id,$poids,$date){
        $sql="insert into suivi_de_poids values(%s,%s,%s)";
            $sql=sprintf($sql,
                $this->db->escape($id),$this->db->escape($date),$this->db->escape($poids)
            );
            $this->db->query($sql);
    }
}