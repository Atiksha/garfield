<?php
	include_once 'header.php'
?>

	
  
		<div class="container text-left">    
			<div class="row">
				<div class="col-sm-3 well">
					<div class="well">
						<img src="..\images\garfield1.jpeg" class="img-rounded" height="65" width="65" alt="Avatar"><a href="#"> Garfield</a>
						<br>
						<br>
						<form role="search">
							<div class="form-group input-group">
								<input type="text" class="form-control" placeholder="Search..">
								<span class="input-group-btn">
									<button class="btn btn-default" type="button">
										<span class="glyphicon glyphicon-search"></span>
									</button>
								</span>        
							</div>
						</form>
					</div>
				<?php
					include_once 'includes/dbh-inc.php';
					$t=$_GET['$type'];
					$sq = "SELECT * FROM itemlistcatg where i_type='$t'";
					$res=mysqli_query($conn,$sq);
					$count=0;
					while($row = mysqli_fetch_assoc($res))
					{
						$catg[$count]=$row["i_catg"];
						$count++;
					}
					//$catg=array("meal", "parathas", "bryani", "sandwich", "burger", "pizza" ,"chowmein" );
					//this array was initialized before the idea of using itemlist database
					echo"<form>
							<table>
								<tr>
									<th>Cuisine</th>
								</tr>";
								
								foreach($catg as $c)
								{
									echo"
											<tr>
												<td>  <p><a href='#$c'>$c</a></p></td>
											</tr>
										";
								}
					echo"	</table>
						</form>";
				?>
					<div class="alert alert-success fade in">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
						<a href="#" ><p><strong>share!</strong></p>
						share on facebook and get bonous 5 points</a>
					</div>
					<div class="well">
						<p>FILTER BY PRICE</p>
						<p>
							<div class="""slidecontainer">
							  <input type="range" min="50" max="1000" value="500" class="slider" id="myRange"><br>
							  <p>Max Range: <span id="demo"></span></p>
							</div>

							<script>
								var slider = document.getElementById("myRange");
								var output = document.getElementById("demo");
								output.innerHTML = slider.value;

								slider.oninput = function() {
								  output.innerHTML = this.value;
								}
							</script>
						</p>
					</div>
				</div>
				
	
	
	
	
	
				<div class="col-sm-9">
				
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default text-left">
									<p contenteditable="true">Status: Feeling Blue</p>
								<div class="panel-body">
								
									<button type="button" class="btn btn-default btn-sm">
										<span class="glyphicon glyphicon-thumbs-up"></span> Like
									</button>     
								</div>
							</div>
						</div>
					</div>
      
					<div  style=" overflow-y: scroll;overflow-x: auto;height:400px;height:50%;max-height:600px; margin-bottom:-10px padding-bottom:10px ">
						<?php
							
								foreach($catg as $c)
								{
									echo'
										<div class="row">
											<a name='.$c.' tabindex = 1>
												<h4 style="text-align:center;">'.$c.'</h4>
											</a>';
											
							
											include_once 'includes/dbh-inc.php';
											$sql = "SELECT * FROM item where i_type='$t' and i_catg='$c'";
											$stmt = mysqli_stmt_init($conn);
											if(!mysqli_stmt_prepare($stmt, $sql))
											{
												echo"SQL statemtent Failed";
											}
											else
											{
												mysqli_stmt_execute($stmt);
												$result = mysqli_stmt_get_result($stmt);
												while($row = mysqli_fetch_assoc($result))
												{
													
													echo'		
													<a href=" 		page3.php? $id='.$row["i_id"].'		">
														<div class="col-sm-4" >
															<div class="mycontainer">
																<div class ="gallery-container">
																	<img class="img-responsive img-rounded our-special-img " style="background-image: url(img/gallery/'.$row["i_photo"].');alt="image"> 
																<div class="mycontent ">
																		<span>'.$row["i_name"].' </span><br>
																		<span class=" star"> <b>'.$row["i_rating"].'</b></span>
																		<div class="overlay">
																				<div class="text"><h4><b>Order Now<b></h4></div>
																		</div>
																	</div>
																</div>			
															</div>
														</div></a>';
												}
											}
							
										echo'</div>';
								}
						?>
					
						
					</div>
				</div>
			</div>
		</div>

	
		

   <?php
	include_once 'footer.php'
?>