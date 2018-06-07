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

<!-- create -->
<div class="createBg">
    <div class="generalWidth">
        <div class="formContainer">
            <div class="name">Create an account</div>
            <div class="fieldContainer">
                <div class="fieldName">Username</div>
                <div class="field">
                    <input type="text" class="fillData" />
                </div>
                <div class="clear"></div>
            </div>
            <div class="fieldContainer">
                <div class="fieldName">Email</div>
                <div class="field">
                    <input type="text" class="fillData" />
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
            <div class="fieldContainer">
                <div class="fieldName">Confirm password</div>
                <div class="field">
                    <input type="password" class="fillData" />
                </div>
                <div class="clear"></div>
            </div>
            <div class="acceptPrivatePolice">
                By clicking Sing in, you’re accepting
                the <a href="">Terms of Use</a> and <a href="">Privacy Policy.</a>
            </div>
            <div class="buttonContainer">
                <a href="" class="buttonOrange createButton">Register</a>
            </div>
            <div class="haveAccount">
                Already have an account? <a href="">Login</a>
            </div>
        </div>
    </div>
</div>
<!--  -->

<?php require_once "resources/tpl/footer.tpl";?>

</body>
</html>
