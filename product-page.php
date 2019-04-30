<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>E-Store</title>
		<link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
		<link type="text/css" rel="stylesheet" href="css/slick.css" />
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css" />
		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link type="text/css" rel="stylesheet" href="css/style.css" />
	</head>
	
<body>
	<!-- HEADER -->
	<?php
	include 'header.php';
	?>
	<!-- /HEADER -->

	<!-- NAVIGATION -->
	<?php
	include 'navigation.php';
	?>
	<!-- /NAVIGATION -->

	<?php
		if(isset($_GET['id'])){
			$itemid = $_GET['id'];
			$id=(int)$itemid;
			//echo gettype($id);
		} else {
			echo "failed";
		}
		
		require("config.php");
		$connection = mysqli_connect(DBHOST, DBUSER, DBPASSWORD, DBNAME);
	
		if (mysqli_connect_error()) {
			die(mysqli_connect_error());
		}
		//echo "Hello";
		//$sql = "SELECT * FROM items where item_id=$id";
		//echo "hey";
		$sql="Select * from items i join itempictures p on(i.item_id =p.item_id and i.item_id=$id) ";
		
		$result = mysqli_query($connection, $sql);
		//print_r($result);
		while($row=mysqli_fetch_assoc($result)){
			$pic=$row['pic'];
			//print_r($row);
	?>

	<!-- BREADCRUMB -->
	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li><a href="products.php">Products</a></li>
				<li class="active"><?php echo $row['item_category']?></li>
			</ul>
		</div>
	</div>
	<!-- /BREADCRUMB -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!--  Product Details -->
				<div class="product product-details clearfix">
					<div class="col-md-6">
						<div id="product-main-view">
							<div class="product-view">
								<img src="./img/<?php echo $pic ?>.jpg" alt="">
							</div>
							
						</div>
						
					</div>
					<div class="col-md-6">
						<div class="product-body">
							<h2 class="product-name"><?php echo $row['item_name']?></h2>
							<h3 class="product-price"><?php echo $row['item_price']?> </h3>
							<p><strong>Availability:</strong> In Stock</p>
							<p><strong>Brand:</strong> <?php echo $row['item_brand']?></p>
							<p><strong>Description:</strong><br> <?php echo $row['item_description']?></p>
							<div class="product-btns">
								<div class="qty-input">
									<span class="text-uppercase">QTY: </span>
									<input class="input" type="number">
								</div>
								<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
								<div class="pull-right">
									<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
									<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
									<button class="main-btn icon-btn"><i class="fa fa-share-alt"></i></button>
								</div>
							</div>
						</div>
					</div>
					
				</div>
				<!-- /Product Details -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->
	<?php
        }
    ?>
	<!-- FOOTER -->
	<?php
	include 'footer.php';;
	?>
	<!-- /FOOTER -->

	<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>
