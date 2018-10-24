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
            <li class="breadcrumb-item"><a href="<?php echo base_url('admin/faq'); ?>">FAQ</a></li>
            <li class="breadcrumb-item"><?php echo $faq->question ?></li>
            <li class="breadcrumb-item active">Edit FAQ</li>
        </ol>

        <div class="container-fluid">
            <div id="ui-view">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                Edit FAQ
                            </div>
                            <div class="card-body">
                                <form action="<?php echo base_url('admin/faq/'. $faq->id_faq .'/update'); ?>" method="post" class="form-horizontal" id="formEditFaq">
                                    <div class="form-group">
                                        <label class="col-md-12 col-form-label">Question</label>
                                        <div class="col-md-12">
                                            <input value="<?php echo $faq->question ?>" type="text" id="question" name="question" class="form-control" placeholder="How to...">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 col-form-label">State</label>
                                        <div class="col-md-12">
                                            <select id="state" name="state" class="form-control">
                                                <?php if($faq->state == 0) { ?>
                                                    <option value="1">Active</option>
                                                    <option value="0" selected>Non Active</option>
                                                <?php } else { ?>
                                                    <option value="1" selected>Active</option>
                                                    <option value="0">Non Active</option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 col-form-label">Answer</label>
                                        <div class="col-md-12">
                                            <input value="<?php echo $faq->answer ?>" type="text" id="answer" name="answer" class="form-control" placeholder="To pay with...">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="button" class="btn btn-primary float-right" id="buttonUpdateFaq">Update FAQ</button>
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
    const buttonUpdateFaq = $('#buttonUpdateFaq');
    const formEditFaq = $('#formEditFaq');

    $(document).ready(function() {
        buttonUpdateFaq.click(function(){
            buttonUpdateFaq.html(`<i class="fa fa-refresh fa-spin"></i> Please wait...`).attr('disabled', 'disabled');
            formEditFaq.submit();
        });
    });

</script>
</body>
</html>
