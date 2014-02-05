<?php


class Site_model extends CI_Model{
		
	public function __construct() {
    	parent::__construct();
    	$this->table_name = 'postai';

    	
  }
		
	function getAll($limit = 5, $offset=0) {
		$this->db->select('Pavadinimas, Postas, Data, id');
		$this->db->from('postai');

		//$this->order_by($this->'id')
		$this->db->limit($limit, $offset);

		$query = $this->db->get();
		if($query->num_rows > 0){
			return $query->result_array();
			
		} else {
			return false;
		}

	}

	function others() {
		for ($i = -1, $size = count($this->Site_model->getAll()); $i < $size;){
			$i++;
			return($i);

		}
	}
}