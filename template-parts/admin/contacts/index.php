<div class="admin-container mt-20">
    <div class="admin-header">
        <h2>Mesajlar</h2>
<!--        <a href="--><?php //=home_url('admin/products/create.php')?><!--" class="btn-primary">Yeni Ürün Ekle</a>-->
    </div>
    <div class="product-list">
        <div class="product-list__header">
            <div>Başlık</div>
            <div>Açıklama</div>
            <div>İşlemler</div>
        </div>
        <?php if ($messages !== false):?>
            <?php foreach ($messages as $message):?>
                <div class="product-list__row">
                    <div><?=$message['name']?></div>
                    <div><?=$message['description']?></div>
                    <div style="width: max-content">
<!--                        <a class="btn-primary" href="--><?php //=home_url('admin/contacts/edit.php?id='.$message['id'])?><!--">Düzenle</a>-->
                        <a class="btn-primary" href="<?=home_url('admin/contacts/delete.php?id='.$message['id'])?>">Sil</a>
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