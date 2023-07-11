<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailController extends CI_Controller {
    function selectDetail($id){
        session_start();
        $this -> load -> model('DetailModel');
        $data['liste'] = $this -> DetailModel -> selectDetail($id);
        $repas = array();
        $sport = array();
        $prix = 0;
        $obj = '';
        foreach($data['liste'] as $d){
            $repas[] = $d -> repas;
            $sport[] = $d -> nom_sport;
            $prix=$d -> prix;
            $obj = $d -> objectif;
        }
        $data['repas'] = $repas;
        $data['sport'] = $sport;
        $data['prix'] = $prix;
        $data['obj'] = $obj;
        $this -> load -> view('detailregime',$data);
    }
    	
}