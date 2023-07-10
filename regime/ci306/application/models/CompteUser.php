<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CompteUser extends CI_Model {

	public function insertMembre($nom,$mdp,$poids,$genre,$taille)
	{
        $sql="insert into Membre values(default,%s,%s,%s,%s,%s)";
        $sql=sprintf($sql,
        $this->db->escape($nom),
        $this->db->escape($mdp),
        $this->db->escape($poids),
        $this->db->escape($genre),
        $this->db->escape($taille)
        );
        print_r($sql);
        $this->db->query($sql);
	}
    
    public function verifCompte($nom,$mdp)
    {
        $this->db->select('*');
        $this->db->from('Membre');
        $this->db->where('nom = ',$nom ,'and mdp = ',$mdp);
        $query=$this->db->get();
        return $query->result();
    }    
    public function selectUnMembre($nom)
    {
        $this->db->select('*');
        $this->db->from('Membre');
        $this->db->where('nom = ',$nom);
        $query=$this->db->get();
        return $query->result();
    }	
}
