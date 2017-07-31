<!DOCTYPE html>
<html>

<head>
    <title>Contact</title>
    <?php require_once("lib/head-utils.php");?>
    <link rel="short icon" href="/lib/images/cheiiDevShopLogo120.png"/>

</head>

<body>

<?php require_once("navBar2017.php");?>

<div class="container" id="top">
    <div class="jumbotron">
        <h1 id="contact" class="text-center">Contact Us</h1>
        <address class="text-center">
            <strong><span id="cheiiAddress">Cheii's Web Development</span></strong><br>
            P.O. Box 3684 Farmington, NM 87499<br>
            <abbr title="Phone">Phone:</abbr> (602) 323-4132
            <br>
            <abbr title="Email">Email:</abbr> cheiisdevshop@gmail.com
            <br>
            <abbr title="Office">Office</abbr> 1255 Mission Ave, Farmington NM 87401
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

        <div id="map"></div>
        <script>
            function initMap() {
                var uluru = {lat: 36.71583 , lng: -108.227547};
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 13,
                    center: uluru
                });
                var marker = new google.maps.Marker({
                    position: uluru,
                    map: map
                });
            }
        </script>

        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDbyxMukLCuLG32oMEAjL9eCiW2otOn9qA&callback=initMap">
        </script>

    </div>
</div>

<div class="fb-like" data-href="https://www.facebook.com/cheiidevshop/?ref=aymt_homepage_panel" data-width="300 x 300" data-layout="standard" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>


</body>

<style>

    body {
        background-image: url("/lib/images/cheiisSkies.png");
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: ;
    }

    #cheiiAddress {
        font-size: 2.5rem;
    }

    #map {
        height: 400px;
        width: 100%;
    }

</style>

<footer>

    <?php require_once("footer.php");?>
</footer>


<script src="lib/js/glideScroll.js"></script>
