    <footer>
        <div class="container">
            <div class="col-12">
            <?php if (!empty($data['user']['facebook'])) : ?>
                <div class="row">
                    <div class="col-2 text-right">
                        <i class="fab fa-facebook-square"></i><?=$data['user']['facebook']?>
                    </div>
                    <div class="col-4">
                    </div>
                </div>
            <?php endif; ?>
                <div class="row">
                    <div class="col-2 text-right">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="col-4">
                    </div>
                </div>
                <div class="row">
                    <div class="col-2 text-right">
                        <i class="fab fa-twitter"></i>
                    </div>
                    <div class="col-4">
                    </div>
                </div>
                <div class="row">
                    <div class="col-2 text-right">
                        <i class="fab fa-youtube"></i>
                    </div>
                    <div class="col-4">
                    </div>
                </div>
                <div class="row">
                    <div class="col-2 text-right">
                        <i class="fab fa-pinterest"></i>
                    </div>
                    <div class="col-4">
                    </div>
                </div>
                <div class="row">
                    <div class="col-2 text-right">
                        <i class="fab fa-tumblr"></i>
                    </div>
                    <div class="col-4">
                    </div>
                </div>
                <div class="row">
                    <div class="col-2 text-right">
                        <i class="fab fa-github"></i>
                    </div>
                    <div class="col-4">
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery, Bootstrap, JavaScript -->
    <script src="<?=URL?>assets/vendor/jquery/jquery-3.4.1.min.js"></script>
    <script src="<?=URL?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?=URL?>assets/js/script.js"></script>
    <script src="<?=URL?>assets/vendor/lightbox/simple-lightbox.min.js"></script>

</body>
</html>

