<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slidehomepage_m extends CI_Model {

	public function get_slidehomepage($id = FALSE){
		if($id === FALSE){
			$this->db->order_by('lsh_id', 'ASC');
			$query = $this->db->get('logo_slidehomepage');
			return $query->result_array();
		}
		$query = $this->db->get_where('logo_slidehomepage', array('lsh_id' => $id));
		return $query->row_array();
	}

	public function add_slidehomepage($slidehomepage){
		$data = array(
			'lsh_images	' => $slidehomepage,
			'lsh_created_at' => $this->input->post('lsh_created_at', array('type' => 'timestamp')),
			'lsh_created_by' => $this->fungsi->user_login()->usr_id
		);
		return $this->db->insert('logo_slidehomepage', $data);
	}

	public function update_slidehomepage($slidehomepage){
		$data = array(
			'lsh_images	' => $slidehomepage,
			'lsh_created_at' => $this->input->post('lsh_created_at', array('type' => 'timestamp')),
			'lsh_created_by' => $this->fungsi->user_login()->usr_id
		);
		$this->db->where('lsh_id', $this->input->post('lsh_id'));
		return $this->db->update('logo_slidehomepage', $data);
	}

	public function ambil_id_gambar($id){
	$this->db->from('logo_slidehomepage');
	$this->db->where('lsh_id', $id);
	$result = $this->db->get('');
	// periksa ada datanya atau tidak
		if ($result->num_rows() > 0) {
		  return $result->row();//ambil datanya berdasrka row id
		}
	}

	public function delete_slidehomepage($id){
		$this->db->where('lsh_id', $id);
		$this->db->delete('logo_slidehomepage');
		return TRUE;
	}

}