<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="/css/common.css">
    <link rel="stylesheet" href="/css/contact.css">
    <title>Contact</title>

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


    <div class="form-container">
        <p class="form-header">Давайте поговоримо про ваші враження</p>

        <form class="contact-form" action="/">
            <label for="name">Ім’я</label>
            <input type="text" id="name" name="name">

            <label for="email">Email</label><br>
            <input type="text" id="email" name="email">

            <label for="comment">Ваш коментар ( враження, побажання ) </label><br>
            <textarea id="comment" name="comment" rows="5"></textarea>

            <input class="send-button" type="submit" value="Надіслати">
        </form>
    </div>


    <?php $__env->startSection('footer'); ?>
        <?php $__env->stopSection(); ?>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Bitnami\wampstack-8.0.20-0\apache2\htdocs\yumukr\resources\views/contact.blade.php ENDPATH**/ ?>