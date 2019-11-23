<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=SITE_NAME?> - admin</title>
    <!-- Bootstrap, fontawesome, CSS -->
    <link rel="stylesheet" href="<?=URL?>assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=URL?>assets/vendor/fontawesome/css/all.min.css">
</head>
<body>

<div class="container bg-light rounded p-5 my-5">
    <nav class="d-flex justify-content-between">
        <h5 class="font-weight-bold"><i class="fas fa-user"></i> <?=$data['user']['name']?></h5>
        <?php if (isset($_SESSION['message']) && !empty($_SESSION['message'])): ?>
        <span><?=$_SESSION['message']?></span>
        <?php unset($_SESSION['message']); endif; ?>
        <div>
            <a href="<?=URL?>" class="btn btn-primary">Home</a>
            <a href="admin/logout" class="btn btn-dark">Logout</a>
        </div>
    </nav>

    <h1 class="text-primary mt-5 ml-3">Contact settings</h1>
    <form action="admin/update_user" method="POST" class="border border-primary rounded p-3">
        <input type="hidden" name="id" value="<?=$data['user']['id']?>">
        <div class="row form-group">
            <div class="col-lg-3">
                <label for="email">Email<span class="text-danger"> *</span></label>
            </div>
            <div class="col-lg-9">
                <input type="email" class="form-control" id="email" name="email" value="<?=$data['user']['email']?>" required>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-lg-3">
                <label for="phone">Phone</label>
            </div>
            <div class="col-lg-9">
                <input type="text" class="form-control" id="phone" name="phone" value="<?=$data['user']['phone']?>">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-lg-3">
                <label for="city">City</label>
            </div>
            <div class="col-lg-9">
                <input type="text" class="form-control" id="city" name="city" value="<?=$data['user']['city']?>">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-lg-3">
                <label for="address">Address</label>
            </div>
            <div class="col-lg-9">
                <input type="text" class="form-control" id="address" name="address" value="<?=$data['user']['address']?>">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-lg-3">
                <label for="facebook">Facebook link</label>
            </div>
            <div class="col-lg-9">
                <input type="text" class="form-control" id="facebook" name="facebook" value="<?=$data['user']['facebook']?>">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-lg-3">
                <label for="instagram">Instagram link</label>
            </div>
            <div class="col-lg-9">
                <input type="text" class="form-control" id="instagram" name="instagram" value="<?=$data['user']['instagram']?>">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-lg-3">
                <label for="twitter">Twitter link</label>
            </div>
            <div class="col-lg-9">
                <input type="text" class="form-control" id="twitter" name="twitter" value="<?=$data['user']['twitter']?>">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-lg-3">
                <label for="youtube">YouTube link</label>
            </div>
            <div class="col-lg-9">
                <input type="text" class="form-control" id="youtube" name="youtube" value="<?=$data['user']['youtube']?>">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-lg-3">
                <label for="pinterest">Pinterest link</label>
            </div>
            <div class="col-lg-9">
                <input type="text" class="form-control" id="pinterest" name="pinterest" value="<?=$data['user']['pinterest']?>">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-lg-3">
                <label for="tumblr">Tumblr link</label>
            </div>
            <div class="col-lg-9">
                <input type="text" class="form-control" id="tumblr" name="tumblr" value="<?=$data['user']['tumblr']?>">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-lg-3">
                <label for="behance">Behance link</label>
            </div>
            <div class="col-lg-9">
                <input type="text" class="form-control" id="behance" name="behance" value="<?=$data['user']['behance']?>">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-lg-3">
                <label for="github">Github link</label>
            </div>
            <div class="col-lg-9">
                <input type="text" class="form-control" id="github" name="github" value="<?=$data['user']['github']?>">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-lg-3">
                <label for="linkedin">LinkedIn link</label>
            </div>
            <div class="col-lg-9">
                <input type="text" class="form-control" id="linkedin" name="linkedin" value="<?=$data['user']['linkedin']?>">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <div class="col-9">
                <span class="text-danger">* Required </span>
                <span class="text-secondary font-italic ml-5">Empty fields do not appear in the contact.</span>
            </div>
        </div>
    </form>

    <h1 class="text-primary mt-5 ml-3">Categorys</h1>
    <form action="admin/save_category" method="POST" id="category-form" class="border border-primary rounded p-3">
        <?php foreach ($data['category'] as $category): ?>
            <div class="input-group mb-3">
                <input type="hidden" name="id[]" value="<?=$category['id']?>">
                <input type="text" class="form-control" name="name[]" value="<?=$category['name']?>" required>
                <div class="input-group-append">
                    <a href="admin/delete/category/<?=$category['id']?>" class="btn btn-outline-danger">Remove</a>
                </div>
            </div>            
        <?php endforeach; ?>
        <div class="row">
            <div class="col-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <div class="col-9 text-right">
                <button type="button" id="new_category" class="btn btn-success">New Category</button>
            </div>
        </div>
    </form>

    <h1 class="text-primary mt-5 ml-3">Images</h1>
    <form action="admin/update_user" method="POST" class="border border-primary rounded p-3">
        <?php foreach ($data['imgs'] as $img): ?>
            <div class="row mb-3">
                <div class="col-lg-4">
                    <img src="<?=URL?>assets/img/<?=$img['location']?>" class="w-100 mb-3">
                </div>
                <div class="col-lg-4">
                    <input type="hidden" name="id[]" value="<?=$img['id']?>">
                    <input type="text" class="form-control" name="name[]" value="<?=$img['name']?>" required>
                    <select name="category[]" class="form-control my-3">
                        <?php if ($img['category_id'] == NULL): ?>
                        <option></option>
                        <?php endif; ?>
                        <?php foreach ($data['category'] as $category): ?>
                        <option value="<?=$category['id']?>" <?php if($img['category_id'] == $category['id']) echo "selected"?>><?=$category['name']?></option>
                        <?php endforeach; ?>
                    </select>
                    <input type="text" class="form-control text-right mb-3" value="<?=$img['updated_at']?>" disabled>
                </div>
                <div class="col-lg-4">
                    <textarea name="description[]" class="form-control w-100" rows="6" placeholder="Enter description"><?=$img['description']?></textarea>
                </div>
            </div>
        <?php endforeach; ?>
        <div class="row">
            <div class="col-6">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <div class="col-6 text-right">
                <a href="#" id="new_category" class="btn btn-success">New</a>
                <a href="#" id="remove_category" class="btn btn-danger">Remove</a>
            </div>
        </div>
    </form>
</div>

<!-- jQuery, Bootstrap, JavaScript -->
<script src="<?=URL?>assets/vendor/jquery/jquery-3.4.1.min.js"></script>
<script src="<?=URL?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?=URL?>assets/js/admin.js"></script>

</body>
</html>