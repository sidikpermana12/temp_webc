<div class="content__inner">
    <header class="content__title">
        <a href="<?=site_url('levels')?>" type="button" class="btn btn-primary"><i class="zmdi zmdi-format-list-bulleted"></i> List Levels</a>

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
                            <td>Level Name</td>
                            <td>:</td>
                            <td><?=$levels['lvl_name']?></td>
                        </tr>
                        <tr>
                            <td>Level Description</td>
                            <td>:</td>
                            <td><?=$levels['lvl_description']?></td>
                        </tr>
                        <tr>
                            <td>Created At</td>
                            <td>:</td>
                            <td><?=date('d-m-Y | H:i:s', strtotime($levels['lvl_created_at']))?></td>
                        </tr>
                        <tr>
                            <td>Created By</td>
                            <td>:</td>
                            <td>
                                <?php foreach($users as $usr) : ?>
                                    <?php if ($usr['usr_id'] == $levels['lvl_created_by']) { ?>
                                        <?=$usr['usr_fullname'];?>
                                    <?php } ?>
                                <?php endforeach ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Edited At</td>
                            <td>:</td>
                            <td><?=date('d-m-Y | H:i:s', strtotime($levels['lvl_edited_at']))?></td>
                        </tr>
                        <tr>
                            <td>Edited By</td>
                            <td>:</td>
                            <td>
                                <?php foreach($users as $usr) : ?>
                                    <?php if ($usr['usr_id'] == $levels['lvl_edited_by']) { ?>
                                        <?=$usr['usr_fullname'];?>
                                    <?php } ?>
                                <?php endforeach ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>