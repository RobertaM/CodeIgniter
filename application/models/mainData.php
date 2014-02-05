<?php 
class MainData extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

public function getData($offset = 0) {
		$limit = 5;
		$this->db->select('pavadinimas, Postas, Data, id, Autorius');
		$this->db->from('postai');
    	$this->db->order_by('id', 'desc');
    	$this->db->limit($limit, $offset);

		$query = $this->db->get()->result_array();
		if($query != NULL){
			$query[0]['offset'] = $offset + $limit;
			return $query;
		} else {
			return false;
		}


	}

	public function setData(){
		$Data = gmdate("Y-m-d H:i");
		
		$post = array(
			'Autorius' => $this->input->post('Autorius'),
			'Data' => $this->input->post($Data),
			'Postas'=> $this->input->post('Postas'),
			'Pavadinimas' => $this->input->post('Pavadinimas')
		);
		return $this->db->insert('postai', $post);
	}

	public function deleteData($ID){
    	$this->db->where('id', $ID);
    	$this->db->delete('postai');
    	
	}



	public function changeData($ID){
		$this->db->select('pavadinimas, Postas, Data, id, Autorius');
		$this->db->from('postai');
		$this->db->where('id', $ID);

		$query = $this->db->get()->result_array();
		return $query;

	}
	public function updateData($ID){
		
		$Data = gmdate("Y-m-d H:i:s"); 
		$post = array(
			'Data' => $Data,
			'Pavadinimas' => $this->input->post('Pavadinimas'),
			'Postas'=> $this->input->post('Postas')
		);
		$this->db->where('id',$this->input->post('ID'));
		$this->db->update('postai', $post); 
	}

	public function viewUsers(){

		$this->db->select('username, id');
		$this->db->from('membership');

		$query = $this->db->get()->result_array();
		return $query;
	} 

	public function deleteUser($ID){
    	$this->db->where('id', $ID);
    	$this->db->delete('membership');
    	
	}


	public function contactData(){
	$Data = gmdate("Y-m-d H:i");
		
		$post = array(
			'Data' => $this->input->post($Data),
			'Problema'=> $this->input->post('Postas'),
			'Pavadinimas' => $this->input->post('Pavadinimas')
		);
		return $this->db->insert('problems', $post);
	}

public function getContactData() {
		$limit = 5;
		$this->db->select('Pavadinimas, Problema, Data, id');
		$this->db->from('problems');
    	$this->db->order_by('id', 'desc');

		$query = $this->db->get()->result_array();
		if($query != NULL){
			return $query;
		} else {
			return false;
		}


}

	public function deleteContact($ID){
    	$this->db->where('id', $ID);
    	$this->db->delete('problems');
    	
	}

	public function getUsernameData($ID){
		$this->db->select('username');
		$this->db->where('id', $ID);
		$this->db->from('membership');
		$query = $this->db->get()->result_array();
		return $query;
	}

public function getDataByUser($offset = 0, $username) {
		$limit = 5;
		$this->db->select('pavadinimas, Postas, Data, id, Autorius');
		$this->db->where('Autorius', $username);
		$this->db->from('postai');
    	$this->db->order_by('id', 'desc');

    	$this->db->limit($limit, $offset);

		$query = $this->db->get()->result_array();
		if($query != NULL){
			$query[0]['offset'] = $offset + $limit;
			return $query;
		} else {
			return false;
		}


	}


}