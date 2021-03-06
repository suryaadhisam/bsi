<!DOCTYPE html>
<html lang="ID">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/favicon.png">
    <title><?php echo $title; ?></title>
    <?php echo $style; ?>
    <!-- include summernote css/js -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
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
            <li class="breadcrumb-item"><a href="<?php echo base_url('admin/gallery'); ?>">Gallery</a></li>
            <li class="breadcrumb-item active">Create Gallery</li>
        </ol>

        <div class="container-fluid">
            <div id="ui-view">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                Create Gallery
                            </div>
                            <div class="card-body">
                                <form action="<?php echo base_url('admin/gallery/store'); ?>" method="post" class="form-horizontal" id="formAddGallery" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label class="col-md-12 col-form-label">Title</label>
                                        <div class="col-md-12">
                                            <input type="text" id="title" name="title" class="form-control" placeholder="Free wifi...">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 col-form-label">Photo</label>
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
                                        <label class="col-md-12 col-form-label">Description</label>
                                        <div class="col-md-12">
                                            <textarea id="summary" name="summary"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="button" class="btn btn-primary float-right" id="buttonAddGallery">Create Gallery</button>
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
    <!-- include summernote css/js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
<script>
    const summary = $('#summary');
    const buttonAddGallery = $('#buttonAddGallery');
    const formAddGallery = $('#formAddGallery');
    const fileImg = $('#fileImg');
    const textImgPreviewFileUpload = $('.textImgPreviewFileUpload');
    const imgPreviewImgFileUpload = $('.imgPreviewImgFileUpload');
    const previewImgWraper = $('.previewImgWraper');
    const buttonAddFileToUpload = $('#buttonAddFileToUpload');

    $(document).ready(function() {
        summary.summernote({
            placeholder: 'e.g. Free wifi...',
            tabsize: 2,
            height: 200,
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['insert', ['picture', 'link']],
                ['misc', ['fullscreen', 'codeview']]
            ],
            popover: {
                image: [],
                link: [],
                air: []
            }
        });

        buttonAddGallery.click(function(){
            buttonAddGallery.html(`<i class="fa fa-refresh fa-spin"></i> Please wait...`).attr('disabled', 'disabled');
            formAddGallery.submit();
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
