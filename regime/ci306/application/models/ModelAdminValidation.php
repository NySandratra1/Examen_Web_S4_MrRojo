<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelAdminValidation extends CI_Model {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function Verification($code,$idmembre)
	{
       /* $sql="Insert jndfojn";
        $sql=sprintf($sql,$this->db->escape($code));
        $this->db->query($sql);*/
        $mot="";
        $verif=$this->ModelAdminValidation->select_code($code);
        if($verif != null)
        {  
            $verif=$this->ModelAdminValidation->select_code_valide($code);
            if($verif != null)
            {  
              $verif=$this->ModelAdminValidation->select_code_valide($code);
              $mot="ce code a deja ete valide";
              $this->ModelAdminValidation->delete_attente($code);
            }
            else{
              $mot="votre action est enregistre";
              $this->ModelAdminValidation->insertion_codeValide($idmembre,$code);
              $this->ModelAdminValidation->delete_attente($code);
            }
        }
        else{
            $mot="ce code est invalide";
        }
        return $mot;
	}
    public function select_code($code)
    {
        $this->db->select('*');
        $this->db->from('Code');
        $this->db->where('num_code =',$code);
        $query= $this->db->get();
        return $query->result();
    } 		

    public function select_code_valide($code)
    {
        $this->db->select('*');
        $this->db->from('Codeinvalide');
        $this->db->where('num_code =',$code);
        $query= $this->db->get();
        return $query->result();
    } 
    public function select_liste_validation()
    {
        $this->db->select('*');
        $this->db->from('attente');
        $query= $this->db->get();
        return $query->result();
    }

    public function delete_attente($numcode)
    {
        $this->db->where('num_code',$numcode);
        $this->db->delete('attente');
    }

    public function insertion_codeValide($idmembre,$num_code)
	{
        $sql="insert into Codeinvalide values(%s,%s)";
        $sql=sprintf($sql,
        $this->db->escape($idmembre),
        $this->db->escape($num_code)
        );
        print_r($sql);
        $this->db->query($sql);
	}
    		
    public function select_membre($id)
    {
        $this->db->select('nom');
        $this->db->from('membre');
        $this->db->where('id_membre =',$id,'limit 1');
        $query= $this->db->get();
        $nom = '';
        foreach($query->result_array() as $row){
            $nom = $row;
        }
        return $nom;
    }
    public function obtention_montant($code)
    {
        $this->db->select('montant');
        $this->db->from('Code');
        $this->db->where('num_code =',$code);
        $query= $this->db->get();
        return $query->result();
    }
    /*
   
    public function select_code()
    {
        $this->db->select('*');
        $this->db->from('Code');
        $query= $this->db->get();
        return $query->result();
    }
    public function insertcodeinvalide($idmembre,$num_code)
	{
       
	}
    */

}
