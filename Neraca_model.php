<?php defined('BASEPATH') OR exit('No direct script access allowed');

/*Class Neraca_model extends CI_Model
{
	function neraca_list(){
		$hasil=$this->db->get('tes_form');
		return $hasil->result();	
	}
	function save_neraca(){
		$data=array(
				'kassetarakas' => $this->input->post('kas_dan_setara_kas'),
				'piutangusaha' => $this->input->post('piutang_usaha'),

			);
		$result=$this->db->insert('tes_form',$data);
		return $result;
	}

	function update_neraca(){
		$kas_dan_setara_kas=$this->input->post('kassetarakas');
		$piutang_usaha=$this->input->post('piutangusaha');
		$id=$this->input->post('id');

		$this->db->set('neracaid',$id);
		$this->db->set('kassetarakas',$kas_dan_setara_kas);
		$this->db->set('piutangusaha',$piutang_usaha);
		$result=$this->db->update('tes_form');
		return $result;
	}
	function delete_neraca(){
		$id=$this->input->post('neracaid');
		$this->db->where('id',$id);
		$result=$this->db->delete('tes_form');
		return $result;
	}
}*/

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
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		