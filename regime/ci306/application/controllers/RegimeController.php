<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegimeController extends CI_Controller {

        public function insert()
        {
            $nom = $this -> input -> post('nom');
            $num = $this -> input ->post('num');
            $this -> load -> model('RegimeModel');
            $this -> RegimeModel -> insertRegime($num,$nom);
            redirect(base_url('ControllerAdminValidation/index'));
	    }	
        public function load(){
            $this -> load -> view("AdminRegime");
        }	
}
