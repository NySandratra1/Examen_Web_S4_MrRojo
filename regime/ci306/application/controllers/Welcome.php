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
		$this->load->view('page');
		
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
			redirect(base_url('Welcome/index'));
		}else{
			redirect(base_url('Welcome/inscription'));
		}		
	}	
	public function traitement_login()
	{
		$this->load->model('CompteUser');
		$nom=$this->input->post('Nom');
		$mdp=$this->input->post('Motdepasse');
		if($nom !='admin' && $mdp!='admin'){
			if($this->CompteUser->verifCompte($nom,$mdp)!=null){
				redirect(base_url('Welcome/page'));
			}else{
				redirect(base_url('Welcome/inscription'));
			}
		}else{
			redirect(base_url('AdminController/index'));
		}
				
	}	
}
