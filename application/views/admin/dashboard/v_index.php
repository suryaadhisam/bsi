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
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>

        <div class="container-fluid">
            <div id="ui-view">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="row">
                            <div class="col-sm-3">
                                <div class="card text-white bg-blue">
                                    <div class="card-body">
                                        <div class="h1 text-muted text-right mb-4">
                                            <i class="fa fa-bullhorn"></i>
                                        </div>
                                        <div class="text-value" style="font-size: 20pt">100</div>
                                        <small class="text-muted text-uppercase font-weight-bold">Total Event</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card text-white bg-green">
                                    <div class="card-body">
                                        <div class="h1 text-muted text-right mb-4">
                                            <i class="fa fa-newspaper-o"></i>
                                        </div>
                                        <div class="text-value" style="font-size: 20pt">23</div>
                                        <small class="text-muted text-uppercase font-weight-bold">Total News</small>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="card text-white bg-orange">
                                    <div class="card-body">
                                        <div class="h1 text-muted text-right mb-4">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <div class="text-value" style="font-size: 20pt">11</div>
                                        <small class="text-muted text-uppercase font-weight-bold">Total Users</small>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="card text-white bg-cyan">
                                    <div class="card-body">
                                        <div class="h1 text-muted text-right mb-4">
                                            <i class="fa fa-book"></i>
                                        </div>
                                        <div class="text-value" style="font-size: 20pt">121</div>
                                        <small class="text-muted text-uppercase font-weight-bold">Total Library</small>
                                    </div>
                                </div>
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
    const summaryNew = $('#summaryNew');
    const buttonAddAbout = $('#buttonAddAbout');
    const formAddAbout = $('#formAddAbout');

    $(document).ready(function() {
        summaryNew.summernote({
            placeholder: 'e.g. BSA berdiri sejak...',
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

        buttonAddAbout.click(function(){
            buttonAddAbout.html(`<i class="fa fa-refresh fa-spin"></i> Please wait...`).attr('disabled', 'disabled');
            formAddAbout.submit();
        });
    });

</script>
</body>
</html>
