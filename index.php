<!DOCTYPE html>
<html>

<head>
    <?php require_once("lib/head-utils.php");?>
</head>

<body>

<?php require_once("navBar.php");?>

<header>
    <div id="content" class="container">

        <div class="row">
            <div class="col-md-8">
                <h1>Cheii's DevShop</h1>
                <h2>In Navajoland</h2>
                <p>
                    In the Diné culture the Horned Toad is addressed as “grandpa” (cheii). It possesses spiritual power.
                    When you see one, pick it up and rub it on your chest and say, “I will be in good health and harmony”.
                </p>
            </div>

            <div id="photoIcons" class="col-md-2 col-md-offset-1 visible-md visible-lg">
                <img src="/lib/images/cheiiDevShopLogo.png" alt=""/>
            </div>

        </div>

        <div class="row" id="launchButton">
            <div class="col-md-2 col-md-offset-5">
                <a href="#cheiiShop"><button type="button" id="learnMoreBtn" class="btn btn-default">learn more</button></a>
            </div>
        </div>
    </div>


</header>



<div class="container" id="cheiiShop">
    <div class="row">
        <div class="col-md-6">
            <h1 id="services">What we do</h1>
            <p>
                We are a web and mobile development shop.  We are the first of its kind on Navajo land.  Come to us and
                we will provide you with the best and most up to date development for your mobile and web applications.
            </p>
        </div>
        <div class="col-md-6">
            <h1>Our team</h1>
            <p>
                Our team members are well skilled and creative to ensure the highest production quality. From the surrounding four corners, our team members are graduates
                of Cultivating Coders.
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
