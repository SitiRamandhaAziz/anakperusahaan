<?php defined('BASEPATH') OR exit('No direct script access allowed');



class Neraca_model extends CI_Model{

public function get_all()
{
	$query = $this->db->select("*")
				->from ('neraca_aset')
				->order_by('id', 'DESC')
				->get();
	return $query->result();
}

	public function simpan($data)
	{
		$query = $thhis->db->insert ("neraca_aset", $data);
		if($query){
			return true;
		}
		else{
			return false;
		}
	}
	
}




?>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
