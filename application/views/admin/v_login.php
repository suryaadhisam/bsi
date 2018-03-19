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

<body class="app flex-row align-items-center">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            
            <div class="card-group">
                <div class="card p-4">
                    <div class="card-body">
                        <h1>Login</h1>
                        <p class="text-muted">Enter your credentials</p>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="icon-user"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Email">
                        </div>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="icon-lock"></i></span>
                            </div>
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="row">
                            <div class="col-12 text-right">
                                <button type="button" id="buttonLogin" class="btn btn-primary px-4">Login</button>
                            </div>
                            <!-- {{--<div class="col-6 text-right">--}}
                                {{--<button type="button" class="btn btn-link px-0">Lupa password?</button>--}}
                            {{--</div>--}} -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo $script; ?>

<script>
    var base_url = window.location.origin;

    var urlDashboard = base_url+"/admin/dashboard";
    $('#buttonLogin').click(function(){
       window.location.href=urlDashboard;
    });
</script>

</body>
</html>