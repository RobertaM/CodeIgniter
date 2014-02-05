<?php
class LoginController extends CI_controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('UserData');
	}

	public function index(){
		$this->load->view('template/header');
		$this->load->view('pages/loginForm');
		$this->load->view('template/footer');
	}



	public function createUser() {
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['title'] = "create User account";

		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
		$this->form_validation->set_rules('email_address', 'Email address', 'trim|required|valid_email');
	
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('password2', 'Confirm password', 'trim|required|matches[password]');
	

		if ($this->form_validation->run() === FALSE){
			$this->load->view('template/header', $data);
			$this->load->view('pages/create');
			$this->load->view('template/footer');
		} else {
			$this->UserData->setUser();
			redirect('http://localhost/CodeIgniter/index.php/loginController/index');
		}
	}
	

	public function submit(){
		if($this->isLoggedin()){
		} else {
			$query = $this->UserData->getuser($this->input->post('username'), $this->input->post('password'));
			if($query != false){
				$this->load->helper('url');
				$this->session->set_userdata('ID', $query);
				$this->isLoggedin();
			} else {
				$this->index();
			}
			$this->session->userdata('ID');
		}
	}



	public function isLoggedIn($offset = 0){
		$exsists = $this->UserData->check( $this->session->userdata('ID'));
		if($exsists != true){
			return false;
		} else {
			$admin = $this->UserData->role('admin', $this->session->userdata('ID') );
			$smt = $this->getUsername();

			
			$this->load->model('mainData');
			$data['postai'] = $this->mainData->getData($offset);

		if($data['postai'] === FALSE){
			$this->load->view('pages/empty', $data);
			return;
		}


		if(isset($_GET['ajax']) && $_GET['ajax'] ==='TRUE'){
			$this->load->view('pages/index', $data);	
			return;
		} 
	
			if($admin == 'admin') {
				
				$this->load->view('template/header2', $smt);
				$this->load->view('pages/admin_area', $data);
				$this->load->view('template/footer');

			} else {

				$this->load->view('template/header3', $smt);
				$this->load->view('pages/members_area', $data);
				$this->load->view('template/footer');
				return true;
			}
		
	}
}
	public function logout(){
		$this->session->unset_userdata('ID');
		if ($this->isLoggedIn() != true){
			redirect('http://localhost/CodeIgniter');
		}


	}

	public function destroy(){
		$this->session->sess_destroy();
	}

	public function getUsername(){
		$this->load->model('mainData');
		$ID = $this->session->userdata('ID');
		$username['user'] = $this->mainData->getUsernameData($ID);
		return $username;

	}

	
}

?>