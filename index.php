<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="/css/service.css">

</head>
<body>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true"> <!-- Модальное окно -->
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Вы можете заказать звонок, мы Вам перезвоним</h5>
                <button type="button" class="close fa fa-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">x</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="input-group mb-3"><!-- Имя -->

                    <input type="text" class="form-control" placeholder="Ваше имя"
                           aria-label="Address" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3"><!--селект с выпадающим списком-->

                    <select class="custom-select">
                        <option value="1">Вопросы технического характера</option>
                        <option value="2">Вопросы к абонентскому отделу</option>
                    </select>
                </div>

                <div class="input-group mb-3"><!-- Мобильный номер -->

                    <input type="tel" pattern="7\([0-9]{3}\)[0-9]{3}-[0-9]{2}-[0-9]{2}" class="form-control"
                           placeholder="Номер феникс в формате XXX XXXX" maxlength='10'>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary">
                    Заказать звонок
                </button>
            </div>
        </div>
    </div>
</div>


<header>
    <div class="header-one">
        <div class="dsContainer">
            <div class="col-md-10 margin-text">
                <a href="" class=" btn header-p">Личный кабинет</a>
                <a data-toggle="modal" data-target="#exampleModal" href="#exampleModal" class="btn">Перезвоните мне</a>
            </div>
        </div>
    </div>
    <div class="dsContainer">
        <div class="col-md-10 margin-text logo-inline ">
            <div class="row">
                <div class="col-md-6">
                    <img src="./img/logo.png" alt="">
                </div>
                <div class="col-lg-6 hidden-xs hidden-sm hidden-md"
                     style="display: flex;margin-top: 22px;align-items: center;">

                    <div class="col-md-4"><a href="" class="widh-img">
                            <img id="widh-img" src="./img/i.jpg">
                        </a>
                    </div>
                    <div class="col-md-4"><a href="" class="widh-img">
                            <img id="widh-img1" src="./img/logo1.png">
                        </a>
                    </div>
                    <div class="col-md-4"><a href="" class="widh-img">
                            <img id="widh-img2" src="./img/logo2.jpg">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav>
        <div class="topnav " id="myTopnav">
            <a href="#">Подключиться</a>
            <a href="#">Интернет</a>
            <a href="#">Цифровое ТВ</a>
            <a href="#">Кабельное ТВ</a>
            <a href="#">Оборудование</a>
            <a href="#">Техническое обслуживание</a>
            <a href="#" id="menu" class="icon">&#9776;</a>
        </div>
    </nav>
</header>
<div class="dsContainer margin-form"> <!--Контейнер-->
    <div class="body-text">


        <form action="/add.php" method="post"><!-- форма инпут для Адреса-->
            <div class="input-group mb-3" id="mt-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon">Адресс</span>
                </div>
                <input type="text" name="address" class="form-control"
                       placeholder="Например г.Макеевка ул. Андреева 60/23"
                       aria-label="Address" aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3"><!--селект с выпадающим списком территории обслуживания-->
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroup">Жилой сектор</label>
                </div>
                <select name="sectorA" class="custom-select" id="inputGroup">
                    <option
                            value="0">Частный сектор
                    </option>
                    <option
                            value="1">Многоэтажные дома
                    </option>
                </select>
            </div>

            <div class="input-group mb-3"><!--селект с выпадающим списком фактора проблемы-->
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroup2">Фактор проблемы
                    </label>
                </div>
                <select name="repairA" class="custom-select" id="inputGroup2">
                    <option value="0">Проблемы с интернетом
                    </option>
                    <option value="1">Проблемы с персональным компьютером
                    </option>
                </select>
            </div>

            <div class="input-group mb-3"><!-- инпут описания проблемы-->
                <div class="input-group-prepend">
                    <span class="input-group-text">Описание проблемы</span>
                </div>
                <textarea name="descriptionA" class="form-control" aria-label="With textarea" id="textarea1"></textarea>
            </div>

            <div class="input-group mb-3"><!-- Имя Клиента -->
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Как к вам обращаться?</span>
                </div>
                <input type="text" name="name_cA" class="form-control" placeholder="Иван"
                       aria-label="Address" aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3"><!-- Мобильный номер -->
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2">+38 071</span>
                </div>
                <input type="tel" name="phone" pattern="\d{3}\d{2}\d{2}" class="form-control"
                       placeholder="Номер феникс в формате XXX XXXX" maxlength='7'>
            </div>


            <div class="form-check mb-3"><!-- Обратный звонок -->
                <input name="callbackA" class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    Получить обратный звонок от технической поддержки ?
                </label>
            </div>

            <div class="input-group mb-3"><!-- Лицевой счет -->
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon3">Лицевой счет</span>
                </div>
                <input type="tel" pattern="\d{10}"
                       class="form-control" name="personal_accountA"
                       placeholder=" ЛС XXX XXX XXXX" maxlength='10'>
            </div>

            <button
                    type="submit" name="sendTusk" class="btn btn-secondary" id="add">Отправить
            </button>
            <label class="label-submit"> Нажимаю кнопку отправить, <br>вы подтверждаете согласие с условиями <br>
                </bt><span> <a href="">Пользовательского соглашения</a></span>
            и <br>
                <span><a href="">Политикой обработки персональных данных.</a></span>
            </label>
        </form>

    </div>
</div>
<!-- Футер странички -->
<footer>
    <div class="col-md-11 sputnik-footer__col">
        <p id="footer-p-m">
            2020 © Спутник TV
        </p>
    </div>
</footer>
<!--  -->


<!-- подключаем jquery для бутстрапа  -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<!-- Основные файлы бутстрапа -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
<script src="/js/main.js"></script>
</body>
</html>