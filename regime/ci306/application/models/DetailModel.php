<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class DetailModel extends CI_Model{
        function selectDetail($id){
            $this->db->select('*');
            $this->db->from('vDetailRepas');
            $this->db->where('id_association =',$id);
            $query=$this->db->get();
            return $query->result();   
        }
    }
?>