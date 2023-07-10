<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GainController extends CI_Controller {
    function selectGain(){
        $this -> load -> model('PoidsModel');
        $data['gain'] = $this -> PoidsModel -> selectGain();
        $this -> load -> view('gaindepoid',$data);
    }
    	
}