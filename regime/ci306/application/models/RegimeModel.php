<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegimeModel extends CI_Model {
    function insertRegime($num,$nom){
        $sql="insert into Regime values(%s,%s)";
        $sql=sprintf($sql,
            $this->db->escape($nom),
            $this->db->escape($num)
        );
        $this->db->query($sql);
    }   

}