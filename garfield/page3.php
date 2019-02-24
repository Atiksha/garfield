<?php
	include_once 'header.php'
?>


	 <style>    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
	
	
	
	
	
	
.social:hover {
     -webkit-transform: scale(0.8);
     -moz-transform: scale(1.1);
     -o-transform: scale(1.1);
 }
 .social {
     -webkit-transform: scale(0.7);
     /* Browser Variations: */
     
     -moz-transform: scale(0.8);
     -o-transform: scale(0.8);
     -webkit-transition-duration: 0.5s;
     -moz-transition-duration: 0.5s;
     -o-transition-duration: 0.5s;
 }

/*
    Multicoloured Hover Variations
*/
 
 #social-fb:hover {
     color: #3B5998;
 }
 #social-tw:hover {
     color: #4099FF;
 }
 #social-gp:hover {
     color: #d34836;
 }
 #social-em:hover {
     color: #f39c12;
 }
	
	
	
	
  </style>
		  
			
						<?php 
							
							include_once 'includes/dbh-inc.php';
							$id = mysqli_real_escape_string($conn, $_GET['$id']);
							$sql = "SELECT * FROM item where i_id = '$id' ";
							$result  = mysqli_query($conn, $sql);
							$queryResult = mysqli_num_rows($result);

							
							
							
							if($queryResult > 0)
							{
								while($row = mysqli_fetch_assoc($result))
								{
									$iid=$row['i_id'];
									$rtype=$row['i_type'];
									$rcatg=$row['i_catg'];
									echo '	
											  
										<br>		  
										<div class="container text-center">    
											<div class="row">
												
												<div class="col-sm-1">
												</div>
												<div class="col-sm-5 ">
													<div class="well">
														<br>
														<center><img class="img-responsive img-rounded our-special-img" 		style="width:10;height=300;background-image: url(img/gallery/'.$row["i_photo"].');"> 
											</center>
														<br>
														<p style="font-size:12px">Roll over image to zoom in</p>
													</div>      
												</div>
						
												<div class="col-sm-5  well thumbnail">
													<div class="row">
														<div class="col-sm-11 "style="float:left;">
															<p style="color:blue;float:left;"><h3>'.$row["i_name"].'</h3></p><span class=" star"> <b>'.$row["i_rating"].'</b></span>

															<p style="color:black;">Price:<span style="font-size:20px" > ₹'.$row["i_price"].'</span></p>
															<p style="float:center;">Order this product now and earn <strong>'.$row["i_points"].' points</strong>
															<div style="width: 100%; height: 30px; border-bottom: 1px solid gray; text-align: center">
																</div><br>

														</div>
														<div class="col-sm-11 ">
																<p><strong>'.$row["i_name"].' </strong>'.$row["i_desc"].'</p>
																<br>
														</div>
						
														<div class="col-sm-9">
															<form method="get" action="cart.php?action=&hidden_name&hidden_price&qunatity&i_id">
																	Qunatity <input type="number" name="qunatity" value="1" min="1" max="5">
																	<button class="btn btn-primary btn pull-right"  name="add_to_cart" value="add_to_cart" >Order now</button>
																	
													
																	
																	<input type="hidden" name="hidden_id" value='.$row["i_id"].'/>
																	<input type="hidden" name="hidden_name" value='.$row["i_name"].' />
																	<input type="hidden" name="hidden_price" value='.$row["i_price"].'	 />
																	<input type="hidden" name="hidden_photo" value='.$row["i_photo"].'	 />
																	
															
															</form>
														</div>
																
																
																
																
													
													</div>
							
													<div class="col-md-12">
														 <div style="width: 100%; height: 20px; border-bottom: 1px solid gray; text-align: center">
																</div>
														<a href="#"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
														<a href="#><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
														<a href="#"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
														<a href="#	"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
													</div>
														
												</div>
													
											</div>
										</div>
										
										<br>
												
									
									';
								}
							}
							
						?>
						
						
							
					
					
			<div class="container pre-scrollable well">
			<div class="row">
				<div class="col-sm-11">

					<h3><b>Reviews</b></h3>
					<ul class="mdeia-list">
						<li class="media">
							
								<?php		

									include_once "includes/dbh-inc.php";	
												$sql2="select * from feedback natural join users where item_id = $iid and user_id in (select user_id from feedback where item_id = $iid )";
												//$sql = "select * from pers natural join dept where empcode=$x";
												$result = mysqli_query($conn,$sql2);
												$rowcount = mysqli_num_rows($result);
											
												if($result->num_rows > 0)
												{
													while($row=mysqli_fetch_array($result))
													{
														echo'<li class="media">
																<hr>
																<div class="media-left">
																	<a href="#">
																		<img src="..\images\user1.jpg" height="60px" width="60px" class="media-object " alt="image"/> 
																	</a>
																</div>
																<div class="media-body">
																	<h4 class="media-heading"><b>'.$row["user_first"].' '.$row["user_last"].'</b><small><i> '.$row["f_date"].'</i></small></h4>
																	<p>'.$row["f_title"].'</p>
																	<p><b>'.$row["f_star"].'</b> stars </p>
																	<p>'.$row["f_message"].' </p>
																</div>
														</li>';		
													}
												}
												else
												{
													echo"<b>NO Reviews yet</b><br><br>";
													echo"Be the first to write a review :-)";
												}
								?>		
							
						</li>
						
						
					</ul>
						
				
					
				</div>
			</div>  
		</div>  
		<hr>
		
	
		  
  
		<div class="container">
									<div class="row">
									
										<div class="col-sm-1">
										</div>
										
										
										<div class="col-sm-10">
										
										<table  class=" table table-responsive" border="0" >
											
											<h2 >Feedback</h2>
												<tr>
													
														
														
														<td>
															<div class="well">
																<form class="form-horizontal"  method="POST" >
																	<fieldset>
														
																		<br>
																		<!-- Name input-->
																		<div class="form-group">
																			<label class="col-md-3 control-label" for="name">Title</label>
																				<div class="col-md-9">
																					<input name="ftitle" type="text" placeholder="Please gve title to your comment" class="form-control" required>
																				</div>
																		</div>
																		
																		<!-- Message body -->
																		<div class="form-group">
																			<label class="col-md-3 control-label" for="message">Your message</label>
																				<div class="col-md-9">
																					<textarea class="form-control"  name="fmessage"  required placeholder="Please enter your feedback here..." rows="5"></textarea>
																				</div>
																		</div>


																		<!-- Rating -->
																		<div class="form-group">
																			<label class="col-md-3 control-label" for="message">Your rating</label>
																			<div class="col-md-9">
																				<select name="fstar" required>
																																									
																					<option value="5"> 5 </option>
																					<option value="4"> 4 </option>
																					<option value="3"> 3 </option>
																					<option value="2"> 2 </option>
																					<option value="1"> 1 </option>
																				</select>
																			</div>
																		</div>
																		
																		<input type="hidden" name="hidden_uid" value="<?php echo number_format($_SESSION['u_id'], 0);?>">
																		<input type="hidden" name="hidden_iid" value="<?php echo number_format($iid, 0);?>">
																		
																		<?PHP
																			
																			
																			//echo $_SESSION['u_id'];
			
																				//echo $iid;
																				
																		?>
																		
																		<!-- Form actions -->
																		<div class="form-group">
																			<div class="col-md-12 text-center">
																			<?php
																				if(isset($_SESSION['u_id']))
																				{	
																					//echo $_SESSION['u_id'];echo $iid;
																					//echo'<button type="submit" class="btn btn-primary btn-md" form action="includes/feedback-inc.php">Submit</button>';
																					echo'<input type="submit" class="btn btn-primary btn-md" name="submit" value="submit" class="btn"  formaction="includes/feedback-inc.php">';
																				}
																				else
																				{ 
																					echo'<button type="submit" class="btn btn-primary btn-md"  onclick="checkFunction();" >Submit</button>	';
																					
																				}
																			?>
																				
																				<button type="reset" class="btn btn-default btn-md"> Clear </button>
																			</div>
																		</div>
																	</fieldset>
																	<script>
																		function checkFunction() 
																		{
																			alert("Please login First!!");
																		}
																	</script>
																</form>
																	
															</div>
														</td>
														

													
													
													
																										
												</tr>
											
										</table>
										
										
										
										</div>
										
										
										<div class="col-sm-1">
										</div>
										
									</div>		
								</div>	
								
								
								
		
		<div class="container-fluid bg-3 text-center">    
	
		<h4 style=" background-color: white; color:brown">RELATED PRODUCTS</h1><br>
		<div class="row">
			<div class="col-sm-1">
			</div>
			
			<div class="col-sm-10">
				<br><br>
					
				<?php 
								
							include_once 'includes/dbh-inc.php';
							$sql = "SELECT * FROM item where i_type='$rtype' and i_catg='$rcatg'";
							$stmt = mysqli_stmt_init($conn);
							if(!mysqli_stmt_prepare($stmt, $sql))
							{
								echo"SQL statemtent Failed";
							}
							else
							{
								$count=1;
								mysqli_stmt_execute($stmt);
								$result = mysqli_stmt_get_result($stmt);
								while($row = mysqli_fetch_assoc($result) AND $count<=4)
								{
													
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
										</div></a>';
										$count++;
								}
							}
						?>
				<div class="col-sm-1">
				</div>
			</div>
		</div>
		
	</div>

		
		
		
		
		
		
		
		
		
		
		
		
		
		
	
   <?php
	include_once 'footer.php'
?>
		
		
		
	</body>
</html>
