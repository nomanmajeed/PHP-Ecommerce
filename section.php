<?php
		require_once("config.php");
		$connection = mysqli_connect(DBHOST, DBUSER, DBPASSWORD, DBNAME);
	
		if (mysqli_connect_error()) {
			die(mysqli_connect_error());
		}
	
		
?>

    <!-- section men clothing -->
    <div class="section">
        <?php
            $sql = 'Select * from items i join itempictures p on(i.item_id =p.item_id) where item_category="Shirt"';
	
		    $result = mysqli_query($connection, $sql);
        ?>
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">Men's Clothing</h2>
					</div>
				</div>
				<!-- section title -->
            <?php
                while($row=mysqli_fetch_assoc($result)){

                
            ?>
				<!-- Product Single -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="product product-single">
						<div class="product-thumb">
							<img src="./img/<?php echo $row['pic'] ?>.jpg" alt="" height="350px">
						</div>
						<div class="product-body">
							<h3 class="product-price"><?= $row['item_price']?></h3>
							
							<h2 class="product-name"><a href="product-page.php?id=<?php echo $row['item_id']?>"><?= $row['item_name']?></a></h2>
							<div class="product-btns">
								<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
								<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
								<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
							</div>
						</div>
					</div>
				</div>
				<!-- /Product Single -->
            <?php
                }
            ?>        
				
			</div>
			<!-- /row -->
			</div>
		<!-- /container -->
	</div>
	<!-- /section men clothing -->

	<!-- section laptops -->
	<div class="section">
        <?php
            $sql = 'Select * from items i join itempictures p on(i.item_id =p.item_id) where item_category="Laptop"';
	
		    $result = mysqli_query($connection, $sql);
        ?>
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">Laptops</h2>
					</div>
				</div>
				<!-- section title -->
            <?php
                while($row=mysqli_fetch_assoc($result)){

                
            ?>
				<!-- Product Single -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="product product-single">
						<div class="product-thumb">
							<img src="./img/<?php echo $row['pic'] ?>.jpg" alt="" height="350px">
						</div>
						<div class="product-body">
							<h3 class="product-price"><?= $row['item_price']?></h3>
							
							<h2 class="product-name"><a href="product-page.php?id=<?php echo $row['item_id']?>"><?= $row['item_name']?></a></h2>
							<div class="product-btns">
								<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
								<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
								<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
							</div>
						</div>
					</div>
				</div>
				<!-- /Product Single -->
            <?php
                }
            ?>        
				
			</div>
			<!-- /row -->
			</div>
		<!-- /container -->
	</div>
	<!-- /section laptops -->

	<!-- section shoes -->
	<div class="section">
        <?php
            $sql = 'Select * from items i join itempictures p on(i.item_id =p.item_id) where item_category="Shoe"';
	
		    $result = mysqli_query($connection, $sql);
        ?>
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">Shoes</h2>
					</div>
				</div>
				<!-- section title -->
            <?php
                while($row=mysqli_fetch_assoc($result)){

                
            ?>
				<!-- Product Single -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="product product-single">
						<div class="product-thumb">
							<img src="./img/<?php echo $row['pic'] ?>.jpg" alt="" height="350px">
						</div>
						<div class="product-body">
							<h3 class="product-price"><?= $row['item_price']?></h3>
							
							<h2 class="product-name"><a href="product-page.php?id=<?php echo $row['item_id']?>"><?= $row['item_name']?></a></h2>
							<div class="product-btns">
								<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
								<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
								<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
							</div>
						</div>
					</div>
				</div>
				<!-- /Product Single -->
            <?php
                }
            ?>        
				
			</div>
			<!-- /row -->
			</div>
		<!-- /container -->
	</div>
	<!-- /section shoes -->

	<!-- section electronics -->
	<div class="section">
        <?php
            $sql = 'Select * from items i join itempictures p on(i.item_id =p.item_id) where item_category="Electronics"';
	
		    $result = mysqli_query($connection, $sql);
        ?>
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">Electronics</h2>
					</div>
				</div>
				<!-- section title -->
            <?php
                while($row=mysqli_fetch_assoc($result)){

                
            ?>
				<!-- Product Single -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="product product-single">
						<div class="product-thumb">
							<img src="./img/<?php echo $row['pic'] ?>.jpg" alt="" height="350px">
						</div>
						<div class="product-body">
							<h3 class="product-price"><?= $row['item_price']?></h3>
							
							<h2 class="product-name"><a href="product-page.php?id=<?php echo $row['item_id']?>"><?= $row['item_name']?></a></h2>
							<div class="product-btns">
								<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
								<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
								<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
							</div>
						</div>
					</div>
				</div>
				<!-- /Product Single -->
            <?php
                }
            ?>        
				
			</div>
			<!-- /row -->
			</div>
		<!-- /container -->
	</div>
	<!-- /section electronics -->