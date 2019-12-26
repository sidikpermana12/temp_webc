<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brandlogo_m extends CI_Model {

	public function get_brandlogo($id = FALSE){
		if($id === FALSE){
			$this->db->order_by('lbl_id', 'ASC');
			$query = $this->db->get('logo_brandlogo');
			return $query->result_array();
		}
		$query = $this->db->get_where('logo_brandlogo', array('lbl_id' => $id));
		return $query->row_array();
	}

	public function add_brandlogo($brandlogo){
		$data = array(
			'lbl_name	' => $this->input->post('lbl_name'),
			'lbl_images	' => $brandlogo,
			'lbl_created_at' => $this->input->post('lbl_created_at', array('type' => 'timestamp')),
			'lbl_created_by' => $this->fungsi->user_login()->usr_id
		);
		return $this->db->insert('logo_brandlogo', $data);
	}

	public function update_brandlogo($brandlogo){
		$data = array(
			'lbl_name	' => $this->input->post('lbl_name'),
			'lbl_images	' => $brandlogo,
			'lbl_created_at' => $this->input->post('lbl_created_at', array('type' => 'timestamp')),
			'lbl_created_by' => $this->fungsi->user_login()->usr_id
		);
		$this->db->where('lbl_id', $this->input->post('lbl_id'));
		return $this->db->update('logo_brandlogo', $data);
	}

	public function ambil_id_gambar($id){
	$this->db->from('logo_brandlogo');
	$this->db->where('lbl_id', $id);
	$result = $this->db->get('');
	// periksa ada datanya atau tidak
		if ($result->num_rows() > 0) {
		  return $result->row();//ambil datanya berdasrka row id
		}
	}

	public function delete_brandlogo($id){
		$this->db->where('lbl_id', $id);
		$this->db->delete('logo_brandlogo');
		return TRUE;
	}

}