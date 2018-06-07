<html>
<head>
    <meta charset="UTF-8"/>
    <title>ICO</title>
    <!--<script src="resources/js/jquery.js"></script>-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="/resources/animate/js/jquery.waypoints.js"></script>
    <script src="resources/js/functions.js"></script>
    <link rel="stylesheet" href="resources/css/fonts.css">
    <link rel="stylesheet" href="resources/css/style.css">
</head>
<body>

<?php require_once "resources/tpl/header.tpl";?>

<!-- puplic form -->
<div class="puplicFormContainer">
    <div class="formBg">
        <div class="name">Опубликовать ICO</div>
        <div class="fillForm">Заполните форму для публикации Вашего ICO.</div>
        <div class="dataContainer">
            <input type="text" placeholder="Название проекта" class="enterData"/>
            <div class="calendarContainer">
                <div class="calenderIcon"></div>
                <input type="text" placeholder="Дата ICO" class="chooseDate"/>
            </div>
            <input type="text" placeholder="Контактные данные" class="enterData"/>
            <input type="text" placeholder="Вебсайт проекта" class="enterData"/>
        </div>
        <div class="chooseOptionContainer">
            <div class="optionChoose">
                <div class="name">ПОЖАЛУЙСТА,ВЫБЕРИТЕ ОПЦИЮ РАЗМЕЩЕНИЯ</div>
                <div class="options">Полный анализ </div>
                <div class="options">Полный аудит проекта</div>
                <div class="buttonSend">
                    <div class="buttonOrange">Отправить</div>
                </div>
            </div>
            <div class="description">
                После заполнения формы ICOscoring оценивает,
                переводит на языки сайта и публикует проект на платформе.
                Подробные описания базовых категорий проекта: «продукт»,
                «рынок», «финансы», «команда», «бизнес-модель»,
                а также оценка основных рисков по ним не входят в опцию и
                приобретаются за отдельную плату. 
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<!-- -->

<?php require_once "resources/tpl/footer.tpl";?>

</body>
</html>