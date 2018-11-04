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
                                <form method="POST" action="<?php echo base_url('admin/facility/'. $facility->id_facility .'/update'); ?>" class="form-horizontal" id="formEditFacility" accept-charset="UTF-8" enctype="multipart/form-data">
                                    <input type="hidden" name="state" value="<?php echo $facility->state ?>">
                                    <div class="form-group">
                                        <label class="col-md-12 col-form-label">Title</label>
                                        <div class="col-md-12">
                                            <input value="<?php echo $facility->title ?>" type="text" id="title" name="title" class="form-control" placeholder="Free wifi...">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12 col-form-label">Fa Icon (<a target="_blank" href="https://fontawesome.com/v4.7.0/icons/">font awesome list</a>)</label>
                                        <div class="col-md-12">
                                            <input type="text" id="fa_icon" name="fa_icon" class="form-control" placeholder="E.g. fa fa-wifi" value="<?php echo $facility->fa_icon ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <input class="form-control display-none" id="facility_images" placeholder="e.g. Choose file ..." multiple="" accept="image/*" name="facility_images[]" type="file">
                                        <div class="col-sm-12 padding-right-15 padding-left-15 margin-bottom-1rem uploadImagesWraper">
                                            <label for="event_images">Images</label>
                                            <div class="display-flex">
                                                <div class="uploadImageWraper border-thin-dashed-gray" onclick="facilityImages.trigger('click');">
                                                    <a>
                                                        <span class="icon"><i class="fa fa-plus-circle fa-2x" aria-hidden="true"></i></span>
                                                    </a>
                                                </div>
                                                <ul id="uploadImagesUl">

                                                </ul>
                                            </div>

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
<script>
    const caption = $('#caption');
    const buttonUpdateFacility = $('#buttonUpdateFacility');
    const formEditFacility = $('#formEditFacility');
    let imagesDeleted = [];
    const facilityImages = $('#facility_images');

    let imagesFiles = [];
    const uploadImagesUl = $('#uploadImagesUl');
    let orderImages = [];

    const base_url = "<?php echo base_url(); ?>";
    const urlFacilityIndex = base_url+"/admin/facility";
    const urlUpdateFacility = base_url + "/admin/facility/" + <?php echo $facility->id_facility; ?> + "/update";
    const urlUploadImages = base_url+"/admin/facility/upload-images";

    $(document).ready(function() {
        imagesFiles = <?php echo json_encode($facility_images); ?>;
        showPreviewImages();

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
            // formEditFacility.submit();
            updateFacility();
        });

        facilityImages.on("change", function(e){
            if(e.target.files.length > 0) {
                for (let i = 0; i < e.target.files.length; i++) {
                    imagesFiles.push(e.target.files[i]);
                }
                showPreviewImages();
            }
        });

        uploadImagesUl.sortable({
            connectWith: '#uploadImagesUl',
            update: function(event, ui) {
                const orders = $(this).sortable('toArray');

                orderImages = [];
                orders.forEach(function(item){
                    orderImages.push(parseInt(item.split('-')[1]));
                });

                let imagesFilesTmp = imagesFiles.slice();
                imagesFiles = [];
                for (let i = 0; i < imagesFilesTmp.length; i++) {
                    imagesFiles.push(imagesFilesTmp[orderImages[i]]);
                }
                showPreviewImages();
            }
        });
        uploadImagesUl.disableSelection();
    });

    function showPreviewImages () {
        uploadImagesUl.text(``);

        for (let i = 0; i < imagesFiles.length; i++) {
            if(imagesFiles[i] instanceof File) {
                uploadImagesUl.append(`
                        <li id="previewImage-${ i }">
                            <div class="uploadImageWraper">
                                <span class="remove-media-x fa fa-remove" onclick="removeImage(${ i })"></span>
                                <img class="img-preview" src="${ URL.createObjectURL(imagesFiles[i]) }">
                            </div>
                        </li>
                    `);
            }
            else {
                uploadImagesUl.append(`
                        <li id="previewImage-${ i }">
                            <div class="uploadImageWraper">
                                <span class="remove-media-x fa fa-remove" onclick="removeImage(${ i }, ${ imagesFiles[i].id })"></span>
                                <img class="img-preview" src="${ base_url + '/' + imagesFiles[i].url }">
                            </div>
                        </li>
                    `);
            }
        }
    }

    function removeImage (index, mediaId=0) {
        //Remove image
        imagesFiles.splice(index, 1);

        //Remove preview img nya
        showPreviewImages()

        //Save deleted media
        if(mediaId > 0) {
            imagesDeleted.push(mediaId);
        }
    }

    function updateFacility () {
        $.ajax({
            type:"POST",
            url: urlUpdateFacility,
            data: formEditFacility.serialize(),
            dataType: 'json',
            beforeSend: function(request) {
                buttonUpdateFacility.html(`<i class="fa fa-refresh fa-spin"></i> Please wait...`).attr('disabled', 'disabled');
            },
            success: function(res) {
                if(res.status) {
                    uploadImage (res.data);
                }
                else {
                    console.log(res);
                    swal(
                        res.message,
                        '',
                        'error'
                    );
                    buttonUpdateFacility.html(`Update Facility`).attr('disabled', false);
                }
            },
            error: function(xhr, status, error) {
                console.log(error);
            }
        });
    }

    function uploadImage (facilityId) {
        let uploadData = new FormData();
        let mediasCount = 0;

        uploadData.append('facility_id', facilityId);
        imagesFiles.forEach(function(item, i){
            if(item instanceof File) {
                uploadData.append(`image-${i}`, item);
            }
            else {
                mediasCount += 1;
                uploadData.append(`medias-id-${i}`, item.id);
                uploadData.append(`medias-position-${i}`, i+1);
            }
        });
        uploadData.append(`medias-count`, mediasCount);
        uploadData.append(`medias-deletes`, imagesDeleted);

        $.ajax({
            type:"POST",
            url: urlUploadImages,
            dataType: 'json',
            async: true,
            processData: false,
            contentType: false,
            data: uploadData,
            beforeSend: function(request) {
                buttonUpdateFacility.html(`<i class="fa fa-refresh fa-spin"></i> Uploading images...`).attr('disabled', 'disabled');
            },
            success: function(res) {
                swal(
                    res.message,
                    '',
                    'success'
                ).then((willDelete) => {
                    if (willDelete) {
                        window.location.replace(urlFacilityIndex);
                    }
                });

                buttonUpdateFacility.html(`Update Facility`).attr('disabled', false);
            },
            error: function(xhr, status, error) {
                console.log(error);
            }
        });
    }
</script>
</body>
</html>
