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
            <li class="breadcrumb-item"><a href="<?php echo base_url('admin/contact-us'); ?>">Contact Us</a></li>
            <li class="breadcrumb-item"><?php echo $contact_us->name ?></li>
            <li class="breadcrumb-item active">Edit</li>
        </ol>

        <div class="container-fluid">
            <div id="ui-view">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                Edit Contact Us
                            </div>
                            <div class="card-body">
                                <form action="<?php echo base_url('admin/contact-us/'. $contact_us->id_contact_us .'/update'); ?>" method="post" class="form-horizontal" id="formUpdateContactUs">
                                    <div class="form-group">
                                        <label class="col-md-12 col-form-label">Name</label>
                                        <div class="col-md-12">
                                            <input value="<?php echo $contact_us->name ?>" type="text" id="name" name="name" class="form-control" placeholder="Bali Sunset Adventure...">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 col-form-label">Email</label>
                                        <div class="col-md-12">
                                            <input value="<?php echo $contact_us->email ?>" type="text" id="email" name="email" class="form-control" placeholder="cs@balisunsetadventure.com...">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 col-form-label">Phone</label>
                                        <div class="col-md-12">
                                            <input value="<?php echo $contact_us->phone ?>" type="text" id="phone" name="phone" class="form-control" placeholder="0898377373373...">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 col-form-label">Alamat</label>
                                        <div class="col-md-12">
                                            <input value="<?php echo $contact_us->alamat ?>" type="text" id="alamat" name="alamat" class="form-control" placeholder="Jln Raya Silakarang...">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 col-form-label">Message</label>
                                        <div class="col-md-12">
                                            <textarea id="message" name="message"><?php echo $contact_us->message ?></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="button" class="btn btn-primary float-right" id="buttonUpdateContactUs">Update Contact Us</button>
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
    const message = $('#message');
    const buttonUpdateContactUs = $('#buttonUpdateContactUs');
    const formUpdateContactUs = $('#formUpdateContactUs');

    $(document).ready(function() {
        message.summernote({
            placeholder: 'e.g. We are here to answer any question...',
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

        buttonUpdateContactUs.click(function(){
            buttonUpdateContactUs.html(`<i class="fa fa-refresh fa-spin"></i> Please wait...`).attr('disabled', 'disabled');
            formUpdateContactUs.submit();
        });
    });

</script>
</body>
</html>
