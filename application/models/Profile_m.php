<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_m extends CI_Model {

	public function update_profile($photo){
		$slug = url_title($this->input->post('usr_fullname'));		
		$data = array(
			'usr_fullname' => $this->input->post('usr_fullname'),
			'usr_slug' => strtolower($slug),
			'usr_phone' => $this->input->post('usr_phone'),
			'usr_address' => $this->input->post('usr_address'),
			'usr_images' => $photo,
			'usr_edited_at' => $this->input->post('usr_edited_at', array('type' => 'timestamp')),
			'usr_edited_by' => $this->fungsi->user_login()->usr_id
		);
		$this->db->where('usr_id', $this->input->post('usr_id'));
		return $this->db->update('users', $data);
	}

	public function update_profilepwd(){
		$data = array(
			'usr_edited_at' => $this->input->post('usr_edited_at', array('type' => 'timestamp')),
			'usr_edited_by' => $this->fungsi->user_login()->usr_id
		);
		if(!empty($this->input->post('usr_password'))){
		$data['usr_password'] = sha1($this->input->post('usr_password'));
		}
		$this->db->where('usr_id', $this->input->post('usr_id'));
		return $this->db->update('users', $data);
	}

	public function ambil_id_gambar($id){
	$this->db->from('users');
	$this->db->where('usr_id', $id);
	$result = $this->db->get('');
	// periksa ada datanya atau tidak
		if ($result->num_rows() > 0) {
		  return $result->row();//ambil datanya berdasrka row id
		}
	}

}