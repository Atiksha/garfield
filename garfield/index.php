<?php
	include_once 'header.php'
?>

	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img class="img-responsive" src="..\images\7.jpg" alt="image"  > 
				<div class="carousel-caption">
					<h3>Sell $</h3>
					<p>Money Money.</p>
				</div>      
			</div>

			<div class="item">
					<img class="img-responsive" src="..\images\8.jpg" alt="image"  > 
					<div class="carousel-caption">
						<h3>More Sell $</h3>
						<p>Lorem ipsum...</p>
					</div>      
			</div>
		  
			<div class="item">
				<img class="img-responsive" src="..\images\5.jpg" alt="image"  > 
				<div class="carousel-caption ">
					<h3>myyyyy $</h3>
					<p>Lorem ipsum...</p>
				</div>      
			</div>
		  
		</div>

		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	<div class="container">
		<div class="row">
			<br>
			<br>
			<div class="btn-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
				<a href="page2.php?$type=Veg"><button type="button" class="btn btn-danger btn-lg btn-block outline  hvr-glow hvr-grow">Vegetarian</button></a>
			</div>
			<div class="btn-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
				<a href="page2.php?$type=Non-Veg"><button type="button" class="btn btn-danger btn-lg btn-block outline  hvr-glow hvr-grow">Non-Vegetarian</button></a>
			</div>
			<div class="btn-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
				<a href="page2.php?$type=Dessert"><button type="button" class="btn btn-danger btn-lg btn-block outline  hvr-glow hvr-grow">Dessert</button></a>
			</div>
			<div class="btn-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
				<a href="page2.php?$type=Beverages"><button type="button" class="btn btn-danger btn-lg btn-block outline  hvr-glow hvr-grow">Beverages</button></a>
			</div>
		  </div>
	</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		<!--Veg Portion-->
		<div class="container-fluid bg-3 text-center">    
	
		
			<a name="special" tabindex = 1>
				<h1 style=" background-color: white; color:brown">Our Special</h1><br>
			</a>
		
			<div class="row">
				<div class="col-sm-1">
				</div>
				
				<div class="col-sm-10">
					<br><br>
					<div style="width: 100%; height: 20px; border-bottom: 1px solid gray; text-align: center">
						<span style="font-size: 30px; background-color: white; padding: 0 15px;">
							Veg <!--Padding is optional-->
						</span>
					</div><br><br><br>
					
					<?php 
							
						include_once 'includes/dbh-inc.php';
						$sql = "SELECT * FROM item where i_rating>4 and i_type='Veg'";
						$stmt = mysqli_stmt_init($conn);
						if(!mysqli_stmt_prepare($stmt, $sql))
						{
							echo"SQL statemtent Failed";
						}
						else
						{
							mysqli_stmt_execute($stmt);
							$result = mysqli_stmt_get_result($stmt);
							$counter=1;
							while($row = mysqli_fetch_assoc($result) and $counter<5)
							{
								$counter++;
												
								echo'
									<a href=" 		page3.php? $id='.$row["i_id"].'		">
										<div class="col-sm-3" >
											<div class="mycontainer">
												<div class ="gallery-container">
													<img class="img-responsive img-rounded our-special-img " style="background-image: url(img/gallery/'.$row["i_photo"].');alt="image"> ';
												echo'<div class="mycontent ">
														<span>'.$row["i_name"].' </span><br>
														<span class=" star"> <b>'.$row["i_rating"].'</b></span>
														<div class="overlay">
																<div class="text"><h4><b>Order Now<b></h4></div>
														</div>
													</div>
												</div>			
											</div>
										</div>
									</a>';
							}
						}
					?>
					<div class="col-sm-1">
					</div>
				</div>
			</div>
			
		</div>	

	
	
	
		<!--Non Veg Portion-->
		<div class="container-fluid bg-3 text-center">  
	  
	  
		<div class="row">
			<div class="col-sm-1">
			</div>
			
			<div class="col-sm-10">
				<br><br>
				<div style="width: 100%; height: 20px; border-bottom: 1px solid gray; text-align: center">
					<span style="font-size: 30px; background-color: white; padding: 0 15px;">
						Non-Veg <!--Padding is optional-->
					</span>
				</div><br><br><br>
				
					<?php 
							
						include_once 'includes/dbh-inc.php';
						$sql = "SELECT * FROM item where i_rating>1 and i_type='Non-Veg'";
						$stmt = mysqli_stmt_init($conn);
						if(!mysqli_stmt_prepare($stmt, $sql))
						{
							echo"SQL statemtent Failed";
						}
						else
						{
							mysqli_stmt_execute($stmt);
							$result = mysqli_stmt_get_result($stmt);
							$counter=1;
							while($row = mysqli_fetch_assoc($result)and $counter<5)
							{
								$counter++;			
								echo'
									<a href=" 		page3.php? $id='.$row["i_id"].'		">
										<div class="col-sm-3" >
											<div class="mycontainer">
												<div class ="gallery-container">
													<img class="img-responsive img-rounded our-special-img " style="background-image: url(img/gallery/'.$row["i_photo"].');alt="image"> ';
												echo'<div class="mycontent ">
														<span>'.$row["i_name"].' </span><br>
														<span class=" star"> <b>'.$row["i_rating"].'</b></span>
														<div class="overlay">
																<div class="text"><h4><b>Order Now<b></h4></div>
														</div>
													</div>
												</div>			
											</div>
										</div>
									</a>';
							}
						}
					?>
				
				<div class="col-sm-1">
				</div>
			</div>
		</div>
	</div>	
	
	
	
	<!--Dessert Portion-->
		<div class="container-fluid bg-3 text-center">  
	  
	  
		<div class="row">
			<div class="col-sm-1">
			</div>
			
			<div class="col-sm-10">
				<br><br>
				<div style="width: 100%; height: 20px; border-bottom: 1px solid gray; text-align: center">
					<span style="font-size: 30px; background-color: white; padding: 0 15px;">
						Desserts <!--Padding is optional-->
					</span>
				</div><br><br><br>
				
					<?php 
							
						include_once 'includes/dbh-inc.php';
						$sql = "SELECT * FROM item where i_rating>1 and i_type='Dessert'";
						$stmt = mysqli_stmt_init($conn);
						if(!mysqli_stmt_prepare($stmt, $sql))
						{
							echo"SQL statemtent Failed";
						}
						else
						{
							mysqli_stmt_execute($stmt);
							$result = mysqli_stmt_get_result($stmt);
							$counter=1;
							while($row = mysqli_fetch_assoc($result)and $counter<5)
							{
								$counter++;			
								echo'
									<a href=" 		page3.php? $id='.$row["i_id"].'		">
										<div class="col-sm-3" >
											<div class="mycontainer">
												<div class ="gallery-container">
													<img class="img-responsive img-rounded our-special-img " style="background-image: url(img/gallery/'.$row["i_photo"].');alt="image"> ';
												echo'<div class="mycontent ">
														<span>'.$row["i_name"].' </span><br>
														<span class=" star"> <b>'.$row["i_rating"].'</b></span>
														<div class="overlay">
																<div class="text"><h4><b>Order Now<b></h4></div>
														</div>
													</div>
												</div>			
											</div>
										</div>
									</a>';
							}
						}
					?>
				
				<div class="col-sm-1">
				</div>
			</div>
		</div>
	</div>	
	<br>
	
	
	
	
	
	
	<!--Beverages Portion-->
		<div class="container-fluid bg-3 text-center">  
	  
	  
		<div class="row">
			<div class="col-sm-1">
			</div>
			
			<div class="col-sm-10">
				<br><br>
				<div style="width: 100%; height: 20px; border-bottom: 1px solid gray; text-align: center">
					<span style="font-size: 30px; background-color: white; padding: 0 15px;">
						Beverages <!--Padding is optional-->
					</span>
				</div><br><br><br>
				
					<?php 
							
						include_once 'includes/dbh-inc.php';
						$sql = "SELECT * FROM item where i_rating>1 and i_type='Beverages'";
						$stmt = mysqli_stmt_init($conn);
						if(!mysqli_stmt_prepare($stmt, $sql))
						{
							echo"SQL statemtent Failed";
						}
						else
						{
							mysqli_stmt_execute($stmt);
							$result = mysqli_stmt_get_result($stmt);
							$counter=1;
							while($row = mysqli_fetch_assoc($result)and $counter<5)
							{
								$counter++;			
								echo'
									<a href=" 		page3.php? $id='.$row["i_id"].'		">
										<div class="col-sm-3" >
											<div class="mycontainer">
												<div class ="gallery-container">
													<img class="img-responsive img-rounded our-special-img " style="background-image: url(img/gallery/'.$row["i_photo"].');alt="image"> ';
												echo'<div class="mycontent ">
														<span>'.$row["i_name"].' </span><br>
														<span class=" star"> <b>'.$row["i_rating"].'</b></span>
														<div class="overlay">
																<div class="text"><h4><b>Order Now<b></h4></div>
														</div>
													</div>
												</div>			
											</div>
										</div>
									</a>';
							}
						}
					?>
				
				<div class="col-sm-1">
				</div>
			</div>
		</div>
	</div>	
	<br>


   <?php
	include_once 'footer.php'
?>