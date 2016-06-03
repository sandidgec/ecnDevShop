<!DOCTYPE html>
<html>

<head>
    <?php require_once("lib/head-utils.php");?>
</head>

<body>

<?php require_once("navBar2.php");?>

<header>
    <div id="whereShitgoes" class="container">

        <div class="row">
            <div class="col-md-8">
                <h1>Cheii's DevShop</h1>
                <p>
                    In the Diné culture the Horned Toad is addressed as “grandpa” (cheii). It possesses spiritual power.
                    When you see one, pick it up and rub it on your chest and say, “I will be in good health and harmony”.
                </p>
            </div>

            <div id="photoIcons" class="col-md-2 col-md-offset-2">
                <img src="/lib/images/cheiiDevShopLogo.png" alt=""/>
            </div>

        </div>


        <div class="row" id="launchButton">
            <div class="col-md-2 col-md-offset-5">
                <a href="#cheiiShop"><button type="button" id="learnMoreBtn" class="btn btn-default">learn more</button></a>
            </div>
        </div>
    </div>



    </div>
</header>



<div class="container" id="cheiiShop">
    <div class="row">
        <div class="col-md-6">
            <h1>What we do</h1>
            <p>
                We are a web and mobile development shop.  We are the first of its kind on Navajo land.  Come to us and
                we will provide you with the best and most up to date development for you web site or mobile applications.
            </p>
        </div>
        <div class="col-md-6">
            <h1>Our team</h1>
            <p>
                Our staff are more than confident to take on any problem that you need solving.  With skill sets ranging
                to front end customization, back end database knowledge, javascript, css and php.
            </p>
        </div>
    </div>
    <?php require_once ("ourServices.php");?>

</div>


<footer>
    <?php require_once("footer.php");?>
</footer>

<script src="lib/js/glideScroll.js"></script>

</body>

</html>
