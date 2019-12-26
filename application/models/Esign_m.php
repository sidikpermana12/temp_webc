<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Esign_m extends CI_Model {

	public function get_esign($id = FALSE){
		if($id === FALSE){
			$this->db->order_by('esn_id', 'DESC');
			$query = $this->db->get('esign');
			return $query->result_array();
		}
		$query = $this->db->get_where('esign', array('esn_id' => $id));
		return $query->row_array();
	}

	public function get_esignview($slug = FALSE){
		if($slug === FALSE){
			$this->db->order_by('esn_id', 'ASC');
			$query = $this->db->get('esign');
			return $query->result_array();
		}
		$query = $this->db->get_where('esign', array('esn_slug' => $slug));
		return $query->row_array();
	}

	public function add_esign($ktp){
		$slug = url_title($this->input->post('esn_fullname'));
		$data = array(
			//yang merekomendasikan
			'esn_recomen_fullname' => $this->input->post('esn_recomen_fullname'),
			'esn_recomen_nip' => $this->input->post('esn_recomen_nip'),
			'esn_recomen_nik' => $this->input->post('esn_recomen_nik'),
			'esn_recomen_class' => $this->input->post('esn_recomen_class'),
			'esn_recomen_position' => $this->input->post('esn_recomen_position'),
			'esn_recomen_institution' => $this->input->post('esn_recomen_institution'),
			'esn_recomen_unitofwork' => $this->input->post('esn_recomen_unitofwork'),
			'esn_recomen_email' => $this->input->post('esn_recomen_email'),
			//yang direkomendasikan
			'esn_fullname' => $this->input->post('esn_fullname'),
			'esn_slug' => strtolower($slug),
			'esn_nip' => $this->input->post('esn_nip'),
			'esn_nik' => $this->input->post('esn_nik'),
			'esn_class' => $this->input->post('esn_class'),
			'esn_position' => $this->input->post('esn_position'),
			'esn_unitofwork' => $this->input->post('esn_unitofwork'),
			'esn_institution' => $this->input->post('esn_institution'),
			'esn_city' => $this->input->post('esn_city'),
			'esn_povince' => $this->input->post('esn_povince'),
			'esn_email' => $this->input->post('esn_email'),
			'esn_telp' => $this->input->post('esn_telp'),
			'esn_ktp' => $ktp,
			'esn_created_at' => $this->input->post('esn_created_at', array('type' => 'timestamp')),
			'esn_created_by' => $this->fungsi->user_login()->usr_id
		);
		return $this->db->insert('esign', $data);
	}

	public function update_esign($ktp){
		$slug = url_title($this->input->post('esn_fullname'));
		$data = array(
			//yang merekomendasikan
			'esn_recomen_fullname' => $this->input->post('esn_recomen_fullname'),
			'esn_recomen_nip' => $this->input->post('esn_recomen_nip'),
			'esn_recomen_nik' => $this->input->post('esn_recomen_nik'),
			'esn_recomen_class' => $this->input->post('esn_recomen_class'),
			'esn_recomen_position' => $this->input->post('esn_recomen_position'),
			'esn_recomen_institution' => $this->input->post('esn_recomen_institution'),
			'esn_recomen_unitofwork' => $this->input->post('esn_recomen_unitofwork'),
			'esn_recomen_email' => $this->input->post('esn_recomen_email'),
			//yang direkomendasikan
			'esn_fullname' => $this->input->post('esn_fullname'),
			'esn_slug' => strtolower($slug),
			'esn_nip' => $this->input->post('esn_nip'),
			'esn_nik' => $this->input->post('esn_nik'),
			'esn_class' => $this->input->post('esn_class'),
			'esn_position' => $this->input->post('esn_position'),
			'esn_unitofwork' => $this->input->post('esn_unitofwork'),
			'esn_institution' => $this->input->post('esn_institution'),
			'esn_city' => $this->input->post('esn_city'),
			'esn_povince' => $this->input->post('esn_povince'),
			'esn_email' => $this->input->post('esn_email'),
			'esn_telp' => $this->input->post('esn_telp'),
			'esn_ktp' => $ktp,
			'esn_edited_at' => $this->input->post('esn_edited_at', array('type' => 'timestamp')),
			'esn_edited_by' => $this->fungsi->user_login()->usr_id
		);
		// if(!empty($this->input->post('esn_ktp'))){
		// $data['esn_ktp'] = $this->input->post('esn_ktp');
		// }
		$this->db->where('esn_id', $this->input->post('esn_id'));
		return $this->db->update('esign', $data);
	}

	public function ambil_id_gambar($id){
	$this->db->from('esign');
	$this->db->where('esn_id', $id);
	$result = $this->db->get('');
	// periksa ada datanya atau tidak
		if ($result->num_rows() > 0) {
		  return $result->row();//ambil datanya berdasrka row id
		}
	}

	public function delete_esign($id){
		$this->db->where('esn_id', $id);
		$this->db->delete('esign');
		return TRUE;
	}

}