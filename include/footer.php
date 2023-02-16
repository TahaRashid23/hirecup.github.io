<div class='<?php echo isset($footer) ? $footer : "footer"; ?>'>
    <footer class="footer">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                    <a href="index.php" class="footer__logo">
                        <img src="images/logo-1.png" alt="logo" class="imgFluid">
                    </a>
                </div>
                <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                    <div class="footer__quicklinks footer__quicklinks--contact">
                        <h6>Contact</h6>
                        <ul>
                            <li>
                                <a href="tel:+000,000,000">
                                    <i class='bx bxs-phone-call bx-tada'></i>+000,000,000
                                </a>
                            </li>
                            <li><a href="#"><i class='bx bxs-envelope bx-tada'></i>demolink.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                    <div class="footer__quicklinks">
                        <h6>Quick Link</h6>
                        <ul>
                            <li><a href="#">Lorem ipsum</a></li>
                            <li><a href="#">Lorem ipsum</a></li>
                            <li><a href="#">Lorem ipsum</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                    <div class="footer__quicklinks">
                        <h6>Get In Touch</h6>
                        <ul class="social-icons">
                            <li><a href="#"><i class='bx bxl-facebook bx-tada''></i></a></li>
                        <li><a href="#"><i class=' bx bxl-linkedin bx-tada''></i></a></li>
                            <li><a href="#"><i class='bx bxl-twitter bx-tada''></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__copyrightWrapper">
        <div class="container">
            <div class="footer__copyright">
                <p>&copy; 2022 MySignature. All rights reserved.</p>
                <ul class="footer-main__nav">
                    <li><a href="features.php" class="<?= (basename($_SERVER['PHP_SELF']) == 'features.php') ? 'active' : '' ?>">Features </a></li>
                    <li><a href="blog.php" class="<?= (basename($_SERVER['PHP_SELF']) == 'blog.php') ? 'active' : '' ?>">Blog </a></li>
                    <li><a href="pricing.php" class="<?= (basename($_SERVER['PHP_SELF']) == 'pricing.php') ? 'active' : '' ?>">Pricing </a></li>
                    <li><a href="signature.php" class="<?= (basename($_SERVER['PHP_SELF']) == 'signature.php') ? 'active' : '' ?>">Signature </a></li>
                    <li><a href="templates.php" class="<?= (basename($_SERVER['PHP_SELF']) == 'templates.php') ? 'active' : '' ?>">Templates</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

</body>
<?php include 'include/js.php'; ?>

</html>