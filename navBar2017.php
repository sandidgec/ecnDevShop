
<head>
<style>
    /* Border from Y to X  */
    div.borderYtoX a:before, div.borderYtoX a:after
    {
    position: absolute;
    opacity: 0.5;
    height: 100%;
    width: 2px;
    content: '';
    background: #FFF;
    transition: all 0.3s;
    }

    div.borderYtoX a:before
    {
    left: 0px;
    top: 0px;
    }

    div.borderYtoX a:after
    {
    right: 0px;
    bottom: 0px;
    }

    div.borderYtoX a:hover:before, div.borderYtoX a:hover:after
    {
    opacity: 1;
    height: 2px;
    width: 100%;
    }
    .logo {
        padding: 10px 0 0 10px;
    }
    .nav {
        display: inline-block;
        padding: 0px;

    }
    #text {
        padding: 30px 0 0 30px;
    }
    #bs-example-navbar-collapse-1 {
        padding: 20px 0 0 10px;
    }
    a {
        color: white;
    }
    .container.teal.borderYtoX {
        width:400px;
    }
    .nav.navbar-nav.navbar-left {
        width: 800px;

    }




</style>
    <body>
<nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed-1" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse navbar-pull-left" id="bs-example-navbar-collapse">
                <div class="container teal borderYtoX">
                    <ul class="nav navbar-nav navbar-left">
                        <li><a class="logo pull-left" href="index.php"><img src="/lib/images/cheiiDevShopLogo120.png"  width="120" height="80">CHEII'S WEB DEVELOPMENT</a>
                            <span class="name pull-left" id="text"></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-pull-right" id="bs-example-navbar-collapse-1">
            <div class="container teal borderYtoX">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="index.php#ourServices">Services</a></li>
                <li><a href="portfolio.php">Portfolio</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="document.php">Forms</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Packages<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="yazhiPackage.php">Little One "Yazhi" Package</a></li>
                        <li><a href="shimaPackage.php">Mother "Shima" Package</a></li>
                        <li><a href="masaniPackage.php">Grandmother "Masani" Package</a></li>
                    </ul>
                </li>
                <li><a href="https://www.facebook.com/cheiidevshop/" target="_blank">
                    <i class="fa fa-facebook someicons" aria-hidden="true"></i>
                </a></li>
                <li><a href="https://twitter.com/cheiisDevShop" target="_blank">
                    <i class="fa fa-twitter someicons" aria-hidden="true"></i>
                </a></li>

            </ul>
        </div>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
</body>
