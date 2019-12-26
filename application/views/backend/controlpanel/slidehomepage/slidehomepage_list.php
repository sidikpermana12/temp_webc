<div class="content__inner">
    <header class="content__title">
        <a href="<?=site_url('slidehomepage/add')?>" type="button" class="btn btn-primary"><i class="zmdi zmdi-collection-plus"></i> Add Slide</a>


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
            <h4 class="card-title">Slide Home Page List</h4>

            <div class="table-responsive">
            <table id="data-table" class="table">
                <thead>
                    <tr>
                        <th>Slide</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($slidehomepage as $slhomepage) : ?>
                    <tr>
                        <td>
                            <div class="row lightbox photos">
                                    <a <?php if($slhomepage['lsh_images'] == 'bar.png') {?> href="?=base_url(); ?>assets/backend/img/controlpanel/noimages/bar.png" <?php }else{?> href="<?=base_url(); ?>assets/backend/img/controlpanel/slidehomepage/<?=$slhomepage['lsh_images']?>" <?php }?> class="col-md-2 col-4">
                                        <div class="lightbox__item photos__item">
                                            <img <?php if($slhomepage['lsh_images'] == 'bar.png') {?> src="<?=base_url(); ?>assets/backend/img/controlpanel/noimages/bar.png" <?php }else{?> src="<?=base_url(); ?>assets/backend/img/controlpanel/slidehomepage/<?=$slhomepage['lsh_images']?>" <?php }?> alt="" />
                                        </div>
                                    </a>
                            </div>
                        </td>
                        <td>
                            <a href="<?=site_url('/slidehomepage/edit/'.encrypt_url($slhomepage['lsh_id'])); ?>" type="button" class="btn btn-primary"><i class="zmdi zmdi-edit"></i></a><br>
                            <?php if ($this->fungsi->user_login()->usr_group_id == 1 && $this->fungsi->user_login()->usr_level_id == 1 || $this->fungsi->user_login()->usr_group_id == 1 && $this->fungsi->user_login()->usr_level_id == 2) { ?>
                                <a href="<?=site_url('/slidehomepage/delete/'.encrypt_url($slhomepage['lsh_id'])); ?>" type="button" onclick="return confirm('Are you sure you want to Remove?');" class="btn btn-danger"><i class="zmdi zmdi-delete"></i></a>
                            <?php } ?>
                        </td>
                    </tr>
                </tbody>
                <?php endforeach ?>
            </table>
            </div>

        </div>
    </div>
</div>