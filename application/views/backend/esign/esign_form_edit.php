<div class="content__inner">
    <header class="content__title">
        <a href="<?=site_url('list-esign')?>" type="button" class="btn btn-primary"><i class="zmdi zmdi-format-list-bulleted"></i> List Esign</a>

        <div class="actions">
            <a href="#" class="actions__item zmdi zmdi-trending-up"></a>
            <a href="#" class="actions__item zmdi zmdi-check-all"></a>

            <div class="dropdown actions__item">
                <i data-toggle="dropdown" class="zmdi zmdi-more-vert"></i>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="#" class="dropdown-item">Refresh</a>
                    <a href="#" class="dropdown-item">Manage Widgets</a>
                    <a href="#" class="dropdown-item">Settings</a>
                </div>
            </div>
        </div>
    </header>

    <div class="card">
        <div class="card-body">

            <form action="" method="post" enctype="multipart/form-data">

                    <b>Yang Merekomendasikan (Atasan Anda Langsung) : </b>
                    <br>
                    <br>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Nama Lengkap Atasan Langsung <a style="color: red;">*</a></label>
                            <input type="hidden" name="esn_id" value="<?=$esign['esn_id']?>">
                            <input type="text" name="esn_recomen_fullname" value="<?=$esign['esn_recomen_fullname']?>" class="form-control is-valid" placeholder="Input Nama Lengkap Disini ...">
                            <?=form_error('esn_recomen_fullname')?>
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>NIP Atasan Langsung <a style="color: red;">*</a></label>
                            <input type="number" name="esn_recomen_nip" value="<?=$esign['esn_recomen_nip']?>" class="form-control is-valid" placeholder="Input NIP Disini ...">
                            <?=form_error('esn_recomen_nip')?>
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>NIK Atasan Langsung <a style="color: red;">*</a></label>
                            <input type="number" name="esn_recomen_nik" value="<?=$esign['esn_recomen_nik']?>" class="form-control is-valid" placeholder="Input NIK Disini ...">
                            <?=form_error('esn_recomen_nik')?>
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Pangkat / Golongan Atasan Langsung <a style="color: red;">*</a></label>
                            <input type="text" name="esn_recomen_class" value="<?=$esign['esn_recomen_class']?>" class="form-control is-valid" placeholder="Input Pangkat / Golongan Disini ...">
                            <?=form_error('esn_recomen_class')?>
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Jabatan Atasan Langsung <a style="color: red;">*</a></label>
                            <input type="text" name="esn_recomen_position" value="<?=$esign['esn_recomen_position']?>" class="form-control is-valid" placeholder="Input Jabatan Disini ...">
                            <?=form_error('esn_recomen_position')?>
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Instansi Atasan Langsung <a style="color: red;">*</a></label>
                            <input type="text" name="esn_recomen_institution" value="<?=$esign['esn_recomen_institution']?>" class="form-control is-valid" placeholder="Input Instansi Disini ...">
                            <?=form_error('esn_recomen_institution')?>
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Unit Kerja Atasan Langsung <a style="color: red;">*</a></label>
                            <input type="text" name="esn_recomen_unitofwork" value="<?=$esign['esn_recomen_unitofwork']?>" class="form-control is-valid" placeholder="Input Unit Kerja Disini ...">
                            <?=form_error('esn_recomen_unitofwork')?>
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Alamat Email Atasan Langsung <a style="color: red;">*</a></label>
                            <input type="Email" name="esn_recomen_email" value="<?=$esign['esn_recomen_email']?>" class="form-control is-valid" placeholder="Input Email Disini ...">
                            <?=form_error('esn_recomen_email')?>
                            <i class="form-group__bar"></i>
                        </div>
                    </div>                    

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label><b>Yang Direkomendasikan (Biodata Anda) : </b></label>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Nama Lengkap <a style="color: red;">*</a></label>
                            <input type="text" name="esn_fullname" value="<?=$esign['esn_fullname']?>" class="form-control is-valid" placeholder="Input Nama Lengkap Anda Disini ...">
                            <?=form_error('esn_fullname')?>
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>NIP <a style="color: red;">*</a></label>
                            <input type="number" name="esn_nip" value="<?=$esign['esn_nip']?>" class="form-control is-valid" placeholder="Input NIP Anda Disini ...">
                            <?=form_error('esn_nip')?>
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>NIK <a style="color: red;">*</a></label>
                            <input type="number" name="esn_nik" value="<?=$esign['esn_nik']?>" class="form-control is-valid" placeholder="Input NIK Anda Disini ...">
                            <?=form_error('esn_nik')?>
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Pangkat / Golongan <a style="color: red;">*</a></label>
                            <input type="text" name="esn_class" value="<?=$esign['esn_class']?>" class="form-control is-valid" placeholder="Input Pangkat / Golongan Anda Disini ...">
                            <?=form_error('esn_class')?>
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Jabatan <a style="color: red;">*</a></label>
                            <input type="text" name="esn_position" value="<?=$esign['esn_position']?>" class="form-control is-valid" placeholder="Input Jabatan Anda Disini ...">
                            <?=form_error('esn_position')?>
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Unit Kerja <a style="color: red;">*</a></label>
                            <input type="text" name="esn_unitofwork" value="<?=$esign['esn_unitofwork']?>" class="form-control is-valid" placeholder="Input Unit Kerja Anda Disini ...">
                            <?=form_error('esn_unitofwork')?>
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Instansi <a style="color: red;">*</a></label>
                            <input type="text" name="esn_institution" value="<?=$esign['esn_institution']?>" class="form-control is-valid" placeholder="Input Instansi Anda Disini ...">
                            <?=form_error('esn_institution')?>
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Kota <a style="color: red;">*</a></label>
                            <input type="text" name="esn_city" value="<?=$esign['esn_city']?>" class="form-control is-valid" placeholder="Input Kota Anda Disini ...">
                            <?=form_error('esn_city')?>
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Provinsi <a style="color: red;">*</a></label>
                            <input type="text" name="esn_povince" value="<?=$esign['esn_povince']?>" class="form-control is-valid" placeholder="Input Provinsi Anda Disini ...">
                            <?=form_error('esn_povince')?>
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Alamat Email <a style="color: red;">*</a></label>
                            <input type="text" name="esn_email" value="<?=$esign['esn_email']?>" class="form-control is-valid" placeholder="Input Email Anda Disini ...">
                            <?=form_error('esn_email')?>
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>No. Telepon <a style="color: red;">*</a></label>
                            <input type="number" name="esn_telp" value="<?=$esign['esn_telp']?>" class="form-control is-valid" placeholder="Input No. Telepon Anda Disini ...">
                            <?=form_error('esn_telp')?>
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Scan KTP warna (max 5Mb) format .jpg | .jpeg | .png <a style="color: red;">*</a></label>
                            <input type="hidden" name="photos" value="<?=$esign['esn_ktp']?>">
                            <input type="file" name="esn_ktp" class="form-control is-valid">
                            <?=form_error('esn_ktp')?>
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                     <div class="col-sm-6">
                        <div class="form-group">
                            <button type="Reset" class="btn btn-secondary"><i class="zmdi zmdi-refresh-sync"></i> Reset</button>
                            <button type="submit" class="btn btn-success"><i class="zmdi zmdi-mail-send"></i> Save</button>
                        </div>
                    </div>
                </div>

            </form>

        </div>
    </div>
</div>