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
            <li class="breadcrumb-item">Setting</li>
            <li class="breadcrumb-item active">Social Media</li>
        </ol>

        <div class="container-fluid">
            <div id="ui-view">
                <div class="modal fade" id="modalAddSosmed" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add Social Media</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="post" class="form-horizontal">
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="nameSosmed">Name</label>
                                        <div class="col-md-9">
                                            <input type="text" id="nameSosmed" name="nameSosmed" class="form-control" placeholder="Name social media...">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="taglineCarousel">Icon Url</label>
                                        <div class="col-md-9">
                                            <input type="text" id="taglineCarousel" name="taglineCarousel" class="form-control" placeholder="Icon url...">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="urlSosmed">Url Social Media</label>
                                        <div class="col-md-9">
                                            <input type="text" id="urlSosmed" name="urlSosmed" class="form-control" placeholder="Url social media...">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" id="buttonAddSosmed">Add</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="modalUpdateSosmed" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Update Social Media</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="post" class="form-horizontal">
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="nameSosmed">Name</label>
                                        <div class="col-md-9">
                                            <input type="text" id="nameSosmed" name="nameSosmed" class="form-control" placeholder="Name social media..." value="Facebook">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="taglineCarousel">Icon Url</label>
                                        <div class="col-md-9">
                                            <input type="text" id="taglineCarousel" name="taglineCarousel" class="form-control" placeholder="Icon url..." value="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSMRJ2-j_mmb6GDj-m6U5OClSLYZ2CipXSAASRIgrrtFxTM0y3M">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="urlSosmed">Url Social Media</label>
                                        <div class="col-md-9">
                                            <input type="text" id="urlSosmed" name="urlSosmed" class="form-control" placeholder="Url social media..." value="facebook.com/agussuarya">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" id="buttonUpdateSosmed">Update</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <button type="button" id="buttonAddSosmedNew" class="btn btn-success" data-toggle="modal" data-target="#modalAddSosmed"><i class="fa fa-plus"></i>&nbsp; Add social media</button>

                                <table class="table table-responsive-sm table-hover">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Url social media</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSMRJ2-j_mmb6GDj-m6U5OClSLYZ2CipXSAASRIgrrtFxTM0y3M" width="25" height="25"> Facebook</td>
                                        <td>facebook.com/agussuarya</td>
                                        <td>
                                            <button type="button" class="btn btn-primary" onclick="openFormUpdateSosmed(1)"><i class="fa fa-pencil"></i>&nbsp; Edit</button>
                                            <button type="button" class="btn btn-danger" onclick="confirmDeleteSosmed(1)"><i class="fa fa-trash"></i>&nbsp; Delete</button>
                                        </td>
                                    </tr>
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
    $("#buttonAddSosmed").click(function(){
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

    $("#buttonUpdateSosmed").click(function(){
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

    function openFormUpdateSosmed(idBank){
        $('#modalUpdateSosmed').modal('show');
    }

    function confirmDeleteSosmed(idBank){
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
