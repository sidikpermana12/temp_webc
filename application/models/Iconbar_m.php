<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Iconbar_m extends CI_Model {

	public function get_iconbar($id = FALSE){
		if($id === FALSE){
			$this->db->order_by('lib_id', 'ASC');
			$query = $this->db->get('logo_iconbar');
			return $query->result_array();
		}
		$query = $this->db->get_where('logo_iconbar', array('lib_id' => $id));
		return $query->row_array();
	}

	public function add_iconbar($iconbar){
		$data = array(
			'lib_images	' => $iconbar,
			'lib_created_at' => $this->input->post('lib_created_at', array('type' => 'timestamp')),
			'lib_created_by' => $this->fungsi->user_login()->usr_id
		);
		return $this->db->insert('logo_iconbar', $data);
	}

	public function update_iconbar($iconbar){
		$data = array(
			'lib_images	' => $iconbar,
			'lib_created_at' => $this->input->post('lib_created_at', array('type' => 'timestamp')),
			'lib_created_by' => $this->fungsi->user_login()->usr_id
		);
		$this->db->where('lib_id', $this->input->post('lib_id'));
		return $this->db->update('logo_iconbar', $data);
	}

	public function ambil_id_gambar($id){
	$this->db->from('logo_iconbar');
	$this->db->where('lib_id', $id);
	$result = $this->db->get('');
	// periksa ada datanya atau tidak
		if ($result->num_rows() > 0) {
		  return $result->row();//ambil datanya berdasrka row id
		}
	}

	public function delete_iconbar($id){
		$this->db->where('lib_id', $id);
		$this->db->delete('logo_iconbar');
		return TRUE;
	}

}