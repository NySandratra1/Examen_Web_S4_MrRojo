<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SportController extends CI_Controller {

        public function insert()
        {
                $nom = $this -> input -> post('nom');
                $this -> load -> model('SportModel');
                $this -> SportModel -> insertSport($nom);
                redirect(base_url('ControllerAdminValidation/index'));
	}
        public function load(){
                $this -> load -> view("AdminSport");
        }		
}
