<?php

class Home_controller extends CI_Controller{

/*	function index(){


  	$this->load->model('Site_model');
		
		$data["qwerty"] = $this->Site_model->getAll();
		$data["asdfgh"] = count($this->Site_model->getAll());
		shadow arguments(black magic)
		$data['main_content'] = 'home';
		$this->load->view('includes/template2', $data);
    
	} */

  	public function __construct() {
    	parent::__construct();
    }

	function index(){
		redirect('home_controller/dashboard');
	}

	public function dashboard() {
    // loading the required files
    $this->load->model('site_model', 'site');
    // view data
    $data['header']['title'] = 'post list';
    $data['footer']['scripts']['infscroll.js'] = 'infscroll';
    $data['view_name'] = 'infscrollview';

    $data['view_data']['pos'] = $this->site->getAll();
    //$this->load->view('home', $data);
   $this->load->view($data['view_name'], $data['view_data'] );  
   $data['main_content'] = 'home';
    $this->load->view('includes/template2', $data); 

  }

	public function ajaxlist($offset = null) {
  		$this->load->model('site_model', 'site');
  		if ($this->site->getAll(5,$offset)) {
   	    	$data['pos'] = $this->site->getAll(5,$offset);
    		$this->load->view('ajaxview',$data);
  		} else {
    		echo 'End';
  		}
	}

}


