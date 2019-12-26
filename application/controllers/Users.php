<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	function __construct(){
		parent::__construct();
		check_not_login();
		check_bukan_group_staff();
		check_bukan_level_staff();
	}

	public function index(){
		$data['users'] = $this->users_m->get_users();
		$data['iconbar'] = $this->global_m->get_iconbar();
		$data['titlebar'] = 'List Users';

		$this->temp_backend->load('temp_backend', 'backend/users/users_list', $data);
	}

	public function add(){
		$data['groups'] = $this->users_m->get_groups();
		$data['levels'] = $this->users_m->get_levels();
		$data['iconbar'] = $this->global_m->get_iconbar();
		$data['titlebar'] = 'Add Users';

		$this->form_validation->set_rules('usr_email', 'Email / Username', 'required|is_unique[users.usr_email]');
		$this->form_validation->set_rules('usr_password', 'Password', 'required');
		$this->form_validation->set_rules('usr_passconf', 'Password Confirmation', 'required|matches[usr_password]',
			array('matches' => '%s Wrong')
		);
		$this->form_validation->set_rules('usr_fullname', 'Fullname', 'required');
		$this->form_validation->set_rules('usr_images', 'Photo', 'callback_validate_image');

		$this->form_validation->set_message('required', '%s Empty, Please Input..');

		if($this->form_validation->run() === FALSE){
			$this->temp_backend->load('temp_backend', 'backend/users/users_form_add', $data);
		} else {
			$config['upload_path'] = './assets/backend/1508photos';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['encrypt_name'] = TRUE;

			$this->load->helper('file');
			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('usr_images')){
				$errors = array('error' => $this->upload->display_errors());
				$photo = '1510nophoto.png';
			} else {
				$dataphotos = $this->upload->data();
				$photo = $dataphotos['file_name'];
			}

			$this->users_m->add_users($photo);
			redirect('list-users');
		}
	}

	public function edit($id){
		$id = decrypt_url($id);
		$data['groups'] = $this->users_m->get_groups();
		$data['levels'] = $this->users_m->get_levels();
		$data['users'] = $this->users_m->get_users($id);
		$data['iconbar'] = $this->global_m->get_iconbar();
		$data['titlebar'] = 'Edit Users';

		if ($this->input->post('usr_email')) {
			$this->form_validation->set_rules('usr_email', 'Email / Username', 'required|is_unique[users.usr_email]');
		}
		if ($this->input->post('usr_password')) {
			$this->form_validation->set_rules('usr_password', 'Password', 'required');
			$this->form_validation->set_rules('usr_passconf', 'Password Confirmation', 'required|matches[usr_password]',
				array('matches' => '%s Wrong')
			);
		}
		if ($this->input->post('usr_passconf')) {
			$this->form_validation->set_rules('usr_passconf', 'Password Confirmation', 'required|matches[usr_password]',
				array('matches' => '%s Wrong')
			);
		}
		$this->form_validation->set_rules('usr_fullname', 'Fullname', 'required');
		$this->form_validation->set_rules('usr_images', 'Photo', 'callback_validate_image');

		$this->form_validation->set_message('required', '%s Empty, Please Input..');

		if($this->form_validation->run() === FALSE){
			$this->temp_backend->load('temp_backend', 'backend/users/users_form_edit', $data);
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
				$data = $this->users_m->ambil_id_gambar($id);
				$path = './assets/backend/1508photos/';
				$nama = $path.$data->usr_images;

				if(file_exists($nama) && unlink($nama)){
					$dataphotos = $this->upload->data();
					$photo = $dataphotos['file_name'];
				}
					$dataphotos = $this->upload->data();
					$photo = $dataphotos['file_name'];
			}
			$this->users_m->update_users($photo);
			redirect('list-users');
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

	public function view($slug = NULL){
		$data['users'] = $this->users_m->get_usersview($slug);
		$data['groups'] = $this->users_m->get_groups();
		$data['levels'] = $this->users_m->get_levels();
		$data['iconbar'] = $this->global_m->get_iconbar();
		$data['titlebar'] = 'View Users';

		$this->temp_backend->load('temp_backend', 'backend/users/users_view', $data);
	}

	public function delete($id){
		$id = decrypt_url($id);
		$data = $this->users_m->ambil_id_gambar($id);//ambil id gambar	  
		$path = './assets/backend/1508photos/';// lokasi gambar berada
		unlink($path.$data->usr_images);// hapus data di folder dimana data tersimpan
		$this->users_m->delete_users($id);
		redirect('list-users');
	}
}
