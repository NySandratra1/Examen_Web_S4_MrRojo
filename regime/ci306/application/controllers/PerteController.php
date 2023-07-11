<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PerteController extends CI_Controller {
    function selectPerte(){
        session_start();
        $this -> load -> model('PoidsModel');
        $data['perte'] = $this -> PoidsModel -> selectPerte();
        $this -> load -> view('pertedepoids',$data);
    }
    	
}