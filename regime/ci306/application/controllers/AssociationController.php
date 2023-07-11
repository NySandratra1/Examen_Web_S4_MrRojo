<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AssociationController extends CI_Controller {

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
	public function insertAssociation()
	{
        $sport = $this -> input -> post('sport');
        $num = $this -> input -> post('num_regime');
        $duree = $this -> input -> post('duree');
        $i1 = $this -> input -> post('int1');
        $i2 = $this -> input -> post('int2');
        $objectif = $this -> input -> post('objectif');
        $prix = $this -> input -> post('prix');

        $this->load->model('AssociationModel');
        $this->AssociationModel->insertion($sport,$num,$duree,$i1,$i2,$objectif,$prix);
        redirect(base_url('ControllerAdminValidation/index'));
    } 
    
    public function show(){
        $this->load->model('AssociationModel');

        $sprt = $this->AssociationModel->selectAllSport();
        $reg = $this->AssociationModel->selectAllNumRegime();

        $num = [];
        $sport = [];
        $sportname = [];
        foreach($sprt as $s){
            $sport[] = $s -> id_sport;
            $sportname[] = $s -> nom_sport;
        }
        foreach($reg as $r){
            $num[] = $r -> num_regime;
        }
        $data['num'] = $num;
        $data['sport'] = $sport;
        $data['name'] = $sportname;
        $this -> load -> view('AdminAssociation',$data);
    }
    
}
