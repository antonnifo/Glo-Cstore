<?php ob_start(); ?>
<?php include '../includes/db_connection.php'; ?>
<?php include '../includes/functions.php'; ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Glo Cstore</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/snow.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/component.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style_grid.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>
<body>
			<!-- /pages_agile_info_w3l -->

						<div class="pages_agile_info_w3l">
							<!-- /login -->
							   <div class="over_lay_agile_pages_w3ls">
								    <div class="registration">
								
												<div class="signin-form profile">
													<h2>Admin Area Sign in</h2>
												<div class="login-form">
                                                    
	<?php
// If form submitted, insert values into the database.
    if (isset($_POST['email'])) {
        // removes backslashes
		$email = stripslashes($_REQUEST['email']);
        //escapes special characters in a string
		$email = mysqli_real_escape_string($con, $email);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con, $password);
		//Checking  is user existing in the database or not

    	$query = "SELECT * FROM `admin` WHERE email='$email'
		and password='{" . md5($password) . "}'";
		
      	$result = mysqli_query($con, $query);
      	confirm_query($result);
		  $rows = mysqli_num_rows($result);
		  
      	if ($rows == 1) {
        	$_SESSION['email'] = $email;
            // Redirect user to dashboard.php
        	header("Location: index.php");
      } else {
        echo "
			<h3>username/password is incorrect.</h3>
			<br/>Click here to <a href='signin.php'>Try Again</a>";
			}
    } else {
      ?>  
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
		<input type="text" name="email" placeholder="Email" required="">
		<input type="password" name="password" placeholder="Password" required="">
		<div class="tp">
			<input type="submit" value="SIGN IN">
		</div>
	</form>
	<?php } ?>
			</div>
														
 <!-- <h6><a href="../home/index.php">Back To Home</a><h6> -->
				</div>
						</div>
	<!--copy rights start here-->
	<div class="copyrights_agile">
	 <p>© 2019-<?php echo date("Y"); ?>Glo Cstore. All Rights Reserved </p>
	</div>	
			<!--copy rights end here-->
						    </div>
						</div>
							<!-- /login -->
<!-- //pages_agile_info_w3l -->


<!-- js -->

          <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		  <script src="js/modernizr.custom.js"></script>
		
		   <script src="js/classie.js"></script>
		  <script src="js/gnmenu.js"></script>
		  <script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		 </script>
	
<!-- //js -->

<script src="js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});	
		});
		</script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<script src="js/snow.js"></script>
 <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>


</body>
</html>