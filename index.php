<?php
// session_start();
// echo "<link rel='stylesheet' href=style.css>";
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnnaBrows</title>
    <!-- <base target="blank"> -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="slider\swiper.css">
    <link rel="stylesheet" href="modal_form\modal_form.css">
    <link rel="stylesheet" href="modal_window\modal_window.css">
    <link rel="stylesheet" href="price\price.css">


</head>

<body>
    <header class="header">
        <div class="header__container ">
            <div class="header__link">
                <a href="#" class="location__link">г.Ставрополь, ул. Серова 9/1</a>
            </div>
            <div class="header__logo">
                <img src="imgStudio/headerLogo1.svg" alt="" class="headLogo">
            </div>
            <div class="header__button">
                <button class="header__recording" type="button">Запись на процедуру</button>
            </div>
        </div>
        <div class="header__socialLink">
            <a href="https://instagram.com/anny___an_brows?igshid=MzNlNGNkZWQ4Mg==" class="header__instagram"><img src="imgStudio/watsappHeader.svg" alt="" class="head__instagram socialhead"></a>
            <a href="https://wa.me/79280099713" class="header__watsapp"><img src="imgStudio/instagrammHeader.svg" alt="" class="head__watsapp socialhead"></a>

        </div>
    </header>
    <main class="main">

        <section class="about_us">
            <div class="container">
                <h1 class="main__header">О нас</h1>
                <p class="main__text">Наша студия была основана в 2019 году и всё это время мы за высокий сервис, и за качественное предоставление услуг по доступной цене - это и является приоритетом в нашей работе!</p>
                <p class="main__text">Мы никогда не экономим на материалах и оборудовании, поэтому вся продукция строго оригинальная, для нас очень важно, чтобы каждый гость возвращался к нам снова!</p>
                <p class="main__text">Мы за честные отношения между нами и нашими гостями, поэтому всегда отвечаем и исправляем свои ошибки!</p>
                <p class="main__text">Мы за красивый маникюр без вреда здоровью, поэтому мы строго соблюдаем нормы СанПин!!</p>
                <p class="main__text">Благодаря нашим курсам вы научитесь выполнять салонный маникюр с покрытием гель-лак. Получите навыки для старта в одной из самых востребованных профессий в beauty-сфере.</p>
            </div>

            <div class="main__foto"><img src="imgStudio/mainFoto.webp" alt="" class="main__foto-1"></div>
        </section>

        <div class="price_header">
            <hr class="price_line-top">
            <h2 class="price_header_text">ПРАЙС</h2>
            <hr class="price_line-bottom">
        </div>

        <?php
        include "price/price.php"
        ?>

        <?php
        include "modal_window/modal_window.php";
        ?>

        <section class="gallery">
            <div class="gallery_header">
                <hr class="gallery_line-top">
                <h2 class="gallery_header_text">ФОТО РАБОТ</h2>
                <hr class="gallery_line-bottom">
            </div>
            <?php
            include "slider/slider.php";
            ?>
        </section>
    </main>
    <footer class="footer">
        <div class="footer_container">
            <div class="footer_header">
                <hr class="footer_line-top">
                <h2 class="footer_header_text">КОНТАКТЫ</h2>
                <hr class="footer_line-bottom">
            </div>
        </div>
        <section class="footer_social">
            <div class="social_footer">
                <img src="imgStudio/socialsfooter.svg" alt=""><a class="footer_inst" href="https://instagram.com/anny___an_brows?igshid=MzNlNGNkZWQ4Mg==">anny___an_brows</a>
            </div>
            <div class="social_footer">
                <img src="imgStudio/watsappfooter.svg" alt=""><a class="footer_inst" href="https://wa.me/79280099713">+7(928)-00-99-713</a>
            </div>
            <div class="social_footer">
                <img src="imgStudio/geofooter.svg" alt=""><a class="footer_inst" href="https://yandex.ru/maps/?um=constructor%3Aec2b1e48b788abf665ed824d8dbc40d1dd652f872b5f7fd8ea994fdbf7f61c12&source=constructorLink">г. Ставрополь ул.Серова 9/1</a>
            </div>
            <div class="footer_map">
                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Aec2b1e48b788abf665ed824d8dbc40d1dd652f872b5f7fd8ea994fdbf7f61c12&amp;source=constructor" width="1401px" height="574" frameborder="0"></iframe>
            </div>
        </section>

    </footer>


    <!-- <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script> -->
    <script src="index.js"></script>
    <script src="modal_window/modal_window.js"></script>
    <script src="https://kit.fontawesome.com/95a02bd20d.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>


</body>

</html>