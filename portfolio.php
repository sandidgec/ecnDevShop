<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once("lib/head-utils.php");?>
    <link rel="short icon" href="/lib/images/cheiiDevShopLogo120.png"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">


</head>
<style>
    body {
        background-color: #99DAD6;
    }
    hr {
        background-color: red;
        border: 0 none;
        color: saddlebrown;
        height: 5px;
    }

    h1{
        font-size: 75px;
        font-family: 'Roboto Slab', serif;

    }
    p {
        font-family: 'Roboto Slab', serif;
    }

    video{
        padding-right: 20px;
    }

    .embed-responsive .embed-responsive-item, .embed-responsive embed, .embed-responsive iframe, .embed-responsive object, .embed-responsive video {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        width: 400px;
        height: 300px;
        border: 0;
    }
    .embed-responsive-16by9 {
        padding-bottom: 27%;
    }

    #block1 {
        background-color: white;

    }
    #block1b {
        background-color: white;
        padding-bottom: 70px;
    }

</style>



<body>

<?php require_once("navBar2017.php");?>

<div class="container">
    <h1 class="text-center">EXPLAINER VIDEOS</h1>
    <p class="text-center">We Offer 3 Types</p>
    <hr>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-4 padding-zero embed-responsive  embed-responsive-16by9" controls controlsList="nodownload">
            <video width="512" height="380" controls controlsList="nodownload">
                <source src="/lib/video/template.mp4" type="video/mp4">
            </video>
            <div class="text-center">
                <p>TEMPLATE</p>
            </div>
        </div>

        <div class="col-md-4 padding-zero embed-responsive  embed-responsive-16by9" controls controlsList="nodownload">
            <video width="512" height="380" controls controlsList="nodownload">
                <source src="/lib/video/shima-navajolandbundle.mp4" type="video/mp4">
            </video>
            <div class="text-center">
                <p>CUSTOM</p>
            </div>
        </div>

        <div class="col-md-4 padding-zero embed-responsive  embed-responsive-16by9" controls controlsList="nodownload">
            <video width="512" height="380" controls controlsList="nodownload">
                <source src="/lib/video/anime.mp4" type="video/mp4">
            </video>
            <div class="text-center">
                <p>ANIMATION</p>
            </div>
        </div>
    </div>
</div>

<br>
<br>



<div class="container-fluid" id="block1">
       <h1 class="text-center">PROJECTS</h1>
       <p class="text-center">Click to view</p>
    <hr size="90">
</div>

<div class="container-fluid"id="block1b" >
    <div class="row">
        <div class="col-md-6 col-md-offset-2">
            <div class="portImageLeft">
                <a href="http://terricreates.com//"><img src="lib/images/devSite/terriCreates.jpg" width="770px" height="400px"></a>
            </div>
        </div>
    </div>
</div>




<br>

<br>
<div class="container">
    <h1 class="text-center">PORTFOLIO</h1>
    <p class="text-center">Click to view</p>
    <hr>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-2">
            <div class="portImageLeft">
                <a href="http://ryansamwebdesign.com/"><img src="lib/images/devSite/SWD.png"></a>
            </div>
        </div>
    </div>
</div>
<br>
<br>





<link rel="stylesheet" href="css/main.css" type="text/css" media="all" />
<script src="js/main.js" type="text/javascript"></script>


<footer>
    <?php require_once("footer.php");?>
</footer>

<script src="lib/js/3dGallery.js" type="text/javascript"></script>

</body>
</html>
