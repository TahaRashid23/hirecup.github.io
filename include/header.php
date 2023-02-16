<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'include/css.php'; ?>
    <title><?php echo isset($title) ? $title : 'Home';  ?></title>
</head>

<body>
    <div class='<?php echo isset($header) ? $header : "header"; ?>'>
        <header class="header">
            <div class="container">
                <div class="header-main">
                    <a href="index.php" class="header-main__logo">
                        <img src="images/logo.png" alt="logo" class="imgFluid"> 
                    </a>
                    <ul class="header-main__nav">
                        <li><a href="features.php" class=" <?= (basename($_SERVER['PHP_SELF']) == 'features.php') ? 'active' : '' ?>">Features </a></li>
                        <li><a href="blog.php" class="<?= (basename($_SERVER['PHP_SELF']) == 'blog.php') ? 'active' : '' ?>">Blog </a></li>
                        <li><a href="pricing.php" class="<?= (basename($_SERVER['PHP_SELF']) == 'pricing.php') ? 'active' : '' ?>">Pricing </a></li>
                        <li><a href="signature.php" class="<?= (basename($_SERVER['PHP_SELF']) == 'signature.php') ? 'active' : '' ?>">Signature </a></li>
                        <li><a href="templates.php" class="<?= (basename($_SERVER['PHP_SELF']) == 'templates.php') ? 'active' : '' ?>">Templates</a></li>
                    </ul>
                    <ul class="header-main__btn">
                        <li><a href="#" class="themeBtn">log in</a></li>
                        <li><a href="#" class="themeBtn">sign up</a></li>
                    </ul>
                </div>
            </div>
        </header>
    </div>