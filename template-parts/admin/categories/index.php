<div class="admin-container mt-20">
    <div class="admin-header">
        <h2>Ürünler</h2>
        <a href="<?=home_url('admin/categories/create.php')?>" class="btn-primary">Yeni Kategori Ekle</a>
    </div>
    <div class="product-list">
        <div class="product-list__header">
            <div>Başlık</div>
            <div>İşlemler</div>
        </div>
        <?php if ($categories !== false):?>
            <?php foreach ($categories as $category):?>
                <div class="product-list__row">
                    <div><?=$category['name']?></div>
                    <div style="width: max-content">
                        <a class="btn-primary" href="<?=home_url('admin/categories/edit.php?id='.$category['id'])?>">Düzenle</a>
                        <a class="btn-primary" href="<?=home_url('admin/categories/delete.php?id='.$category['id'])?>">Sil</a>
                    </div>
                </div>
            <?php endforeach;?>
        <?php endif;?>
    </div>
</div>

<style>
    .product-list{
        width: 100%;
        border-collapse: collapse;
    }
    .product-list td{
        padding: 10px;
        border: 1px solid #ddd;
    }
    .product-list tr:nth-child(odd){
        background-color: #f9f9f9;
    }
    .product-list tr:nth-child(even){
        background-color: #fff;
    }
    .product-list tr:first-child{
        background-color: #ddd;
    }
    .product-list tr:first-child td{
        font-weight: bold;
    }


</style>