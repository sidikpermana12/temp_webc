<?php

	function check_already_login(){
		$ci =& get_instance();
		$user_session = $ci->session->userdata('userid');
		if($user_session){
			redirect(base_url());
		}
	}

	function check_not_login(){
		$ci =& get_instance();
		$user_session = $ci->session->userdata('userid');
		if(!$user_session){
			redirect('mlehoy/login');
		}
	}

	function check_bukan_group_admin(){
		$ci =& get_instance();
		$ci->load->library('fungsi');
		if($ci->fungsi->user_login()->usr_group_id == 1){
			redirect(base_url());
		}
	}

	function check_bukan_group_staff(){
		$ci =& get_instance();
		$ci->load->library('fungsi');
		if($ci->fungsi->user_login()->usr_group_id == 2){
			redirect(base_url());
		}
	}

	function check_bukan_level_admin(){
		$ci =& get_instance();
		$ci->load->library('fungsi');
		if($ci->fungsi->user_login()->usr_level_id == 1){
			redirect(base_url());
		}
	}

	function check_bukan_level_staff(){
		$ci =& get_instance();
		$ci->load->library('fungsi');
		if($ci->fungsi->user_login()->usr_level_id == 2){
			redirect(base_url());
		}
	}