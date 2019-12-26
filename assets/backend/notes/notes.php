<?php

// VALIDATION FILE EXTENTION AND SIZE
public function validate_image() {
    $check = TRUE;
    if ((!isset($_FILES['my_image'])) || $_FILES['my_image']['size'] == 0) {
        $this->form_validation->set_message('validate_image', 'The {field} field is required');
        $check = FALSE;
    }
    else if (isset($_FILES['my_image']) && $_FILES['my_image']['size'] != 0) {
        $allowedExts = array("gif", "jpeg", "jpg", "png", "JPG", "JPEG", "GIF", "PNG");
        $allowedTypes = array(IMAGETYPE_PNG, IMAGETYPE_JPEG, IMAGETYPE_GIF);
        $extension = pathinfo($_FILES["my_image"]["name"], PATHINFO_EXTENSION);
        $detectedType = exif_imagetype($_FILES['my_image']['tmp_name']);
        $type = $_FILES['my_image']['type'];
        if (!in_array($detectedType, $allowedTypes)) {
            $this->form_validation->set_message('validate_image', 'Invalid Image Content!');
            $check = FALSE;
        }
        if(filesize($_FILES['my_image']['tmp_name']) > 2000000) {
            $this->form_validation->set_message('validate_image', 'The Image file size shoud not exceed 20MB!');
            $check = FALSE;
        }
        if(!in_array($extension, $allowedExts)) {
            $this->form_validation->set_message('validate_image', "Invalid file extension {$extension}");
            $check = FALSE;
        }
    }
    return $check;
}