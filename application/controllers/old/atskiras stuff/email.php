<?php

class Email extends  CI_Controller  {

	function __construct(){
		
		parent::__construct();

	}

	function index(){
		$config = Array(
				'protocol' => 'smtp',
				'smtp_host' => 'ssl://smtp.googlemail.com',
				'smtp_port' => 25,
				'smtp_user' => 'roberta.m1992@gmail.com',
				'smtp_pass' => 'drakoniukas'
			);

			$this->load->library('email', $config);
			$this->email->set_newline("\r\n");
			
			$this->email->from('roberta.m1992@gmail.com');
			$this->email->to('roberta.m1992@gmail.com');
			$this->email->subject('Email test');
			$this->email->message('hi :)');

			if($this->email->send()){
				echo 'you nigga';
			}else{
				show_error($this->email->print_debugger());
			}
	}

}