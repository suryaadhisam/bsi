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
            <li class="breadcrumb-item active">Profile</li>
        </ol>

        <div class="container-fluid">
            <div id="ui-view">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                Profile
                            </div>

                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label" for="inputName">Nama</label>
                                    <div class="col-md-8">
                                        <input type="text" id="inputName" name="inputName" class="form-control" placeholder="Nama...">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label" for="inputEmail">Email</label>
                                    <div class="col-md-8">
                                        <input type="text" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email...">
                                    </div>
                                </div>

                                <br/>
                                <div class="form-group row margin-bottom-4">
                                    <label class="col-md-4 col-form-label"></label>
                                    <div class="col-md-8">
                                        <label class="switch switch-default switch-pill switch-primary">
                                            <input type="checkbox" class="switch-input" id="changeStateUpdatePassword" onchange="changeStateUpdatePassword()">
                                            <span class="switch-label"></span>
                                            <span class="switch-handle"></span>
                                        </label> Ganti kata sandi
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label" for="inputOldPassword">Kata sandi</label>
                                    <div class="col-md-8">
                                        <input type="password" id="inputOldPassword" disabled name="inputOldPassword" class="form-control" placeholder="Kata sandi...">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label" for="inputPassword">Kata sandi baru</label>
                                    <div class="col-md-8">
                                        <input type="password" id="inputPassword" disabled name="inputPassword" class="form-control" placeholder="Kata sandi baru...">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label" for="inputConfirmPassword">Kata sandi baru</label>
                                    <div class="col-md-8">
                                        <input type="password" id="inputConfirmPassword" disabled name="inputConfirmPassword" class="form-control" placeholder="Konfirmasi kata sandi baru...">
                                    </div>
                                </div>

                            </div>

                            <div class="card-footer">
                                <button class="btn btn-primary pull-right" id="buttonUpdateProfile">Perbaharui profile</button>
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
    function changeStateUpdatePassword(){
        if($("#changeStateUpdatePassword").is(':checked')) {

            $("#inputOldPassword").removeAttr("disabled");
            $("#inputPassword").removeAttr("disabled");
            $("#inputConfirmPassword").removeAttr("disabled");

        }
        else{
            $("#inputOldPassword").attr("disabled", "true");
            $("#inputPassword").attr("disabled", "true");
            $("#inputConfirmPassword").attr("disabled", "true");

        }
    }

    $("#buttonUpdateProfile").click(function(){

        swal({
            title: "Berhasil",
            icon: "success",
            button: "OK",
        }).then((willDelete) => {
            if (willDelete) {
                location.reload();
            }
        });

    });


</script>
</body>
</html>
