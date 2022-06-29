@extends ('layout')
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="/css/common.css">
    <link rel="stylesheet" href="/css/restaurant.css">
    <title>Georgian</title>

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
                    <i class="bi bi-chevron-right transition"></i>
                    <i class="crumb">Грузинські ресторани</i>
                </div>

                <div class="article-header">
                    <img class="article-header-image" src="/img/georgia.svg" alt="">
                    <div class="article-header-card">
                        <p class="article-chapter">ресторани</p>
                        <p class="article-name">Грузинські ресторани</p>
                        <p class="article-time-to-read">4 ХВ</p>
                    </div>
                </div>

                <div class="tide-content">
                    <div class="article-about">
                        <div class="about-container">
                            <div class="about">
                                <p class="about-header">Трохи про грузинську кухню...</p>
                                <p class="about-body">
                                    Грузинська кухня багатолика, як і різноманітність природи цієї країни і привітність її жителів. Куди б не занесли вас ноги — в гірську Сванетію, до моря в Аджарії, до монастирів і вина Кахетії — місцеві здивують «своїм». Овочі і фрукти, бобові, зелень, горіхи, спеції, м'ясо — всі продукти поєднуються і комбінуються від регіону до регіону по-різному.<br><br><br>

                                    Пхалі, лобіо, аджапсандалі, аджика, чакапулі, хінкалі, хачапурі — звичайно, можна багато розповісти про кожну страву, але це будуть лише усереднені описи на кшталт "чакапулі — молоде м'ясо, частіше ягня, тушковане зі спеціями і овочами".

                                </p>
                            </div>
                        </div>
                        <div class="location-card">
                            <ul>
                                <li><strong>де:</strong> місто Київ, вулиця Пушкінська</li>
                                <li><strong>коли:</strong> місто Київ, вулиця Пушкінська</li>
                                <li><strong>instagram</strong></li>
                            </ul>
                        </div>

                    </div>

                    <div class="dishes-list">
                        <div class="dish-card">
                            <p class="dish-name">{{$first_article->title}}</p>
                            <p class="dish-description">
                                {{$first_article->text}}
                            </p>
                            <img class="dish-image" src="{{$first_article->image}}" alt="dish-image">
                            <p class="dish-info">
                                <span class="red">Адреса:</span>{{$first_article->address}}<br><br>
                                <span class="red">Телефон:</span> {{$first_article->phone}}
                            </p>
                        </div>

                        <div class="dish-article">
                            <div class="barrier"></div>
                            <p class="dish-article-body">“Ось і ми не будемо довго мудрувати. Швидше вибирайте те, що вам до душі і вперед за насолодами! У нашій добірці ви зможете знайти найбільш популярні грузинські страви, а графа «вах-вах» — ті позиції, які легко пропустити в меню, але обов'язково варто спробувати”</p>
                            <div class="barrier"></div>
                        </div>

                        <div class="dish-card">
                            <p class="dish-name">"Genatsvale&Hinkali"</p>
                            <p class="dish-description">
                                Грузинський must try: хачапурі по-мегрельськи — 132 грн; <br>хачапурі по-аджарськи — 119 грн; <br>хінкалі класичні — 86 грн/4 шт; <br>шашлик зі свинини — 98 грн/100 г <br>Вах-вах: хачапурі-човник з курячим філе в горіховому соусі — 119 грн
                            </p>
                            <img class="dish-image" src="/img/Genatsvale&Hinkali.jfif" alt="dish-image">
                            <p>
                                <span class="red">Адреса:</span> вул. Велика Васильківська, 114;<br>
                                <span class="red">Телефон:</span> (050) 108 28 38
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

       @section ('footer')
        @endsection
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>
