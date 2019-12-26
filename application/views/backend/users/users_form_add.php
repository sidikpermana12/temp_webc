<div class="content__inner">
    <header class="content__title">
        <a href="<?=site_url('users')?>" type="button" class="btn btn-primary"><i class="zmdi zmdi-format-list-bulleted"></i> List Users</a>

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

            <form action="<?php echo site_url('users/add')?>" method="post" enctype="multipart/form-data">

                <div class="row">
                    <div class="col-sm-6">
                    <h3 class="card-body__title">Groups <a style="color: red;">*</a></h3>

                        <div class="form-group">
                            <div class="select">
                                <select name="usr_group_id" class="form-control" style="background: #000000; opacity: 0.5;">
                                    <?php foreach($groups as $group) : ?>
                                        <?php if($group['grp_id'] == $users['usr_group_id']) {?>
                                            <option value="<?=$group['grp_id']?>" selected><?=$group['grp_name']?></option>
                                        <?php }else{ ?>
                                            <option value="<?=$group['grp_id']?>" ><?=$group['grp_name']?></option>
                                        <?php } ?>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                    <h3 class="card-body__title">Levels <a style="color: red;">*</a></h3>

                        <div class="form-group">
                            <div class="select">
                                <select name="usr_level_id" class="form-control" style="background: #000000; opacity: 0.5;">
                                    <?php foreach($levels as $lvl) : ?>
                                        <?php if($lvl['lvl_id'] == $users['usr_level_id']) {?>
                                            <option value="<?=$lvl['lvl_id']?>" selected><?=$lvl['grp_name']?></option>
                                        <?php }else{ ?>
                                            <option value="<?=$lvl['lvl_id']?>" ><?=$lvl['lvl_name']?></option>
                                        <?php } ?>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Fullname <a style="color: red;">*</a></label>
                            <input type="text" name="usr_fullname"
                            <?php if (form_error('usr_fullname') == TRUE) {
                                echo 'class="form-control is-invalid"';
                            } ?>
                            class="form-control is-valid" placeholder="Enter Fullname ...">
                            <a style="color: red;"><?=form_error('usr_fullname')?></a>
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Email / Username <a style="color: red;">*</a></label>
                            <input type="Email" name="usr_email"
                            <?php if (form_error('usr_email') == TRUE) {
                                echo 'class="form-control is-invalid"';
                            } ?>
                            class="form-control is-valid" placeholder="example@example.com">
                            <a style="color: red;"><?=form_error('usr_email')?></a>
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Password <a style="color: red;">*</a></label>
                            <input type="Password" name="usr_password"
                            <?php if (form_error('usr_password') == TRUE) {
                                echo 'class="form-control is-invalid"';
                            } ?>
                            class="form-control is-valid" placeholder="Enter Password ...">
                            <a style="color: red;"><?=form_error('usr_password')?></a>
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Re Password <a style="color: red;">*</a></label>
                            <input type="Password" name="usr_passconf"
                            <?php if (form_error('usr_passconf') == TRUE) {
                                echo 'class="form-control is-invalid"';
                            } ?>
                            class="form-control is-valid" placeholder="Enter Password ...">
                            <a style="color: red;"><?=form_error('usr_passconf')?></a>
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>KTP</label>
                            <input type="number" name="" class="form-control is-valid" placeholder="Enter Phone Number ...">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="number" name="usr_phone" class="form-control is-valid" placeholder="Enter Phone Number ...">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Address</label>
                            <textarea name="usr_address" class="form-control is-valid" placeholder="Enter Address ..."></textarea>
                            <i class="form-group__bar"></i> 
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Photo</label>
                            <input type="file" name="usr_images" class="form-control is-valid">
                            <a style="color: red;"><?=form_error('usr_images')?></a>
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