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
    public function insertComptes($id)
	{
        $sql="insert into Comptes values(default,%s,%s)";
        $sql=sprintf($sql,
        $this->db->escape($id),
        $this->db->escape(0)
        );
        print_r($sql);
        $this->db->query($sql);
	}
    
    public function verifCompte($nom,$mdp)
    {
        $this->db->select('*');
        $this->db->from('Membre');
        $this->db->where('nom = ',$nom );
        $this->db->where('mdp = ',$mdp );
        $query=$this->db->get();
        return $query->result();
    } 
    public function select_montant_compte($idmembre)
    {
        $this->db->select('montant');
        $this->db->from('Comptes');
        $this->db->where('id_membre =',$idmembre);
        $query= $this->db->get();
        return $query ->result();
    }
    public function Diminuercompte($idmembre,$prix)
    { 
        $somme=$this->CompteUser->select_montant_compte($idmembre);
        $sur = 0;
        foreach($somme as $s){
            $sur = $s -> montant;
        }
        $mot="";
        $total = $sur - $prix;
        if($total>=0)
        {
            $this->db->set('montant',$total,FALSE);
            $this->db->where('id_membre',$idmembre);
            $this->db->update('Comptes');
        }
        else{
            $mot="fond insuffisant";
        }
        return $mot;
    }   
    public function selectUnMembre($nom,$mdp,$poids,$genre,$taille)
    {
        $this->db->select('id_membre');
        $this->db->from('Membre');
        $this->db->where('nom = ',$nom);
        $this->db->where('mdp = ',$mdp);
        $this->db->where('poids = ',$poids);
        $this->db->where('genre = ',$genre);
        $this->db->where('taille = ',$taille);
        $query=$this->db->get();
        $i=0;
        foreach($query->result() as $q){
            $i=$q->id_membre;
        }
        return $i;
    }
    public function selectEtatCaisse($id)
    {
        $this->db->select('*');
        $this->db->from('vEtatCaisse');
        $this->db->where('id_membre= ',$id);
        $query=$this->db->get();
        return $query->result();
    }
}
