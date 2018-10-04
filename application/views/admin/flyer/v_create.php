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
            <li class="breadcrumb-item"><a href="<?php echo base_url('admin/flyer'); ?>">Flyer</a></li>
            <li class="breadcrumb-item active">Create Flyer</li>
        </ol>

        <div class="container-fluid">
            <div id="ui-view">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                Create Flyer
                            </div>
                            <div class="card-body">
                                <form action="<?php echo base_url('admin/flyer/store'); ?>" method="post" class="form-horizontal" id="formAddFlyer" enctype="multipart/form-data">

                                    <div class="form-group">
                                        <label class="col-md-12 col-form-label">Image</label>
                                        <div class="col-md-12">
                                            <button type="button" class="btn btn-primary" id="buttonAddFileToUpload">Choose image</button>

                                            <input type="file" name="fileImg" id="fileImg" accept="image/x-png,image/jpg,image/jpeg" style="display: none;"/>
                                            <span class="hasErrorText"></span>
                                            <div class="previewImgWraper">
                                                <div class="row">
                                                    <div class="col-md-4 padding-right-0">
                                                        <img class="imgPreviewImgFileUpload">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <span class="textImgPreviewFileUpload">asas</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12 col-form-label">Detail</label>
                                        <div class="col-md-12">
                                            <input type="text" id="detail" name="detail" class="form-control" placeholder="Happy independence...">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="button" class="btn btn-primary float-right" id="buttonAddFlyer">Create Flyer</button>
                                    </div>
                                </form>

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
    const buttonAddFlyer = $('#buttonAddFlyer');
    const formAddFlyer = $('#formAddFlyer');
    const fileImg = $('#fileImg');
    const textImgPreviewFileUpload = $('.textImgPreviewFileUpload');
    const imgPreviewImgFileUpload = $('.imgPreviewImgFileUpload');
    const previewImgWraper = $('.previewImgWraper');
    const buttonAddFileToUpload = $('#buttonAddFileToUpload');

    $(document).ready(function() {
        buttonAddFlyer.click(function(){
            buttonAddFlyer.html(`<i class="fa fa-refresh fa-spin"></i> Please wait...`).attr('disabled', 'disabled');
            formAddFlyer.submit();
        });

        buttonAddFileToUpload.click(function(){
            fileImg.trigger("click");
        });

        fileImg.change(function(){
            textImgPreviewFileUpload.text(this.files[0].name);

            let url = $(this).val();
            let ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
            if (this.files && this.files[0]&& (ext === "png" || ext === "jpeg" || ext === "jpg")) {
                let reader = new FileReader();
                reader.onload = function (e) {
                    imgPreviewImgFileUpload.attr('src', e.target.result);
                };
                reader.readAsDataURL(this.files[0]);
                previewImgWraper.css("display", "flex");
            }
            else {
                swal({
                    title: "Please choose img (.jpg, .jpeg or .png)",
                    icon: "warning",
                    button: "OK",
                });
            }
        });
    });

</script>
</body>
</html>
