    <h1 class="text-primary mt-5 mx-3">Categorys</h1>
    <form action="../admin/save_category" method="POST" id="category-form" class="border border-primary rounded p-3">
        <?php foreach ($data['category'] as $category): ?>
            <div class="input-group mb-3">
                <input type="text" class="form-control category-name" name="name[]" value="<?=$category['name']?>" required>
                <input type="hidden" name="id[]" value="<?=$category['id']?>">
                <div class="input-group-append">
                    <a href="<?=URL?>admin/delete/category/<?=$category['id']?>" class="btn btn-outline-danger">Remove</a>
                </div>
            </div>
        <?php endforeach; ?>
        <div class="row">
            <div class="col-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <div class="col-9 text-right">
                <button type="button" id="new-category" class="btn btn-success">New Category</button>
            </div>
        </div>
    </form>

    <h1 class="text-primary mt-5 mx-3">Images</h1>
    <form action="../admin/save_image" method="POST" id="image-form" class="border border-primary rounded p-3" enctype="multipart/form-data">
        <?php foreach ($data['imgs'] as $img): ?>
            <div class="row">
                <div class="col-lg-3">
                    <img src="<?=URL?>assets/img/gallery/<?=$img['location']?>" class="w-100 mb-3">
                </div>
                <div class="col-lg-9">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="name[]" value="<?=$img['name']?>" required>
                        <input type="hidden" name="id[]" value="<?=$img['id']?>">
                        <select name="category_id[]" class="form-control">
                            <?php if ($img['category_id'] == NULL): ?>
                                <option></option>
                            <?php endif; ?>
                            <?php foreach ($data['category'] as $category): ?>
                                <option value="<?=$category['id']?>" <?php if($img['category_id'] == $category['id']) echo "selected"?>><?=$category['name']?></option>
                            <?php endforeach; ?>
                        </select>
                        <div class="input-group-append">
                            <a href="<?=URL?>admin/delete/images/<?=$img['id']?>" class="btn btn-outline-danger">Remove</a>
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col-10">
                            <input type="text" name="description[]" class="form-control" placeholder="Enter description" value="<?=$img['description']?>">
                        </div>
                        <div class="col-2 text-right">
                            <span><?=$img['updated_at']?></span>
                        </div>
                    </div>
                 </div>
            </div>
        <?php endforeach; ?>
        <div class="row">
            <div class="col-6">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <div class="col-6 text-right">
                <a href="#" id="new-image" class="btn btn-success">New Image</a>
            </div>
        </div>
    </form>