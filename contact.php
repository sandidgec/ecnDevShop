<!DOCTYPE html>
<html>

<head>
    <?php require_once("lib/head-utils.php");?>
</head>

<header>
<body>

    <?php require_once("navBar2.php");?>

    <div class="container">
        <div class="jumbotron">


                <h1 id="contact" class="text-center">Contact</h1>

                    <address class="text-center">
                        <strong>Cheii Designs</strong><br>
                        1257 Mission Avenue<br>
                        Farmington, NM 87499<br>
                        <abbr title="Phone">Phone</abbr> (505) 327-7549
                     </address>


     <form class="form-inline">
        <div class="form-group">
            <label for="exampleInputEmail1"> Name </label>
            <input type="name" class="form-control" id="exampleInputName" placeholder="First Last">
         </div>
        <div class="form-group">
            <label for="exampleInputPassword1"> Email </label>
            <input type="email" class="form-control" id="exampleInputEmai1" placeholder="mail@email.com">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Phone</label>
            <input type="phone" class="form-control" id="exampleInputPhoneNumber" placeholder="Phone Number">
        </div>
             <button type="submit" id="submitBtn" class="btn btn-default">Submit</button>
     </form>
    </div>
</div>


    <div id="photoIcons" class=".col-md-6">
        <img src="/lib/images/cheiiDevShopLogo.png" alt=""/>
    </div>

</body>

    <style>
        #contact {
            margin: 0;
        }
    </style>

</header>

<footer>
    <?php require_once("footer.php");?>
</footer>

<script src="lib/js/glideScroll.js"></script>


