<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subpages_m extends CI_Model {

	public function get_subpages($id = FALSE){
		if($id === FALSE){
			$this->db->order_by('sub_pgs_id', 'DESC');
			$this->db->join('pages', 'pages.pgs_id = pages_sub.sub_pgs_pages_id');
			$query = $this->db->get('pages_sub');
			return $query->result_array();
		}
		$query = $this->db->get_where('pages_sub', array('sub_pgs_id' => $id));
		return $query->row_array();
	}

	public function get_subpagesview($slug = FALSE){
		if($slug === FALSE){
			$this->db->order_by('sub_pgs_id', 'ASC');
			$this->db->join('pages', 'pages.pgs_id = pages_sub.sub_pgs_pages_id');
			$query = $this->db->get('pages_sub');
			return $query->result_array();
		}
		$query = $this->db->get_where('pages_sub', array('sub_pgs_slug' => $slug));
		return $query->row_array();
	}

	public function get_pages(){
		$this->db->order_by('pgs_id', 'ASC');
		$query = $this->db->get('pages');
		return $query->result_array();
	}

	public function add_subpages($imagessubpages){
		$slug = url_title($this->input->post('sub_pgs_name'));
		$data = array(
			'sub_pgs_pages_id' => $this->input->post('sub_pgs_pages_id'),
			'sub_pgs_name' => $this->input->post('sub_pgs_name'),
			'sub_pgs_slug' => strtolower($slug),
			'sub_pgs_images' => $imagessubpages,
			'sub_pgs_body' => $this->input->post('sub_pgs_body'),
			'sub_pgs_created_at' => $this->input->post('sub_pgs_created_at', array('type' => 'timestamp')),
			'sub_pgs_created_by' => $this->fungsi->user_login()->usr_id
		);
		return $this->db->insert('pages_sub', $data);
	}

	public function update_subpages($imagessubpages){
		$slug = url_title($this->input->post('sub_pgs_name'));
		$data = array(
			'sub_pgs_pages_id' => $this->input->post('sub_pgs_pages_id'),
			'sub_pgs_name' => $this->input->post('sub_pgs_name'),
			'sub_pgs_slug' => strtolower($slug),
			'sub_pgs_images' => $imagessubpages,
			'sub_pgs_body' => $this->input->post('sub_pgs_body'),
			'sub_pgs_edited_at' => $this->input->post('sub_pgs_edited_at', array('type' => 'timestamp')),
			'sub_pgs_edited_by' => $this->fungsi->user_login()->usr_id
		);
		$this->db->where('sub_pgs_id', $this->input->post('sub_pgs_id'));
		return $this->db->update('pages_sub', $data);
	}

	public function ambil_id_gambar($id){
	$this->db->from('pages_sub');
	$this->db->where('sub_pgs_id', $id);
	$result = $this->db->get('');
	// periksa ada datanya atau tidak
		if ($result->num_rows() > 0) {
		  return $result->row();//ambil datanya berdasrka row id
		}
	}

	public function delete_subpages($id){
		$this->db->where('sub_pgs_id', $id);
		$this->db->delete('pages_sub');
		return TRUE;
	}

}