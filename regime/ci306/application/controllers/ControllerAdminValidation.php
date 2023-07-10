<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerAdminValidation extends CI_Controller {

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
	public function index()
	{
        $this->load->model('ModelAdminValidation');
        $donnees=$this->ModelAdminValidation->select_liste_validation();
        $zvtr = [];
        $i = 0;
        foreach($donnees as $don)
        {
            $nom = $this->ModelAdminValidation->select_membre($don->id_membre);
            $zvtr[]=$nom;
            
        }
        $data['liste']=$donnees;
        $data['nom']=$zvtr;
        $this->load->view('AdminValidation',$data);
		
       
    }  
    public function Verification()
    {
        $this->load->model('ModelAdminValidation');
        $idmembre=$this->input->post('idmembre');
        $numcode=$this->input->post('numcode');
        $data['mot']=$this->ModelAdminValidation->Verification($numcode,$idmembre);
        redirect(base_url('ControllerAdminValidation/index'));

    }
		/*$this->load->model('ModelRecharge');
		$data['listeCode']=$this->ModelRecharge->select_code();
		$this->load->view('Recharge',$data);
		
	}		
	public function rechargement()
	{
		$code=$this->input->post('inputcode');
		$membre=$this->input->post('membre');
		$this->load->model('ModelRecharge');
		$data['mot']="";
		$data['listeCode']=$this->ModelRecharge->select_code();
		$data['mot']=$this->ModelRecharge->Verification($code,$membre);
		$this->load->view('Recharge',$data);*/
	
}
