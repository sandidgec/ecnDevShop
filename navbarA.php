<head>
    <?php require_once("lib/head-utils.php");?>
</head>

<style>
    header {
        padding-top: 10px;
        background-color: #a06148;
        margin: 0;
    }

    ul.nav.navbar-nav {
        width: 100%;
        height: 80px;
        background-color: rgba(160, 97, 72, 0.8);
        padding-top: 15px;


    }

    #navbar-primary .navbar-nav {

    width: 100%;
    padding-left: 130px;

     li {
        display: inline-block;
        float: none;
     a {
        padding-left: 30px;
        padding-right: 30px;
   }
    }
    }
    @media screen and (max-width: 600px) {
        nav {
            height: auto;
        }
        nav ul {
            width: 100%;
            display: block;
            height: auto;
        }
        nav li {
            width: 50%;
            float: left;
            position: relative;
        }
        nav li a {
            border-bottom: 1px solid #576979;
            border-right: 1px solid #576979;
        }
        nav a {
            text-align: left;
            width: 100%;
            text-indent: 25px;
        }
    }
    @media only screen and (max-width : 480px) {
        nav {
            border-bottom: 0;
        }
        nav ul {
            display: none;
            height: auto;
        }
        nav a#pull {
            display: block;
            background-color: #283744;
            width: 100%;
            position: relative;
        }
        nav a#pull:after {
            content:"";
            background: url('nav-icon.png') no-repeat;
            width: 30px;
            height: 30px;
            display: inline-block;
            position: absolute;
            right: 15px;
            top: 10px;
        }
    }

    @media only screen and (max-width : 320px) {
        nav li {
            display: block;
            float: none;
            width: 100%;
        }
        nav li a {
            border-bottom: 1px solid #576979;
        }
    }

    button.navbar-toggle {
        background-color: #99DAD6;
    }
    span.icon-bar {
        background-color: #a06148;

    }


</style>
<header role="banner">
    <nav id="navbar-primary" class="navbar navbar-fixed-top" role="navigation">
        <div class="container-fluid-text-center">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-primary-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbar-primary-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="about.php">About</a></li>
                    <li><a href="portfolio.php"">Portfolio</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="index.php"><img id="logo-navbar-middle" src="/lib/images/cheiiDevShopLogo120.png" width="100" alt="Logo Thing main logo"></a></li>
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
            </div><!-- /.navbar-collapse -->
        </div>
        </div><!-- /.container-fluid -->
    </nav>
</header><!-- header role="banner" -->


