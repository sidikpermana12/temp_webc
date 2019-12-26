<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Iconbar extends CI_Controller {

	function __construct(){
		parent::__construct();		
		check_not_login();
		check_bukan_group_staff();
	}

	public function index(){
		$data['iconbar'] = $this->iconbar_m->get_iconbar();
		$data['titlebar'] = 'List Iconbar';

		$this->temp_backend->load('temp_backend', 'backend/controlpanel/iconbar/iconbar_list', $data);
	}

	// public function add(){
	// 	$data['iconbar'] = $this->global_m->get_iconbar();
	// 	$data['titlebar'] = 'Add Slide Home Page';

	// 	$this->form_validation->set_rules('lib_images', 'Slide Home Page', 'callback_validate_image');

	// 	if($this->form_validation->run() === FALSE){
	// 		$this->temp_backend->load('temp_backend', 'backend/controlpanel/iconbar/iconbar_form_add', $data);
	// 	} else {
	// 		$config['upload_path'] = './assets/backend/img/controlpanel/iconbar';
	// 		$config['allowed_types'] = 'png|jpg|jpeg|gif';
	// 		$config['encrypt_name'] = TRUE;

	// 		$this->load->library('upload', $config);

	// 		if(!$this->upload->do_upload('lib_images')){
	// 			$errors = array('error' => $this->upload->display_errors());
	// 			$iconbar = 'bar.png';
	// 		} else {
	// 			$dataslidehomepage = $this->upload->data();
	// 			$iconbar = $dataslidehomepage['file_name'];
	// 		}

	// 		$this->iconbar_m->add_iconbar($iconbar);
	// 		redirect('icon-bar');
	// 	}
	// }

	public function edit($id){
		$id = decrypt_url($id);
		$data['iconbarid'] = $this->iconbar_m->get_iconbar($id);
		$data['iconbar'] = $this->global_m->get_iconbar();
		$data['titlebar'] = 'Edit Iconbar';

		$this->form_validation->set_rules('lib_images', 'Icon Bar', 'callback_validate_image');

		if($this->form_validation->run() === FALSE){
			$this->temp_backend->load('temp_backend', 'backend/controlpanel/iconbar/iconbar_form_edit', $data);
		} else {
			$id = $this->input->post('lib_id');
			$config['upload_path'] = './assets/backend/img/controlpanel/iconbar';
			$config['allowed_types'] = 'png';
			$config['encrypt_name'] = TRUE;

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('lib_images')){
				$errors = array('error' => $this->upload->display_errors());
				$iconbar = $this->input->post('photos');
			} else {
				$data = $this->iconbar_m->ambil_id_gambar($id);
				$path = './assets/backend/img/controlpanel/iconbar/';
				$nama = $path.$data->lib_images;

				if(file_exists($nama) && unlink($nama)){
					$dataphotos = $this->upload->data();
					$iconbar = $dataphotos['file_name'];
				}
					$dataphotos = $this->upload->data();
					$iconbar = $dataphotos['file_name'];
			}
			$this->iconbar_m->update_iconbar($iconbar);
			redirect('icon-bar');
		}
	}

	public function validate_image() {
    $check = TRUE;
    if (isset($_FILES['lib_images']) && $_FILES['lib_images']['size'] != 0) {
        $allowedExts = array("png", "PNG");
        $allowedTypes = array(IMAGETYPE_PNG, IMAGETYPE_JPEG, IMAGETYPE_GIF);
        $extension = pathinfo($_FILES["lib_images"]["name"], PATHINFO_EXTENSION);
        $detectedType = exif_imagetype($_FILES['lib_images']['tmp_name']);
        $type = $_FILES['lib_images']['type'];
        if (!in_array($detectedType, $allowedTypes)) {
            $this->form_validation->set_message('validate_image', 'Invalid Image Content!');
            $check = FALSE;
        }
        if(filesize($_FILES['lib_images']['tmp_name']) > 3000000) {
            $this->form_validation->set_message('validate_image', 'The Image file size shoud not exceed 3MB!');
            $check = FALSE;
        }
        if(!in_array($extension, $allowedExts)) {
            $this->form_validation->set_message('validate_image', "Invalid file extension .{$extension}, Only .png format is allowed");
            $check = FALSE;
        }
    }
    return $check;
	}

	// public function delete($id){
	// 	$id = decrypt_url($id);
	// 	$data = $this->iconbar_m->ambil_id_gambar($id);//ambil id gambar	  
	// 	$path = './assets/backend/img/controlpanel/iconbar/';// lokasi gambar berada
	// 	unlink($path.$data->lib_images);// hapus data di folder dimana data tersimpan
	// 	$this->iconbar_m->delete_iconbar($id);
	// 	redirect('iconbar');
	// }

}
