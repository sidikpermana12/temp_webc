<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	function __construct(){
		parent::__construct();		
		check_not_login();
	}

	public function index(){
		$data['groups'] = $this->global_m->get_groups();
		$data['levels'] = $this->global_m->get_levels();
		$data['users'] = $this->global_m->get_users();
		$data['iconbar'] = $this->global_m->get_iconbar();
		$data['titlebar'] = 'View Profile';
		
		$this->temp_backend->load('temp_backend', 'backend/settings/profiles', $data);
	}

	public function edit($id){
		$id = decrypt_url($id);
		$data['users'] = $this->global_m->get_users($id);
		$data['iconbar'] = $this->global_m->get_iconbar();
		$data['titlebar'] = 'Edit Profile';

		$this->form_validation->set_rules('usr_images', 'Photo', 'callback_validate_image');

		if($this->form_validation->run() === FALSE){
			$this->temp_backend->load('temp_backend', 'backend/settings/profiles_edit', $data);
		} else {
			$id = $this->input->post('usr_id');
			$config['upload_path'] = './assets/backend/1508photos';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['encrypt_name'] = TRUE;

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('usr_images')){
				$errors = array('error' => $this->upload->display_errors());
				$photo = $this->input->post('photos');
			} else {
				$data = $this->profile_m->ambil_id_gambar($id);
				$path = './assets/backend/1508photos/';
				$nama = $path.$data->usr_images;

				if(file_exists($nama) && unlink($nama)){
					$dataphotos = $this->upload->data();
					$photo = $dataphotos['file_name'];
				}
					$dataphotos = $this->upload->data();
					$photo = $dataphotos['file_name'];
			}
			$this->profile_m->update_profile($photo);
			redirect('profile');
		}
	}

	public function validate_image() {
    $check = TRUE;
	    if (isset($_FILES['usr_images']) && $_FILES['usr_images']['size'] != 0) {
	        $allowedExts = array("gif", "jpeg", "jpg", "png", "JPG", "JPEG", "GIF", "PNG");
	        $allowedTypes = array(IMAGETYPE_PNG, IMAGETYPE_JPEG, IMAGETYPE_GIF);
	        $extension = pathinfo($_FILES["usr_images"]["name"], PATHINFO_EXTENSION);
	        $detectedType = exif_imagetype($_FILES['usr_images']['tmp_name']);
	        $type = $_FILES['usr_images']['type'];
	        if (!in_array($detectedType, $allowedTypes)) {
	            $this->form_validation->set_message('validate_image', 'Invalid Image Content!');
	            $check = FALSE;
	        }
	        if(filesize($_FILES['usr_images']['tmp_name']) > 3000000) {
	            $this->form_validation->set_message('validate_image', 'The Image file size shoud not exceed 3MB!');
	            $check = FALSE;
	        }
	        if(!in_array($extension, $allowedExts)) {
	            $this->form_validation->set_message('validate_image', "Invalid file extension {$extension}, Only .gif | .jpeg | .jpg | .png format is allowed");
	            $check = FALSE;
	        }
	    }
	    return $check;
	}

	public function password($id){
		$id = decrypt_url($id);
		$data['users'] = $this->global_m->get_users($id);
		$data['iconbar'] = $this->global_m->get_iconbar();
		$data['titlebar'] = 'Change Password';

		$this->form_validation->set_rules('usr_password', 'Password', 'required');
		if ($this->input->post('usr_password')) {
			$this->form_validation->set_rules('usr_passconf', 'Password Confirmation', 'required|matches[usr_password]',
				array('matches' => '%s Wrong')
			);
		}
		if ($this->input->post('usr_passconf')) {
			$this->form_validation->set_rules('usr_passconf', 'Password Confirmation', 'required|matches[usr_password]',
				array('matches' => '%s Wrong')
			);
		}

		if($this->form_validation->run() === FALSE){
			$this->temp_backend->load('temp_backend', 'backend/settings/profiles_password', $data);
		} else {
			$this->profile_m->update_profilepwd();
			redirect('auth/logout');
		}
	}

}
