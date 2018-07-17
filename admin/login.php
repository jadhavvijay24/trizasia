<?php

session_start();
	if(isset($_SESSION["uid"]))
	{
		header("location:index.php");
	}

include_once("config.php");

		$errstatus=0;
		$errmsg="";
		if(isset($_POST["submit"]))
		{
			$username=$_POST["username"];
			if($username=="")
			{
				$errstatus=1;
				$errmsg=$errmsg."Please enter Username <br>";
			}
			$password=$_POST["password"];
			if($password=="")
			{
				$errstatus=1;
				$errmsg=$errmsg."Please enter password <br>";
			}
			if($errstatus!=1)
			{
				$sql="SELECT  * FROM  user WHERE username='$username' AND password='$password'";
				$res =$mysqli->query($sql);
				
				if(!$res)
				{
					echo "Error: (" . $mysqli->errno . ") " . $mysqli->error;
					die();
				}
					
					
					
					/*-------------- Fetching row if that user exist--------------------*/
					if($res->num_rows==1)
					{
					    /*--------------set a session-----------*/
						$row= $res->fetch_assoc();
						
						$_SESSION["uid"]=$row["user_id"];
						/*--------------Redirected-----------*/
						header("location:index.php");
						
					}
					else
					{
						$errstatus=1;
						$errmsg=$errmsg."wrong username or password";
					}
			}
		}
		
?>
<!DOCTYPE html>
<html>
    

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App Favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App title -->
        <title>Swaraj Tours</title>

        <!-- App CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="assets/js/modernizr.min.js"></script>

        
    </head>
    <body>

        <div class="account-pages" style="border:0px;background:none;"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">
            <div class="text-center">
                <a href="index.html" class="logo"><span>Swaraj<span>Tours</span></span></a>
                <h5 class="text-muted m-t-0 font-600">Admin Dashboard</h5>
            </div>
<?php
			if($errstatus==1){
				?>
           <div class="m-t-40 card-box">
                <div class="text-center">
                    <h4 class="text-uppercase font-bold m-b-0">Error</h4>
<p class="center login-form-text"><font color="red"><?php echo $errmsg;?></font></p>
                </div>
                
            </div>
				
		<?php	}
			
		?>

        	<div class="m-t-40 card-box">
                <div class="text-center">
                    <h4 class="text-uppercase font-bold m-b-0">Sign In</h4>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal m-t-20" action="" method="POST">

                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" name="username" required="" placeholder="Username">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" name="password" required="" placeholder="Password">
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-xs-12">
                                <div class="checkbox checkbox-custom">
                                    <input id="checkbox-signup" type="checkbox">
                                    <label for="checkbox-signup">
                                        Remember me
                                    </label>
                                </div>

                            </div>
                        </div>

                        <div class="form-group text-center m-t-30">
                            <div class="col-xs-12">
                                <button class="btn btn-custom btn-bordred btn-block waves-effect waves-light" name="submit" type="submit">Log In</button>
                            </div>
                        </div>

                       
                    </form>

                </div>
            </div>
            <!-- end card-box-->

            
            
        </div>
        <!-- end wrapper page -->
        

        
    	<script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
	
	</body>

</html>