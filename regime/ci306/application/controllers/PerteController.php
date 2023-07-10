<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PerteController extends CI_Controller {
    function selectPerte(){
        $this -> load -> model('PoidsModel');
        $data['perte'] = $this -> PoidsModel -> selectPerte();
        $this -> load -> view('pertedepoids',$data);
    }
    	
}