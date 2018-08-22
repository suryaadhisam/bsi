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
            <li class="breadcrumb-item active">Social Media</li>
        </ol>

        <div class="container-fluid">
            <div id="ui-view">
                <div class="modal fade" id="modalAddSocmed" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add Socal Media</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="post" class="form-horizontal" id="formAddSocmed">
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="nameSocmed">Name</label>
                                        <div class="col-md-9">
                                            <input type="text" id="nameSocmed" name="nameSocmed" class="form-control" placeholder="Name social media...">
                                            <span class="hasErrorText"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="linkSocmed">Link Socmed</label>
                                        <div class="col-md-9">
                                            <input type="text" id="linkSocmed" name="linkSocmed" class="form-control" placeholder="Link social media...">
                                            <span class="hasErrorText"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="pathImageService">Image Icon</label>
                                        <div class="col-md-9">
                                            <button type="button" class="btn btn-primary" id="buttonAddFileToUpload">Choose image</button>

                                            <input type="file" name="fileImgSocmed" id="fileImgSocmed" accept="image/x-png,image/jpg,image/jpeg" />
                                            <span class="hasErrorText"></span>
                                            <div class="previewImgWraper">
                                                <div class="row">
                                                    <!-- <span class="buttonXImgPreviewFileUpload">x</span> -->
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
                                    
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" id="buttonAddSocmed"><i class="fa fa-refresh fa-spin loadingButtonProccess"></i> Add</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="modalUpdateSocmed" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Update Social Media</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="post" class="form-horizontal" id="formUpdateSocmed">
                                    <input type="hidden" id="idSocmed" name="idSocmed" class="form-control" value="1">

                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="nameSocmedUpdate">Name</label>
                                        <div class="col-md-9">
                                            <input type="text" id="nameSocmedUpdate" name="nameSocmedUpdate" class="form-control" placeholder="Name social media..." disabled>
                                            <span class="hasErrorText"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="linkSocmedUpdate">Value</label>
                                        <div class="col-md-9">
                                            <input type="text" id="linkSocmedUpdate" name="linkSocmedUpdate" class="form-control" placeholder="Link social media...">
                                            <span class="hasErrorText"></span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" id="buttonUpdateSocmed"><i class="fa fa-refresh fa-spin loadingButtonProccess"></i> Update</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
<!--                                <button type="button" id="buttonAddSocmedNew" class="btn btn-success" data-toggle="modal" data-target="#modalAddSocmed" style="margin-bottom: 10px;"><i class="fa fa-plus"></i>&nbsp; Add socmed</button>-->
                                <?php if (count($socmeds) > 0): ?>
                                    <table class="table table-responsive-sm table-hover" id="tableListServives">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Link Social Media</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($socmeds as $row) { ?>
                                                <tr>
                                                    <td><?php echo $row->socmed_name; ?></td>
                                                    <td><?php echo $row->socmed_url; ?></td>
                                                    <td><?php echo ($row->state == 1) ? "<b style='color: green;'>Active</b>" : "<b style='color: grey;'>Non Active</b>" ?></td>

                                                    <td>
                                                        <button type="button" class="btn btn-primary" onclick="openFormUpdateSocmed(<?php echo $row->id; ?>)"><i class="fa fa-pencil"></i>&nbsp; Edit</button>
                                                        <?php if ($row->state == 1): ?>
                                                            <button type="button" class="btn btn-warning" onclick="confirmDeleteSocmed(<?php echo $row->id; ?>, 0)"><i class="fa fa-close"></i>&nbsp; Deactive</button>
                                                        <?php else: ?>
                                                            <button type="button" class="btn btn-success" onclick="confirmDeleteSocmed(<?php echo $row->id; ?>, 1)"><i class="fa fa-check"></i>&nbsp; Active</button>
                                                        <?php endif ?>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>

                                    <?php if (isset($links)) echo $links; ?>
                                <?php else: ?>
                                    <h1 style="font-size: 26pt;color: #9E9E9E;text-align: center;margin: 20px;">EMPTY</h1>
                                <?php endif ?>

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
    
    var base_url = "<?php echo base_url(); ?>";
    var urlAddSocmed = base_url+"/admin/socmed/add";
    var urlSoftDeleteSocmed = base_url+"/admin/socmed/soft-delete";
    var urlChangeStateSocmed = base_url+"/admin/socmed/change-state";
    var urlUpdateSocmed = base_url+"/admin/socmed/update";
    var urlGetSocmed = base_url+"/admin/socmed/get";

    var isChangeImg = false;

    $("#buttonAddSocmed").click(function(){
        var data = new FormData(document.getElementById("formAddSocmed"));
        cleanStatusInputAddSocmed();
        $(".loadingButtonProccess").css("display", "inline-flex");

        $.ajax({
            type: 'POST',
            url: urlAddSocmed,
            dataType: 'json',
            async: true,
            processData: false,
            contentType: false,
            data:data,
            success: function(data) {
                console.log(data);
                $(".loadingButtonProccess").css("display", "none");

                if(data.status){
                    swal({
                        title: "Successfull",
                        icon: "success",
                        button: "OK",
                    }).then((willDelete) => {
                        if (willDelete) {
                            location.reload();
                        }
                    });
                } else {
                    for (var key in data.errors){
                        $("#"+key).addClass("hasError");
                        $("#"+key+" + .hasErrorText").css("display", "content");
                        $("#"+key+" + .hasErrorText").text(data.errors[key].replace(/<p[^>]*>/g, "").replace(/<\/?p[^>]*>/g, ""));
                    }

                }
            },
            error: function(xhr, status, error){
                console.log(error);
            }
        });
    });

    function cleanStatusInputAddSocmed() {
        $("#nameSocmed").removeClass("hasError");
        $("#linkSocmed").removeClass("hasError");

        $("#nameSocmed + .hasErrorText").text("");
        $("#linkSocmed + .hasErrorText").text("");
        $("#fileImgSocmed + .hasErrorText").text("");
    }

    function cleanStatusInputUpdateSocmed() {
        $("#nameSocmedUpdate").removeClass("hasError");
        $("#linkSocmedUpdate").removeClass("hasError");

        $("#nameSocmedUpdate + .hasErrorText").text("");
        $("#linkSocmedUpdate + .hasErrorText").text("");
        $("#fileImgSocmedUpdate + .hasErrorText").text("");
    }

    $("#buttonUpdateSocmed").click(function(){
        var data = new FormData(document.getElementById("formUpdateSocmed"));
        cleanStatusInputUpdateSocmed();
        $(".loadingButtonProccess").css("display", "inline-flex");

        if(isChangeImg) {
            data.append("isChangeImg", isChangeImg);
        }
        data.append("id", $("#idSocmed").val());

        $.ajax({
            type: 'POST',
            url: urlUpdateSocmed,
            dataType: 'json',
            async: true,
            processData: false,
            contentType: false,
            data:data,
            success: function(data) {
                console.log(data);
                $(".loadingButtonProccess").css("display", "none");

                if(data.status){
                    swal({
                        title: "Successfull",
                        icon: "success",
                        button: "OK",
                    }).then((willDelete) => {
                        if (willDelete) {
                            location.reload();
                        }
                    });
                } else {
                    for (var key in data.errors){
                        $("#"+key).addClass("hasError");
                        $("#"+key+" + .hasErrorText").css("display", "content");
                        $("#"+key+" + .hasErrorText").text(data.errors[key].replace(/<p[^>]*>/g, "").replace(/<\/?p[^>]*>/g, ""));
                    }
                }

            },
            error: function(xhr, status, error){
                console.log(error);
            }
        });
    });

    function openFormUpdateSocmed(idSocmed){
        $.ajax({
            type: 'POST',
            url: urlGetSocmed,
            dataType: 'json',
            async: true,
            data:{
                idSocmed: idSocmed
            },
            success: function(data) {
                console.log(data);
                $("#nameSocmedUpdate").val(data.data.socmed_name);
                $("#linkSocmedUpdate").val(data.data.socmed_url);

                $("#idService").val(idSocmed);
                $('#modalUpdateSocmed').modal('show');
                isChangeImg = false;
            },
            error: function(xhr, status, error){
                console.log(error);
            }
        });
    }

    function getFileNameImg(fullPath){
        return fullPath.substring(fullPath.lastIndexOf('/')+1);
    }

    function confirmDeleteSocmed(idSocmed, state){
        if(state === 1) {
            swal({
                title: 'Are you sure to deactive?',
                type: 'question',
                showCancelButton: true,
                confirmButtonColor: '#795548',
                cancelButtonColor: '#BDBDBD',
                confirmButtonText: 'Deactive',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        type: 'POST',
                        url: urlChangeStateSocmed,
                        dataType: 'json',
                        async: true,
                        data:{
                            id_socmed: idSocmed,
                            state: state
                        },
                        success: function(data) {
                            console.log(data);
                            if(data.status){
                                swal({
                                    title: "Successfull",
                                    icon: "success",
                                    button: "OK",
                                    type: 'success',
                                }).then((willDelete) => {
                                    if (willDelete) {
                                        location.reload();
                                    }
                                });
                            }
                        },
                        error: function(xhr, status, error){
                            console.log(error);
                        }
                    });
                }
            });
        }
        else {
            swal({
                title: 'Are you sure to active?',
                type: 'question',
                showCancelButton: true,
                confirmButtonColor: '#4CAF50',
                cancelButtonColor: '#BDBDBD',
                confirmButtonText: 'Active',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        type: 'POST',
                        url: urlChangeStateSocmed,
                        dataType: 'json',
                        async: true,
                        data:{
                            id_socmed: idSocmed,
                            state: state
                        },
                        success: function(data) {
                            console.log(data);
                            if(data.status){
                                swal({
                                    title: "Successfull",
                                    icon: "success",
                                    button: "OK",
                                    type: 'success',
                                }).then((willDelete) => {
                                    if (willDelete) {
                                        location.reload();
                                    }
                                });
                            }
                        },
                        error: function(xhr, status, error){
                            console.log(error);
                        }
                    });
                }
            });
        }

    }

    $("#fileImgSocmed").change(function(){
        $(".textImgPreviewFileUpload").text(this.files[0].name);

        var url = $(this).val();
        var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
        if (this.files && this.files[0]&& (ext == "png" || ext == "jpeg" || ext == "jpg")) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('.imgPreviewImgFileUpload').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
            $(".previewImgWraper").css("display", "flex");
        }
        else {
            swal({
                title: "Please choose img (.jpg, .jpeg or .png)",
                icon: "warning",
                button: "OK",
            });
        }
    });

    $("#fileImgSocmedUpdate").change(function(){
        $(".textImgPreviewFileUpload").text(this.files[0].name);

        var url = $(this).val();
        var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
        if (this.files && this.files[0]&& (ext == "png" || ext == "jpeg" || ext == "jpg")) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('.imgPreviewImgFileUpload').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
            $(".previewImgWraper").css("display", "flex");

            isChangeImg = true;
        }
        else {
            swal({
                title: "Please choose img (.jpg, .jpeg or .png)",
                icon: "warning",
                button: "OK",
            });
        }
    });

    $("#buttonAddFileToUpload").click(function(){
        $("#fileImgSocmed").trigger("click");
    });

    $("#buttonUpdateFileToUpload").click(function(){
        $("#fileImgSocmedUpdate").trigger("click");
    });

    function resetFormAddUpdateSocmed(){
        $("#nameSocmed").val("");
        $("#linkSocmed").val("");
    
        $("#idSocmed").val("");
        $("#nameSocmedUpdate").val("");
        $("#linkSocmedUpdate").val("");

        $(".previewImgWraper").css("display", "none");
    }

    $("#modalAddSocmed, #modalUpdateSocmed").on('hidden.bs.modal', function () {
        resetFormAddUpdateSocmed();
    });

</script>
</body>
</html>
