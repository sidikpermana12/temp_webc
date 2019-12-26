<div class="content__inner">
    <header class="content__title">
        <a href="<?=site_url('users/add')?>" type="button" class="btn btn-primary"><i class="zmdi zmdi-account-add"></i> Add Users</a>

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
            <h4 class="card-title">List Users</h4>

            <div class="table-responsive">
                <table id="data-table" class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($users as $usr) : ?>
                            <tr>
                                <td><?=$no++;?></td>
                                <td><?=$usr['usr_fullname']?></td>
                                <td><?=$usr['usr_email']?></td>
                                <td>
                                    <a href="<?=site_url('/users/'.$usr['usr_slug']); ?>" type="button" class="btn btn-success"><i class="zmdi zmdi-eye"></i></a>
                                    <a href="<?=site_url('/users/edit/'.encrypt_url($usr['usr_id'])); ?>" type="button" class="btn btn-primary"><i class="zmdi zmdi-edit"></i></a>
                                    <a href="<?=site_url('/users/delete/'.encrypt_url($usr['usr_id'])); ?>" type="button" onclick="return confirm('Are you sure you want to Remove?');" class="btn btn-danger"><i class="zmdi zmdi-delete"></i></a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>