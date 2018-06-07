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

<!-- header -->
<div class="headerBg">
    <div class="generalWidth">
        <div class="contentPart">
            <div class="exchangeRateContainer">
                <div class="currencyContainer">
                    Bitcoin
                    <span data-sing="-">+0,5%</span>
                </div>
                <div class="currencyContainer">
                    Bitcoin
                    <span data-sing="+">+0,5%</span>
                </div>
                <div class="currencyContainer">
                    Bitcoin
                    <span data-sing="-">+0,5%</span>
                </div>
            </div>
            <div class="name">
                Одна платформа —
                <div></div>всё, что вам нужно
            </div>
            <div class="buttonsContainer dropHeader">
                <div class="field dropHeader">
                    <input type="text" class="fieldEmail dropFieldEmail" placeholder="email"/>
                    <div class="buttonSub">Subscribe</div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<!-- -->

<!-- drop -->
<div class="generalWidth">
    <div class="dropContainer">
        <div class="dropBg">
            <div class="name">Drop us a line</div>
            <div class="fieldSub">Email</div>
            <input type="text" class="fieldEmail"/>
            <div class="fieldSub">Message</div>
            <textarea class="fieldMessage"></textarea>
            <div class="acceptPrivatePolice">
                Accept <a href="">Privacy policy</a>
            </div>
            <div class="buttonContainer">
                <a href="" class="buttonOrange dropSend">Send</a>
            </div>
        </div>
        <div class="lineBlue dropBlueLine"></div>
    </div>
</div>
<!-- -->

<?php require_once "resources/tpl/footer.tpl";?>

</body>
</html>
