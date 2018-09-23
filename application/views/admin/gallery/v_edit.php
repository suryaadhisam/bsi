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
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
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
            <li class="breadcrumb-item"><a href="<?php echo base_url('admin/facility'); ?>">Facility</a></li>
            <li class="breadcrumb-item"><?php echo $facility->title ?></li>
            <li class="breadcrumb-item active">Edit Facility</li>
        </ol>

        <div class="container-fluid">
            <div id="ui-view">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                Edit Facility
                            </div>
                            <div class="card-body">
                                <form action="<?php echo base_url('admin/facility/'. $facility->id_facility .'/update'); ?>" method="post" class="form-horizontal" id="formEditFacility">
                                    <div class="form-group">
                                        <label class="col-md-12 col-form-label">Title</label>
                                        <div class="col-md-12">
                                            <input value="<?php echo $facility->title ?>" type="text" id="title" name="title" class="form-control" placeholder="Free wifi...">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 col-form-label">Description</label>
                                        <div class="col-md-12">
                                            <textarea id="caption" name="caption"><?php echo $facility->caption ?></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="button" class="btn btn-primary float-right" id="buttonUpdateFacility">Update Facility</button>
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
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
<script>
    const caption = $('#caption');
    const buttonUpdateFacility = $('#buttonUpdateFacility');
    const formEditFacility = $('#formEditFacility');

    $(document).ready(function() {
        caption.summernote({
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

        buttonUpdateFacility.click(function(){
            buttonUpdateFacility.html(`<i class="fa fa-refresh fa-spin"></i> Please wait...`).attr('disabled', 'disabled');
            formEditFacility.submit();
        });
    });

</script>
</body>
</html>
