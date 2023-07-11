<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$this->load->view('index');
	}
	public function inscription()
	{
		$this->load->view('inscription');
		
	}
	public function page()
	{
		session_start();
		$this->load->view('Suividepoids');
		
	}	
	public function CaisseUser($id)
	{
		session_start();
		$this->load->model('CompteUser');
		$nom ='';
		$somme=0;
		foreach($this->CompteUser->selectEtatCaisse($id) as $a){
			$nom=$a->nom;
			$somme = $a->montant;
		}
		$data['nom']=$nom;
		$data['caisse']=$somme;
		$this->load->view('EtatCaisse',$data);		
	}
	public function traitement_inscription()
	{
		$this->load->model('CompteUser');
		$nom=$this->input->post('nom');
		$genre=$this->input->post('genre');
		$poids=$this->input->post('poids');
		$taille=$this->input->post('taille');
		$mdp=$this->input->post('motdepasse');
		if($nom !='' || $poids !=null || $taille !=null || $mdp!=''){
			$this->CompteUser->insertMembre($nom,$mdp,$poids,$genre,$taille);
			$idm=$this->CompteUser->selectUnMembre($nom,$mdp,$poids,$genre,$taille);
			$this->CompteUser->insertComptes($idm);
			redirect(base_url('Welcome/index'));
		}else{
			redirect(base_url('Welcome/inscription'));
		}		
	}	
	public function traitement_login()
	{
		session_start();
		$this->load->model('CompteUser');
		$nom=$this->input->post('Nom');
		$mdp=$this->input->post('Motdepasse');
		if($nom !=='admin' && $mdp!=='admin'){
			if($this->CompteUser->verifCompte($nom,$mdp)!=null){
				$_SESSION['id_membre'] = $this->CompteUser->verifCompte($nom,$mdp)[0] -> id_membre;
				redirect(base_url('Welcome/page'));
			}else{
				redirect(base_url('Welcome/inscription'));
			}
		}else{
			redirect(base_url('ControllerAdminValidation/index'));
		}
				
	}
	public function Verification()
	{
		session_start();
		$this->load->model('CompteUser');
		$idmembre=$this->input->post('idmembre');
		$prix=$this->input->post('prix');
		$mot = $this->CompteUser->Diminuercompte($idmembre,$prix);
		foreach($this->CompteUser->selectEtatCaisse($idmembre) as $a){
			$nom=$a->nom;
			$somme = $a->montant;
		}
		$data['mot'] = $mot;
		$data['nom']=$nom;
		$data['caisse']=$somme;
		$this->load->view('EtatCaisse',$data);
	
	}
	public function VerificationGold()
	{
		session_start();
		$this->load->model('CompteUser');
		$idmembre=$this->input->post('membre');
		$caisse=$this->input->post('caisse');
		$gold=90000;
		$srt=0;
		$golden= $this->CompteUser->select_gold($idmembre);
		foreach($golden as $g){
            $srt = $g -> id_membre;
        }
		if($srt == 0)
		{
			$mot = $this->CompteUser->Diminuercompte($idmembre,$gold);
			if($mot==="")
			{
				$mot="Mode Gold actif -15%";
				$this->CompteUser->insertgold($idmembre);
			}
		}
		foreach($this->CompteUser->selectEtatCaisse($idmembre) as $a){
			$nom=$a->nom;
			$somme = $a->montant;
		}
		if($srt != 0)
		{
			$mot="Mode Gold deja actif";
		}
		$data['mot'] =$mot;
		$data['nom']=$nom;
		$data['caisse']=$somme;
		$this->load->view('EtatCaisse',$data);
	}
	public function logout(){
		session_destroy();
		redirect(base_url('Welcome/index'));
	}	
}
