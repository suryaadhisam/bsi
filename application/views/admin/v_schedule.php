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
            <li class="breadcrumb-item active">Schedule</li>
        </ol>

        <div class="container-fluid">
            <div id="ui-view">
                <div class="modal fade" id="modalAddSchedule" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add Schedule</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="post" class="form-horizontal" id="formAddSchedule">
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="nameService">Service</label>
                                        <div class="col-md-9">
                                            <select class="form-control" id="serviceId" name="serviceId">
                                                <?php 
                                                    foreach($services as $row) {
                                                ?>
                                                    <option value="<?php echo $row->id_services; ?>"><?php echo $row->name_services; ?></option>
                                                <?php 
                                                    }
                                                ?>
                                            </select>
                                            <span class="hasErrorText"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="timeStart">Time start</label>
                                        <div class="col-md-9">
                                            <input type="time" id="timeStart" name="timeStart" class="form-control">
                                            <span class="hasErrorText"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="timeEnd">Time end</label>
                                        <div class="col-md-9">
                                            <input type="time" id="timeEnd" name="timeEnd" class="form-control">
                                            <span class="hasErrorText"></span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" id="buttonAddSchedule"><i class="fa fa-refresh fa-spin loadingButtonProccess"></i> Add</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="modalUpdateSchedule" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Update Schedule</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="post" class="form-horizontal" id="formUpdateSchedule">
                                    <input type="hidden" id="idSchedule" name="idSchedule" value="0">

                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="nameService">Service</label>
                                        <div class="col-md-9">
                                            <select class="form-control" id="serviceIdUpdate" name="serviceIdUpdate">
                                                <?php 
                                                    foreach($services as $row) {
                                                ?>
                                                    <option value="<?php echo $row->id_services; ?>"><?php echo $row->name_services; ?></option>
                                                <?php 
                                                    }
                                                ?>
                                            </select>
                                            <span class="hasErrorText"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="timeStartUpdate">Time start</label>
                                        <div class="col-md-9">
                                            <input type="time" id="timeStartUpdate" name="timeStartUpdate" class="form-control">
                                            <span class="hasErrorText"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="timeEndUpdate">Time end</label>
                                        <div class="col-md-9">
                                            <input type="time" id="timeEndUpdate" name="timeEndUpdate" class="form-control">
                                            <span class="hasErrorText"></span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" id="buttonUpdateSchedule"><i class="fa fa-refresh fa-spin loadingButtonProccess"></i> Update</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <button type="button" id="buttonAddScheduleNew" class="btn btn-success" data-toggle="modal" data-target="#modalAddSchedule" style="margin-bottom: 10px;"><i class="fa fa-plus"></i>&nbsp; Add schedule</button>
                                <?php 
                                    if(count($schedules) > 0) {
                                ?>
                                    <table class="table table-responsive-sm table-hover" id="tableListSchedules">
                                        <thead>
                                        <tr>
                                            <th>Service</th>
                                            <th>Detail</th>
                                            <th>Facility</th>
                                            <th>Time</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                foreach($schedules as $row) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $row->name_services ?></td>
                                                    <td><?php echo $row->detail ?></td>
                                                    <td><?php echo $row->facility ?></td>
                                                    <td><?php echo $row->time_begin." - ".$row->time_end; ?></td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary" onclick="openFormUpdateSchedule(<?php echo $row->id_schedule; ?>)"><i class="fa fa-pencil"></i>&nbsp; Edit</button>
                                                        <button type="button" class="btn btn-danger" onclick="confirmDeleteSchedule(<?php echo $row->id_schedule; ?>)"><i class="fa fa-trash"></i>&nbsp; Delete</button>
                                                    </td>
                                                </tr>
                                            <?php 
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                    <?php 
                                        if (isset($links)) {
                                            echo $links;
                                        } 
                                    ?>
                                <?php 
                                    } else {
                                ?>
                                    <h1 style="font-size: 26pt;color: #9E9E9E;text-align: center;margin: 20px;">EMPTY</h1>
                                <?php 
                                    }
                                ?>
                                
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
    var urlAddSchedule = base_url+"/admin/schedule/add";
    var urlSoftDeleteSchedule = base_url+"/admin/schedule/soft-delete";
    var urlUpdateSchedule = base_url+"/admin/schedule/update";
    var urlGetSchedule = base_url+"/admin/schedule/get";

    $(document).ready(function(){
        $("#buttonAddSchedule").click(function(){
            var data = new FormData(document.getElementById("formAddSchedule"));
            cleanStatusInputAddSchedule();
            $(".loadingButtonProccess").css("display", "inline-flex");
            addSchedule(data);
        });

        $("#buttonUpdateSchedule").click(function(){
            var data = new FormData(document.getElementById("formUpdateSchedule"));
            cleanStatusInputUpdateSchedule();
            $(".loadingButtonProccess").css("display", "inline-flex");
            data.append("id", $("#idSchedule").val());
            updateSchedule(data);
        });
    });


    //add schedule
    function addSchedule(data){
        $.ajax({
            type: 'POST',
            url: urlAddSchedule,
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
    }

    //update schedule
    function updateSchedule(data) {
        $.ajax({
            type: 'POST',
            url: urlUpdateSchedule,
            dataType: 'json',
            async: true,
            processData: false,
            contentType: false,
            data:data,
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
    }

    //chean status error input
    function cleanStatusInputAddSchedule() {
        $("#serviceId").removeClass("hasError");
        $("#timeStart").removeClass("hasError");
        $("#timeEnd").removeClass("hasError");

        $("#serviceId + .hasErrorText").text("");
        $("#timeStart + .hasErrorText").text("");
        $("#facilityService + .hasErrorText").text("");
        $("#timeEnd + .hasErrorText").text("");
    }
    function cleanStatusInputUpdateSchedule() {
        $("#serviceIdUpdate").removeClass("hasError");
        $("#timeStartUpdate").removeClass("hasError");
        $("#timeEndUpdate").removeClass("hasError");

        $("#serviceIdUpdate + .hasErrorText").text("");
        $("#timeStartUpdate + .hasErrorText").text("");
        $("#facilityServiceUpdate + .hasErrorText").text("");
        $("#timeEndUpdate + .hasErrorText").text("");
    }

    //open form update schedule
    function openFormUpdateSchedule(idSchedule){
        $.ajax({
            type: 'POST',
            url: urlGetSchedule,
            dataType: 'json',
            async: true,
            data:{
                idSchedule: idSchedule
            },
            success: function(data) {
                console.log(data);
                if(data.status) {
                    $("#serviceIdUpdate").val(data.data.id_service);
                    $("#timeStartUpdate").val(data.data.time_begin);
                    $("#timeEndUpdate").val(data.data.time_end);

                    $("#idSchedule").val(data.data.id_schedule);
                    $('#modalUpdateSchedule').modal('show');
                }
            },
            error: function(xhr, status, error){
                console.log(error);
            }
        });
    }







    var base_url = "<?php echo base_url(); ?>";
    var urlAddService = base_url+"/admin/service/add";
    var urlSoftDeleteService = base_url+"/admin/service/soft-delete";
    var urlUpdateService = base_url+"/admin/service/update";
    var urlGetService = base_url+"/admin/service/get";

    $("#buttonAddService").click(function(){
        var data = new FormData(document.getElementById("formAddService"));
        cleanStatusInputAddService();
        $(".loadingButtonProccess").css("display", "inline-flex");

        $.ajax({
            type: 'POST',
            url: urlAddService,
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

    function cleanStatusInputAddService() {
        $("#nameService").removeClass("hasError");
        $("#detailService").removeClass("hasError");
        $("#facilityService").removeClass("hasError");
        $("#brgPersonal").removeClass("hasError");

        $("#nameService + .hasErrorText").text("");
        $("#detailService + .hasErrorText").text("");
        $("#facilityService + .hasErrorText").text("");
        $("#brgPersonal + .hasErrorText").text("");
        $("#fileImgService + .hasErrorText").text("");
    }

    function cleanStatusInputUpdateService() {
        $("#nameServiceUpdate").removeClass("hasError");
        $("#detailServiceUpdate").removeClass("hasError");
        $("#facilityServiceUpdate").removeClass("hasError");
        $("#brgPersonalUpdate").removeClass("hasError");

        $("#nameServiceUpdate + .hasErrorText").text("");
        $("#detailServiceUpdate + .hasErrorText").text("");
        $("#facilityServiceUpdate + .hasErrorText").text("");
        $("#brgPersonalUpdate + .hasErrorText").text("");
        $("#fileImgServiceUpdate + .hasErrorText").text("");
    }

    $("#buttonUpdateService").click(function(){
        var data = new FormData(document.getElementById("formUpdateService"));
        cleanStatusInputUpdateService();
        $(".loadingButtonProccess").css("display", "inline-flex");

        if(isChangeImg) {
            data.append("isChangeImg", isChangeImg);
        }
        data.append("id", $("#idService").val());

        $.ajax({
            type: 'POST',
            url: urlUpdateService,
            dataType: 'json',
            async: true,
            processData: false,
            contentType: false,
            data:data,
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

    function openFormUpdateService(idService){
        $.ajax({
            type: 'POST',
            url: urlGetService,
            dataType: 'json',
            async: true,
            data:{
                idServices: idService
            },
            success: function(data) {
                console.log(data);
                $("#nameServiceUpdate").val(data.data.name_services);
                $("#detailServiceUpdate").val(data.data.detail);
                $("#facilityServiceUpdate").val(data.data.facility);
                $("#brgPersonalUpdate").val(data.data.brg_personal);

                $('.imgPreviewImgFileUpload').attr('src', base_url+"/"+data.data.path_img);
                $(".textImgPreviewFileUpload").text(getFileNameImg(data.data.path_img));
                $(".previewImgWraper").css("display", "flex");

                $("#idService").val(idService);
                $('#modalUpdateService').modal('show');
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

    function confirmDeleteService(idService){
        swal({
            title: "Are you sure?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    type: 'POST',
                    url: urlSoftDeleteService,
                    dataType: 'json',
                    async: true,
                    data:{
                        id_services: idService
                    },
                    success: function(data) {
                        console.log(data);
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
                        }
                    },
                    error: function(xhr, status, error){
                        console.log(error);
                    }
                });

                
            }
        });
    }

    $("#fileImgService").change(function(){
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

    $("#fileImgServiceUpdate").change(function(){
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
        $("#fileImgService").trigger("click");
    });

    $("#buttonUpdateFileToUpload").click(function(){
        $("#fileImgServiceUpdate").trigger("click");
    });

    function resetFormAddUpdateService(){
        $("#nameService").val("");
        $("#detailService").val("");
        $("#facilityService").val("");
        $("#brgPersonal").val("");

        $("#idService").val("");
        $("#nameServiceUpdate").val("");
        $("#detailServiceUpdate").val("");
        $("#facilityServiceUpdate").val("");
        $("#brgPersonalUpdate").val("");

        $(".previewImgWraper").css("display", "none");
    }

    $("#modalAddService, #modalUpdateService").on('hidden.bs.modal', function () {
        resetFormAddUpdateService();
    });
</script>
</body>
</html>
