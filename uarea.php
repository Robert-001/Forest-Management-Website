<?php
    include('config/setup.php');

// first thing is to start session 
session_start();
// now to check if variable is true
if(!$_SESSION['anything'])
{
    header('location:login.php');
}
$id = $_SESSION["id"];
 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>User Area | Gujarat Forest Website</title>
        <link rel="icon" href="ico/icon.png">

        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/uarea_style.css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        <script src="js/jquery.js"></script>
        <script src="js/jquery-1.11.1.min.js"></script>

        <!-- Bootstrap JavaScript -->
        <script src="bootstrap/js/bootstrap.min.js"></script>

        <!--Custom JS -->
        <script src="js/uarea.js"></script>
    </head>

    <body>
      <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="ptitle" href="uarea.html">
                User Area
            </div>
            <!--user at upper right corner-->
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a>
                                <?php
                                    $result = mysql_query("SELECT * FROM users where id = '$id'") or die("Failed to query Database." .mysql_error());
                                    while($row = mysql_fetch_array($result)) {  ?>
                                        <img class="img_user" src="<?php echo $row["user_pic"]; ?>">
                                    <?php }
                                ?>
                            </a>
                            <h4 class="username">
                            <?php
                                $result = mysql_query("SELECT * FROM users where id = '$id'") or die("Failed to query Database." .mysql_error());
                                while($row = mysql_fetch_row($result)) {
                                    echo"<td>".$row[1]."</td>";
                                }
                            ?>
                            </h4>
                        </li>
                        <ul class="nav nav-pills">
                        <li class="active">
                            <a data-toggle="pill" href="#menu1"><i class="fa fa-user fa-fw"></i> Customer Details</a>
                        </li>
                        <li>
                            <a data-toggle="pill" href="#menu2"><i class="fa fa-gear fa-fw"></i> Product Details</a>
                        </li>
                        <li>
                            <a data-toggle="pill" href="#menu3"><i class="fa fa-edit fa-fw"></i> Order Details</a>
                        </li>
                        <li>
                            <a data-toggle="pill" href="#menu4"><i class="fa fa-book fa-fw"></i> Documents & Contract </a>
                        </li>
                        <li>
                            <a data-toggle="pill" href="#menu5"><i class="fa fa-terminal fa-fw"></i> Terms & Conditions</a>
                        </li>
                        </ul>
                    </ul>
                </div>
            </div>
            </nav>

            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tab-content in active">
                            <div id="menu1" class="tab-pane fade in active">
                                <h3>Customer Details</h3>
                                <br>
                                <br>
                                <table class="table table-hover">
                                    <tbody>
                                    <tr>
                                        <th>Customer Name</th>
                                        <th>Name of the Company</th>
                                        <th>Resignation</th>
                                        <th>Contract Details</th>
                                        <th>Date of Contract Expiry</th>
                                    </tr>
                                    <tr>
                                        <?php
                                            $result = mysql_query("SELECT * FROM customers where c_id = '$id'") or die("Failed to query Database." .mysql_error());
                                            while($row = mysql_fetch_row($result)) {
                                                echo"<td>".$row[1]."</td>";
                                                echo"<td>".$row[2]."</td>";
                                                echo"<td>".$row[3]."</td>";
                                                echo"<td>".$row[4]."</td>";
                                                echo"<td>".$row[5]."</td>";
                                            }
                                        ?>
                                    </tr>                                
                                    </tbody>
                                </table>
                            </div>
                            <div id="menu2" class="tab-pane fade">
                              <h3>Product Details</h3>
                              <br>
                              <br>
                              <table class="table table-hover">
                                    <tbody>
                                        <tr>
                                            <th>Product Name</th>
                                            <th>Quantity Provided</th>
                                        </tr>
                                        <tr>
                                            <?php
                                                $result = mysql_query("SELECT * FROM product where p_id = '$id'") or die("Failed to query Database." .mysql_error());
                                                while($row = mysql_fetch_row($result)) {
                                                    echo"<td>".$row[1]."</td>";
                                                    echo"<td>".$row[2]."</td>";
                                                }
                                            ?>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div id="menu3" class="tab-pane fade">
                              <h3>Order Details </h3>
                              <br>
                              <br>
                              <table class="table table-hover">
                                    <tbody>
                                        <tr>
                                            <th>Order Date</th>
                                            <th>Order Discription</th>
                                            <th>Demand</th>
                                            <th>Supply</th>
                                        </tr>
                                        <tr>
                                            <?php
                                                $result = mysql_query("SELECT * FROM orders where o_id = '$id'") or die("Failed to query Database." .mysql_error());
                                                while($row = mysql_fetch_row($result)) {
                                                    echo"<td>".$row[1]."</td>";
                                                    echo"<td>".$row[2]."</td>";
                                                    echo"<td>".$row[3]."</td>";
                                                    echo"<td>".$row[4]."</td>";
                                                }
                                            ?>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div id="menu4" class="tab-pane fade">
                              <h3> Documents </h3>
                              <br>
                                <?php
                                    $result = mysql_query("SELECT contract_pic FROM orders where o_id = '$id'") or die("Failed to query Database." .mysql_error());
                                    while($row = mysql_fetch_array($result)) {  ?>
                                        <img class="img_contract" src="<?php echo $row["contract_pic"]; ?>">
                                    <?php }
                                ?>
                              <br>
                            </div>
                            <div id="menu5" class="tab-pane fade">
                                <h3> Terms & Conditions </h3>
                                <br>
                                <br>
                                <p>
                                When you register for any services on Principal Chief Conservator of Forest & Head of the Forest Force (HoFF), Government of Gujarat we ask you for your name, contact information, preferences, and certain demographic information. This information enables us to provide personalized services and communicate separately with you. We also use aggregated information about the use of our services to evaluate our user's preferences, improve our programming and content delivery.
                                </p>
                                <p>
                                We do not share or sell personally identifiable data with other service providers, who can use such information for commercial promotion. Our newsletter and other mailers are sent to you on your explicit instruction and you can opt out of it at any time.
                                </p>
                                <br>
                                <h4> <strong>User Creation </strong></h4>
                                <br>
                                <p>
                                You are responsible for maintaining the confidentiality of the password and account, and are fully responsible for all activities that occur under your password or account.
                                </p> 
                                <br>
                                    <h4><strong>Your obligations</strong></h4>
                                <br>
                                <p>
                                    You shall access Principal Chief Conservator of Forest & Head of the Forest Force (HoFF), Govt. of Gujarat web site only for lawful purposes and you shall be responsible for complying with all applicable laws, statutes and regulations in connection with the use of Government web site. This Website is for your personal and non-commercial use. You shall not modify, copy, distribute, transmit, display, perform, reproduce, publish, license, create derivative works from, transfer or sell any information, or services obtained from this Website. You shall not create a hypertext link to the Website or "frame" the Website, except with the express advance written permission of the Government.
                                </p>
                                <br>
                                    <h4><strong>Information Provided</strong></h4>
                                <br>
                                <p>
                                    The information you provide in the Registration page must be complete and accurate. Government reserves the right at all times to disclose any information as deems necessary to satisfy any applicable law, regulation, legal process.
                                </p>
                                <br>
                                    <h4><strong>Termination</strong></h4>
                                <br>
                                <p>
                                    We may at any time at our sole discretion and without giving any reason or any prior notice terminate or temporarily suspend your access to all or any part of the web site.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </body>
</html>

