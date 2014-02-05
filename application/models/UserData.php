<?php 
class UserData extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

public function setUser(){
		

		$user = array(
			'first_name' => $this->input->post('first_name'),
			'last_name'  => $this->input->post('last_name'),
			'email_address'  => $this->input->post('email_address'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password'))
			);
		return $this->db->insert('membership', $user);
	}	

public function getUser($username, $password) {
	//$this->load->database();
	$this->db->select('id');
	$this->db->where('username', $username);
	$this->db->where('password', md5($password));
	$query = $this->db->get('membership');
	if ($query->num_rows == 1){
			
		$this->db->select('id');
		$this->db->where('username', $username);
		$this->db->where('password', md5($password));
		$this->db->from('membership');
		$query = $this->db->get()->result_array();
	
		$data = array(
			'IsLoggedIn' => true
		);
		$this->db->where('id',$query[0]['id']);
		$this->db->update('membership', $data);

		return $query[0]['id'];
	
	} else {
		return NULL;
	}
}
public function check($id){
	$this->db->select('id');
	$this->db->where('id', $id);
	$this->db->from('membership');
	$query = $this->db->get()->result_array();

	if($query != NULL){
		return true;
	} else {
		return false;
	}
}

public function role($role, $ID){
	$this->db->select('role');
	$this->db->where('role', $role);
	$this->db->where('id', $ID);
	$this->db->from('membership');
	$query = $this->db->get()->result_array();

	if($query != null){
		return 'admin';
	} else {
		return 'user';
	}
}

public function checkAuthor($id){
	$this->db->select('username');
	$this->db->where('id', $id);
	$this->db->from('membership')->limit(1);
	$query = $this->db->get()->result_array();
	return $query[0];

}


}
