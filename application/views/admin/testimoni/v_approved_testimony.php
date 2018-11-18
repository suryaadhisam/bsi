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
            <li class="breadcrumb-item">Testimony</li>
            <li class="breadcrumb-item active">Approved</li>
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
                                <table class="table table-responsive-sm table-hover" id="tableListTestimony">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Comment</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    </tr>
                                        <?php foreach($testimoni as $index => $row) { ?>
                                            <tr>
                                                <td><?php echo $index+1; ?></td>
                                                <td><?php echo $row->name; ?></td>
                                                <td><?php echo $row->email; ?></td>
                                                <td><?php echo $row->comments; ?></td>
                                                <td>
                                                    <button type="button" class="btn btn-danger" onclick="rejectTestimoni(<?php echo $row->id_comments; ?>)"><i class="fa fa-trash"></i>&nbsp; Delete</button>
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

    const tableListTestimony = $('#tableListTestimony');
    const base_url = "<?php echo base_url(); ?>";
    const urlChangeState = base_url+"/admin/testimoni/changeState";

    $(document).ready(function() {
        tableListTestimony.DataTable();
    });

    function rejectTestimoni(id){
        swal({
            title: 'Are you sure to delete?',
            type: 'question',
            showCancelButton: true,
            confirmButtonColor: '#F44336',
            cancelButtonColor: '#BDBDBD',
            confirmButtonText: 'Reject',
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    type: 'POST',
                    url: urlChangeState,
                    dataType: 'json',
                    async: true,
                    data:{
                        id_comments: id,
                        state: -1
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
