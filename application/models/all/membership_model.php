<?php

class Membership_model extends Ci_Model{

	function validate($username, $password){
		$this->load->database();
		$this->db->where('username', $username);
		$this->db->where('password', md5($password));
		$query = $this->db->get('membership');

		if($query->num_rows == 1) {
			return true;
		}
		else
		{
			return false;
		}
	}
function create_member(){
	$new_member_insert_data = array(
		'first_name' => $this->input->post('first_name'),
		'last_name'  => $this->input->post('last_name'),
		'email_address'  => $this->input->post('email_address'),
		'username'  => $this->input->post('username'),
		'password'  => md5($this->input->post('password'))
	);
	
	$insert = $this->db->insert('membership', $new_member_insert_data);
	return $insert;
}


}