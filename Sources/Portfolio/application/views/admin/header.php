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
    <header class="d-flex justify-content-between">
        <h5 class="font-weight-bold"><i class="fas fa-user"></i> <?=$data['user']['name']?></h5>
        
        <?php if (isset($_SESSION['message']) && !empty($_SESSION['message'])): ?>
        <span><?=$_SESSION['message']?></span>
        <?php unset($_SESSION['message']); endif; ?>

        <nav>
            <a href="<?=URL?>" class="btn btn-primary">Home</a>
            <div class="btn-group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Settings</button>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="<?=URL?>admin" class="dropdown-item">Text</a>
                    <a href="<?=URL?>admin/contact" class="dropdown-item">Contact</a>
                    <a href="<?=URL?>admin/gallery" class="dropdown-item">Gallery</a>
                </div>
            </div>
            <a href="<?=URL?>admin/logout" class="btn btn-dark">Logout</a>
        </nav>
    </header>