<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login()
	{
		check_already_login();
		$this->load->view('backend/login/login_form');
	}

	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if (isset($post['login'])) {
			$this->load->model('users_m');
			$query = $this->users_m->login($post);
			if($query->num_rows() > 0) {
				$row = $query->row();
				$params = array(
					'userid' => $row->usr_id,
					'level' => $row->usr_level_id
				);
				$this->session->set_userdata($params);
				echo "<script>
					alert('Selamat, Anda berhasil login');
					window.location='".base_url()."dashboard';
				</script>";
			} else {
				echo "<script>
					alert('Username / Password Salah !!');
					window.location='".site_url('auth/login')."';
				</script>";
			}
		}
	}

	public function logout()
	{
		$params = array('userid', 'level');
		$this->session->unset_userdata($params);
		redirect('auth/login');
	}
}
