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
            <li class="breadcrumb-item active">Carousel</li>
        </ol>

        <div class="container-fluid">
            <div id="ui-view">
                <div class="modal fade" id="modalAddCarousel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add Carousel</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="post" class="form-horizontal" id="formAddCarousel">
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="titleCarousel">Title</label>
                                        <div class="col-md-9">
                                            <input type="text" id="titleCarousel" name="titleCarousel" class="form-control" placeholder="Title carousel...">
                                            <span class="hasErrorText"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="taglineCarousel">Tagline</label>
                                        <div class="col-md-9">
                                            <textarea id="taglineCarousel" name="taglineCarousel" rows="4" class="form-control" placeholder="Tagline carousel..."></textarea>
                                            <span class="hasErrorText"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="pathImageCarousel">Path Image</label>
                                        <div class="col-md-9">
                                            <button type="button" class="btn btn-primary" id="buttonAddFileToUpload">Choose image</button>

                                            <input type="file" name="fileImgCarousel" id="fileImgCarousel" accept="image/x-png,image/jpg,image/jpeg" />
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
                                <button type="button" class="btn btn-primary" id="buttonAddCarousel"><i class="fa fa-refresh fa-spin loadingButtonProccess"></i> Add</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="modalUpdateCarousel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Update Carousel</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="post" class="form-horizontal" id="formUpdateCarousel">
                                    <input type="hidden" id="idCarousel" name="idCarousel" class="form-control" value="1">

                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="titleCarousel">Title</label>
                                        <div class="col-md-9">
                                            <input type="text" id="titleCarouselUpdate" name="titleCarouselUpdate" class="form-control" placeholder="Title carousel...">
                                            <span class="hasErrorText"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="taglineCarousel">Tagline</label>
                                        <div class="col-md-9">
                                            <textarea id="taglineCarouselUpdate" name="taglineCarouselUpdate" rows="4" class="form-control" placeholder="Tagline carousel..."></textarea>
                                            <span class="hasErrorText"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="pathImageCarousel">Path Image</label>
                                        <div class="col-md-9">
                                            <button type="button" class="btn btn-primary" id="buttonUpdateFileToUpload">Choose image</button>

                                            <input type="file" name="fileImgCarouselUpdate" id="fileImgCarouselUpdate" accept="image/x-png,image/jpg,image/jpeg" />
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
                                <button type="button" class="btn btn-primary" id="buttonUpdateCarousel"><i class="fa fa-refresh fa-spin loadingButtonProccess"></i> Update</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <button type="button" id="buttonAddCarouselNew" class="btn btn-success" data-toggle="modal" data-target="#modalAddCarousel" style="margin-bottom: 10px;"><i class="fa fa-plus"></i>&nbsp; Add carousel</button>
                                <?php 
                                    if(count($carousels) > 0) {
                                ?>
                                    <table class="table table-responsive-sm table-hover" id="tableListCarousels">
                                        <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Tagline</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                foreach($carousels as $row) {
                                            ?>
                                                <tr>
                                                    <td>
                                                        <img src="<?php echo base_url().$row->path_img; ?>" class="imgThumbnailCarousel">
                                                        <?php echo $row->title; ?>
                                                    </td>
                                                    <td><?php echo $row->tagline; ?></td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary" onclick="openFormUpdateCarousel(<?php echo $row->id_carousel; ?>)"><i class="fa fa-pencil"></i>&nbsp; Edit</button>
                                                        <button type="button" class="btn btn-danger" onclick="confirmDeleteCarousel(<?php echo $row->id_carousel; ?>)"><i class="fa fa-trash"></i>&nbsp; Delete</button>
                                                    </td>
                                                </tr>
                                            <?php 
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                    <!-- <ul class="pagination justify-content-center">
                                        <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                        <li class="page-item active">
                                            <a class="page-link" href="#">1</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul> -->
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
    var urlAddCarousel = base_url+"/admin/carousel/add";
    var urlSoftDeleteCarousel = base_url+"/admin/carousel/soft-delete";
    var urlUpdateCarousel = base_url+"/admin/carousel/update";
    var urlGetCarousel = base_url+"/admin/carousel/get";

    var isChangeImg = false;

    $("#buttonAddCarousel").click(function(){
        var data = new FormData(document.getElementById("formAddCarousel"));
        cleanStatusInputAddCarousel();
        $(".loadingButtonProccess").css("display", "inline-flex");

        $.ajax({
            type: 'POST',
            url: urlAddCarousel,
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

    function cleanStatusInputAddCarousel() {
        $("#titleCarousel").removeClass("hasError");
        $("#taglineCarousel").removeClass("hasError");

        $("#titleCarousel + .hasErrorText").text("");
        $("#taglineCarousel + .hasErrorText").text("");
        $("#fileImgCarousel + .hasErrorText").text("");
    }

    function cleanStatusInputUpdateCarousel() {
        $("#titleCarouselUpdate").removeClass("hasError");
        $("#taglineCarouselUpdate").removeClass("hasError");

        $("#titleCarouselUpdate + .hasErrorText").text("");
        $("#taglineCarouselUpdate + .hasErrorText").text("");
        $("#fileImgCarouselUpdate + .hasErrorText").text("");
    }

    $("#buttonUpdateCarousel").click(function(){
        var data = new FormData(document.getElementById("formUpdateCarousel"));
        cleanStatusInputUpdateCarousel();
        $(".loadingButtonProccess").css("display", "inline-flex");

        if(isChangeImg) {
            data.append("isChangeImg", isChangeImg);
        }
        data.append("id", $("#idCarousel").val());

        $.ajax({
            type: 'POST',
            url: urlUpdateCarousel,
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

    function openFormUpdateCarousel(idCarousel){
        $.ajax({
            type: 'POST',
            url: urlGetCarousel,
            dataType: 'json',
            async: true,
            data:{
                idCarousel: idCarousel
            },
            success: function(data) {
                console.log(data);
                $("#titleCarouselUpdate").val(data.data.title);
                $("#taglineCarouselUpdate").val(data.data.tagline);

                $('.imgPreviewImgFileUpload').attr('src', base_url+"/"+data.data.path_img);
                $(".textImgPreviewFileUpload").text(getFileNameImg(data.data.path_img));
                $(".previewImgWraper").css("display", "flex");

                $("#idCarousel").val(idCarousel);
                $('#modalUpdateCarousel').modal('show');
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

    function confirmDeleteCarousel(idCarousel){
        swal({
            title: "Are you sure?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    type: 'POST',
                    url: urlSoftDeleteCarousel,
                    dataType: 'json',
                    async: true,
                    data:{
                        id_carousel: idCarousel
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

    $("#fileImgCarousel").change(function(){
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

    $("#fileImgCarouselUpdate").change(function(){
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
        $("#fileImgCarousel").trigger("click");
    });

    $("#buttonUpdateFileToUpload").click(function(){
        $("#fileImgCarouselUpdate").trigger("click");
    });

    function resetFormAddUpdateCarousel(){
        $("#titleCarousel").val("");
        $("#taglineCarousel").val("");

        $("#idCarousel").val("");
        $("#titleCarouselUpdate").val("");
        $("#taglineCarouselUpdate").val("");

        $(".previewImgWraper").css("display", "none");
    }

    $("#modalAddCarousel, #modalUpdateCarousel").on('hidden.bs.modal', function () {
        resetFormAddUpdateCarousel();
    });
</script>
</body>
</html>
