﻿<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Add Category | Admin</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/text.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/grid.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/layout.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/nav.css" media="screen" />

    <link href="css/fancy-button/fancy-button.css" rel="stylesheet" type="text/css" />
    <!--Jquery UI CSS-->
    <link href="css/themes/base/jquery.ui.all.css" rel="stylesheet" type="text/css" />
    <!-- BEGIN: load jquery -->
    <script src="js/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery-ui/jquery.ui.core.min.js"></script>
    <script src="js/jquery-ui/jquery.ui.widget.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.accordion.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.core.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.slide.min.js" type="text/javascript"></script>
    <!-- END: load jquery -->
    <!--jQuery Date Picker-->
    <script src="js/jquery-ui/jquery.ui.widget.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.datepicker.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.progressbar.min.js" type="text/javascript"></script>
    <!-- jQuery dialog related-->
    <script src="js/jquery-ui/external/jquery.bgiframe-2.1.2.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.mouse.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.draggable.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.position.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.resizable.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.dialog.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.core.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.blind.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.explode.min.js" type="text/javascript"></script>
    <!-- jQuery dialog end here-->
    <script src="js/jquery-ui/jquery.ui.accordion.min.js" type="text/javascript"></script>
    <!--Fancy Button-->
    <script src="js/fancy-button/fancy-button.js" type="text/javascript"></script>
    <script src="js/setup.js" type="text/javascript"></script>
	<script type="text/javascript">
        $(document).ready(function () {
            setupLeftMenu();
		    setSidebarHeight();
        });
    </script>
</head>
<body>
    <div class="container_12">
        <div class="grid_12 header-repeat">
            <div id="branding">
                 <div class="floatleft logo">
                    <img src="img/livelogo.png" alt="Logo" />
				</div>
				<div class="floatleft middle">
					<h1>Training with live project</h1>
					<p>www.trainingwithliveproject.com</p>
				</div>
                <div class="floatright">
                    <div class="floatleft">
                        <img src="img/img-profile.jpg" alt="Profile Pic" /></div>
                    <div class="floatleft marginleft10">
                        <ul class="inline-ul floatleft">
                            <li>Hello Admin</li>
                            <li><a href="#">Config</a></li>
                            <li><a href="#">Logout</a></li>
                        </ul>
                        
                    </div>
                </div>
                <div class="clear">
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
        <div class="grid_12">
            <ul class="nav main">
                <li class="ic-dashboard"><a href="index.php"><span>Dashboard</span></a> </li>
                <li class="ic-form-style"><a href=""><span>User Profile</span></a></li>
				<li class="ic-typography"><a href="changepassword.php"><span>Change Password</span></a></li>
				<li class="ic-grid-tables"><a href="inbox.php"><span>Inbox</span></a></li>
                <li class="ic-charts"><a href="postlist.php"><span>Visit Website</span></a></li>
            </ul>
        </div>
        <div class="clear">
        </div>
        <div class="grid_2">
            <div class="box sidemenu">
                <div class="block" id="section-menu">
                     <ul class="section menu">
                       <li><a class="menuitem">Site Option</a>
                            <ul class="submenu">
                                <li><a href="titleslogan.php">Title & Slogan</a></li>
                                <li><a href="social.php">Social Media</a></li>
                                <li><a href="copyright.php">Copyright</a></li>
                                
                            </ul>
                        </li>
						
                         <li><a class="menuitem">Update Pages</a>
                            <ul class="submenu">
                                <li><a>About Us</a></li>
                                <li><a>Contact Us</a></li>
                            </ul>
                        </li>
						<li><a class="menuitem">Category Option</a>
                            <ul class="submenu">
                                <li><a href="addcat.php">Add Category</a> </li>
                                <li><a href="catlist.php">Category List</a> </li>
                            </ul>
                        </li>
                        <li><a class="menuitem">Post Option</a>
                            <ul class="submenu">
                                <li><a href="addpost.php">Add Post</a> </li>
                                <li><a href="postlist.php">Post List</a> </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Add New Category</h2>
               <div class="block copyblock"> 
                 <form>
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" placeholder="Enter Category Name..." class="medium" />
                            </td>
                        </tr>
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
    </div>
    <div class="clear">
    </div>
    <div id="site_info">
       <p>
         &copy; Copyright <a href="http://trainingwithliveproject.com">Training with live project</a>. All Rights Reserved.
        </p>
    </div>
</body>
</html>
