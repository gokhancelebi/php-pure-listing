<div class="admin-container mt-20">
    <form action="" method="post">
        <div class="form-row">
            <label for="name">Başlık</label>
            <input type="text" name="name" id="name" value="<?= $category != null ? $category['name'] : '' ?>">
        </div>
        <div class="form-row flex-start">
            <button type="submit" class="btn-primary w-100"><?= $category == null ? 'Ekle' : 'Güncelle'?></button>
        </div>
        <input type="hidden" name="new_category">
    </form>
</div>

