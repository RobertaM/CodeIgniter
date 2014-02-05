<?php

class Data_model extends CI_Model{

function getAll(){
	$this->db->select('title,continent');
	$this->db->from('data');
    $this->db->limit('5');
    $this->db->order_by('asc')

	$q = $this->db->get(); 

	if($q->num_rows() > 0){
		foreach ($q->result() as $row){
			$data[] = $row;
		}
	return $data;
	}
}



}
