<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
      integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<link rel="stylesheet" href="<?= home_url() ?>/admin/multiple-image-upload/dist/css/styles.css">

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- These are the necessary files for the image uploader -->
<script src="<?= home_url() ?>/admin/multiple-image-upload/dist/assets/jquery-file-upload/js/vendor/jquery.ui.widget.js"></script>
<script src="<?= home_url() ?>/admin/multiple-image-upload/dist/assets/jquery-file-upload/js/jquery.iframe-transport.js"></script>
<script src="<?= home_url() ?>/admin/multiple-image-upload/dist/assets/jquery-file-upload/js/jquery.fileupload.js"></script>

<div class="admin-container mt-20">
    <form action="" method="post">
        <div class="form-row">
            <label for="title">Başlık</label>
            <input type="text" name="title" id="title" value="<?= $product != null ? $product['title'] : '' ?>">
        </div>
        <div class="form-row">
            <label for="description">Açıklama</label>
            <textarea name="description" id="description" cols="30"
                      class="w-100"
                      rows="10"><?= $product != null ? $product['description'] : '' ?></textarea>
        </div>
        <div class="form-row">
            <label for="kategoriler">Kategoriler</label>
            <select name="category_id">
                <?php foreach ($categories as $category): ?>
                    <option <?php
                    if ($product != null && $product['category_id'] == $category['id'])
                        echo 'selected';
                    ?> value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-row">
            <div class="col-md-12">
                <div class="container1">
                    <div>
                        <!-- This area will show the uploaded files -->
                        <div class="row">
                            <div id="uploaded_images">
                                <?php
                                if (count($images)) {
                                    foreach ($images as $image) {
                                        ?>
                                        <div class="uploaded_image">
                                            <input type="text" value="<?=$image['path']?>" name="uploaded_image_name[]" id="uploaded_image_name" hidden>
                                            <img src="<?=$image['image']?>" />
                                            <a href="#" class="img_rmv btn btn-danger"><i class="fa fa-times-circle" style="font-size:48px;color:red"></i></a>
                                        </div>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>

                        <br>
                        <br>

                        <div id="select_file">
                            <div class="form-group">
                                <label>Resim Yükle</label>
                            </div>
                            <div class="form-group">
                                <!-- The fileinput-button span is used to style the file input field as button -->
                                <span class="btn btn-success fileinput-button">
                                <i class="glyphicon glyphicon-plus"></i>
                                <span>Dosya seç...</span>
                                    <!-- The file input field used as target for the file upload widget -->
                                <input id="fileupload" type="file" name="files"
                                       accept="image/x-png, image/gif, image/jpeg">
                            </span>
                                <br>
                                <br>
                                <!-- The global progress bar -->
                                <div id="progress" class="progress">
                                    <div class="progress-bar progress-bar-success"></div>
                                </div>
                                <!-- The container for the uploaded files -->
                                <div id="files" class="files"></div>
                                <input type="text" name="uploaded_file_name" id="uploaded_file_name" hidden>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-row flex-start">
            <button type="submit" class="btn-primary w-100"><?= $product == null ? 'Ekle' : 'Güncelle' ?></button>
        </div>
        <input type="hidden" name="new_product">
    </form>
</div>

<script>
    /*jslint unparam: true */
    /*global window, $ */

    var max_uploads = 5

    $(function () {
        'use strict';

        // Change this to the location of your server-side upload handler:
        var url = '<?=home_url()?>/admin/multiple-image-upload/server/upload.php';
        $('#fileupload').fileupload({
            url: url,
            dataType: 'html',
            done: function (e, data) {

                if (data['result'] == 'FAILED') {
                    alert('Invalid File');
                } else {
                    $('#uploaded_file_name').val(data['result']);
                    $('#uploaded_images').append('<div class="uploaded_image"> <input type="hidden" value="' + data['result'] + '" name="uploaded_image_name[]" id="uploaded_image_name" hidden> <img src="<?=home_url('uploads/images/products/')?>' + data['result'] + '" /> <a href="#" class="img_rmv btn btn-danger"><i class="fa fa-times-circle" style="font-size:48px;color:red"></i></a> </div>');

                    if ($('.uploaded_image').length >= max_uploads) {
                        $('#select_file').hide();
                    } else {
                        $('#select_file').show();
                    }
                }

                $('#progress .progress-bar').css(
                    'width',
                    0 + '%'
                );

                $.each(data.result.files, function (index, file) {
                    $('<p/>').text(file.name).appendTo('#files');
                });

            },
            progressall: function (e, data) {
                var progress = parseInt(data.loaded / data.total * 100, 10);
                $('#progress .progress-bar').css(
                    'width',
                    progress + '%'
                );
            }
        }).prop('disabled', !$.support.fileInput)
            .parent().addClass($.support.fileInput ? undefined : 'disabled');
    });

    $("#uploaded_images").on("click", ".img_rmv", function () {
        $(this).parent().remove();
        if ($('.uploaded_image').length >= max_uploads) {
            $('#select_file').hide();
        } else {
            $('#select_file').show();
        }
    });
</script>
