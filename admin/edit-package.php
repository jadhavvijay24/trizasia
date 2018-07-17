<?php 
	include_once("config.php");
	include_once("edit.php");
?>
<!DOCTYPE html>
<html>
<!-- Mirrored from coderthemes.com/adminto/dark/form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 May 2018 10:35:11 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <title>Admin | Swaraj Tours</title>
        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
        <script src="assets/js/modernizr.min.js"></script>
    </head>
    <body class="fixed-left">
        <!-- Begin page -->
        <div id="wrapper">
            <!-- Top Bar Start -->
            <?php include_once("header.php"); ?>
            <!-- Top Bar End -->
            <!-- ========== Left Sidebar Start ========== -->
            <?php include_once("aside.php"); ?>
            <!-- Left Sidebar End -->
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title">Edit Tour Package</h4>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="p-20">
                                                <form class="form-horizontal" role="form" method="POST" action="" enctype="multipart/form-data">
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Package Name</label>
                                                        <div class="col-10">
                                                            <input type="text" value="<?php echo $row_sel["package_name"]; ?>" name="pkg_name" id="pkg_name" class="form-control" placeholder="Package Name">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label" for="description">Description</label>
                                                        <div class="col-10">
                                                            <textarea name="description"  id="description" class="form-control" rows="5" placeholder="Description"><?php echo $row_sel["package_description"]; ?></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Package Price</label>
                                                        <div class="col-10">
                                                            <input type="text" value="<?php echo $row_sel["package_price"]; ?>" name="pkg_price" id="pkg_price" class="form-control" placeholder="Package Price">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Offer Price</label>
                                                        <div class="col-6">
                                                            <input type="text" id="offer" name="offer" value="<?php echo $row_sel["offer_price"]; ?>" class="form-control" placeholder="Offer">
                                                        </div>
														<!--<div class="col-4" style="padding-right: 270px; padding-top: 11px;">
                                                            <input type="checkbox" id="show_offer" name="show_offer" value="0" class="form-control">
															
                                                        </div>-->
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">About Itinerary</label>
                                                        <div class="col-10">
                                                            <textarea name="itinerary" id="itinerary" class="form-control" rows="5"placeholder="About Itinerary"><?php echo $row_sel["about_itinerary"]; ?></textarea>
                                                        </div>
                                                    </div>
													<div class="form-group row">
                                                        <label class="col-2 col-form-label">Inclusions</label>
                                                        <div class="col-10">
                                                            <textarea name="inclusion" id="inclusion" class="form-control" rows="5"placeholder="Inclusions"><?php echo $row_sel["inclusion"]; ?></textarea>
                                                        </div>
                                                    </div>
													<div class="form-group row">
                                                        <label class="col-2 col-form-label">Exclusions</label>
                                                        <div class="col-10">
                                                            <textarea name="exclusion" id="exclusion" class="form-control" rows="5"placeholder="Exclusions"><?php echo $row_sel["exclusion"]; ?></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Duration</label>
                                                        <div class="col-10">
                                                            <input type="text" name="duration" id="duration" value="<?php echo $row_sel["duration"]; ?>" class="form-control" placeholder="Duration">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Location</label>
                                                        <div class="col-10">
                                                            <input type="text" name="location" id="location" value="<?php echo $row_sel["location"]; ?>" class="form-control" placeholder="Location">
                                                        </div>
                                                    </div>
													<div class="form-group row">
														<label class="col-2 col-form-label">Select Package Category</label>
                                                        <div class="col-10">
                                                            <select id="category" name="category" class="form-control select2">
																<?php while($row_n=$res_n->fetch_assoc()) { ?>
																	<option value="<?php echo $row_n["category_id"]; ?>"><?php echo $row_n["category_name"]; ?></option>
																<?php } ?>		
															</select>
                                                        </div>
                                                    </div>
													<div class="form-group row">
                                                        <label class="col-2 col-form-label">Select Country</label>
                                                        <div class="col-10">
                                                            <select id="country" name="country" class="form-control select2">
																<?php while($row_j=$res_j->fetch_assoc()) { ?>
																	<option value="<?php echo $row_j["country_id"]; ?>"><?php echo $row_j["country_name"]; ?></option>
																<?php } ?>		
															</select>
                                                        </div>
                                                    </div>
													<div class="form-group row">
														<label class="col-2 col-form-label">Select City</label>
                                                        <div class="col-10">
                                                            <select id="city" name="city" class="form-control select2">
																<?php while($row_m=$res_m->fetch_assoc()) { ?>
																	<option value="<?php echo $row_m["city_id"]; ?>"><?php echo $row_m["city_name"]; ?></option>
																<?php } ?>		
															</select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Arrival Date</label>
                                                        <div class="col-10">
                                                            <input class="form-control" name="arrival_date" value="<?php echo $row_sel["arrival_date"]; ?>" type="date" >
                                                        </div>
													</div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Departure Date</label>
                                                        <div class="col-10">
                                                            <input class="form-control" name="departure_date" value="<?php echo $row_sel["departure_date"]; ?>" type="date" >
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Package Date</label>
                                                        <div class="col-10">
                                                            <input class="form-control" name="package_date" value="<?php echo $row_sel["package_date"]; ?>" type="date" >
                                                        </div>
                                                    </div>
													
                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
															<button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                                        </div>
														 <div class="col-sm-2">
															<button type="reset" name="reset" class="btn btn-primary">Reset</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </div> <!-- end card-box -->
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->
                        <!-- end row -->
                        <!-- end row -->
                        <!-- end row -->
                        <!-- Inline Form -->
                        <!-- end row -->
                        <!-- Form row -->
                        <!-- end row -->
                    </div> <!-- container -->
                </div> <!-- content -->
                <?php include_once("footer.php"); ?>
            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->
            <!-- Right Sidebar -->
            <div class="side-bar right-bar">
                <a href="javascript:void(0);" class="right-bar-toggle">
                    <i class="mdi mdi-close-circle-outline"></i>
                </a>
                <h4 class="">Notifications</h4>
                <div class="notification-list nicescroll">
                    <ul class="list-group list-no-border user-list">
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-2.jpg" alt="">
                                </div>
                                <div class="user-desc">
                                    <span class="name">Michael Zenaty</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">2 hours ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="icon bg-info">
                                    <i class="mdi mdi-account"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">New Signup</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">5 hours ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="icon bg-pink">
                                    <i class="mdi mdi-comment"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">New Message received</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">1 day ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item active">
                            <a href="#" class="user-list-item">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-3.jpg" alt="">
                                </div>
                                <div class="user-desc">
                                    <span class="name">James Anderson</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">2 days ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item active">
                            <a href="#" class="user-list-item">
                                <div class="icon bg-warning">
                                    <i class="mdi mdi-settings"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">Settings</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">1 day ago</span>
                                </div>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
            <!-- /Right-bar -->
        </div>
        <!-- END wrapper -->
		<script>
		function show(str) {
			var xhttp;    
			if (str == "") {
				document.getElementById("city").innerHTML = "";
				return;
			}
			xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				if (xhttp.readyState == 4 && xhttp.status == 200) {
				document.getElementById("city").innerHTML = xhttp.responseText;
			}
			};
			xhttp.open("GET", "get-country.php?id="+str, true);
			xhttp.send();
		}
		</script>
		
        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
    </body>
<!-- Mirrored from coderthemes.com/adminto/dark/form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 May 2018 10:35:11 GMT -->
</html>