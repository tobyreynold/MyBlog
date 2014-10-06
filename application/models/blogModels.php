<?php
class blogModels extends CI_Model {
		
	function __construct() {
		parent::__construct();
	}
	
	function get_blog() {
		$sql = "SELECT * 
		FROM blog";
		$query = $this->db->query($sql);

		if($query->num_rows() > 0){
			foreach($query->result() as $row){
				$data[] = $row;
			}
			return $data;
		}
		else {
			return FALSE;
		}
	}
}	