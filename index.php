<!DOCTYPE html>
<html>

<head>
    <?php require_once("lib/head-utils.php");?>
    <title>Cheii's Web Development Shop</title>
    <link rel="stylesheet" href="lib/css/services.css">
</head>

<body>


<?php require_once("navBar.php");?>

<div id="content" class="container">
    <div class="row">
        <div class="col-md-8">
            <h1>Cheii's Web Development Shop</h1>
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
            <a href="#ourServices"><button type="button" id="learnMoreBtn" class="btn btn-default">learn more</button></a>
        </div>
    </div>
</div>

<div id="ourServices">
    <div class="container">
        <div id="featurette-jumbotron" class="jumbotron">
            <h1 class="text-center">Our Services!</h1>
            <hr class="featurette-divider-services">
            <p class="text-center">Our developers are eager and ready to take on any project you have for them.</p>
            <hr class="featurette-divider-services">
        </div>
    </div>
</div>

<!-- START THE FEATURETTES -->
<div class="featurette-section">

    <hr class="featurette-divider">

    <div class="container">
        <div class="featurette">
            <div class="row">
                <div class="col-md-3">
                    <div>
                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="col-md-9">
                    <h2 class="featurette-heading">E-Commerce Solutions<br><span class="muted"></span></h2>
                    <p class="lead">Ecommerce allows consumers to electronically exchange goods and services with no
                        barriers of time or distance. Electronic commerce has expanded rapidly over the past five
                        years and is predicted to continue at this rate, or even accelerate. In the near future the
                        boundaries between "conventional" and "electronic" commerce will become increasingly blurred as
                        more and more businesses move sections of their operations onto the Internet.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <hr class="featurette-divider">


    <div class="container">
        <div class="featurette">
            <div class="row">
                <div class="col-md-9">
                    <h2 class="featurette-heading">Web Application Development<br> <span class="muted"></span></h2>
                    <p class="lead">Web application development is the creation of application programs that reside on remote
                        servers and are delivered to the user’s device over the Internet.
                    </p>
                </div>
                <div class="col-md-3">
                    <i class="fa fa-desktop" aria-hidden="true"></i>
                </div>
            </div>
        </div>

    </div>

    <hr class="featurette-divider">

    <div class="container">
        <div class="featurette">
            <div class="row">
                <div class="col-md-3">
                    <div>
                        <i class="fa fa-mobile" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="col-md-9">
                    <h2 class="featurette-heading">Mobile Development<br><span class="muted"></span></h2>
                    <p class="lead">Bring us your idea's for a mobile app.  We'll bring it to life.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <hr class="featurette-divider">


    <div class="container">
        <div class="featurette">
            <div class="row">
                <div class="col-md-9">
                    <h2 class="featurette-heading">Cross-Platform Functionality<br> <span class="muted"></span></h2>
                    <p class="lead">80% of internet traffic is used by mobile devices.  Our product will not only be mobile
                        friendly, but have full functionality on a full scale web browser on any desktop device or laptops.
                    </p>
                </div>
                <div class="col-md-3">
                    <i class="fa fa-exchange" aria-hidden="true"></i>
                </div>
            </div>
        </div>

    </div>

    <hr class="featurette-divider">

    <div class="container">
        <div class="featurette">
            <div class="row">
                <div class="col-md-3">
                    <div>
                        <i class="fa fa-lightbulb-o" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="col-md-9">
                    <h2 class="featurette-heading">Marketing Tools & Idea Creation<br><span class="muted"></span></h2>
                    <p class="lead">Speak to one of our representatives about our marketing tools and ideas to help your
                        business grow.  Any and everything to graphic design, video editing to photography.  Our skill
                        sets are endless.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

</div>

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
</div>

<footer>
    <?php require_once("footer.php");?>
</footer>

<script src="lib/js/glideScroll.js"></script>

</body>

</html>
