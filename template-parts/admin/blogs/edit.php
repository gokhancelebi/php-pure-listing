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
    <form action="<?=$blog == null ? home_url('admin/blogs/create.php') : home_url('admin/blogs/edit.php')?>"
          enctype="multipart/form-data"
          method="post">
        <div class="form-row">
            <label for="title">Başlık</label>
            <input type="text" name="title" id="title" value="<?= $blog != null ? $blog['title'] : '' ?>">
        </div>
        <div class="form-row">
            <label for="description">Açıklama</label>
            <textarea name="description" id="description" cols="30"
                      class="w-100"
                      rows="10"><?= $blog != null ? $blog['description'] : '' ?></textarea>
        </div>
        <div class="form-row">
            <div class="col-md-12">
                <div class="container1">
                    <div>
                        <!-- This area will show the uploaded files -->
                        <div class="row">
                            <div id="uploaded_images">
                                <?php if ($blog):?>
                                <div class="uploaded_image">
                                    <img src="<?= home_url('uploads/images/blog/'.$blog['image']) ?>"/>
                                    <a href="#" class="img_rmv btn btn-danger"><i class="fa fa-times-circle"
                                                                                  style="font-size:48px;color:red"></i></a>
                                </div>
                                <?php endif;?>
                            </div>
                        </div>

                        <br>
                        <br>

                        <div id="select_file">
                            <div class="form-group">
                                <label>Resim Yükle</label>
                            </div>
                            <div class="form-group">
                                <input type="file" name="blog_thumbnail" <?=$blog == null ? 'required' : ''?> id="files">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-row flex-start">
            <button type="submit" class="btn-primary w-100"><?= $blog == null ? 'Ekle' : 'Güncelle' ?></button>
        </div>
        <input type="hidden" name="new_blog">
    </form>
</div>
