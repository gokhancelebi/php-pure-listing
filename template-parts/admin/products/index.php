<div class="admin-container mt-20">
    <div class="admin-header">
        <h2>Ürünler</h2>
        <a href="<?=home_url('admin/products/create.php')?>" class="btn-primary">Yeni Ürün Ekle</a>
    </div>
    <div class="product-list">
        <div class="product-list__header">
            <div>Başlık</div>
            <div>İşlemler</div>
        </div>
        <?php if ($products !== false):?>
            <?php foreach ($products as $product):?>
                <div class="product-list__row">
                    <div><?=$product['title']?></div>
                    <div style="width: max-content">
                        <a class="btn-primary" href="<?=home_url('admin/products/edit.php?id='.$product['id'])?>">Düzenle</a>
                        <a class="btn-primary" href="<?=home_url('admin/products/delete.php?id='.$product['id'])?>">Sil</a>
                        Anasayfada : <input type="checkbox" class="anasayfada-goster" value="<?=$product['id']?>" <?php
                        if ($product['show_home'] == 'yes') echo 'checked'?> <?php
                        ?>>
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