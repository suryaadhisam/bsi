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
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item active">Services</li>
        </ol>

        <div class="container-fluid">
            <div id="ui-view">
                <div class="modal fade" id="modalAddService" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add Service</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="post" class="form-horizontal">
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="nameService">Name</label>
                                        <div class="col-md-9">
                                            <input type="text" id="nameService" name="nameService" class="form-control" placeholder="Name service...">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="detailService">Detail</label>
                                        <div class="col-md-9">
                                            <input type="text" id="detailService" name="detailService" class="form-control" placeholder="Detail service...">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="facilityService">Facility</label>
                                        <div class="col-md-9">
                                            <input type="text" id="facilityService" name="facilityService" class="form-control" placeholder="Facility service...">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="pathImageService">Path Image</label>
                                        <div class="col-md-9">
                                            <input type="text" id="pathImageService" name="pathImageService" class="form-control" placeholder="Path image service...">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="brgPersonal">Brg Personal</label>
                                        <div class="col-md-9">
                                            <input type="text" id="brgPersonal" name="brgPersonal" class="form-control" placeholder="Brg personal...">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" id="buttonAddService">Add</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="modalUpdateService" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add Service</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="post" class="form-horizontal">
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="nameService">Name</label>
                                        <div class="col-md-9">
                                            <input type="text" id="nameService" name="nameService" class="form-control" placeholder="Name service..." value="Makan gratis">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="detailService">Detail</label>
                                        <div class="col-md-9">
                                            <input type="text" id="detailService" name="detailService" class="form-control" placeholder="Detail service..." value="Makan gratis untuk 2 orang dengan belanja minimal 200rb">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="facilityService">Facility</label>
                                        <div class="col-md-9">
                                            <input type="text" id="facilityService" name="facilityService" class="form-control" placeholder="Facility service..." value="Tempat makan dengan view sawah">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="pathImageService">Path Image</label>
                                        <div class="col-md-9">
                                            <input type="text" id="pathImageService" name="pathImageService" class="form-control" placeholder="Path image service..." value="http://agussuarya.com/image.jpg">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" id="buttonUpdateService">Update</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <button type="button" id="buttonAddServiceNew" class="btn btn-success" data-toggle="modal" data-target="#modalAddService" style="margin-bottom: 10px;"><i class="fa fa-plus"></i>&nbsp; Add service</button>
                                <?php 
                                    if(count($services) > 0) {
                                ?>
                                    <table class="table table-responsive-sm table-hover">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Detail</th>
                                            <th>Facility</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                foreach($services as $row) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $row->name_services; ?></td>
                                                    <td><?php echo $row->detail; ?></td>
                                                    <td><?php echo $row->facility; ?></td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary" onclick="openFormUpdateService(<?php echo $row->id_services; ?>)"><i class="fa fa-pencil"></i>&nbsp; Edit</button>
                                                        <button type="button" class="btn btn-danger" onclick="confirmDeleteService(<?php echo $row->id_services; ?>)"><i class="fa fa-trash"></i>&nbsp; Delete</button>
                                                    </td>
                                                </tr>
                                            <?php 
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                        <li class="page-item active">
                                            <a class="page-link" href="#">1</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul>
                                <?php 
                                    } else {
                                ?>
                                    <h1 style="font-size: 26pt;color: #9E9E9E;text-align: center;margin: 20px;">EMPTY</h1>
                                <?php 
                                    }
                                ?>
                                
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
    

    var base_url = window.location.origin;
    var urlAddService = base_url+"/admin/service/add";

    $("#buttonAddService").click(function(){

        $.ajax({
            type: 'POST',
            url: urlAddService,
            dataType: 'json',
            async: true,
            data:{
                name_services: $("#nameService").val(),
                path_img: $("#pathImageService").val(),
                detail: $("#detailService").val(),
                facility: $("#facilityService").val(),
                brg_personal: $("#brgPersonal").val(),
            },
            success: function(data) {
                console.log(data);
                if(data.status){
                    swal({
                        title: "Successfull",
                        icon: "success",
                        button: "OK",
                    }).then((willDelete) => {
                        if (willDelete) {
                            location.reload();
                        }
                    });
                }
            },
            error: function(xhr, status, error){
                console.log(error);
            }
        });
    });

    $("#buttonUpdateService").click(function(){
        swal({
            title: "Successfull",
            icon: "success",
            button: "OK",
        }).then((willDelete) => {
            if (willDelete) {
                location.reload();
            }
        });
    });

    function openFormUpdateService(idBank){
        $('#modalUpdateService').modal('show');
    }

    function confirmDeleteService(idBank){
        swal({
            title: "Are you sure?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                swal({
                    title: "Successfull",
                    icon: "success",
                    button: "OK",
                }).then((willDelete) => {
                    if (willDelete) {
                        location.reload();
                    }
                });
            }
        });
    }
</script>
</body>
</html>