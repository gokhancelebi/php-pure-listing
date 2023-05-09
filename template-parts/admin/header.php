<html>
<head>
    <title>
        <?php if(isset($title)): ?>
            <?=$title?>
        <?php else: ?>
            Admin Panel
        <?php endif; ?>
    </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,400;0,600;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=home_url('assets/admin/style.css')?>">

    <link rel="stylesheet" href="<?=home_url('assets/css/bundle.css?time='.time())?>">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

</head>
<body>
<div class="admin">
    <div class="header">
        <a href="<?=home_url('admin/index.php')?>">Admin Panel</a>
        <a href="<?=home_url('admin/products/index.php')?>">Ürünler</a>
        <a href="<?=home_url('admin/categories/index.php')?>">Kategoriler</a>
        <a href="<?=home_url('admin/sliders/index.php')?>">Ana Sayfa Slider</a>
        <a href="<?=home_url('admin/contacts/index.php')?>">İletişim</a>
        <a href="<?=home_url('admin/blogs/index.php')?>">Blog</a>
        <a href="<?=home_url('admin/logout.php')?>">Çıkış Yap</a>
    </div>

