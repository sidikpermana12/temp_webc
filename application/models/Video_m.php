<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video_m extends CI_Model {

	public function get_video($id = FALSE){
		if($id === FALSE){
			$this->db->order_by('vid_id', 'DESC');
			$query = $this->db->get('video');
			return $query->result_array();
		}
		$query = $this->db->get_where('video', array('vid_id' => $id));
		return $query->row_array();
	}

	public function get_videoview($slug = FALSE){
		if($slug === FALSE){
			$this->db->order_by('vid_id', 'ASC');
			$query = $this->db->get('video');
			return $query->result_array();
		}
		$query = $this->db->get_where('video', array('vid_slug' => $slug));
		return $query->row_array();
	}

	public function get_videocategories(){
		$this->db->order_by('cat_vid_id', 'ASC');
		$query = $this->db->get('video_categories');
		return $query->result_array();
	}

	public function add_video(){
		$slug = url_title($this->input->post('vid_name'));
		$data = array(
			'vid_categoriesvideo_id' => $this->input->post('vid_categoriesvideo_id'),
			'vid_name' => $this->input->post('vid_name'),
			'vid_slug' => strtolower($slug),
			'vid_link' => $this->input->post('vid_link'),
			'vid_body' => $this->input->post('vid_body'),
			'vid_created_at' => $this->input->post('vid_created_at', array('type' => 'timestamp')),
			'vid_created_by' => $this->fungsi->user_login()->usr_id
		);
		return $this->db->insert('video', $data);
	}

	public function update_video(){
		$slug = url_title($this->input->post('vid_name'));
		$data = array(
			'vid_categoriesvideo_id' => $this->input->post('vid_categoriesvideo_id'),
			'vid_name' => $this->input->post('vid_name'),
			'vid_slug' => strtolower($slug),
			'vid_link' => $this->input->post('vid_link'),
			'vid_body' => $this->input->post('vid_body'),
			'vid_edited_at' => $this->input->post('vid_edited_at', array('type' => 'timestamp')),
			'vid_edited_by' => $this->fungsi->user_login()->usr_id
		);
		$this->db->where('vid_id', $this->input->post('vid_id'));
		return $this->db->update('video', $data);
	}

	public function delete_video($id){
		$this->db->where('vid_id', $id);
		$this->db->delete('video');
		return TRUE;
	}

}