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

<!-- log in -->
<div class="loginBg">
    <div class="generalWidth">
        <div class="formContainer">
            <div class="name">Log in to Your Account</div>
            <div class="fieldContainer">
                <div class="fieldName">Email</div>
                <div class="field">
                    <input type="text" class="fillData" placeholder="or username"/>
                </div>
                <div class="clear"></div>
            </div>
            <div class="fieldContainer">
                <div class="fieldName">Password</div>
                <div class="field">
                    <input type="password" class="fillData" />
                </div>
                <div class="clear"></div>
            </div>
            <div class="actions">
                <div class="remember">
                    <div class="text">
                        Keep me logged in for 30 days
                    </div>
                </div>
                <div class="forgotPas">
                    <a href="">Forgot password?</a>
                </div>
                <div class="clear"></div>
            </div>
            <div class="buttonContainer">
                <a href="" class="buttonOrange createButton">Login</a>
            </div>
            <div class="haveAccount">
                Need an account? <a href="">Sing in</a>
            </div>
        </div>
    </div>
</div>
<!--  -->

<?php require_once "resources/tpl/footer.tpl";?>

</body>
</html>
