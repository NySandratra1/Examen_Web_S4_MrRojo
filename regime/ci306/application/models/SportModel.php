<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SportModel extends CI_Model {
    function insertSport($nom){
        $sql="insert into sport values(default,%s)";
        $sql=sprintf($sql,
            $this->db->escape($nom)
        );
        $this->db->query($sql);
    }   

}