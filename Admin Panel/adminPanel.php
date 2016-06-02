<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <?php require_once("../lib/head-utils.php");?>

    <title>Cheii Devshop Admin Panel</title>


</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="adminPanel.php">CD Admin Panel</a>
        </div>
        <!-- Top Menu Items -->
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li class="active">
                    <a href="tables.html"><i class="fa fa-fw fa-table"></i> Tables</a>
                </li>
                <li>
                    <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Cheii Devshop <small>Admin Panel</small>
                    </h1>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Project Panel</h3>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped">
                                    <thead>
                                    <tr>
                                        <th>Project #</th>
                                        <th>Title</th>
                                        <th>State Date</th>
                                        <th>End Date</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Blue Corn Project</td>
                                        <td>2016-4-27</td>
                                        <td>2016-6-01</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>ECN Project</td>
                                        <td>2016-4-30</td>
                                        <td>2016-6-03</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>FCF Project</td>
                                        <td>2016-4-31</td>
                                        <td>2016-6-05</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="text-right">
                                <a href="#">View All Projects <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                </div>

                    <div class="row">
                        <div class="col-lg-8">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Tasks Panel</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="list-group">
                                        <a href="#" class="list-group-item">
                                            <span class="badge">just now</span>
                                            <i class="fa fa-fw fa-calendar"></i> Calendar updated
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <span class="badge">4 minutes ago</span>
                                            <i class="fa fa-fw fa-comment"></i> Commented on a post
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <span class="badge">1 hour ago</span>
                                            <i class="fa fa-fw fa-user"></i> A new Employee has been added
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <span class="badge">1 hour ago</span>
                                            <i class="fa fa-folder" aria-hidden="true"></i> A new Project has been added
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <span class="badge">2 hours ago</span>
                                            <i class="fa fa-fw fa-check"></i> Completed project: "Blue Corn Project"
                                        </a>
                                    </div>
                                    <div class="text-right">
                                        <a href="#">View All Activity <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-8">
                                <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><i class="fa fa-user" aria-hidden="true"></i> Employee Panel</h3>
                                </div>
                                    <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                            <tr>
                                                <th>Employee #</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Address 1</th>
                                                <th>Address 2</th>
                                                <th>City</th>
                                                <th>State</th>
                                                <th>Zip</th>
                                                <th>Phone</th>
                                                <th>Status</th>
                                                <th>Email</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Krieg</td>
                                                <td>Benally</td>
                                                <td>3751 Red Maple Road</td>
                                                <td></td>
                                                <td>Salt Lake City</td>
                                                <td>UT</td>
                                                <td>84107</td>
                                                <td>4356722236</td>
                                                <td>Full Time</td>
                                                <td>kriegbenally@gmail.com</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Marty</td>
                                                <td>Buck</td>
                                                <td>42 Wallaby Way</td>
                                                <td></td>
                                                <td>Farmington</td>
                                                <td>NM</td>
                                                <td>55555</td>
                                                <td>5055554633</td>
                                                <td>Part Time</td>
                                                <td>marty@marty.com</td>
                                            </tr>
                                            <tr>
                                                <<th scope="row">3</th>
                                                <td>Ryan</td>
                                                <td>Sam</td>
                                                <td>5 miles east mile marker 420</td>
                                                <td>APT 202</td>
                                                <td>Farmington</td>
                                                <td>NM</td>
                                                <td>55555</td>
                                                <td>50555554633</td>
                                                <td>PRN</td>
                                                <td>ryan@snapchat.com</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td>Aarick</td>
                                                <td>Lameman</td>
                                                <td>3245 S 700 E</td>
                                                <td>#507</td>
                                                <td>Bluff</td>
                                                <td>UT</td>
                                                <td>84512</td>
                                                <td>4355556789</td>
                                                <td>Terminated</td>
                                                <td>aarick@aarick.com</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">5</th>
                                                <td>Jeremiah</td>
                                                <td>Johnson</td>
                                                <td>3665 South Highland Drive</td>
                                                <td></td>
                                                <td>Salt Lake </td>
                                                <td>UT</td>
                                                <td>84107</td>
                                                <td>4355552233</td>
                                                <td>Full Time</td>
                                                <td>jeremiah@jeremiah.com</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">6</th>
                                                <td>marieta</td>
                                                <td>buck</td>
                                                <td>pop box 2073</td>
                                                <td></td>
                                                <td>Window Rock</td>
                                                <td>AZ</td>
                                                <td>86515</td>
                                                <td>9287971419</td>
                                                <td>Full Time</td>
                                                <td>marietab1@gmail.com</td>
                                            </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="text-right">
                                <a href="#">View All Employees<i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->


</body>

</html>
