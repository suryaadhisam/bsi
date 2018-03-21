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
            <li class="breadcrumb-item active">Carousel</li>
        </ol>

        <div class="container-fluid">
            <div id="ui-view">
                <div class="modal fade" id="modalAddCarousel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add Carousel</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="post" class="form-horizontal">
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="titleCarousel">Title</label>
                                        <div class="col-md-9">
                                            <input type="text" id="titleCarousel" name="titleCarousel" class="form-control" placeholder="Title carousel...">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="taglineCarousel">Tagline</label>
                                        <div class="col-md-9">
                                            <input type="text" id="taglineCarousel" name="taglineCarousel" class="form-control" placeholder="Tagline carousel...">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="pathImgCarousel">Path Url Image</label>
                                        <div class="col-md-9">
                                            <input type="text" id="pathImgCarousel" name="pathImgCarousel" class="form-control" placeholder="Path url image carousel...">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" id="buttonAddCarousel">Add</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="modalUpdateCarousel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Update Carousel</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="post" class="form-horizontal">
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="titleCarousel">Title</label>
                                        <div class="col-md-9">
                                            <input type="text" id="titleCarousel" name="titleCarousel" class="form-control" placeholder="Title carousel..." value="Sewa ATV Murah">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="taglineCarousel">Tagline</label>
                                        <div class="col-md-9">
                                            <input type="text" id="taglineCarousel" name="taglineCarousel" class="form-control" placeholder="Tagline carousel..." value="Ayo sewa ATV Murah untuk keluarga">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="pathImgCarousel">Path Url Image</label>
                                        <div class="col-md-9">
                                            <input type="text" id="pathImgCarousel" name="pathImgCarousel" class="form-control" placeholder="Path url image carousel..." value="http://agussuarya.com">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" id="buttonUpdateCarousel">Update</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <button type="button" id="buttonAddCarouselNew" class="btn btn-success" data-toggle="modal" data-target="#modalAddCarousel"><i class="fa fa-plus"></i>&nbsp; Add carousel</button>

                                <table class="table table-responsive-sm table-hover">
                                    <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Tagline</th>
                                        <th>Url image</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Sewa ATV</td>
                                        <td>Ayo sewa ATV murah meriah untuk keluarga</td>
                                        <td>http://agusssuarya.com</td>
                                        <td>
                                            <button type="button" class="btn btn-primary" onclick="openFormUpdateCarousel(1)"><i class="fa fa-pencil"></i>&nbsp; Edit</button>
                                            <button type="button" class="btn btn-danger" onclick="confirmDeleteCarousel(1)"><i class="fa fa-trash"></i>&nbsp; Delete</button>
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
    $("#buttonAddCarousel").click(function(){
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

    $("#buttonUpdateCarousel").click(function(){
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

    function openFormUpdateCarousel(idBank){
        $('#modalUpdateCarousel').modal('show');
    }

    function confirmDeleteCarousel(idBank){
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
