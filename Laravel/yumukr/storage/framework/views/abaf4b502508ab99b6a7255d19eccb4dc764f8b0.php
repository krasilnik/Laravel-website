<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kyiv</title>
    <link rel="stylesheet" href="/css/common.css">
    <link rel="stylesheet" href="/css/city.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>

    <div class="body-container">
        <div class="header">
            <p class="name">yummy ukraine</p>
            <div class="page-navbar">
                <ul>
                    <li><a href="/city">статті</a></li>
                    <li><a href="/contact">контакти</a></li>
                </ul>
            </div>
        </div>
        <div class="content-container">
            <div class="content">
                <div class="breadcrumbs">
                    <i class="main-crumb crumb bi bi-house">Головна</i>
                    <i class="bi bi-chevron-right transition"></i>
                    <i class="crumb">Київ</i>
                </div>
                <div class="content-navbar">
                    <ul>
                        <li><a href="">Всі</a></li>
                        <li><a href="">Ресторани</a></li>
                        <li><a href="">Кафе</a></li>
                    </ul>
                </div>
                <div class="restaurants">
                    <div class="row">
                        <div class="col-lg-4 col-l-12">
                            <div class="restaurant-1"><a href='restaurant' class="restaurant-name-1">Грузинські ресторани</a></div>
                        </div>
                        <div class="col-lg-4 col-l-12">
                            <div class="restaurant-2"><p class="restaurant-name-2">Італійська кухня</p></div>
                        </div>
                        <div class="col-lg-4 col-l-12">
                            <div class="restaurant-3"><p class="restaurant-name-3">Японські ресторани</p></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-l-12">
                            <div class="restaurant-4"><p class="restaurant-name-4">інстаграмні кафе</p></div>
                        </div>
                        <div class="col-lg-3 col-l-12">
                            <div class="restaurant-5"><p class="restaurant-name-5">Китайські ресторани</p></div>
                        </div>
                        <div class="col-lg-3 col-l-12">
                            <div class="restaurant-6"><p class="restaurant-name-6">Ресторани на даху</p></div>
                        </div>
                        <div class="col-lg-3 col-l-12">
                            <div class="restaurant-7"><p class="restaurant-name-7">Кафе з котами</p></div>
                        </div>
                    </div>
                    <div class="restaurant-active">
                        <div class="restaurant-active-card"><p class="restaurant-name-8">Кафе з терасами</p></div>
                        <div class="restaurant-active-description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-l-12">
                            <div class="restaurant-9"><p class="restaurant-name-9">Куди піти в похід?</p></div>
                        </div>
                        <div class="col-lg-4 col-l-12">
                            <div class="restaurant-10"><p class="restaurant-name-10">Маршрути Києвом</p></div>
                        </div>
                        <div class="col-lg-4 col-l-12">
                            <div class="restaurant-11"><p class="restaurant-name-11">Цікава архітектура Києва</p></div>
                        </div>
                    </div>
                    <div class="pagination-container">
                        <div class="restaurant-pagination">
                            <p class="page">1</p>
                            <p class="page-transition">-</p>
                            <p class="page">2</p>
                            <p class="page-transition">-</p>
                            <p class="page">3</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <?php $__env->startSection('footer'); ?>
        <?php $__env->stopSection(); ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</body>
</html>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Bitnami\wampstack-8.0.20-0\apache2\htdocs\yumukr\resources\views/city.blade.php ENDPATH**/ ?>