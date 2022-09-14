<?php
	session_start();
	include("../../../../RESEAU_SOCIAL_ADMIN/Models/DatabaseConnexion.php");
    $admin_name=$_SESSION["pseudo"];
	
    $Get_admin_Info=$db->prepare("SELECT * FROM admin WHERE admin_name=:pseudo");

    $Get_admin_Info->execute(array
    (
        'pseudo'=>$admin_name
    )
    );
    $admin_info=$Get_admin_Info->fetch();

    $Get_User_Info=$db->query("SELECT * FROM users");
    
	
    $notifi=$db->prepare("SELECT COUNT(sujet) FROM `admin_notifications` WHERE admin_name=:pseudo");
    $notifi->execute(
        array(
            'pseudo'=>$admin_name
        )
        );
    $notification=$notifi->fetch();

    $user_number=$db->query("SELECT COUNT(user_name) FROM users");
    $nombre_user=$user_number->fetch();

    
    $message_number=$db->query("SELECT COUNT(sender_name) FROM usermsg");
    $nombre_msg=$message_number->fetch();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Reseau_Social_Admin</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.html">Admin <span><?php echo $admin_name?></span></a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav nav-icons">
                            <li class="active"><a href="#"><i class="icon-envelope"></i></a></li>
                            <li><a href="#"><i class="icon-eye-open"></i></a></li>
                            <li><a href="#"><i class="icon-bar-chart"></i></a></li>
                        </ul>
                        <form class="navbar-search pull-left input-append" action="#">
                        <input type="text" class="span3">
                        <button class="btn" type="button">
                            <i class="icon-search"></i>
                        </button>
                        </form>
                        <ul class="nav pull-right">
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Item No. 1</a></li>
                                    <li><a href="#">Don't Click</a></li>
                                    <li class="divider"></li>
                                    <li class="nav-header">Example Header</li>
                                    <li><a href="#">A Separated link</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Support </a></li>
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="images/user.png" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Your Profile</a></li>
                                    <li><a href="#">Edit Profile</a></li>
                                    <li><a href="#">Account Settings</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="Dashboard.php"><i class="menu-icon icon-dashboard"></i>Dashboard
                                </a></li>
                                <li><a href="message.html"><i class="menu-icon icon-inbox"></i>Inbox <b class="label green pull-right">
                                    11</b> </a></li>
                              
                                <li><a href="../../../../RESEAU_SOCIAL_ADMIN/Controllers/Admin/deconnexion.controller.php"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            <div class="btn-controls">
                                <div class="btn-box-row row-fluid">
                                    <a href="#" class="btn-box big span4"><i class=" icon-random"></i><b><?php echo $nombre_user["0"]/100?>%</b>
                                        <p class="text-muted">
                                            User Connexion</p>
                                    </a><a href="#" class="btn-box big span4"><i class="icon-user"></i><b><?php echo $nombre_user["0"] ?></b>
                                        <p class="text-muted">
                                            New Users</p>
                                    </a>
                                </div>
                                <div class="btn-box-row row-fluid">
                                    <div class="span8">
                                        <div class="row-fluid">
                                            <div class="span12">
                                                <a href="#" class="btn-box small span4"><i class="icon-envelope"></i><b>Nombre de Messages<?php echo $nombre_msg["0"] ?></b></a>
                                            </div>
                                        </div>
                
                                    </div>
                                   
                                </div>
                            </div>
                            
                            <!--/.module-->
                            <div class="module hide">
                                <div class="module-head">
                                    <h3>
                                        Adjust Budget Range</h3>
                                </div>
                                <div class="module-body">
                                    <div class="form-inline clearfix">
                                        <a href="#" class="btn pull-right">Update</a>
                                        <label for="amount">
                                            Price range:</label>
                                        &nbsp;
                                        <input type="text" id="amount" class="input-" />
                                    </div>
                                    <hr />
                                    <div class="slider-range">
                                    </div>
                                </div>
                            </div>
                            <div class="module">
                                <div class="module-head">
                                    <h3>
                                       Network Users</h3>
                                </div>
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th>
                                                   User_name
                                                </th>
                                                <th>
                                                    Email
                                                </th>
                                                <th>
                                                    Picture
                                                </th>
                                                <th>
                                                    Delete
                                                </th>
                                                <th>
                                                    Update
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        while ($users=$Get_User_Info->fetch()){;?>

                                            <tr class="odd gradeX">
                                                <td>
                                                    <?php echo $users["user_name"] ?>
                                                </td>
                                                <td>
                                                    <?php echo $users["email"] ?>
                                                </td>
                                                <td>
                                                    <?php echo $users["user_picture"] ?>
                                                </td>
                                                <td class="center">
                                                    <a href="../../../../RESEAU_SOCIAL_ADMIN/Controllers/Admin/deleteUser.controller.php?user_id=<?=$users["user_id"]?>">Delete</a>
                                                </td>
                                                <td class="center">
                                                    <a href="../../../../RESEAU_SOCIAL_ADMIN/Controllers/Admin/Update_user.controller.php?user_id=<?=$users["user_id"]?>">Modifier</a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                        <tfoot>
                                        
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <!--/.module-->
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2014 Edmin - EGrappler.com </b>All rights reserved.
            </div>
        </div>
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>
      
    </body>
