<div class="content__inner">
    <header class="content__title">
        <a href="<?=site_url('postscategories/add')?>" type="button" class="btn btn-primary"><i class="zmdi zmdi-collection-plus"></i> Add Posts Categories</a>

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
            <h4 class="card-title">List Posts Categories</h4>

            <div class="table-responsive">
                <table id="data-table" class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Posts Categories Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($postscategories as $pts_cat) : ?>
                            <tr>
                                <td><?=$no++;?></td>
                                <td><?=$pts_cat['cat_pst_name']?></td>
                                <td>
                                    <a href="<?=site_url('/postscategories/'.$pts_cat['cat_pst_slug']); ?>" type="button" class="btn btn-success"><i class="zmdi zmdi-eye"></i></a>
                                    <a href="<?=site_url('/postscategories/edit/'.encrypt_url($pts_cat['cat_pst_id'])); ?>" type="button" class="btn btn-primary"><i class="zmdi zmdi-edit"></i></a>
                                    <?php if ($this->fungsi->user_login()->usr_group_id == 1 && $this->fungsi->user_login()->usr_level_id == 1 || $this->fungsi->user_login()->usr_group_id == 1 && $this->fungsi->user_login()->usr_level_id == 2) { ?>
                                        <a href="<?=site_url('/postscategories/delete/'.encrypt_url($pts_cat['cat_pst_id'])); ?>" type="button" onclick="return confirm('Are you sure you want to Remove?');" class="btn btn-danger"><i class="zmdi zmdi-delete"></i></a>
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