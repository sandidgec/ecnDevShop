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
                    Determined to providing excellent web and mobile designs to neighboring communities
                    &amp; businesses.
                </p>
            </div>

            <div id="photoIcons" class="col-md-4">
                <img src="/lib/images/cheiiDevShopLogo.png" alt=""/>
            </div>
        </div>


        <div class="row" id="launchButton">
            <div class="col-md-2 col-md-offset-8">
                <a href="#takeMeThere"><button type="button" id="learnMoreBtn" class="btn btn-default">LEARN MORE</button></a>
            </div>
        </div>
    </div>
</header>


<div id="learn-more" class="container info-content">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2 class="h2font2" id="takeMeThere">What is Cheii's DevShop?</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 text-center">
            <h2 class="h2font2">What services do we provide??</h2>
        </div>
    </div>
</div>

<div class="container" id="cheiiShop">
    <div class="row">
        <div class="col-md-6">
            <p>
                We are a web and mobile development shop.  We are the first of its kind on Navajo land.  Come to us and
                we will provide you with the best and most up to date development for you web site or mobile applications.
            </p>
        </div>
        <div class="col-md-6">
            <p>
                Our staff are more than confident to take on any problem that you need solving.  With skill sets ranging
                to front end customization, back end database knowledge, javascript, css and php.
            </p>
        </div>
    </div>
</div>

<script src="lib/js/glideScroll.js"></script>

<footer>
    <?php require_once("footer.php");?>
</footer>


</body>

</html>
