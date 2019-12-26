<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Global_m extends CI_Model {

	public function get_groups($id = FALSE){
		if($id === FALSE){
			$this->db->order_by('grp_id', 'ASC');
			$query = $this->db->get('users_groups');
			return $query->result_array();
		}
		$query = $this->db->get_where('users_groups', array('grp_id' => $id));
		return $query->row_array();
	}

	public function get_levels($id = FALSE){
		if($id === FALSE){
			$this->db->order_by('lvl_id', 'ASC');
			$query = $this->db->get('users_levels');
			return $query->result_array();
		}
		$query = $this->db->get_where('users_levels', array('lvl_id' => $id));
		return $query->row_array();
	}

	public function get_users($id = FALSE){
		if($id === FALSE){
			$this->db->order_by('usr_id', 'DESC');
			$query = $this->db->get('users');
			return $query->result_array();
		}
		$query = $this->db->get_where('users', array('usr_id' => $id));
		return $query->row_array();
	}

	public function get_iconbar($id = FALSE){
		if($id === FALSE){
			$this->db->order_by('lib_id', 'ASC');
			$query = $this->db->get('logo_iconbar');
			return $query->result_array();
		}
		$query = $this->db->get_where('logo_iconbar', array('lib_id' => $id));
		return $query->row_array();
	}

	public function get_brandlogo($id = FALSE){
		if($id === FALSE){
			$this->db->order_by('lbl_id', 'ASC');
			$query = $this->db->get('logo_brandlogo');
			return $query->result_array();
		}
		$query = $this->db->get_where('logo_brandlogo', array('lbl_id' => $id));
		return $query->row_array();
	}

	public function get_slidehomepage($id = FALSE){
		if($id === FALSE){
			$this->db->order_by('lsh_id', 'ASC');
			$query = $this->db->get('logo_slidehomepage');
			return $query->result_array();
		}
		$query = $this->db->get_where('logo_slidehomepage', array('lsh_id' => $id));
		return $query->row_array();
	}

}