<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerRecharger extends CI_Controller {

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
		$this->load->model('ModelRecharge');
		$data['listeCode']=$this->ModelRecharge->select_code();
		$data['mot']="";
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
		$this->load->view('Recharge',$data);
	}
}
