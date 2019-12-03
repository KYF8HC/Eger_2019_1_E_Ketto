<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=SITE_NAME?></title>
    <!-- Bootstrap, fontawesome, CSS -->
    <link rel="stylesheet" href="<?=URL?>assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=URL?>assets/vendor/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?=URL?>assets/css/header.css">
    <link rel="stylesheet" href="<?=URL?>assets/vendor/lightbox/simplelightbox.min.css">
</head>
<body>

<header>
    <nav>
        <div class="container">
            <ul>
                <li><a href="<?=URL?>">Főoldal</a></li>
                <li><a href="<?=URL?>services">Szolgáltatások</a></li>
                <li><a href="<?=URL?>about">Rólunk</a></li>
                <li><a href="<?=URL?>contact">Kapcsolat</a></li>
                <li>
                    <div class="dropdown">
                        <button class="dropbtn">Kategóriák</button>
                        <div class="dropdown-content">
                            <?php foreach ($data['category'] as $category): ?>
                                <a href="<?=URL?>gallery/<?=$category['id']?>"><?=$category['name']?></a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>