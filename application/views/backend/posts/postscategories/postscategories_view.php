<div class="content__inner">
    <header class="content__title">
        <a href="<?=site_url('postscategories')?>" type="button" class="btn btn-primary"><i class="zmdi zmdi-format-list-bulleted"></i> List Posts Categories</a>

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
            <h4 class="card-title">View Detail</h4>

            <div class="table-responsive">
                <table id="data-table" class="table">
                    <tbody>
                        <tr>
                            <td>Posts Categories Name</td>
                            <td>:</td>
                            <td><?=$postscategories['cat_pst_name']?></td>
                        </tr>
                        <tr>
                            <td>Posts Categories Description</td>
                            <td>:</td>
                            <td><?=$postscategories['cat_pst_body']?></td>
                        </tr>
                        <?php if($this->fungsi->user_login()->usr_group_id == 1 && $this->fungsi->user_login()->usr_level_id == 1) { ?>
                            <tr>
                                <td>Created At</td>
                                <td>:</td>
                                <td><?=date('d-m-Y | H:i:s', strtotime($postscategories['cat_pst_created_at']))?></td>
                            </tr>
                            <tr>
                                <td>Created By</td>
                                <td>:</td>
                                <td>
                                    <?php foreach($users as $usr) : ?>
                                        <?php if ($usr['usr_id'] == $postscategories['cat_pst_created_by']) { ?>
                                            <?=$usr['usr_fullname'];?>
                                        <?php } ?>
                                    <?php endforeach ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Edited At</td>
                                <td>:</td>
                                <td><?=date('d-m-Y | H:i:s', strtotime($postscategories['cat_pst_edited_at']))?></td>
                            </tr>
                            <tr>
                                <td>Edited By</td>
                                <td>:</td>
                                <td>
                                    <?php foreach($users as $usr) : ?>
                                        <?php if ($usr['usr_id'] == $postscategories['cat_pst_edited_by']) { ?>
                                            <?=$usr['usr_fullname'];?>
                                        <?php } ?>
                                    <?php endforeach ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>