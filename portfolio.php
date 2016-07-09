<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once("lib/head-utils.php");?>
</head>

<body>

<?php require_once("navBar.php");?>

<div class="container">
    <div class="jumbotron">
        <h1>Meet our team!</h1>
    </div>
</div>

<!-- START THE FEATURETTES -->

<hr class="featurette-divider">

<div class="featurette">
    <img class="featurette-image pull-right" src="../assets/img/examples/browser-icon-chrome.png">
    <h2 class="featurette-heading">First featurette headling. <span class="muted">It'll blow your mind.</span></h2>
    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
</div>

<hr class="featurette-divider">

<div class="featurette">
    <img class="featurette-image pull-left" src="../assets/img/examples/browser-icon-firefox.png">
    <h2 class="featurette-heading">Oh yeah, it's that good. <span class="muted">See for yourself.</span></h2>
    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
</div>

<hr class="featurette-divider">

<div class="featurette">
    <img class="featurette-image pull-right" src="../assets/img/examples/browser-icon-safari.png">
    <h2 class="featurette-heading">And lastly, this one. <span class="muted">Checkmate.</span></h2>
    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
</div>

<hr class="featurette-divider">

<!-- /END THE FEATURETTES -->

<style>
    body {
        background-image: url("/lib/images/cheiisSkies.png");
        background-size: cover;
        background-attachment: fixed;
    }

    /* Featurettes
    ------------------------- */

    .featurette-divider {
        margin: 80px 0; /* Space out the Bootstrap <hr> more */
    }
    .featurette {
        padding-top: 120px; /* Vertically center images part 1: add padding above and below text. */
        overflow: hidden; /* Vertically center images part 2: clear their floats. */
    }
    .featurette-image {
        margin-top: -120px; /* Vertically center images part 3: negative margin up the image the same amount of the padding to center it. */
    }

    /* Give some space on the sides of the floated elements so text doesn't run right into it. */
    .featurette-image.pull-left {
        margin-right: 40px;
    }
    .featurette-image.pull-right {
        margin-left: 40px;
    }

    /* Thin out the marketing headings */
    .featurette-heading {
        font-size: 50px;
        font-weight: 300;
        line-height: 1;
        letter-spacing: -1px;
    }
</style>

<footer>
    <?php require_once("footer.php");?>
</footer>

</body>
</html>
