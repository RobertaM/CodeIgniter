<?php

class MainDataController extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model('mainData');
	}

	public function index(){
		$this->view();
	}

	public function index2(){

		$this->viewUserPosts();
	}

	public  function view($offset = 0){

		$data['postai'] = $this->mainData->getData($offset);

		if($data['postai'] === FALSE){
			$this->load->view('pages/empty', $data);
			return;
		}


		if(isset($_GET['ajax']) && $_GET['ajax'] ==='TRUE'){
			$this->load->view('pages/index', $data);	
			return;
		} 


		$this->load->view('template/header' );
		$this->load->view('pages/index', $data);
		$this->load->view('template/footer');
	}

	public function viewUserPosts($offset=0){
		$id = $this->session->UserData('ID');
		$smt = $this->getUsername();
		$username = $this->mainData->getUsernameData($id);
		$data['postai'] = $this->mainData->getDataByUser($offset, $username[0]['username']);

		

		$this->load->view('template/header3', $smt);
		$this->load->view('pages/viewUsersPost', $data);
		$this->load->view('template/footer');
	}


	public function createData($check=''){
		$this->load->helper('form');
		$this->load->library('form_validation');


		$this->load->model('UserData');

		$data['title'] = "create post";
		$id =  $this->session->UserData('ID');
		$user = $this->UserData->checkAuthor($id);
		$this->form_validation->set_rules('Postas', 'Postas', 'required');
		$this->form_validation->set_rules('Pavadinimas', 'Pavadinimas', 'required');
		if ($check=='1'){
			$this->change($id);
			return;

		}
		if ($check == '2'){
			$this->contact();
			return;
		}

		$admin = $this->UserData->role('admin', $this->session->userdata('ID') );
		
		$smt = $this->getUsername();
		if($admin == 'admin') {
				
			if($this->form_validation->run() === FALSE){

				$this->load->view('template/header2', $smt);
				$this->load->view('pages/post', Array('test' => $user));
				$this->load->view('template/footer');
			} else {
				$this->mainData->setData();
				redirect("http://localhost/CodeIgniter/index.php/loginController/isLoggedIn");
		}} else {

			if($this->form_validation->run() === FALSE){
				$this->load->view('template/header3', $smt);
				$this->load->view('pages/post', Array('test' => $user));
				$this->load->view('template/footer');
			} else {
				$this->mainData->setData();
				redirect("http://localhost/CodeIgniter/index.php/loginController/isLoggedIn");

		}

	}
}

	public function delete($ID=''){

		$this->mainData->deleteData($ID);
		redirect("http://localhost/CodeIgniter/index.php/loginController/isLoggedIn");
	}

	public function change($ID=''){
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$found['users'] = $this->mainData->changeData($ID);
		$this->load->library('form_validation');
		$this->form_validation->set_rules('Postas', 'Postas', 'required');
		$this->form_validation->set_rules('Pavadinimas', 'Pavadinimas', 'required');
		$this->load->model('UserData');

		$smt = $this->getUsername();

		$admin = $this->UserData->role('admin', $this->session->userdata('ID') );
		if($admin == 'admin') {

			if($this->form_validation->run() === FALSE){
				$this->load->view('template/header2', $smt);
				$this->load->view('pages/post2', Array('test' => $found));
				$this->load->view('template/footer');
			} else {
				$this->mainData->updateData($ID);
				redirect("http://localhost/CodeIgniter/index.php/loginController/isLoggedIn");
		}} else {
			
			if($this->form_validation->run() === FALSE){
				$this->load->view('template/header3', $smt);
				$this->load->view('pages/post2', Array('test' => $found));
				$this->load->view('template/footer');
			} else {
				$this->mainData->updateData($ID);
				redirect("http://localhost/CodeIgniter/index.php/loginController/isLoggedIn");

		}}
	}

	public function donation(){
		$this->load->view('pages/donation');
	}


	public function usersList(){
		$users['users'] = $this->mainData->viewUsers();
		$this->load->model('UserData');
		$admin = $this->UserData->role('admin', $this->session->userdata('ID') );

		$smt = $this->getUsername();
		
		if($admin == 'admin') {

		$this->load->view('template/header2', $smt);
		$this->load->view('pages/users', $users) ;
		$this->load->view('template/footer');

		}else{

		$this->load->view('template/header3', $smt);
		$this->load->view('pages/users', $users) ;
		$this->load->view('template/footer');

		} 

	}

	public function deleteUser($ID=''){
		$this->mainData->deleteUser($ID);
		redirect("http://localhost/CodeIgniter/index.php/mainDataController/usersList");
	}

	public function contact(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		$smt = $this->getUsername();
			if($this->form_validation->run() === FALSE){
				$this->load->view('template/header3', $smt);
				$this->load->view('pages/contact');
				$this->load->view('template/footer');
			} else {
				$this->mainData->contactData();
				redirect("http://localhost/CodeIgniter/index.php/loginController/isLoggedIn");
	}
}


	public  function viewContactData($offset = 0){

		$data['postai'] = $this->mainData->getContactData();		
		$title = 'postai';

		$smt = $this->getUsername();
		if ($data['postai'] != true){
			$this->load->view('template/header2', $smt);
			$this->load->view('pages/noProblems');
			$this->load->view('template/footer');
		} else {	
			$this->load->view('template/header2', $smt);
			$this->load->view('pages/problems2', $data);
			$this->load->view('template/footer');
		}
	}

	public function deleteContact($ID=''){
		$this->mainData->deleteContact($ID);
		redirect("http://localhost/CodeIgniter/index.php/mainDataController/usersList");
	}


	public function getUsername(){
		$this->load->model('mainData');
		$ID = $this->session->userdata('ID');
		$username['user'] = $this->mainData->getUsernameData($ID);
		return $username;

	}

	public function about(){
		$this->load->view('template/header');
		$this->load->view('pages/about');
		$this->load->view('template/footer');

	}

	public function kontaktai(){
		$this->load->view('template/header');
		$this->load->view('pages/kontaktai');
		$this->load->view('template/footer');

	}


}
?>