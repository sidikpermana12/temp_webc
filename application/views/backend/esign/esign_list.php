<div class="content__inner">
    <header class="content__title">
        <a href="<?=site_url('esign/add')?>" type="button" class="btn btn-primary"><i class="zmdi zmdi-account-add"></i> Add Esign</a>

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
            <h4 class="card-title">List Esign</h4>

            <div class="table-responsive">
                <table id="data-table" class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($esign as $esn) : ?>
                            <tr>
                                <td><?=$no++;?></td>
                                <td><?=$esn['esn_fullname']?></td>
                                <td>
                                    <a href="<?=site_url('/esign/view/'.encrypt_url($esn['esn_id'])); ?>" type="button" class="btn btn-success"><i class="zmdi zmdi-eye"></i></a>
                                    <a href="<?=site_url('/esign/update/'.encrypt_url($esn['esn_id'])); ?>" type="button" class="btn btn-primary"><i class="zmdi zmdi-edit"></i></a>
                                    <a href="<?=site_url('/esign/delete/'.encrypt_url($esn['esn_id'])); ?>" type="button" class="btn btn-danger"><i class="zmdi zmdi-delete"></i></a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>