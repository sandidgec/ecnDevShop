<!DOCTYPE html>
<html>

<head>
    <?php require_once("lib/head-utils.php");?>
</head>

<body>

<?php require_once("navBar.php");?>


<div class="container">
    <div class="jumbotron">
        <h1 class="text-center">Our Services</h1>
        <p>We offer planning, creating, and maintaining web and mobile development. We strive to deliver up to date products in order to ensure the needs of our customers and their consumers.
                                we provide services to local and surrounding communities on and off the Navajo Nation. </p>
        <div class="row">
            <div class="col-md-1 col-md-offset-9">
                <p><a class="btn btn-primary btn-lg" href="contact.php" role="button">Contact Us</a></p>
            </div>
        </div>
    </div>

    <div id="photoIcons" class="row">
        <div class="col-md-2 col-md-offset-5">
            <img src="/lib/images/cheiiDevShopLogo.png" alt=""/>
        </div>
    </div>
</div>

<style>
    body {
        background-image: url("/lib/images/cheiisSkies.png");
        background-size: cover;
        background-attachment: fixed;
    }
</style>

<footer>
    <?php require_once("footer.php");?>
</footer>


<script src="lib/js/glideScroll.js"></script>


</body>

</html>
