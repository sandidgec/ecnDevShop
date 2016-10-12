<!DOCTYPE html>
<html>

<head>
    <?php require_once("lib/head-utils.php");?>
    <title>Cheii's Web Development</title>
    <link rel="stylesheet" href="lib/css/services.css">

    <link rel="stylesheet" href="contact.php" />
</head>

<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>


<?php require_once("navBar.php");?>

<div id="content" class="container">
    <div class="row">
        <div class="col-md-8">
            <h1>Cheii's Web Development</h1>
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
                        <i class="fa fa-globe" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="col-md-9">
                    <h2 class="featurette-heading">Social Media Intergration<br><span class="muted"></span></h2>
                    <p class="lead">Our Social Media Department works on a variety of different levels when it comes to
                        properly maintaining clients' social media sites.  Maintaining social media sites requires a lot
                        more attention than just posting an article or a photo every once in a while, to a Facebook or Twitter page.
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
                    <h2 class="featurette-heading">E-Commerce Solutions<br> <span class="muted"></span></h2>
                    <p class="lead">-Ecommerce allows consumers to electronically exchange goods and services with no
                        barriers of time or distance. Electronic commerce has expanded rapidly over the past five years
                        and is predicted to continue at this rate, or even accelerate. In the near future the boundaries
                        between "conventional" and "electronic" commerce will become increasingly blurred as more and
                        more businesses move sections of their operations onto the Internet.
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
                        <i class="fa fa-envelope-square" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="col-md-9">
                    <h2 class="featurette-heading">Professional Email Setup<br><span class="muted"></span></h2>
                    <p class="lead">The first thing every business owner needs is a professional email address. After you setup
                        your website, the next most important to do is create a professional branded email address.
                        In this article, we will show you how to setup professional email address with Google Apps and Gmail.
                        A professional email is the one that has your business name in it.
                        For example, john@myphotostudio.com is a professional email address.
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
                    <h2 class="featurette-heading">Membership System<br> <span class="muted"></span></h2>
                    <p class="lead">Membership software (also known as an association management system) is a computer software
                        solution which provides associations, clubs and other membership organizations with the functionality
                        they require to provide their services to their members.  It normally includes storing and editing
                        member information in a database, creating, renewing, upgrading and downgrading memberships and
                        communicating with members by email, social media, telephone or post.
                    </p>
                </div>
                <div class="col-md-3">
                    <i class="fa fa-user-plus" aria-hidden="true"></i>
                </div>
            </div>
        </div>


    <hr class="featurette-divider">

    <div class="container">
        <div class="featurette">
            <div class="row">
                <div class="col-md-3">
                    <div>
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="col-md-9">
                    <h2 class="featurette-heading">ETSY Integration<br><span class="muted"></span></h2>
                    <p class="lead">Etsy is a marketplace where people around the world connect, both online and offline, to make, sell and buy unique goods.
                        We can help you set your Etsy account and maintain it.  The heart and soul of Etsy is
                        our global community: the creative entrepreneurs who use Etsy to sell what they make or curate, the shoppers looking for
                        things they can’t find anywhere else, the manufacturers who partner with Etsy sellers to help them grow,
                        and the Etsy employees who maintain and nurture our marketplace.
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
                        <h2 class="featurette-heading">Logo Design Services<br> <span class="muted"></span></h2>
                        <p class="lead">Logo design is all around us. To the general public, logos serve as an instant
                            reminder of a company or a product; to the client they're the point of recognition on which
                            their branding hangs; and to us designers they represent the challenge of incorporating our
                            clients' ideologies into one single graphic.  In an age where everyone must have a website to
                            support their product, service or the company behind it, the demand for a top-class logo has never been higher.
                            More logo designs are out there than ever before, and with that comes the challenge of being different.
                            How do you create something original that stands out in a sea of identities? And how do we
                            create something quickly while retaining quality?  Here at Cheii’s Web Development, we can help.
                        </p>
                    </div>
                    <div class="col-md-3">
                        <i class="fa fa-paint-brush" aria-hidden="true"></i>
                    </div>
                </div>
            </div>


            <hr class="featurette-divider">

            <div class="container">
                <div class="featurette">
                    <div class="row">
                        <div class="col-md-3">
                            <div>
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <h2 class="featurette-heading">Graphic Design<br><span class="muted"></span></h2>
                            <p class="lead">Graphic design, also known as communication design, is the art and practice of
                                planning and projecting ideas and experiences with visual and textual content. The form of the
                                communication can be physical or virtual, and may include images, words, or graphic forms.
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
                    <h2 class="featurette-heading">Photography Services<br><span class="muted"></span></h2>
                    <p class="lead">Photography is the science, art, application and practice of creating durable images
                        by recording light or other electromagnetic radiation, either electronically by means of an image
                        sensor, or chemically by means of a light-sensitive material such as photographic film.
                        This service will help you showcase your work professional on your website.  And we can help with that.
                    </p>
                </div>
                <div class="col-md-3">
                    <div>
                        <i class="fa fa-camera" aria-hidden="true"></i>
                    </div>
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
                We are a web and mobile development shop.  We are the first of its kind on Navajoland.  Come to us and
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
