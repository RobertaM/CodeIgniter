<?php

class Kontroleris extends CI_Controller{

	function index(){

		
		$this->load->view('vaizdas');
	}


   function kazkas(){
   $data = Array(
   		"random" =>rand(1,100),
   		"1234324523" => Array(
        	"name" => "John",
       		"surname" => "Doe",
       		
   	    )
	);
	header('Content-Type: application/json');
	echo json_encode($data);

	}

}