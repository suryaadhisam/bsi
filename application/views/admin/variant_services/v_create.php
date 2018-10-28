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
            <li class="breadcrumb-item"><a href="<?php echo base_url('admin/facility'); ?>">Variant Services</a></li>
            <li class="breadcrumb-item active">Create Variant Services</li>
        </ol>

        <div class="container-fluid">
            <div id="ui-view">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                Create Variant Services
                            </div>
                            <div class="card-body">
                                <form method="POST" action="<?php echo base_url('admin/variant-services/store'); ?>" accept-charset="UTF-8" enctype="multipart/form-data" id="formAddVariantServices">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-12 col-form-label">Variant Type</label>
                                                <div class="col-md-12">
                                                    <select class="form-control" id="service_id" name="service_id">
                                                        <?php
                                                        foreach($variant_type as $index => $variant) {
                                                            echo '<option value="' . $variant->id_services . '">' . $variant->name_services . '</option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-12 col-form-label">Variant Name</label>
                                                <div class="col-md-12">
                                                    <input type="text" id="varian" name="varian" class="form-control" placeholder="ATV Ride Single...">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-12 col-form-label">Min. Person</label>
                                                <div class="col-md-12">
                                                    <input type="number" min="0" id="min_person" name="min_person" class="form-control" value="1">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-12 col-form-label">Price IDR</label>
                                                <div class="col-md-12">
                                                    <input type="number" min="0" id="harga_idr" name="harga_idr" class="form-control" value="0">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-12 col-form-label">Price USD</label>
                                                <div class="col-md-12">
                                                    <input type="number" min="0" id="harga_usd" name="harga_usd" class="form-control" step="0.01" value="0">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <input class="form-control display-none" id="variant_service_images" placeholder="e.g. Choose file ..." multiple="" accept="image/*" name="variant_service_images[]" type="file">
                                        <div class="col-sm-12 padding-right-15 padding-left-15 margin-bottom-1rem uploadImagesWraper">
                                            <label for="event_images">Images</label>
                                            <div class="display-flex">
                                                <div class="uploadImageWraper border-thin-dashed-gray" onclick="variant_service_images.trigger('click');">
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
                                            <textarea id="keterangan" name="keterangan"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="button" class="btn btn-primary float-right" id="buttonAddVariantService">Create Variant Service</button>
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
    const keterangan = $('#keterangan');
    const buttonAddVariantService = $('#buttonAddVariantService');
    const formAddVariantServices = $('#formAddVariantServices');
    const variant_service_images = $('#variant_service_images');

    let imagesFiles = [];
    const uploadImagesUl = $('#uploadImagesUl');
    let orderImages = [];

    const base_url = "<?php echo base_url(); ?>";
    const urlVariantServiceIndex = base_url + "/admin/variant-services";
    const urlStoreVariantService = base_url + "/admin/variant-services/store";
    const urlUploadImages = base_url + "/admin/variant-services/upload-images";

    $(document).ready(function() {

        keterangan.summernote({
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

        buttonAddVariantService.click(function(){
            buttonAddVariantService.html(`<i class="fa fa-refresh fa-spin"></i> Please wait...`).attr('disabled', 'disabled');
            storeVariantService();
        });

        variant_service_images.on("change", function(e){
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
            uploadImagesUl.append(`
                <li id="previewImage-${ i }">
                    <div class="uploadImageWraper">
                        <span class="remove-media-x fa fa-remove" onclick="removeImage(${ i })"></span>
                        <img class="img-preview" src="${ URL.createObjectURL(imagesFiles[i]) }">
                    </div>
                </li>
            `);
        }
    }

    function removeImage (index) {
        //Remove image
        imagesFiles.splice(index, 1);

        //Remove preview img nya
        showPreviewImages()
    }

    function storeVariantService () {
        $.ajax({
            type: "POST",
            url: urlStoreVariantService,
            data: formAddVariantServices.serialize(),
            dataType: 'json',
            beforeSend: function(request) {
                buttonAddVariantService.html(`<i class="fa fa-refresh fa-spin"></i> Please wait...`).attr('disabled', 'disabled');
            },
            success: function(res) {
                if(res.status) {
                    uploadImage (res.data);
                }
                else {
                    swal(
                        res.message,
                        '',
                        'error'
                    );
                    buttonAddVariantService.html(`Create Variant Service`).attr('disabled', false);
                }
            },
            error: function(xhr, status, error) {
                console.log(error);
            }
        });
    }

    function uploadImage (variantServiceId) {
        let uploadData = new FormData();
        uploadData.append('id_varian_service', variantServiceId);
        imagesFiles.forEach(function(item, i){
            uploadData.append(`image-${i}`, item);
        });

        $.ajax({
            type:"POST",
            url: urlUploadImages,
            dataType: 'json',
            async: true,
            processData: false,
            contentType: false,
            data: uploadData,
            beforeSend: function(request) {
                buttonAddVariantService.html(`<i class="fa fa-refresh fa-spin"></i> Uploading images...`).attr('disabled', 'disabled');
            },
            success: function(res) {
                swal(
                    res.message,
                    '',
                    'success'
                ).then((willDelete) => {
                    if (willDelete) {
                        window.location.replace(urlVariantServiceIndex);
                    }
                });

                buttonAddVariantService.html(`Create Variant Service`).attr('disabled', false);
            },
            error: function(xhr, status, error) {
                console.log(error);
            }
        });
    }

</script>
</body>
</html>
