
<!DOCTYPE html>
<html>

<?php require_once("lib/head-utils.php");?>




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
        background-size: 1400px 900px;

        /* This is the new stuff that fixed my problem */
        Height: 700px;
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
        max-width: 100%;
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




     #header{
        padding-bottom: 50px;
    }
    .circleBase {
        border-radius: 50%;
        padding-top: 30px;
        text-align: center;
    }
    .type3 {
        width: 200px;
        height: 200px;
        background: white;
        border: 50px black;
        text-align: center;
    }
    #sectionA{
        padding-top:
        padding-bottom: 25px;
        float: none;
        margin: 0 auto;


    }

    #sectionB{
        padding-top: 25px;
        padding-bottom: 25px;
        background-image: url();
    }

    .col-sm-4 {

        display: block;
        position: relative;
        padding-left: 7%;

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
    div.row {
        text-align: center;
    }

    /*Parallax sections*/
    #DIV_A {
        background-position: 100% 100%;
        box-sizing: border-box;
        color: rgb(51, 51, 51);
        height: 600px;
        min-height: 600px;
        overflow-wrap: break-word;
        width: 1400px;
        word-wrap: break-word;
        perspective-origin: 618px 300px;
        transform-origin: 618px 300px;
        background: rgba(0, 0, 0, 0) url('https://llamapress.com/wp-content/uploads/2015/10/social-media-management.png') repeat fixed 50% 50% / cover padding-box border-box;
        border: 0px none rgb(51, 51, 51);
        font: normal normal normal normal 16px / normal Roboto, sans-serif;
        outline: rgb(51, 51, 51) none 0px;
    }/*#DIV_1*/

    #DIV_2 {
        box-sizing: border-box;
        color: rgb(255, 255, 255);
        height: 349px;
        max-width: 800px;
        overflow-wrap: break-word;
        text-align: center;
        width: 800px;
        word-wrap: break-word;
        perspective-origin: 400px 174.5px;
        transform-origin: 400px 174.5px;
        border: 0px none rgb(255, 255, 255);
        font: normal normal normal normal 16px / normal Roboto, sans-serif;
        margin: 0px 218px;
        outline: rgb(255, 255, 255) none 0px;
        padding: 160px 0px 0px;
    }/*#DIV_2*/

    #H2_3 {
        box-sizing: border-box;
        color: rgb(255, 255, 255);
        height: 81px;
        overflow-wrap: break-word;
        text-align: center;
        text-shadow: rgba(0, 0, 0, 0.2) 0px 1px 2px;
        width: 800px;
        word-wrap: break-word;
        perspective-origin: 400px 40.5px;
        transform-origin: 400px 40.5px;
        border: 0px none rgb(255, 255, 255);
        font: normal normal 100 normal 50px / normal Roboto, sans-serif;
        margin: 0px 0px 10px;
        outline: rgb(255, 255, 255) none 0px;
        padding: 0px 0px 20px;
    }/*#H2_3*/

    #P_4 {
        box-sizing: border-box;
        color: rgb(255, 255, 255);
        height: 38px;
        overflow-wrap: break-word;
        text-align: center;
        width: 800px;
        word-wrap: break-word;
        perspective-origin: 400px 19px;
        transform-origin: 400px 19px;
        border: 0px none rgb(255, 255, 255);
        font: normal normal normal normal 16px / normal Roboto, sans-serif;
        margin: 0px 0px 20px;
        outline: rgb(255, 255, 255) none 0px;
    }/*#P_4*/

    #A_5 {
        box-sizing: border-box;
        color: rgb(255, 255, 255);
        display: inline-block;
        height: 40px;
        overflow-wrap: break-word;
        text-align: center;
        text-decoration: none;
        text-transform: uppercase;
        width: 165.172px;
        word-wrap: break-word;
        perspective-origin: 82.5781px 20px;
        transform-origin: 82.5781px 20px;
        border: 1px solid rgb(255, 255, 255);
        border-radius: 4px 4px 4px 4px;
        font: normal normal bold normal 16px / 40px Roboto, sans-serif;
        outline: rgb(255, 255, 255) none 0px;
        padding: 0px 20px;
    }/*#A_5*/

    #A_6 {
        box-sizing: border-box;
        color: rgb(255, 255, 255);
        display: inline-block;
        height: 40px;
        overflow-wrap: break-word;
        text-align: center;
        text-decoration: none;
        text-transform: uppercase;
        width: 354.766px;
        word-wrap: break-word;
        perspective-origin: 177.375px 20px;
        transform-origin: 177.375px 20px;
        border: 1px solid rgb(255, 255, 255);
        border-radius: 4px 4px 4px 4px;
        font: normal normal bold normal 16px / 40px Roboto, sans-serif;
        outline: rgb(255, 255, 255) none 0px;
        padding: 0px 20px;
    }/*#A_6*/

    /*Parallax sections*/
    #DIV_B {
        background-position: 100% 100%;
        box-sizing: border-box;
        color: rgb(51, 51, 51);
        height: 600px;
        min-height: 600px;
        overflow-wrap: break-word;
        width: 1400px;
        word-wrap: break-word;
        perspective-origin: 618px 300px;
        transform-origin: 618px 300px;
        background: rgba(0, 0, 0, 0) url('/lib/images/explainerVideos.jpg') repeat fixed 50% 50% / cover padding-box border-box;
        border: 0px none rgb(51, 51, 51);
        font: normal normal normal normal 16px / normal Roboto, sans-serif;
        outline: rgb(51, 51, 51) none 0px;
    }/*#DIV_1*/

    #DIV_2 {
        box-sizing: border-box;
        color: rgb(255, 255, 255);
        height: 349px;
        max-width: 800px;
        overflow-wrap: break-word;
        text-align: center;
        width: 800px;
        word-wrap: break-word;
        perspective-origin: 400px 174.5px;
        transform-origin: 400px 174.5px;
        border: 0px none rgb(255, 255, 255);
        font: normal normal normal normal 16px / normal Roboto, sans-serif;
        margin: 0px 218px;
        outline: rgb(255, 255, 255) none 0px;
        padding: 160px 0px 0px;
    }/*#DIV_2*/

    #H2_3 {
        box-sizing: border-box;
        color: rgb(255, 255, 255);
        height: 81px;
        overflow-wrap: break-word;
        text-align: center;
        text-shadow: rgba(0, 0, 0, 0.2) 0px 1px 2px;
        width: 800px;
        word-wrap: break-word;
        perspective-origin: 400px 40.5px;
        transform-origin: 400px 40.5px;
        border: 0px none rgb(255, 255, 255);
        font: normal normal 100 normal 50px / normal Roboto, sans-serif;
        margin: 0px 0px 10px;
        outline: rgb(255, 255, 255) none 0px;
        padding: 0px 0px 20px;
    }/*#H2_3*/

    #P_4 {
        box-sizing: border-box;
        color: rgb(255, 255, 255);
        height: 38px;
        overflow-wrap: break-word;
        text-align: center;
        width: 800px;
        word-wrap: break-word;
        perspective-origin: 400px 19px;
        transform-origin: 400px 19px;
        border: 0px none rgb(255, 255, 255);
        font: normal normal normal normal 16px / normal Roboto, sans-serif;
        margin: 0px 0px 20px;
        outline: rgb(255, 255, 255) none 0px;
    }/*#P_4*/

    #A_5 {
        box-sizing: border-box;
        color: rgb(255, 255, 255);
        display: inline-block;
        height: 40px;
        overflow-wrap: break-word;
        text-align: center;
        text-decoration: none;
        text-transform: uppercase;
        width: 165.172px;
        word-wrap: break-word;
        perspective-origin: 82.5781px 20px;
        transform-origin: 82.5781px 20px;
        border: 1px solid rgb(255, 255, 255);
        border-radius: 4px 4px 4px 4px;
        font: normal normal bold normal 16px / 40px Roboto, sans-serif;
        outline: rgb(255, 255, 255) none 0px;
        padding: 0px 20px;
    }/*#A_5*/

    #A_6 {
        box-sizing: border-box;
        color: rgb(255, 255, 255);
        display: inline-block;
        height: 40px;
        overflow-wrap: break-word;
        text-align: center;
        text-decoration: none;
        text-transform: uppercase;
        width: 354.766px;
        word-wrap: break-word;
        perspective-origin: 177.375px 20px;
        transform-origin: 177.375px 20px;
        border: 1px solid rgb(255, 255, 255);
        border-radius: 4px 4px 4px 4px;
        font: normal normal bold normal 16px / 40px Roboto, sans-serif;
        outline: rgb(255, 255, 255) none 0px;
        padding: 0px 20px;
    }/*#A_6*/

    /*Parallax sections*/
    #DIV_C {
        background-position: 100% 100%;
        box-sizing: border-box;
        color: rgb(51, 51, 51);
        height: 600px;
        min-height: 600px;
        overflow-wrap: break-word;
        width: 1400px;
        word-wrap: break-word;
        perspective-origin: 618px 300px;
        transform-origin: 618px 300px;
        background: rgba(0, 0, 0, 0) url('http://static2.businessinsider.com/image/4afc67be00000000000eb8ae/etsy-brooklyns-130-million-arts-and-craft-powerhouse.jpg') repeat fixed 50% 50% / cover padding-box border-box;
        border: 0px none rgb(51, 51, 51);
        font: normal normal normal normal 16px / normal Roboto, sans-serif;
        outline: rgb(51, 51, 51) none 0px;
    }/*#DIV_1*/

    #DIV_2 {
        box-sizing: border-box;
        color: rgb(255, 255, 255);
        height: 349px;
        max-width: 800px;
        overflow-wrap: break-word;
        text-align: center;
        width: 800px;
        word-wrap: break-word;
        perspective-origin: 400px 174.5px;
        transform-origin: 400px 174.5px;
        border: 0px none rgb(255, 255, 255);
        font: normal normal normal normal 16px / normal Roboto, sans-serif;
        margin: 0px 218px;
        outline: rgb(255, 255, 255) none 0px;
        padding: 160px 0px 0px;
    }/*#DIV_2*/

    #H2_3 {
        box-sizing: border-box;
        color: rgb(255, 255, 255);
        height: 81px;
        overflow-wrap: break-word;
        text-align: center;
        text-shadow: rgba(0, 0, 0, 0.2) 0px 1px 2px;
        width: 800px;
        word-wrap: break-word;
        perspective-origin: 400px 40.5px;
        transform-origin: 400px 40.5px;
        border: 0px none rgb(255, 255, 255);
        font: normal normal 100 normal 50px / normal Roboto, sans-serif;
        margin: 0px 0px 10px;
        outline: rgb(255, 255, 255) none 0px;
        padding: 0px 0px 20px;
    }/*#H2_3*/

    #P_4 {
        box-sizing: border-box;
        color: rgb(255, 255, 255);
        height: 38px;
        overflow-wrap: break-word;
        text-align: center;
        width: 800px;
        word-wrap: break-word;
        perspective-origin: 400px 19px;
        transform-origin: 400px 19px;
        border: 0px none rgb(255, 255, 255);
        font: normal normal normal normal 16px / normal Roboto, sans-serif;
        margin: 0px 0px 20px;
        outline: rgb(255, 255, 255) none 0px;
    }/*#P_4*/

    #A_5 {
        box-sizing: border-box;
        color: rgb(255, 255, 255);
        display: inline-block;
        height: 40px;
        overflow-wrap: break-word;
        text-align: center;
        text-decoration: none;
        text-transform: uppercase;
        width: 165.172px;
        word-wrap: break-word;
        perspective-origin: 82.5781px 20px;
        transform-origin: 82.5781px 20px;
        border: 1px solid rgb(255, 255, 255);
        border-radius: 4px 4px 4px 4px;
        font: normal normal bold normal 16px / 40px Roboto, sans-serif;
        outline: rgb(255, 255, 255) none 0px;
        padding: 0px 20px;
    }/*#A_5*/

    #A_6 {
        box-sizing: border-box;
        color: rgb(255, 255, 255);
        display: inline-block;
        height: 40px;
        overflow-wrap: break-word;
        text-align: center;
        text-decoration: none;
        text-transform: uppercase;
        width: 354.766px;
        word-wrap: break-word;
        perspective-origin: 177.375px 20px;
        transform-origin: 177.375px 20px;
        border: 1px solid rgb(255, 255, 255);
        border-radius: 4px 4px 4px 4px;
        font: normal normal bold normal 16px / 40px Roboto, sans-serif;
        outline: rgb(255, 255, 255) none 0px;
        padding: 0px 20px;
    }/*#A_6*/
    /*Parallax sections*/
    #DIV_D {
        background-position: 100% 100%;
        box-sizing: border-box;
        color: rgb(51, 51, 51);
        height: 600px;
        min-height: 600px;
        overflow-wrap: break-word;
        width: 1400px;
        word-wrap: break-word;
        perspective-origin: 618px 300px;
        transform-origin: 618px 300px;
        background: rgba(0, 0, 0, 0) url('https://www.clapcreative.com/wp-content/uploads/2014/11/logo-design.jpg') repeat fixed 50% 50% / cover padding-box border-box;
        border: 0px none rgb(51, 51, 51);
        font: normal normal normal normal 16px / normal Roboto, sans-serif;
        outline: rgb(51, 51, 51) none 0px;
    }/*#DIV_1*/

    #DIV_2 {
        box-sizing: border-box;
        color: rgb(255, 255, 255);
        height: 349px;
        max-width: 800px;
        overflow-wrap: break-word;
        text-align: center;
        width: 800px;
        word-wrap: break-word;
        perspective-origin: 400px 174.5px;
        transform-origin: 400px 174.5px;
        border: 0px none rgb(255, 255, 255);
        font: normal normal normal normal 16px / normal Roboto, sans-serif;
        margin: 0px 218px;
        outline: rgb(255, 255, 255) none 0px;
        padding: 160px 0px 0px;
    }/*#DIV_2*/

    #H2_3 {
        box-sizing: border-box;
        color: rgb(255, 255, 255);
        height: 81px;
        overflow-wrap: break-word;
        text-align: center;
        text-shadow: rgba(0, 0, 0, 0.2) 0px 1px 2px;
        width: 800px;
        word-wrap: break-word;
        perspective-origin: 400px 40.5px;
        transform-origin: 400px 40.5px;
        border: 0px none rgb(255, 255, 255);
        font: normal normal 100 normal 50px / normal Roboto, sans-serif;
        margin: 0px 0px 10px;
        outline: rgb(255, 255, 255) none 0px;
        padding: 0px 0px 20px;
    }/*#H2_3*/

    #P_4 {
        box-sizing: border-box;
        color: rgb(255, 255, 255);
        height: 38px;
        overflow-wrap: break-word;
        text-align: center;
        width: 800px;
        word-wrap: break-word;
        perspective-origin: 400px 19px;
        transform-origin: 400px 19px;
        border: 0px none rgb(255, 255, 255);
        font: normal normal normal normal 16px / normal Roboto, sans-serif;
        margin: 0px 0px 20px;
        outline: rgb(255, 255, 255) none 0px;
    }/*#P_4*/

    #A_5 {
        box-sizing: border-box;
        color: rgb(255, 255, 255);
        display: inline-block;
        height: 40px;
        overflow-wrap: break-word;
        text-align: center;
        text-decoration: none;
        text-transform: uppercase;
        width: 165.172px;
        word-wrap: break-word;
        perspective-origin: 82.5781px 20px;
        transform-origin: 82.5781px 20px;
        border: 1px solid rgb(255, 255, 255);
        border-radius: 4px 4px 4px 4px;
        font: normal normal bold normal 16px / 40px Roboto, sans-serif;
        outline: rgb(255, 255, 255) none 0px;
        padding: 0px 20px;
    }/*#A_5*/

    #A_6 {
        box-sizing: border-box;
        color: rgb(255, 255, 255);
        display: inline-block;
        height: 40px;
        overflow-wrap: break-word;
        text-align: center;
        text-decoration: none;
        text-transform: uppercase;
        width: 354.766px;
        word-wrap: break-word;
        perspective-origin: 177.375px 20px;
        transform-origin: 177.375px 20px;
        border: 1px solid rgb(255, 255, 255);
        border-radius: 4px 4px 4px 4px;
        font: normal normal bold normal 16px / 40px Roboto, sans-serif;
        outline: rgb(255, 255, 255) none 0px;
        padding: 0px 20px;
    }/*#A_6*/
    /*Parallax sections*/
    #DIV_E {
        background-position: 100% 100%;
        box-sizing: border-box;
        color: rgb(51, 51, 51);
        height: 600px;
        min-height: 600px;
        overflow-wrap: break-word;
        width: 1400px;
        word-wrap: break-word;
        perspective-origin: 618px 300px;
        transform-origin: 618px 300px;
        background: rgba(0, 0, 0, 0) url('http://www.webdschool.com/images/thumbs/graphic-design-courses.jpg') repeat fixed 50% 50% / cover padding-box border-box;
        border: 0px none rgb(51, 51, 51);
        font: normal normal normal normal 16px / normal Roboto, sans-serif;
        outline: rgb(51, 51, 51) none 0px;
    }/*#DIV_1*/

    #DIV_2 {
        box-sizing: border-box;
        color: rgb(255, 255, 255);
        height: 349px;
        max-width: 800px;
        overflow-wrap: break-word;
        text-align: center;
        width: 800px;
        word-wrap: break-word;
        perspective-origin: 400px 174.5px;
        transform-origin: 400px 174.5px;
        border: 0px none rgb(255, 255, 255);
        font: normal normal normal normal 16px / normal Roboto, sans-serif;
        margin: 0px 218px;
        outline: rgb(255, 255, 255) none 0px;
        padding: 160px 0px 0px;
    }/*#DIV_2*/

    #H2_3 {
        box-sizing: border-box;
        color: rgb(255, 255, 255);
        height: 81px;
        overflow-wrap: break-word;
        text-align: center;
        text-shadow: rgba(0, 0, 0, 0.2) 0px 1px 2px;
        width: 800px;
        word-wrap: break-word;
        perspective-origin: 400px 40.5px;
        transform-origin: 400px 40.5px;
        border: 0px none rgb(255, 255, 255);
        font: normal normal 100 normal 50px / normal Roboto, sans-serif;
        margin: 0px 0px 10px;
        outline: rgb(255, 255, 255) none 0px;
        padding: 0px 0px 20px;
    }/*#H2_3*/

    #P_4 {
        box-sizing: border-box;
        color: rgb(255, 255, 255);
        height: 38px;
        overflow-wrap: break-word;
        text-align: center;
        width: 800px;
        word-wrap: break-word;
        perspective-origin: 400px 19px;
        transform-origin: 400px 19px;
        border: 0px none rgb(255, 255, 255);
        font: normal normal normal normal 16px / normal Roboto, sans-serif;
        margin: 0px 0px 20px;
        outline: rgb(255, 255, 255) none 0px;
    }/*#P_4*/

    #A_5 {
        box-sizing: border-box;
        color: rgb(255, 255, 255);
        display: inline-block;
        height: 40px;
        overflow-wrap: break-word;
        text-align: center;
        text-decoration: none;
        text-transform: uppercase;
        width: 165.172px;
        word-wrap: break-word;
        perspective-origin: 82.5781px 20px;
        transform-origin: 82.5781px 20px;
        border: 1px solid rgb(255, 255, 255);
        border-radius: 4px 4px 4px 4px;
        font: normal normal bold normal 16px / 40px Roboto, sans-serif;
        outline: rgb(255, 255, 255) none 0px;
        padding: 0px 20px;
    }/*#A_5*/

    #A_6 {
        box-sizing: border-box;
        color: rgb(255, 255, 255);
        display: inline-block;
        height: 40px;
        overflow-wrap: break-word;
        text-align: center;
        text-decoration: none;
        text-transform: uppercase;
        width: 354.766px;
        word-wrap: break-word;
        perspective-origin: 177.375px 20px;
        transform-origin: 177.375px 20px;
        border: 1px solid rgb(255, 255, 255);
        border-radius: 4px 4px 4px 4px;
        font: normal normal bold normal 16px / 40px Roboto, sans-serif;
        outline: rgb(255, 255, 255) none 0px;
        padding: 0px 20px;
    }/*#A_6*/
    /*Parallax sections*/
    #DIV_F {
        background-position: 100% 100%;
        box-sizing: border-box;
        color: rgb(51, 51, 51);
        height: 600px;
        min-height: 600px;
        overflow-wrap: break-word;
        width: 1400px;
        word-wrap: break-word;
        perspective-origin: 618px 300px;
        transform-origin: 618px 300px;
        background: rgba(0, 0, 0, 0) url('http://www.showcaseocala.com/wp-content/uploads/2016/06/Photography-Camera-HD-Wallpaper1.jpg') repeat fixed 50% 50% / cover padding-box border-box;
        border: 0px none rgb(51, 51, 51);
        font: normal normal normal normal 16px / normal Roboto, sans-serif;
        outline: rgb(51, 51, 51) none 0px;
    }/*#DIV_1*/

    #DIV_2 {
        box-sizing: border-box;
        color: rgb(255, 255, 255);
        height: 349px;
        max-width: 800px;
        overflow-wrap: break-word;
        text-align: center;
        width: 800px;
        word-wrap: break-word;
        perspective-origin: 400px 174.5px;
        transform-origin: 400px 174.5px;
        border: 0px none rgb(255, 255, 255);
        font: normal normal normal normal 16px / normal Roboto, sans-serif;
        margin: 0px 218px;
        outline: rgb(255, 255, 255) none 0px;
        padding: 160px 0px 0px;
    }/*#DIV_2*/

    #H2_3 {
        box-sizing: border-box;
        color: rgb(255, 255, 255);
        height: 81px;
        overflow-wrap: break-word;
        text-align: center;
        text-shadow: rgba(0, 0, 0, 0.2) 0px 1px 2px;
        width: 800px;
        word-wrap: break-word;
        perspective-origin: 400px 40.5px;
        transform-origin: 400px 40.5px;
        border: 0px none rgb(255, 255, 255);
        font: normal normal 100 normal 50px / normal Roboto, sans-serif;
        margin: 0px 0px 10px;
        outline: rgb(255, 255, 255) none 0px;
        padding: 0px 0px 20px;
    }/*#H2_3*/

    #P_4 {
        box-sizing: border-box;
        color: rgb(255, 255, 255);
        height: 38px;
        overflow-wrap: break-word;
        text-align: center;
        width: 800px;
        word-wrap: break-word;
        perspective-origin: 400px 19px;
        transform-origin: 400px 19px;
        border: 0px none rgb(255, 255, 255);
        font: normal normal normal normal 16px / normal Roboto, sans-serif;
        margin: 0px 0px 20px;
        outline: rgb(255, 255, 255) none 0px;
    }/*#P_4*/

    #A_5 {
        box-sizing: border-box;
        color: rgb(255, 255, 255);
        display: inline-block;
        height: 40px;
        overflow-wrap: break-word;
        text-align: center;
        text-decoration: none;
        text-transform: uppercase;
        width: 165.172px;
        word-wrap: break-word;
        perspective-origin: 82.5781px 20px;
        transform-origin: 82.5781px 20px;
        border: 1px solid rgb(255, 255, 255);
        border-radius: 4px 4px 4px 4px;
        font: normal normal bold normal 16px / 40px Roboto, sans-serif;
        outline: rgb(255, 255, 255) none 0px;
        padding: 0px 20px;
    }/*#A_5*/

    #A_6 {
        box-sizing: border-box;
        color: rgb(255, 255, 255);
        display: inline-block;
        height: 40px;
        overflow-wrap: break-word;
        text-align: center;
        text-decoration: none;
        text-transform: uppercase;
        width: 354.766px;
        word-wrap: break-word;
        perspective-origin: 177.375px 20px;
        transform-origin: 177.375px 20px;
        border: 1px solid rgb(255, 255, 255);
        border-radius: 4px 4px 4px 4px;
        font: normal normal bold normal 16px / 40px Roboto, sans-serif;
        outline: rgb(255, 255, 255) none 0px;
        padding: 0px 20px;
    }/*#A_6*/

    li {
        display: inline-block;
        font-size: 40px;
        color: white;
    }
    .hero a {
        color: white;
        text-decoration: none;
    }
    #space {
        padding-right: 5px;
        padding-left: 5px;
    }
    #title {
        text-align: center;
        color: white;
    }

    h1{
        font-family: 'Roboto Slab', serif;
        font-size: 50px;
        color: #a06148;

    }
    .hero h2{
        font-family: 'Roboto Slab', serif;
        font-size: 30px;
        color: #99DAD6;
        text-align: center;
        text-shadow: 2px 2px white;

    }
    h3 {

    }
    h2 {
        font-family: 'Roboto Slab', serif;
        font-size: 20px;
        color: #99DAD6;
        text-align: center;
    }


</style>

<body>

<header>
    <div class="hero">
        <div class="hero-contents">
            <h1 id="title">Cheii's Web Developemnt</h1>
            <h2>"LET US HELP YOU TELL YOUR STORY"</h2>
            <ol class="text-center">
                <li><a href="#">Home</a></li>
                <li class="active" id="space">/</li>

                <li><a href="#">About Us</a></li>
                <li class="active" id="space">/</li>

                <li><a href="#" id="space"> Packages </a></li>
                <li class="active" id="space">/</li>

                <li><a href="#">Contact Us</a></li>

            </ol>
        </div>

    </div>
</header>

<br>
<br>
<div class="container" id="header">
    <h1><center>Cheiis Web Development Shop</center></h1>

</div>

    <div class="container" id="sectionA">
        <div class="row">
            <div class="col-sm-4">
                <div class="circleBase type3">

                <h2>Social Media Integrations</h2>
                <a href=""> <i class="fa fa-globe fa-5x" aria-hidden="true"></i></a>

                </div>
            </div>
            <div class="col-sm-4">
                <div class="circleBase type3">

                <h2>Explainer <br>Videos</h2>
                <a href=""> <i class="fa fa-play-circle-o fa-5x" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="col-sm-4"> 
                <div class="circleBase type3">

                <h2>ETSY <br>Integration</h2>
                <a href=""> <i class="fa fa-shopping-cart fa-5x" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>




<div class="container" id="sectionB">
    <div class="row">

            <div class="col-sm-4">
                <div class="circleBase type3">
                <h2>Logo Design <br> Consulting</h2>
                <a href=""><i class="fa fa-pencil-square-o fa-5x center" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="circleBase type3">

                <h2>Graphic <br>Design</h2>
                <a href=""> <i class="fa fa-pencil fa-5x" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="circleBase type3">

                <h2>Photography<br> Services</h2>
                <a href=""> <i class="fa fa-camera fa-5x" aria-hidden="true"></i></a>
                </div>

            </div>
    </div>
</div>

<div id="DIV_A">
    <div id="DIV_2">
        <h2 id="H2_3">
            Social Media
        </h2>
        <p id="P_4">
            Our Social Media Department works on a variety of different levels when it comes to properly maintaining clients' social media sites. Maintaining social media sites requires a lot more attention than just posting an article or a photo every once in a while, to a Facebook or Twitter page.

        </p> <a href="http://nodacademy.ro/parteneri-nod" id="A_5">Learn More </a> <a href="http://parteneri.nodacademy.ro/esti-partener-nod-inregistreaza-te-in-nod-academy/" id="A_6">Contact US</a>
    </div>
</div>

<div id="DIV_B">
    <div id="DIV_2">
        <h2 id="H2_3">

        </h2>
        <p id="P_4">
            This is a video software that we can use to make white board like animation. The new craze right now is marketing videos that are in the form of white board animation, cartoon animation with music and voice overs. Most animations are included with the software, but we can also do custom background and people animations. We have an example up online and will make more soon. Clients can choose how they want it to look, how many slides, custom animations, write a script and provide voice overs or we can do voice overs or purchase professional voice overs for a separate price.


        </p> <a href="http://nodacademy.ro/parteneri-nod" id="A_5">Learn More </a> <a href="http://parteneri.nodacademy.ro/esti-partener-nod-inregistreaza-te-in-nod-academy/" id="A_6">Contact US</a>
    </div>
</div>
<div id="DIV_C">
    <div id="DIV_2">
        <h2 id="H2_3">
            ETSY Integration
        </h2>
        <p id="P_4">
            Etsy is a marketplace where people around the world connect, both online and offline, to make, sell and buy unique goods. We can help you set your Etsy account and maintain it. The heart and soul of Etsy is our global community: the creative entrepreneurs who use Etsy to sell what they make or curate, the shoppers looking for things they can’t find anywhere else, the manufacturers who partner with Etsy sellers to help them grow, and the Etsy employees who maintain and nurture our marketplace.
        </p> <a href="http://nodacademy.ro/parteneri-nod" id="A_5">Learn More </a> <a href="http://parteneri.nodacademy.ro/esti-partener-nod-inregistreaza-te-in-nod-academy/" id="A_6">Contact US</a>
    </div>
</div>
<div id="DIV_D">
    <div id="DIV_2">
        <h2 id="H2_3">
            Logo Design Services
        </h2>
        <p id="P_4">
            Logo design is all around us. To the general public, logos serve as an instant reminder of a company or a product; to the client they're the point of recognition on which their branding hangs; and to us designers they represent the challenge of incorporating our clients' ideologies into one single graphic. In an age where everyone must have a website to support their product, service or the company behind it, the demand for a top-class logo has never been higher. More logo designs are out there than ever before, and with that comes the challenge of being different. How do you create something original that stands out in a sea of identities? And how do we create something quickly while retaining quality? Here at Cheii’s Web Development, we can help.
        </p> <a href="http://nodacademy.ro/parteneri-nod" id="A_5">Learn More </a> <a href="http://parteneri.nodacademy.ro/esti-partener-nod-inregistreaza-te-in-nod-academy/" id="A_6">Contact US</a>
    </div>
</div>
<div id="DIV_E">
    <div id="DIV_2">
        <h2 id="H2_3">
            Graphic Design
        </h2>
        <p id="P_4">
            Graphic design, also known as communication design, is the art and practice of planning and projecting ideas and experiences with visual and textual content. The form of the communication can be physical or virtual, and may include images, words, or graphic forms.
        </p> <a href="http://nodacademy.ro/parteneri-nod" id="A_5">Learn More </a> <a href="http://parteneri.nodacademy.ro/esti-partener-nod-inregistreaza-te-in-nod-academy/" id="A_6">Contact US</a>
    </div>
</div>
<div id="DIV_F">
    <div id="DIV_2">
        <h2 id="H2_3">
            Photography Services
        </h2>
        <p id="P_4">
            Photography is the science, art, application and practice of creating durable images by recording light or other electromagnetic radiation, either electronically by means of an image sensor, or chemically by means of a light-sensitive material such as photographic film. This service will help you showcase your work professional on your website. And we can help with that.
        </p> <a href="http://nodacademy.ro/parteneri-nod" id="A_5">Learn More </a> <a href="http://parteneri.nodacademy.ro/esti-partener-nod-inregistreaza-te-in-nod-academy/" id="A_6">Contact US</a>
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
