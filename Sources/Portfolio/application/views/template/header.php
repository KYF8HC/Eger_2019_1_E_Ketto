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
    <link rel="stylesheet" href="<?=URL?>assets/css/style.css">
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

<style>
    nav{
    color: white;
    padding: 16px;
    font-size: 16px;
    font-family: 'Bebas Neue', cursive; 
    z-index: 10;
    position: absolute;
    top: 0;
    width: 100%;
    height: 60px;
    background: rgba(0,0,0,0.7);
}

nav ul{
    width: 100%;
    display: flex;
    justify-content: space-between;
    list-style: none;
}

nav ul li{
    float: left;
    color: white;
}

nav ul li a {
    color:white;
}
nav ul li a:hover {
    color: rgba(153, 28, 6, 0.712);
}

#banner{
    z-index: 5;
    position: relative;
    height: 100vh;
    width: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: auto;
}

#banner h1 {
    position: absolute;
    top: 30%;
    left: 50%;
    transform: translate(-50%, -30%);
    vertical-align: center;
    font-family: 'Bebas Neue', cursive; 
    color: white;
    font-size: 60px;
}

#banner p {
    position: absolute;
    top: 60%;
    left: 50%;
    transform: translate(-50%, -60%);
    vertical-align: center;
    color: white;
    font-size: 30px;
}

.dropbtn {
    background: rgba(0,0,0,0);
    color: white;
    border: none;
    cursor: pointer;
  }

  .dropdown {
    position: relative;
    display: inline-block;
  }

  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.7);
    z-index: 1;
  }

  .dropdown-content a {
    color: rgba(0,0,0);
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }

  .dropdown-content a:hover {
      background-color: rgb(0,0,0)
    }

  .dropdown:hover .dropdown-content {
    display: block;
  }
  .dropdown:hover .dropbtn {
    background-color:rgba(0,0,0,0);
  }
  </style>