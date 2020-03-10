
<!DOCTYPE html>
<html>
<head>
<title>Glo Cstore</title>
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Food Order Form Responsive, Login form web template, Sign up Web Templates,Profile widgets,Flat icon hover effects,Flat Registration Forms  Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<!-- //end-smoth-scrolling -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300,400,400italic,600,600italic,700,300italic' rel='stylesheet' type='text/css'>
</head>
<body>
     <h1>Glo Cstore</h1>
		<div class="message warning">
			<div class="inset agile">
							<div class="sap_tabs w3ls-tabs">
							<h2>Pickup your path to happy drinking</h2>
				<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
					<ul class="resp-tabs-list">
						<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Place an Order</span></li> 
						<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><label>/</label><span>Delivery</span></li>
						<!-- <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><label>/</label><span>Pickup</span></li> -->
					</ul>	
					<div class="clear"> </div>
					<div class="alert-close"> </div> 
					<div class="resp-tabs-container">
						<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
							<div class="login-agileits-top"> 
							
<?php 
			$name = $drink="";
			$reg_date = "";

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$name = $_POST["name"];
			$drink = $_POST["drink"];
			$reg_date = date("Y-m-d");
			$user = $_SESSION['email'];

			}

?>

								<form action="#" method="post">
									<p>Name </p>
									<input type="text" name="name" placeholder="Your official name" required=""/>
									<p>What would you like?</p>
									<input type="text" placeholder="Drink" name="drink" required=""/> 
									<input type="submit" value="submit">
								</form>  
							</div>
							 


						</div> 
						<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
							<div class="login-agileits-top">


								<form action="#" method="post">
							
									<p>Address</p>
									<input type="text" placeholder="Street,City,State,Zip Code " name="address" required=""/>
									<p>Mobile</p> 
									<input type="text" placeholder="eg 0701234567 " name="phone" required=""/> 
									<input type="submit" value="Place Order">
								</form>  
							</div>


						</div>
						<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
							<div class="login-agileits-top"> 
								<div class="login-agileits-top">


								<form action="#" method="post">
									<p>Name</p>
									<input type="text" name="Name" placeholder="Name" required=""/>
									<p>Phone</p>
									<input type="text" placeholder="Phone " name="User Name" required=""/> 
									<input type="submit" value="Check Availability">
								</form>  

								
							</div>  
							</div>
						</div>
					</div>							
				</div>	 
	</div>	
	<div class="right-section-w3ls"></div>
			<div class="clear"> </div>

				</div>					
		</div>

	<div class="clear"> </div>
     <div class="copy-right w3l-agile">
		<p> © 2020 Glo Cstore. All Rights Reserved </a></p>
	</div>
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script>$(document).ready(function(c) {
	$('.alert-close').on('click', function(c){
		$('.message').fadeOut('slow', function(c){
	  		$('.message').remove();
		});
	});	  
});
</script>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
<!-- ResponsiveTabs js -->
			<script type="text/javascript">
				$(document).ready(function () {
					$('#horizontalTab').easyResponsiveTabs({
						type: 'default', //Types: default, vertical, accordion           
						width: 'auto', //auto or any width like 600px
						fit: true   // 100% fit in a container
					});
				});
			</script>
			<!-- //ResponsiveTabs js -->					
</body>
</html>