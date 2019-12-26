<div class="content__inner">
    <header class="content__title">
        <a href="<?=site_url('list-subpages')?>" type="button" class="btn btn-primary"><i class="zmdi zmdi-format-list-bulleted"></i> List Sub Pages</a>

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
        <div class="toolbar">
            <div class="toolbar__label">
                <span class="hidden-xs-down">
                    <?php foreach($pages as $pgs) : ?>
                        <?php if ($pgs['pgs_id'] == $subpages['sub_pgs_pages_id']) { ?>
                            <a href="<?=site_url('pages/'.$pgs['pgs_slug'].'')?>"><?=$pgs['pgs_name']?></a>
                      <?php } ?>
                    <?php endforeach ?>
                     -> <?=$subpages['sub_pgs_name']?></span>
            </div>
        </div>

        <div class="card-body">

            <div>
                <?php if ($subpages['sub_pgs_images'] == 'noimagesheader.jpg') {
                    
                } else{ ?>
                    <img class="form-control" src="<?=base_url()?>assets/backend/img/pages/subpages/<?=$subpages['sub_pgs_images']?>">
                <?php } ?>
            </div>

            <br>
            <br>

            <div>
                <?=$subpages['sub_pgs_body']?>
            </div>

            <?php if($this->fungsi->user_login()->usr_group_id == 1 && $this->fungsi->user_login()->usr_level_id == 1) { ?>
                <div class="table-responsive">
                    <table id="data-table" class="table">
                        <tbody>
                            <tr>
                                <td>Created At</td>
                                <td>:</td>
                                <td><?=date('d-m-Y | H:i:s', strtotime($subpages['sub_pgs_created_at']))?></td>
                            </tr>
                            <tr>
                                <td>Created By</td>
                                <td>:</td>
                                <td>
                                    <?php foreach($users as $usr) : ?>
                                        <?php if ($usr['usr_id'] == $subpages['sub_pgs_created_by']) { ?>
                                            <?=$usr['usr_fullname'];?>
                                        <?php } ?>
                                    <?php endforeach ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Edited At</td>
                                <td>:</td>
                                <td><?=date('d-m-Y | H:i:s', strtotime($subpages['sub_pgs_edited_at']))?></td>
                            </tr>
                            <tr>
                                <td>Edited By</td>
                                <td>:</td>
                                <td>
                                    <?php foreach($users as $usr) : ?>
                                        <?php if ($usr['usr_id'] == $subpages['sub_pgs_edited_by']) { ?>
                                            <?=$usr['usr_fullname'];?>
                                        <?php } ?>
                                    <?php endforeach ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            <?php } ?>

        </div>
    </div>
</div>