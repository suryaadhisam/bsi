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
            <li class="breadcrumb-item"><?php echo $flyer->id_popup ?></li>
            <li class="breadcrumb-item active">Edit Flyer</li>
        </ol>

        <div class="container-fluid">
            <div id="ui-view">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                Edit Flyer
                            </div>
                            <div class="card-body">
                                <form action="<?php echo base_url('admin/flyer/'. $flyer->id_popup .'/update'); ?>" method="post" class="form-horizontal" id="formEditFlyer" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label class="col-md-12 col-form-label">Detail</label>
                                        <div class="col-md-12">
                                            <input value="<?php echo $flyer->detail ?>" type="text" id="detail" name="detail" class="form-control" placeholder="Happy independence...">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 col-form-label" for="pathImage">Image</label>
                                        <div class="col-md-12">
                                            <button type="button" class="btn btn-primary" id="buttonUpdateFileToUpload">Choose image</button>

                                            <input type="file" name="fileImgUpdate" id="fileImgUpdate" accept="image/x-png,image/jpg,image/jpeg" style="display: none;"/>
                                            <span class="hasErrorText"></span>
                                            <div class="previewImgWraper">
                                                <div class="row">
                                                    <!-- <span class="buttonXImgPreviewFileUpload">x</span> -->
                                                    <div class="col-md-4 padding-right-0">
                                                        <img class="imgPreviewImgFileUpload" src="<?php echo base_url() . '/' . $flyer->path_img ?>">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <span class="textImgPreviewFileUpload">asas</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="button" class="btn btn-primary float-right" id="buttonUpdateFlyer">Update Flyer</button>
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
    const buttonUpdateFlyer = $('#buttonUpdateFlyer');
    const formEditFlyer = $('#formEditFlyer');

    const base_url = "<?php echo base_url(); ?>";
    const fileImgUpdate = $('#fileImgUpdate');
    const textImgPreviewFileUpload = $('.textImgPreviewFileUpload');
    const imgPreviewImgFileUpload = $('.imgPreviewImgFileUpload');
    const previewImgWraper = $('.previewImgWraper');
    const buttonUpdateFileToUpload = $('#buttonUpdateFileToUpload');
    const dataFlyer = <?php echo json_encode($flyer); ?>


    $(document).ready(function() {
        imgPreviewImgFileUpload.attr('src', base_url+"/"+dataFlyer.path_img);
        textImgPreviewFileUpload.text(getFileNameImg(dataFlyer.path_img));
        previewImgWraper.css("display", "flex");

        buttonUpdateFileToUpload.click(function(){
            fileImgUpdate.trigger("click");
        });

        fileImgUpdate.change(function() {
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

        buttonUpdateFlyer.click(function(){
            buttonUpdateFlyer.html(`<i class="fa fa-refresh fa-spin"></i> Please wait...`).attr('disabled', 'disabled');
            formEditFlyer.submit();
        });
    });

    function getFileNameImg(fullPath){
        return fullPath.substring(fullPath.lastIndexOf('/')+1);
    }

</script>
</body>
</html>
