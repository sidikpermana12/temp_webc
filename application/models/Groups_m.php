<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Groups_m extends CI_Model {

	public function get_groups($id = FALSE){
		if($id === FALSE){
			$this->db->order_by('grp_id', 'ASC');
			$query = $this->db->get('users_groups');
			return $query->result_array();
		}
		$query = $this->db->get_where('users_groups', array('grp_id' => $id));
		return $query->row_array();
	}

	public function get_groupsview($slug = FALSE){
		if($slug === FALSE){
			$this->db->order_by('grp_id', 'ASC');
			$query = $this->db->get('users_groups');
			return $query->result_array();
		}
		$query = $this->db->get_where('users_groups', array('grp_slug' => $slug));
		return $query->row_array();
	}

	public function add_groups(){
		$slug = url_title($this->input->post('grp_name'));
		$data = array(
			'grp_name' => $this->input->post('grp_name'),
			'grp_slug' => strtolower($slug),
			'grp_description' => $this->input->post('grp_description'),
			'grp_created_at' => $this->input->post('grp_created_at', array('type' => 'timestamp')),
			'grp_created_by' => $this->fungsi->user_login()->usr_id
		);
		return $this->db->insert('users_groups', $data);
	}

	public function update_groups(){
		$slug = url_title($this->input->post('grp_name'));
		$data = array(
			'grp_name' => $this->input->post('grp_name'),
			'grp_slug' => strtolower($slug),
			'grp_description' => $this->input->post('grp_description'),
			'grp_edited_at' => $this->input->post('grp_edited_at', array('type' => 'timestamp')),
			'grp_edited_by' => $this->fungsi->user_login()->usr_id
		);
		$this->db->where('grp_id', $this->input->post('grp_id'));
		return $this->db->update('users_groups', $data);
	}

	public function delete_groups($id){
		$this->db->where('grp_id', $id);
		$this->db->delete('users_groups');
		return TRUE;
	}

}