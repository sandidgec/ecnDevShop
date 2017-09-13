
<!DOCTYPE html>
<html>

<?php require_once("navbarA.php");?>


<head>

    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lateef|Molengo" rel="stylesheet">


</head>
<script>


</script>

<style>
    html,
    body {
        font-family: 'Martel', serif;
        font-weight: 100;
        color: #333;
        font-size: 16px;
    }

    body {
        margin: 0; /* for some reason there was an 8px margin by default */
        background-color: #99DAD6;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    nav,
    .description,
    .date {
        font-family: 'Montserrat', sans-serif;
        text-transform: uppercase;
    }

    a {
        color: #a06148;
        text-decoration: none;
    }

    a:hover {
        color: #99DAD6;

    }

    /* ------------- Header ------------- */

    .hero {
        background: #fff url('/lib/images/cheiisHorse.jpg') no-repeat center center;
        background-size: cover;

        /* This is the new stuff that fixed my problem */
        height: 80vh;
        display: flex;
        justify-content: center;
        align-items: center;

    }

    .hero-contents p {
        text-align: center;
        font-family: 'Roboto Slab', serif;
        font-size: 50px;
        color: white;

    }

    .hero-contents a:hover {
        border-bottom: none;
        opacity: 0.8;
    }

    .hero-contents img {
        max-width: 70%;
    }

    .hero-contents .description {
    }

    /* ------------- Main ------------- */

    main {
        margin-top: 100px;
    }

    article h1 {
        font-size: 1.625em;
        line-height: 1.2em;

    }

    article h2 {
        font-size: 1em;
        line-height: 1.2em;
        margin: 30px 0;
    }

    article p {
        line-height: 1.75em;
    }

    .date {
        text-align: right;
        color: #a3a3a3;
    }

    /* ------------- Footer ------------- */

    /* ------------- Navigation ------------- */

    nav ul {
        list-style: none;
        padding: 0;
        display: block;
        text-align: center;
    }

    nav ul li {
        display: block;
        margin: 20px 0;
    }

    nav ul li a {
        color: #99DAD6;
        text-decoration: none;
    }


    /* -------------------------- Responsive -------------------------- */

    /* ------------- Tablet ------------- */

    @media (min-width: 1200px) {
        nav ul li {
            display: inline-block;
            margin: 0 20px;
        }

        main {
            padding: 0;
            margin: 100px auto;
            max-width: 600px;
        }
    }
    .col-sm-4 {
        text-align: center;
    }



    h1{
        font-family: 'Roboto Slab', serif;
        font-size: 50px;
        color: #a06148;

    }
    h2{
        font-family: 'Roboto Slab', serif;
        font-size: 35px;
        color: #99DAD6;

    }
    h3 {
        font-size: 15px;
        font-family: 'Molengo', sans-serif;

    }
     #header{
        padding-bottom: 50px;
    }
    .circleBase {
        border-radius: 50%;
        padding-top: 30px;
    }
    .type3 {
        width: 430px;
        height: 430px;
        background: white;
        border: 50px black;
    }
    #sectionA{
        background-color: darkcyan;
        padding-top: 25px;
        padding-bottom: 25px;
        background-image: url("/lib/images/mar-bocatcat-306981.jpg");
    }

    #sectionB{
        background-color: darkgray;
        padding-top: 25px;
        padding-bottom: 25px;
        background-image: url("/lib/images/cheiisSkies.png");




    }

    /* phone css for circles */
    @media screen and (max-width: 1200px) {
        .type3 {
            width: 300px;
            height: 300px;
            background: white;
            border: 50px black;
        }

    }

    nav p {
        text-align: center;
    }
    footer {
        background-color: white;
    }
    footer h1 {
        color: black;
    }
    footer a {
        color: #99DAD6;
    }

</style>

<body>

<header>
    <div class="hero">
        <div class="hero-contents">
            <p class="description">LET US HELP YOU TELL YOUR STORY</p>
        </div>
    </div>
</header>

<br>
<br>
<div class="container" id="header">
    <h1><center>Cheiis Web Development Shop</center></h1>

</div>

    <div class="container-fluid" id="sectionA">
        <div class="row">
            <div class="col-sm-4">
                <div class="circleBase type3">

                <h2>Social Media Integrations</h2>
                <a href=""> <i class="fa fa-globe fa-5x" aria-hidden="true"></i></a>
                <h3>Our Social Media Department works on a variety of different levels
                    when it comes to properly maintaining clients' social media sites.</h3>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="circleBase type3">

                <h2>Explainer <br>Videos</h2>
                <a href=""> <i class="fa fa-play-circle-o fa-5x" aria-hidden="true"></i></a>
                <h3>The new craze right now is marketing videos that are in the form of white board animation,</h3>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="circleBase type3">

                <h2>ETSY <br>Integration</h2>
                <a href=""> <i class="fa fa-shopping-cart fa-5x" aria-hidden="true"></i></a>
                <h3>We can help you set your Etsy account and maintain it. </h3>
                </div>
            </div>
        </div>
    </div>




<div class="container-fluid" id="sectionB">
    <div class="row">

            <div class="col-sm-4">
                <div class="circleBase type3">
                <h2>Logo Design <br> Consulting</h2>
                <a href=""><i class="fa fa-pencil-square-o fa-5x center" aria-hidden="true"></i></a>
                <h3>More logo designs are out there than ever before, and with that comes the challenge of being different.</h3>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="circleBase type3">

                <h2>Graphic <br>Design</h2>
                <a href=""> <i class="fa fa-pencil fa-5x" aria-hidden="true"></i></a>
                <h3>The form of the communication can be physical or virtual, and may include images, words, or graphic forms.</h3>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="circleBase type3">

                <h2>Photography<br> Services</h2>
                <a href=""> <i class="fa fa-camera fa-5x" aria-hidden="true"></i></a>
                <h3>This service will help you showcase your work professional on your website.</h3>
                </div>

            </div>
    </div>
</div>




<footer>
        <h1><center>Contact Us</center></h1>

        <div class="row">
            <div class="container">
                <div class="col-sm-4" id="icons">
                    <a href="https://www.facebook.com/cheiidevshop/" target="_blank"><i class="fa fa-facebook fa-5x" aria-hidden="true"></i>
                    </a>
                    <br>
                    <a href="https://twitter.com/cheiisDevShop" target="_blank"><i class="fa fa-twitter fa-5x" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="col-sm-4 ">
                    <a href="index.php">
                        <img src="/lib/images/cheiiDevShopLogo.png" alt="" width="120" height="120" border="0">
                    </a>
                </div>
                <div class="col-sm-4">
                <p>Cheii's Web Development<br>
                    P.O. Box 3684 Farmington, NM 87499<br>
                    Phone: (602) 323-4132<br>
                    Email: cheiisdevshop@gmail.com<br>
                    Office 1255 Mission Ave, Farmington NM 87401</p>
                </div>
            </div>
            <p><center>© 2017 Cheii's Web Development Shop. All Rights Reserved.</center</p>
        </div>

</footer>

</body>
