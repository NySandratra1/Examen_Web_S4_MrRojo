<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelRecharge extends CI_Model {

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
        $verif=$this->ModelRecharge->select_code1($code);
        if($verif != null)
        {  
            $verif=$this->ModelRecharge->select_code_valide($code);
            if($verif != null)
            {  
              $verif=$this->ModelRecharge->select_code_valide($code);
              $mot="ce code a deja ete valide";
            }
            else{
              $mot="votre action va etre evaluer";
              $this->ModelRecharge->inserttemporaire($idmembre,$code);
            }
        }
        else{
            $mot="ce code est invalide";
        }
        return $mot;
	}
    public function select_code1($code)
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
    public function inserttemporaire($idmembre,$num_code)
	{
        $sql="insert into attente values(%s,%s)";
        $sql=sprintf($sql,
        $this->db->escape($idmembre),
        $this->db->escape($num_code)
        );
        print_r($sql);
        $this->db->query($sql);
	}
    public function select_code()
    {
        $this->db->select('*');
        $this->db->from('Code');
        $query= $this->db->get();
        return $query->result();
    }
    public function insertcodeinvalide($idmembre,$num_code)
	{
        $sql="insert into Codeinvalide values(%s,%s)";
        $sql=sprintf($sql,
        $this->db->escape($idmembre),
        $this->db->escape($num_code)
        );
        print_r($sql);
        $this->db->query($sql);
	}
    
    public function insertionCode($code,$montant){
        $sql="insert into code values(%s,%s)";
        $sql=sprintf($sql,
        $this->db->escape($code),
        $this->db->escape($montant)
        );
        $this->db->query($sql);
    }
}
