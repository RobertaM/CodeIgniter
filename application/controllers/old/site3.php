<?php
class site3 extends CI_Controller{

		function index(){
		//$this->load->model('data_model');
		//$data['rows'] = $this->data_model->getAll();
		$data['main_content'] = 'home';
		$this->load->view('includes/template', $data);	

	}


	function __construct(){
		parent::__construct();
		$this->is_logged_in();

	}

	function members_area(){
		$this->load->view('members_area');
	}	

	function is_logged_in(){
		$is_logged_in = $this->session->userdata('is_logged_in');

		if(!isset($is_logged_in) || $is_logged_in != true ){
			echo 'no permission <a href="/CodeIgniter/index.php/login">Login</a>';
			die();
		} 
	}
	
}