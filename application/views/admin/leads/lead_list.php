<!-- DataTables -->
<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables/dataTables.bootstrap4.css">

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content">
        <!-- For Messages -->
        <?php $this->load->view('admin/includes/_messages.php') ?>
        <div class="card">
            <div class="card-header">
                <div class="d-inline-block">
                    <h3 class="card-title"><i class="fa fa-list"></i>&nbsp; Lead List</h3>
                </div>
                <div class="d-inline-block float-right">
                    <?php if($this->rbac->check_operation_permission('add')): ?>
                    <a href="<?= base_url('admin/leads/add'); ?>" class="btn btn-success"><i class="fa fa-plus"></i>
                        Add New Lead</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body table-responsive">
                <table id="na_datatable" class="table table-bordered table-striped" width="100%">
                    <thead>
                        <tr>
                            <th>#<?= trans('id') ?></th>
                            <th>Name</th>
                            <th><?= trans('mobile_no') ?></th>
                            <th><?= trans('email') ?></th>
                            <th><?= trans('created_date') ?></th>

                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </section>
</div>


<!-- DataTables -->
<script src="<?= base_url() ?>assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables/dataTables.bootstrap4.js"></script>

<script>
//---------------------------------------------------
var table = $('#na_datatable').DataTable({
    "processing": true,
    "serverSide": false,
    "ajax": "<?=base_url('admin/leads/datatable_json')?>",
    "order": [
        [4, 'desc']
    ],
    "columnDefs": [{
            "targets": 0,
            "name": "id",
            'searchable': true,
            'orderable': true
        },
        {
            "targets": 1,
            "name": "name",
            'searchable': true,
            'orderable': true
        },
        {
            "targets": 2,
            "name": "mobile_no",
            'searchable': true,
            'orderable': true
        },
        {
            "targets": 3,
            "name": "email",
            'searchable': true,
            'orderable': true
        },
        {
            "targets": 4,
            "name": "created_at",
            'searchable': false,
            'orderable': false
        }

    ]
});
</script>


<script type="text/javascript">
$("body").on("change", ".tgl_checkbox", function() {
    console.log('checked');
    $.post('<?=base_url("admin/users/change_status")?>', {
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>',
            id: $(this).data('id'),
            status: $(this).is(':checked') == true ? 1 : 0
        },
        function(data) {
            $.notify("Status Changed Successfully", "success");
        });
});
</script>