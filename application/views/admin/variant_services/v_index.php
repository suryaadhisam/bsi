<!DOCTYPE html>
<html lang="ID">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/favicon.png">
    <title><?php echo $title; ?></title>
    <?php echo $style; ?>
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
<header class="app-header navbar">
    <button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button">
        <span class="navbar-toggler-icon"></span>
    </button>

    <ul class="nav navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <?php echo $menu_admin_top; ?>
        </li>
    </ul>
</header>

<div class="app-body">
    <div class="sidebar">
        <nav class="sidebar-nav">
            <ul class="nav">
                <?php echo $menu_admin_left; ?>
            </ul>
        </nav>
        <button class="sidebar-minimizer brand-minimizer" type="button"></button>
    </div>

    <!-- Main content -->
    <main class="main">

        <!-- Breadcrumb -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard'); ?>">Dashboard</a></li>
            <li class="breadcrumb-item active">Variant Services</li>
        </ol>

        <div class="container-fluid">
            <div id="ui-view">
                <?php if($this->session->flashdata('status')){ ?>
                    <div class="alert alert-info alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong><?php echo $this->session->flashdata('status'); ?></strong>
                    </div>
                <?php } ?>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <a href="<?php echo base_url('admin/variant-services/create'); ?>" class="btn btn-success" style="margin-bottom: 10px;"><i class="fa fa-plus"></i>&nbsp; Add Variant Service</a>

                                <table class="table table-responsive-sm table-hover" id="tableVariantServices">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Service</th>
                                            <th>Variant Service</th>
                                            <th>Price</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($variant_services as $index => $variant_service) { ?>
                                            <tr>
                                                <td><?php echo $index+1; ?></td>
                                                <td><?php echo $variant_service->name_services; ?></td>
                                                <td><?php echo $variant_service->varian; ?></td>
                                                <td>IDR <?php echo $variant_service->harga_idr; ?> / USD <?php echo $variant_service->harga_usd; ?></td>
                                                <td>
                                                    <a href="<?php echo base_url('admin/variant-services/' . $variant_service->id . '/edit') ?>" class="btn btn-primary"><i class="fa fa-pencil"></i>&nbsp; Edit</a>
                                                    <button type="button" class="btn btn-danger" onclick="confirmDelete(<?php echo $variant_service->id; ?>)"><i class="fa fa-trash"></i>&nbsp; Delete</button>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.conainer-fluid -->
    </main>

</div>

<footer class="app-footer">
    <?php echo $footer; ?>
</footer>
    <?php echo $script; ?>
<script>

    const tableVariantServices = $('#tableVariantServices');
    const base_url = "<?php echo base_url(); ?>";
    const urlDestroy = base_url+"/admin/variant-services/destroy";

    $(document).ready(function() {
        tableVariantServices.DataTable();
    });

    function confirmDelete(id){
        swal({
            title: 'Are you sure to delete?',
            type: 'question',
            showCancelButton: true,
            confirmButtonColor: '#F44336',
            cancelButtonColor: '#BDBDBD',
            confirmButtonText: 'Delete',
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    type: 'POST',
                    url: urlDestroy,
                    dataType: 'json',
                    async: true,
                    data:{
                        id: id
                    },
                    success: function(data) {
                        if(data.status){
                            swal({
                                title: "Successfull",
                                type: 'success',
                            }).then((willOk) => {
                                if (willOk) {
                                    location.reload();
                                }
                            });
                        }
                    },
                    error: function(xhr, status, error){
                        console.log(error);
                    }
                });
            }
        });
    }
</script>
</body>
</html>
