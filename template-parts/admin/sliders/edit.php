<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
      integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<link rel="stylesheet" href="<?= home_url() ?>/admin/multiple-image-upload/dist/css/styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css"/>


<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- jquery ui -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<!-- These are the necessary files for the image uploader -->
<script src="<?= home_url() ?>/admin/multiple-image-upload/dist/assets/jquery-file-upload/js/vendor/jquery.ui.widget.js"></script>
<script src="<?= home_url() ?>/admin/multiple-image-upload/dist/assets/jquery-file-upload/js/jquery.iframe-transport.js"></script>
<script src="<?= home_url() ?>/admin/multiple-image-upload/dist/assets/jquery-file-upload/js/jquery.fileupload.js"></script>

<div class="admin-container mt-20">
    <form action="" method="post" enctype="multipart/form-data" class="upload-form">
        <div class="form-row">
            <div class="col-md-12">
                <div class="container1">
                    <div>
                        <!-- This area will show the uploaded files -->
                        <div class="row">

                            <button type="button" class="upload-button btn btn-primary"> + Resim Ekle</button>
                            <input type="file" name="fileUpload" multiple accept="image/*" id="multiple-image">
<!--                            <button type="submit" class="btn btn-success">Yükle</button>-->

                            <br>
                            <br>
                            <div class="progress custom-progress-bar" style="display: none">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                     aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                    <span class="sr-only">70% Complete</span>
                                </div>
                            </div>
                            <p>
                                <strong>Note:</strong> Resimleri sürükleyip alana bırakın<br>
                                <strong>Note:</strong> Resim sıralaması galeri sıralaması ile aynı olacaktır.<br>
                            </p>
                            <div class="image-container">
                                <div class="image-previews">
                                    <?php foreach ($images as $resim) {
                                        ?>
                                        <div class="image">
                                            <img src="<?= home_url('uploads/images/slider_images/' . $resim['image_url']) ?>"
                                                 class="img-fluid">
                                            <input type="hidden" name="images[<?= $resim['id'] ?>]"
                                                   value="<?= $resim['image_url'] ?>">
                                            <input type="hidden" name="order[<?= $resim['image_url'] ?>]"
                                                   class="orders"
                                                   value="<?= $resim['image_order'] ?>">
                                            <div class="image-actions">
                                                <button type="button" class="btn btn-danger btn-sm delete-image">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>

                                    <!--                                    <div class="information">Resimleri buraya bırak</div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row flex-start">
                <button type="submit" class="btn-primary w-100"><?= $slider == null ? 'Ekle' : 'Güncelle' ?></button>
            </div>
            <input type="hidden" name="new_product">
    </form>
</div>

<script>
    /*jslint unparam: true */
    /*global window, $ */

    $(function () {

        var form_data = new FormData();
        var last_order = 1;

        function upload_images(files) {
            // reset form data
            var html = '';
            for (var i = 0; i < files.length; i++) {
                let objectUrl = URL.createObjectURL(files[i]);
                html += '<div class="image">';
                html += '<img src="' + URL.createObjectURL(files[i]) + '" class="img-fluid">';
                html += '<input type="hidden" name="order[' + objectUrl + ']" value="' + last_order + '" class="orders">';
                html += '<div class="image-actions">';
                html += '<button type="button" class="btn btn-danger btn-sm delete-image">';
                html += '<i class="fa fa-trash"></i>';
                html += '</button>';
                html += '</div>';
                html += '</div>';
                // insert file data in form data
                form_data.append('file[' + objectUrl + ']', files[i]);

                last_order++;
            }
            $('.image-previews').append(html);
            $('.image-container .information').remove();
        }

        $('.image-container .information').on('click', function () {
            $('#multiple-image').click();
        });

        $('.upload-button').on('click', function () {
            $('#multiple-image').click();
        });
        $('#multiple-image').on('change', function () {
            var files = $(this)[0].files;
            upload_images(files);
            $(this).val('');
        });

        $(document).on('click','.delete-image',  function () {
            $(this).parent().parent().remove();
        });

        $('.upload-form').on('submit', function (e) {
            e.preventDefault();
            var slider_orders = 1;
            $('.orders').each(function () {
                form_data.append($(this).attr('name'), slider_orders);
                slider_orders++;
            });
            $.ajax({
                url: '<?=home_url('admin/sliders/upload.php')?>',
                method: 'post',
                data: form_data,
                contentType: false,
                processData: false,
                success: function (data) {
                    console.log(data);
                    alert(data);
                    location.reload();
                },
                error: function (err) {
                    console.log(err);
                },
                // uploading process for each image
                xhr: function () {
                    var xhr = new XMLHttpRequest();
                    xhr.upload.addEventListener('progress', function (e) {
                        if (e.lengthComputable) {
                            var percent = Math.round((e.loaded / e.total) * 100);
                            $('.custom-progress-bar').css('display', 'block');
                            $('.custom-progress-bar .progress-bar').css('width', percent + '%');
                        }
                    });
                    return xhr;
                }
            });
        });

        $(".image-previews").sortable(
            {
                update: function (event, ui) {
                    var order = 1;
                    $('.image-previews .col-md-3').each(function () {
                        $(this).find('input').val(order);
                        order++;
                    });
                }
            }
        );

        $(".image-previews,.information").on('dragover', function (e) {
            e.preventDefault();
            e.stopPropagation();
        });

        $(".image-previews,.information").on('dragenter', function (e) {
            e.preventDefault();
            e.stopPropagation();
        });

        $(".image-previews,.information").on('drop', function (e) {
            e.preventDefault();
            e.stopPropagation();
            if (e.originalEvent.dataTransfer) {
                if (e.originalEvent.dataTransfer.files.length) {
                    var files = e.originalEvent.dataTransfer.files;
                    var html = '';
                    upload_images(files);
                    $('.image-previews').append(html);
                    $('.information').remove()
                }
            }
        });
    });
</script>
