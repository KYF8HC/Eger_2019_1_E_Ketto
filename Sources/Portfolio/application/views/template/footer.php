    <footer>
        <div class="container">
            <div class="col-12">
            <?php if (!empty($data['user']['email'])) : ?>
                <div class="row">
                    <div class="col-2 text-right">
                        <i class="fas fa-envelope"></i><?=$data['user']['email']?>
                    </div>
                    <div class="col-4">
                    </div>
                </div>
            <?php endif; ?>
            <?php if (!empty($data['user']['facebook'])) : ?>
                <div class="row">
                    <div class="col-2 text-right">
                        <i class="fab fa-facebook-square"></i><?=$data['user']['facebook']?>
                    </div>
                    <div class="col-4" >
                    </div>
                </div>
            <?php endif; ?>
            <?php if (!empty($data['user']['instagram'])) : ?>
                <div class="row">
                    <div class="col-2 text-right">
                        <i class="fab fa-instagram"></i></i><?=$data['user']['instagram']?>
                    </div>
                    <div class="col-4">
                    </div>
                </div>
            <?php endif; ?>
            <?php if (!empty($data['user']['twitter'])) : ?>
                <div class="row">
                    <div class="col-2 text-right">
                        <i class="fab fa-twitter"></i><?=$data['user']['twitter']?>
                    </div>
                    <div class="col-4">
                    </div>
                </div>
            <?php endif; ?>
                <?php if (!empty($data['user']['youtube'])) : ?>
            <div class="row">
                    <div class="col-2 text-right">
                        <i class="fab fa-youtube"></i><?=$data['user']['youtube']?>
                    </div>
                    <div class="col-4">
                    </div>
                </div>
            <?php endif; ?>
            <?php if (!empty($data['user']['pinterest'])) : ?>
                <div class="row">
                    <div class="col-2 text-right">
                        <i class="fab fa-pinterest"></i><?=$data['user']['pinterest']?>
                    </div>
                    <div class="col-4">
                    </div>
                </div>
            <?php endif; ?>    
            <?php if (!empty($data['user']['tumblr'])) : ?>
                <div class="row">
                    <div class="col-2 text-right">
                        <i class="fab fa-tumblr"></i><?=$data['user']['tumblr']?>
                    </div>
                    <div class="col-4">
                    </div>
                </div>
            <?php endif; ?>
            <?php if (!empty($data['user']['github'])) : ?>
                <div class="row">
                    <div class="col-2 text-right">
                        <i class="fab fa-github"></i><?=$data['user']['github']?>
                    </div>
                    <div class="col-4">
                    </div>
                </div>
            <?php endif; ?>
            <?php if (!empty($data['user']['behance'])) : ?>
                <div class="row">
                    <div class="col-2 text-right">
                        <i class="fab fa-behance"></i><?=$data['user']['behance']?>
                    </div>
                    <div class="col-4">
                    </div>
                </div>
            <?php endif; ?>
            <?php if (!empty($data['user']['linkedin'])) : ?>
                <div class="row">
                    <div class="col-2 text-right">
                        <i class="fab fa-linkedin"></i></i><?=$data['user']['linkedin']?>
                    </div>
                    <div class="col-4">
                    </div>
                </div>
            <?php endif; ?>
            </div>
        </div>
    </footer>
<style>

</style>

    <!-- jQuery, Bootstrap, JavaScript -->
    <script src="<?=URL?>assets/vendor/jquery/jquery-3.4.1.min.js"></script>
    <script src="<?=URL?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?=URL?>assets/js/script.js"></script>
    <script src="<?=URL?>assets/vendor/lightbox/simple-lightbox.min.js"></script>

</body>
</html>

