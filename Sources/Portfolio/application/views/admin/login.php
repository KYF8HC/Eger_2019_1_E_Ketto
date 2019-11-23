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
    
    <h1 class="text-primary mt-5 ml-3">Login</h1>
    <form action="login" method="POST" class="border border-primary rounded p-3">
        <div class="form-group">
            <label for="email">Username or email:</label>
            <input type="text" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="row">
            <div class="col-3">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
            <div class="col-9">
                <?php if (isset($_SESSION['message']) && !empty($_SESSION['message'])): ?>
                <span><?=$_SESSION['message']?></span>
                <?php unset($_SESSION['message']); endif; ?>
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