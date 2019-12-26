<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Esign extends CI_Controller {

	function __construct(){
		parent::__construct();		
		check_not_login();
	}

	public function index(){
		$data['esign'] = $this->esign_m->get_esign();
		$data['iconbar'] = $this->global_m->get_iconbar();
		$data['titlebar'] = 'List Esign';

		$this->temp_backend->load('temp_backend', 'backend/esign/esign_list', $data);
	}

	public function add(){
		$data['iconbar'] = $this->global_m->get_iconbar();
		$data['titlebar'] = 'Add Esign';

		//yang merekomendasikan
		$this->form_validation->set_rules('esn_recomen_fullname', 'Nama Lengkap Atasan Langsung', 'required');
		$this->form_validation->set_rules('esn_recomen_nip', 'NIP Atasan Langsung', 'required');
		$this->form_validation->set_rules('esn_recomen_nik', 'NIK Atasan Langsung', 'required|is_unique[esign.esn_recomen_nik]');
		$this->form_validation->set_rules('esn_recomen_class', 'Pangkat / Golongan Atasan Langsung', 'required');
		$this->form_validation->set_rules('esn_recomen_position', 'Jabatan Atasan Langsung', 'required');
		$this->form_validation->set_rules('esn_recomen_institution', 'Instansi Atasan Langsung', 'required');
		$this->form_validation->set_rules('esn_recomen_unitofwork', 'Unit Kerja Atasan Langsung', 'required');
		$this->form_validation->set_rules('esn_recomen_email', 'Alamat Email Atasan Langsung', 'required');

		//yang direkomendasikan
		$this->form_validation->set_rules('esn_fullname', 'Nama Lengkap', 'required');
		$this->form_validation->set_rules('esn_nip', 'NIP', 'required');
		$this->form_validation->set_rules('esn_nik', 'NIK', 'required|is_unique[esign.esn_nik]');
		$this->form_validation->set_rules('esn_class', 'Pangkat / Golongan', 'required');
		$this->form_validation->set_rules('esn_position', 'Jabatan', 'required');
		$this->form_validation->set_rules('esn_unitofwork', 'Unit Kerja', 'required');
		$this->form_validation->set_rules('esn_institution', 'Instansi', 'required');
		$this->form_validation->set_rules('esn_city', 'Kota', 'required');
		$this->form_validation->set_rules('esn_povince', 'Provinsi', 'required');
		$this->form_validation->set_rules('esn_email', 'ALamat Email', 'required');
		$this->form_validation->set_rules('esn_telp', 'No. Telepon', 'required');
		$this->form_validation->set_rules('esn_ktp', 'KTP', 'callback_validate_image');

		$this->form_validation->set_message('required', '%s tidak boleh kosong, silakan isi');
		$this->form_validation->set_message('is_unique', '%s sudah terdaftar, silakan gunakan NIK yang lain');

		if($this->form_validation->run() === FALSE){
			$this->temp_backend->load('temp_backend', 'backend/esign/esign_form_add', $data);
		} else {
			$config['upload_path'] = './assets/backend/ktp';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['encrypt_name'] = TRUE;

			$this->load->helper('file');
			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('esn_ktp')){
				$errors = array('error' => $this->upload->display_errors());
				$ktp = '1510nophoto.png';
			} else {
				$dataphotos = $this->upload->data();
				$ktp = $dataphotos['file_name'];
			}

			$this->esign_m->add_esign($ktp);
			redirect('list-esign');
		}		
	}

	public function validate_image() {
    $check = TRUE;
    if ((!isset($_FILES['esn_ktp'])) || $_FILES['esn_ktp']['size'] == 0) {
        $this->form_validation->set_message('validate_image', 'Wajib upload {field}');
        $check = FALSE;
    }
	    else if (isset($_FILES['esn_ktp']) && $_FILES['esn_ktp']['size'] != 0) {
	        $allowedExts = array("jpeg", "jpg", "png", "JPG", "JPEG", "PNG");
	        $allowedTypes = array(IMAGETYPE_PNG, IMAGETYPE_JPEG, IMAGETYPE_GIF);
	        $extension = pathinfo($_FILES["esn_ktp"]["name"], PATHINFO_EXTENSION);
	        $detectedType = exif_imagetype($_FILES['esn_ktp']['tmp_name']);
	        $type = $_FILES['esn_ktp']['type'];
	        if (!in_array($detectedType, $allowedTypes)) {
	            $this->form_validation->set_message('validate_image', 'Invalid Image Content!');
	            $check = FALSE;
	        }
	        if(filesize($_FILES['esn_ktp']['tmp_name']) > 5000000) {
	            $this->form_validation->set_message('validate_image', 'The Image file size shoud not exceed 5MB!');
	            $check = FALSE;
	        }
	        if(!in_array($extension, $allowedExts)) {
	            $this->form_validation->set_message('validate_image', "File {$extension} tidak diperbolehkan, silakan upload format .jpg | .jpeg | .png");
	            $check = FALSE;
	        }
	    }
    return $check;
	}

	public function update($id){
		$id = decrypt_url($id);
		$data['esign'] = $this->esign_m->get_esign($id);
		$data['iconbar'] = $this->global_m->get_iconbar();
		$data['titlebar'] = 'Add Esign';

		//yang merekomendasikan
		$this->form_validation->set_rules('esn_recomen_fullname', 'Nama Lengkap Atasan Langsung', 'required');
		$this->form_validation->set_rules('esn_recomen_nip', 'NIP Atasan Langsung', 'required');
		$this->form_validation->set_rules('esn_recomen_nik', 'NIK Atasan Langsung', 'required');
		$this->form_validation->set_rules('esn_recomen_class', 'Pangkat / Golongan Atasan Langsung', 'required');
		$this->form_validation->set_rules('esn_recomen_position', 'Jabatan Atasan Langsung', 'required');
		$this->form_validation->set_rules('esn_recomen_institution', 'Instansi Atasan Langsung', 'required');
		$this->form_validation->set_rules('esn_recomen_unitofwork', 'Unit Kerja Atasan Langsung', 'required');
		$this->form_validation->set_rules('esn_recomen_email', 'Alamat Email Atasan Langsung', 'required');

		//yang direkomendasikan
		$this->form_validation->set_rules('esn_fullname', 'Nama Lengkap', 'required');
		$this->form_validation->set_rules('esn_nip', 'NIP', 'required');
		$this->form_validation->set_rules('esn_nik', 'NIK', 'required');
		$this->form_validation->set_rules('esn_class', 'Pangkat / Golongan', 'required');
		$this->form_validation->set_rules('esn_position', 'Jabatan', 'required');
		$this->form_validation->set_rules('esn_unitofwork', 'Unit Kerja', 'required');
		$this->form_validation->set_rules('esn_institution', 'Instansi', 'required');
		$this->form_validation->set_rules('esn_city', 'Kota', 'required');
		$this->form_validation->set_rules('esn_povince', 'Provinsi', 'required');
		$this->form_validation->set_rules('esn_email', 'ALamat Email', 'required');
		$this->form_validation->set_rules('esn_telp', 'No. Telepon', 'required');
		$this->form_validation->set_rules('esn_ktp', 'KTP', 'callback_validate_images');

		$this->form_validation->set_message('required', '%s tidak boleh kosong, silakan isi');
		$this->form_validation->set_message('is_unique', '%s sudah terdaftar, silakan gunakan NIK yang lain');

		if($this->form_validation->run() === FALSE){
			$this->temp_backend->load('temp_backend', 'backend/esign/esign_form_edit', $data);
		} else {
			$id = $this->input->post('esn_id');
			$config['upload_path'] = './assets/backend/ktp';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['encrypt_name'] = TRUE;

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('esn_ktp')){
				$errors = array('error' => $this->upload->display_errors());
				$ktp = $this->input->post('photos');
			} else {
				$data = $this->esign_m->ambil_id_gambar($id);
				$path = './assets/backend/ktp/';
				$nama = $path.$data->esn_ktp;

				if(file_exists($nama) && unlink($nama)){
					$dataphotos = $this->upload->data();
					$ktp = $dataphotos['file_name'];
				}
					$dataphotos = $this->upload->data();
					$ktp = $dataphotos['file_name'];
			}
			$this->esign_m->update_esign($ktp);
			redirect('list-esign');
		}	
	}

	public function validate_images() {
    $check = TRUE;
    if (isset($_FILES['esn_ktp']) && $_FILES['esn_ktp']['size'] != 0) {
	        $allowedExts = array("jpeg", "jpg", "png", "JPG", "JPEG", "PNG");
	        $allowedTypes = array(IMAGETYPE_PNG, IMAGETYPE_JPEG, IMAGETYPE_GIF);
	        $extension = pathinfo($_FILES["esn_ktp"]["name"], PATHINFO_EXTENSION);
	        $detectedType = exif_imagetype($_FILES['esn_ktp']['tmp_name']);
	        $type = $_FILES['esn_ktp']['type'];
	        if (!in_array($detectedType, $allowedTypes)) {
	            $this->form_validation->set_message('validate_images', 'Invalid Image Content!');
	            $check = FALSE;
	        }
	        if(filesize($_FILES['esn_ktp']['tmp_name']) > 5000000) {
	            $this->form_validation->set_message('validate_images', 'The Image file size shoud not exceed 5MB!');
	            $check = FALSE;
	        }
	        if(!in_array($extension, $allowedExts)) {
	            $this->form_validation->set_message('validate_images', "File {$extension} tidak diperbolehkan, silakan upload format .jpg | .jpeg | .png");
	            $check = FALSE;
	        }
	    }
    return $check;
	}

	public function view($id = NULL){
		$id = decrypt_url($id);
		$data['esign'] = $this->esign_m->get_esign($id);
		$data['iconbar'] = $this->global_m->get_iconbar();
		$data['titlebar'] = 'View Esign';

		$this->temp_backend->load('temp_backend', 'backend/esign/esign_view', $data);
	}

	public function delete($id){
		$id = decrypt_url($id);
		$this->esign_m->delete_esign($id);
		redirect('list-esign');
	}

}
