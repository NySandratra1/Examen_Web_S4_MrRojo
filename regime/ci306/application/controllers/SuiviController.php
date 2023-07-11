<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SuiviController extends CI_Controller {
    function insertSuivi($id){
        session_start();
        $this -> load -> model('PoidsModel');
        $date = $this -> input ->post("date_pesee");
        $poids = $this -> input ->post("poids");
        $this -> PoidsModel -> insertSuivi($id,$poids,$date);
        redirect(base_url('Welcome/page'));
    }	
}