<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery_m extends CI_Model {

	public function get_gallery($id = FALSE){
		if($id === FALSE){
			$this->db->order_by('glr_id', 'DESC');
			$query = $this->db->get('gallery');
			return $query->result_array();
		}
		$query = $this->db->get_where('gallery', array('glr_id' => $id));
		return $query->row_array();
	}

	public function add_gallery($images){	
		$data = array(
			'glr_imagesname' => $images,
			'glr_created_at' => $this->input->post('glr_created_at', array('type' => 'timestamp')),
			'glr_created_by' => $this->fungsi->user_login()->usr_id
		);
		return $this->db->insert('gallery', $data);
	}

	public function get_images_id($id){
	$this->db->from('gallery');
	$this->db->where('glr_id', $id);
	$result = $this->db->get('');
	// periksa ada datanya atau tidak
		if ($result->num_rows() > 0) {
		  return $result->row();//ambil datanya berdasrka row id
		}
	}

	public function delete_gallery($id){
		$this->db->where('glr_id', $id);
		$this->db->delete('gallery');
		return TRUE;
	}

	public function delete_all_gallery(){
		$this->db->empty_table('gallery');
		return TRUE;
	}

}