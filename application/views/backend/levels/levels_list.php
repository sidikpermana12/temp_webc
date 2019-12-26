<div class="content__inner">
    <header class="content__title">
        <a href="<?=site_url('levels/add')?>" type="button" class="btn btn-primary"><i class="zmdi zmdi-plus-square"></i> Add levels</a>

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
            <h4 class="card-title">List Levels</h4>

            <div class="table-responsive">
                <table id="data-table" class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Level Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($levels as $lvl) : ?>
                            <tr>
                                <td><?=$no++;?></td>
                                <td><?=$lvl['lvl_name']?></td>
                                <td>
                                    <a href="<?=site_url('/levels/'.$lvl['lvl_slug']); ?>" type="button" class="btn btn-success"><i class="zmdi zmdi-eye"></i></a>
                                    <a href="<?=site_url('/levels/edit/'.encrypt_url($lvl['lvl_id'])); ?>" type="button" class="btn btn-primary"><i class="zmdi zmdi-edit"></i></a>
                                    <?php if ($this->fungsi->user_login()->usr_group_id == 1 && $this->fungsi->user_login()->usr_level_id == 1 || $this->fungsi->user_login()->usr_group_id == 1 && $this->fungsi->user_login()->usr_level_id == 2) { ?>
                                        <a href="<?=site_url('/levels/delete/'.encrypt_url($lvl['lvl_id'])); ?>" type="button" onclick="return confirm('Are you sure you want to Remove?');" class="btn btn-danger"><i class="zmdi zmdi-delete"></i></a>
                                    <?php } ?>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>