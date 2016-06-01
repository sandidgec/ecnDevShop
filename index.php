<!DOCTYPE html>
<html>

<head>
    <?php require_once("lib/head-utils.php");?>
</head>

<body>

<?php require_once("navBar.php");?>

<header>
    <div id="whereShitgoes" class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>What is Cheii's DevShop</h1>
                <p>
                    Cheii's DevShop is determined to provide excellent mobile and web designs to neighboring communities
                    &amp; businesses.
                </p>
            </div>

            <div id="photoIcons" class="col-md-4">
                <img src="/lib/images/cheiiDevShopLogo.png" alt=""/>
            </div>
        </div>
<<<<<<< Updated upstream
=======
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="#missionState">Mission Statement</a></li>
                <li><a href="#erd">ERD</a></li>
                <li><a href="#aboutUs">About Us</a></li>
                <li><a href="#wireFram">Wire Frame</a></li>
                <li><a href="#useCs">Use Case</a></li>
                <li><a href="#adminPanel.php">Admin</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
>>>>>>> Stashed changes

        <div class="row">
            <div class="col-md-2 col-md-offset-5">
                <button type="button" id="learnMoreBtn" class="btn btn-default"><a href="#takeMeThere"> LEARN MORE </a></button>
            </div>
        </div>
    </div>
</header>


<div id="carslide" class="container">
    <div class="row" id="takeMeThere">
        <div class="col-sm-12">
            <div id="my-slider" class="carousel slide" data-ride="carousel">

                <!-- indicators dot nov -->
                <ol class="carousel-indicators">
                    <li data-target="#my-slider" data-slide-to="0" class="active"></li>
                    <li data-target="#my-slider" data-slide-to="1"></li>
                    <li data-target="#my-slider" data-slide-to="2"></li>
                    <li data-target="#my-slider" data-slide-to="3"></li>
                    <li data-target="#my-slider" data-slide-to="4"></li>
                    <li data-target="#my-slider" data-slide-to="5"></li>
                    <li data-target="#my-slider" data-slide-to="6"></li>
                </ol>

                <!-- wrapper for slides-->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="lib/images/jsgiffy.gif" alt="" />
                        <div class="carousel-caption">
                            <h1 class="text-center">Intro to Javascript</h1>
                            <p class="text-center">
                                <a class="btn btn-lg btn-primary" href="#" role="button">Learn More</a>
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="lib/images/render.gif" alt="javascript" />
                        <div class="carousel-caption">
                            <h1 class="text-center">More complex codding</h1>
                        </div>
                    </div>
                    <div class="item">
                        <img src="lib/images/plstrnOn.gif" alt="javascript" />
                        <div class="carousel-caption">
                            <h1 class="text-center">Hitting the power of JS</h1>
                        </div>
                    </div>
                    <div class="item">
                        <img src="lib/images/timer.gif" alt="javascript" />
                        <div class="carousel-caption">
                            <h1 class="text-center">It does require more time to code Java</h1>
                        </div>
                    </div>
                    <div class="item">
                        <img src="lib/images/jsSwitch.gif" alt="javascript" />
                        <div class="carousel-caption">
                            <h1 class="text-center">Dope</h1>
                        </div>
                    </div>
                    <div class="item">
                        <img src="lib/images/jscj.gif" alt="javascript" />
                        <div class="carousel-caption">
                            <h1 class="text-center">Javascript controls how your site acts</h1>
                        </div>
                    </div>
                </div>

                <!-- controls for next and prev buttons-->
                <a class="left carousel-control" href="#my-slider" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#my-slider" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>What is Javascript?</h1>
            <p>
                JavaScript is a cross-platform, object-oriented scripting language.
                It is a small and lightweight language. Inside a host environment
                (for example, a web browser), JavaScript can be connected to the
                objects of its environment to provide programmatic control over them.
            </p>
        </div>
        <div class="col-md-6">
            <h1>JavaScript and Java</h1>
            <p>
                JavaScript and Java are similar in some ways but fundamentally
                different in some others. The JavaScript language resembles Java but
                does not have Java's static typing and strong type checking. JavaScript
                follows most Java expression syntax, naming conventions and basic control-flow
                constructs which was the reason why it was renamed from LiveScript to JavaScript.
            </p>
        </div>
    </div>
</div>

<script src="lib/js/glideScroll.js"></script>

</body>

</html>
