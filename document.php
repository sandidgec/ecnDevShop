<!DOCTYPE html>
<html>

<head>
    <title>Documents</title>
    <?php require_once("lib/head-utils.php");?>
    <link rel="short icon" href="/lib/images/cheiiDevShopLogo120.png"/>

</head>

<body>

<?php require_once("navBar2017.php");?>

<div id="pdf">
    <div class="col-sm-6 col-sm-offset-3">
        <object width="800" height="1000" type="application/pdf" data="/lib/pdf/Website Questionnaire-Basic.pdf?#zoom=85&scrollbar=0&toolbar=0&navpanes=0" id="pdf_content">
            <embed src="lib/pdf/Website Questionnaire-Basic.pdf">
                <p>This browser does not support PDFs. Please download the PDF to view it: <a href="/lib/pdf/Website Questionnaire-Basic.pdf">Download PDF</a>.</p>
            </embed>

        </object>
    </div>
</div>

<div class="container" id="link">
    <div class="col-sm-6 col-sm-offset-4">
        <h1><center>Download</center></h1>
        <center><a href="/lib/pdf/Website Questionnaire-Basic.pdf">Website Questionnaire 2017</a></center>

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
    #pdf {
        padding-top: 65px;
    }
    #link {
       padding-bottom: 15px;
    }
    h1 {
        color: darkturquoise;
    }
</style>

<footer>

    <?php require_once("footer.php");?>
</footer>


<script src="lib/js/glideScroll.js"></script>
