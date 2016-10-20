<!DOCTYPE html>
<html>

<head>
    <title>Contact</title>
    <?php require_once("lib/head-utils.php");?>
</head>

<body>

<?php require_once("navBar.php");?>

<div class="container" id="top">
    <div class="jumbotron">
        <h1 id="contact" class="text-center">Contact Us</h1>
        <address class="text-center">
            <strong><span id="cheiiAddress">Cheii's Web Development</span></strong><br>
            P.O. Box 720 Farmington, NM 87499<br>
            <abbr title="Phone">Phone:</abbr> (602) 323-4132
         </address>
<!--        <form class="form-inline">-->
<!--            <div class="form-group">-->
<!--                <label for="exampleInputEmail1"> Name </label>-->
<!--                <input type="name" class="form-control" id="exampleInputName" placeholder="First Last">-->
<!--             </div>-->
<!--            <div class="form-group">-->
<!--                <label for="exampleInputPassword1"> Email </label>-->
<!--                <input type="email" class="form-control" id="exampleInputEmai1" placeholder="mail@email.com">-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <label for="exampleInputPassword1">Phone</label>-->
<!--                <input type="phone" class="form-control" id="exampleInputPhoneNumber" placeholder="Phone Number">-->
<!--            </div>-->
<!--            <button type="submit" id="submitBtn" class="btn btn-default">Submit</button>-->
<!--        </form>-->
    </div>
</div>

<div id="photoIcons" class="row" style="margin-bottom: 5%">
    <div class="col-md-2 col-md-offset-5">
        <img src="/lib/images/cheiiDevShopLogo.png" alt=""/>
    </div>
</div>


<div class="fb-like" data-href="https://www.facebook.com/cheiidevshop/?ref=aymt_homepage_panel" data-width="300 x 300" data-layout="standard" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>


</body>

<style>

    #contact {
        margin-bottom: 20px;
    }

    body {
        background-image: url("/lib/images/cheiisSkies.png");
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: ;
    }

    #cheiiAddress {
        font-size: 2.5rem;
    }
</style>

<footer>

    <?php require_once("footer.php");?>
</footer>

<script src="lib/js/glideScroll.js"></script>


