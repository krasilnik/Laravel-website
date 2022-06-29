<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Yummy</title>
    <link rel="stylesheet" href="/css/common.css">
    <link rel="stylesheet" href="/css/home-page.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body>

    <div class="body-container">
        <div class="header">
            <div class="navigation">
                <ul>
                    <li><a href="/city">статті</a></li>
                    <li><a href="/contact">контакти</a></li>
                </ul>
            </div>
            <div class="header-body">
                <p>ukraine wonders</p>
            </div>
        </div>
        <div class="cities">
            <div class="cities-list">
                <div class="city-block">
                    <div class="city-banner-1"><p>Київ</p></div>
                    <div class="city-description"><p>Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.</p></div>
                </div>
                <div class="city-block">
                    <div class="city-banner-2"><p>Одеса</p></div>
                    <div class="city-description"><p>Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.</p></div>
                </div>
                <div class="city-block">
                    <div class="city-banner-3"><p>Харків</p></div>
                    <div class="city-description"><p>Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.</p></div>
                </div>
                <div class="city-block">
                    <div class="city-banner-4"><p>Львів</p></div>
                    <div class="city-description"><p>Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.</p></div>
                </div>
                <div class="city-block">
                    <div class="city-banner-5"><p>Карпати</p></div>
                    <div class="city-description"><p>Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.</p></div>
                </div>
            </div>
        </div>
        <div class="about-us">
            <div class="about-body">
                <p class="about-header">Про нас</p>
                <p class="content">Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a href="/contacts" class="question">Є запитання?</a>
            </div>
        </div>
        <?php $__env->startSection('footer'); ?>
        <?php $__env->stopSection(); ?>
    </div>

</body>
</html>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Bitnami\wampstack-8.0.20-0\apache2\htdocs\yumukr\resources\views/landing.blade.php ENDPATH**/ ?>