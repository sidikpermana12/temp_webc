<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Postscategories_m extends CI_Model {

	public function get_postscategories($id = FALSE){
		if($id === FALSE){
			$this->db->order_by('cat_pst_id', 'DESC');
			$query = $this->db->get('posts_categories');
			return $query->result_array();
		}
		$query = $this->db->get_where('posts_categories', array('cat_pst_id' => $id));
		return $query->row_array();
	}

	public function get_postscategoriesview($slug = FALSE){
		if($slug === FALSE){
			$this->db->order_by('cat_pst_id', 'ASC');
			$query = $this->db->get('posts_categories');
			return $query->result_array();
		}
		$query = $this->db->get_where('posts_categories', array('cat_pst_slug' => $slug));
		return $query->row_array();
	}

	public function add_postscategories(){
		$slug = url_title($this->input->post('cat_pst_name'));
		$data = array(
			'cat_pst_name' => $this->input->post('cat_pst_name'),
			'cat_pst_slug' => strtolower($slug),
			'cat_pst_body' => $this->input->post('cat_pst_body'),
			'cat_pst_created_at' => $this->input->post('cat_pst_created_at', array('type' => 'timestamp')),
			'cat_pst_created_by' => $this->fungsi->user_login()->usr_id
		);
		return $this->db->insert('posts_categories', $data);
	}

	public function update_postscategories(){
		$slug = url_title($this->input->post('cat_pst_name'));
		$data = array(
			'cat_pst_name' => $this->input->post('cat_pst_name'),
			'cat_pst_slug' => strtolower($slug),
			'cat_pst_body' => $this->input->post('cat_pst_body'),
			'cat_pst_edited_at' => $this->input->post('cat_pst_edited_at', array('type' => 'timestamp')),
			'cat_pst_edited_by' => $this->fungsi->user_login()->usr_id
		);
		$this->db->where('cat_pst_id', $this->input->post('cat_pst_id'));
		return $this->db->update('posts_categories', $data);
	}

	public function delete_postscategories($id){
		$this->db->where('cat_pst_id', $id);
		$this->db->delete('posts_categories');
		return TRUE;
	}

}