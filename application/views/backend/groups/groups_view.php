<div class="content__inner">
    <header class="content__title">
        <a href="<?=site_url('groups')?>" type="button" class="btn btn-primary"><i class="zmdi zmdi-format-list-bulleted"></i> List Groups</a>

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
                            <td>Group Name</td>
                            <td>:</td>
                            <td><?=$groups['grp_name']?></td>
                        </tr>
                        <tr>
                            <td>Group Description</td>
                            <td>:</td>
                            <td><?=$groups['grp_description']?></td>
                        </tr>
                        <tr>
                            <td>Created At</td>
                            <td>:</td>
                            <td><?=date('d-m-Y | H:i:s', strtotime($groups['grp_created_at']))?></td>
                        </tr>
                        <tr>
                            <td>Created By</td>
                            <td>:</td>
                            <td>
                                <?php foreach($users as $usr) : ?>
                                    <?php if ($usr['usr_id'] == $groups['grp_created_by']) { ?>
                                        <?=$usr['usr_fullname'];?>
                                    <?php } ?>
                                <?php endforeach ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Edited At</td>
                            <td>:</td>
                            <td><?=date('d-m-Y | H:i:s', strtotime($groups['grp_edited_at']))?></td>
                        </tr>
                        <tr>
                            <td>Edited By</td>
                            <td>:</td>
                            <td>
                                <?php foreach($users as $usr) : ?>
                                    <?php if ($usr['usr_id'] == $groups['grp_edited_by']) { ?>
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