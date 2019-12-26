<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts_m extends CI_Model {

	public function get_posts($id = FALSE){
		if($id === FALSE){
			$this->db->order_by('pst_id', 'DESC');
			$query = $this->db->get('posts');
			return $query->result_array();
		}
		$query = $this->db->get_where('posts', array('pst_id' => $id));
		return $query->row_array();
	}

	public function get_postsview($slug = FALSE){
		if($slug === FALSE){
			$this->db->order_by('pst_id', 'ASC');
			$query = $this->db->get('posts');
			return $query->result_array();
		}
		$query = $this->db->get_where('posts', array('pst_slug' => $slug));
		return $query->row_array();
	}

	public function get_postscategories(){
		$this->db->order_by('cat_pst_id', 'ASC');
		$query = $this->db->get('posts_categories');
		return $query->result_array();
	}

	public function add_posts($imagesposts){
		$slug = url_title($this->input->post('pst_name'));
		$data = array(
			'pst_categoriespost_id' => $this->input->post('pst_categoriespost_id'),
			'pst_name' => $this->input->post('pst_name'),
			'pst_slug' => strtolower($slug),
			'pst_images' => $imagesposts,
			'pst_link' => $this->input->post('pst_link'),
			'pst_body' => $this->input->post('pst_body'),
			'pst_tags' => $this->input->post('pst_tags'),
			'pst_created_at' => $this->input->post('pst_created_at', array('type' => 'timestamp')),
			'pst_created_by' => $this->fungsi->user_login()->usr_id
		);
		return $this->db->insert('posts', $data);
	}

	public function update_posts($imagesposts){
		$slug = url_title($this->input->post('pst_name'));
		$data = array(
			'pst_categoriespost_id' => $this->input->post('pst_categoriespost_id'),
			'pst_name' => $this->input->post('pst_name'),
			'pst_slug' => strtolower($slug),
			'pst_images' => $imagesposts,
			'pst_link' => $this->input->post('pst_link'),
			'pst_body' => $this->input->post('pst_body'),
			'pst_tags' => $this->input->post('pst_tags'),
			'pst_edited_at' => $this->input->post('pst_edited_at', array('type' => 'timestamp')),
			'pst_edited_by' => $this->fungsi->user_login()->usr_id
		);
		$this->db->where('pst_id', $this->input->post('pst_id'));
		return $this->db->update('posts', $data);
	}

	public function ambil_id_gambar($id){
	$this->db->from('posts');
	$this->db->where('pst_id', $id);
	$result = $this->db->get('');
	// periksa ada datanya atau tidak
		if ($result->num_rows() > 0) {
		  return $result->row();//ambil datanya berdasrka row id
		}
	}

	public function delete_posts($id){
		$this->db->where('pst_id', $id);
		$this->db->delete('posts');
		return TRUE;
	}

}