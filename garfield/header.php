<?php
	session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>my</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="..\css\bootstrap.min.css"> 
	<link rel="stylesheet" href="..\css\font-awesome.min.css">
	<link rel="stylesheet" href="..\css\mycss.css">
	
	<script src="..\jquery\jquery.min.js"></script>
	<script src="..\js\bootstrap.min.js"></script>
	
	<link rel="shortcut icon" href="..\images\garfieldicon.jpeg"/>
	
	 <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min."> -->

	
	<style>
	
		/* Remove the navbar's default margin-bottom and rounded borders */ 
		.navbar {
		  margin-bottom: 0;
		  border-radius: 0;
		}
		
		/* Add a gray background color and some padding to the footer */
		footer {
		  background-color: black;
		  padding: 25px;
		  opacity:0.9;
		}
		
		
	</style>
</head>

<body>

	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>                        
			  </button>
			  <a class="navbar-brand" href="#">Garfield</a>
			</div>
			
			
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="#garfield">About</a></li>
					<li><a href="#special">Special</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			  
				<!-- For Login and Signup -->
				<?php
					
					if(isset($_SESSION['u_id']))
					{
						
						//logout form
						echo'	
							<ul class="nav navbar-nav navbar-right">
								<li>
									<a href="#"><span class="glyphicon glyphicon-user" data-target="#loginModal" data-toggle="modal"> ';
									echo $_SESSION['u_first']."". $_SESSION['u_last'];		//to print the name of user
						echo' Logout</span></a>
									<div class="modal fade" data-keyboard="false" data-backdrop="static" id="loginModal" tabindex="-1">
										<div class="modal-dialog modal-sm">
											<div class="modal-content">
												<div class="modal-body">		
													<form action="includes/logout.php" method="POST">
														<div class="modal-footer">
															Are you sure you want to logout?<br><br>
															<button class="btn btn-primary" type="submit" name="submit"> Yes</button>
															<button class="btn btn-primary" data-dismiss="modal">No</button>
															<br>
														</div>
													</form>
													
												</div>		
											</div>	
										</div>
									</div>				
													
							';//end of echo
												
					}
					
					else
					//login form
					{
						echo'	
								<ul class="nav navbar-nav navbar-right">
									<li>
										<a href="#"><span class="glyphicon glyphicon-user" data-target="#loginModal" data-toggle="modal"> Login</span></a>
										<div class="modal fade" data-keyboard="false" data-backdrop="static" id="loginModal" tabindex="-1">
											<div class="modal-dialog modal-sm">
												<div class="modal-content">
													<div class="modal-body">
														<div class="modal-header">
															<button class="close" data-dismiss="modal">&times;</button>
															<h2 class="modal-title">	
																<b>Login</b>
															</h2>
															or <a data-dismiss="modal" href="signup3.html" data-target="#signupModal" data-toggle="modal" style="color:red;font-size:12px; font-weight: bold;" >create an account</a>
														</div>
														
														<form action="includes/login.php" method="POST">
															<div class="from-group">
																<label for="inputUserName">UserName</label>
																<input class="form-control" placeholder="Login Username" type="text" name="uid">
															</div>

															<div class="from-group">
																<label for="inputPassword">Password</label>
																<input class="form-control" placeholder="Login Password" type="password" name="upwd">
															</div>
															<br>
															<input type="checkbox" checked="checked" name="remember"> Remember me
														

															<div class="modal-footer">
																<button class="btn btn-primary" type="submit" name="submit"> Login</button>
																<button class="btn btn-primary" data-dismiss="modal">close</button>
																<br>
																<a href="#" style="color:blue;font-size:12px;">Forget Password?</a>
															</div>
																	
														</form>
													</div>
												</div>
											</div>
										</div>'
						;
					}
				?>
									
									
								
						
						
						
						 <div class="modal fade" data-keyboard="false" data-backdrop="static" id="signupModal" tabindex="-1">
							<div class="modal-dialog modal-sm">
								<div class="modal-content">

								  <div class="modal-header">
									<button class="close" data-dismiss="modal">&times;</button>
									<h2 class="modal-title"> <b>Signup</b></h2>
								  </div>

								 
								  
								  
								  
									<div class="modal-body" >
										<form action="includes/signup.php" method="POST">
										  <div class="from-group">
											<label for="inputUserName">First Name</label>
											<input class="form-control" placeholder="Enter your First Name" type="text"  name="first">
										  </div>
										  
										  <div class="from-group">
											<label for="inputUserName">Last Name</label>
											<input class="form-control" placeholder="Enter your Last Name" type="text"  name="last">
										  </div>

										  <div class="from-group">
											<label for="inputUserEmail">UserEmail</label>
											<input class="form-control" placeholder="Your Email Address" type="text"  name="email">
										  </div>

										  <div class="from-group">
											<label for="inputUserContact">UserContact</label>
											
											<input class="form-control" placeholder="Mobile Number"  type="tel"  name="contact">
										  </div>

										   <div class="from-group">
											<label for="inputUserName">User Name</label>
											<input class="form-control" placeholder="Enter user Name" type="text"  name="uid">
										  </div>
										  
										  <div class="from-group">
											<label for="inputPassword">Password</label>
											<input class="form-control" placeholder="Choose Password" type="Password"  name="pwd">
										  </div>
										  <br>
										  <input type="checkbox" checked="checked" name="remember"> Remember me
										  
										  <div class="modal-footer">
											  <button class="btn btn-primary" type="submit" name="submit">Register</button>
											  <button class="btn btn-primary" data-dismiss="modal">Close</button>
										  </div>
										  
										</form>

										
									</div>

								</div>
							</div>
						</div>

			
		
		
		
		
						
						
						
					</li>
					<li>
						<?php
							if(isset($_SESSION['u_id']))
							{	
								//myFunction();
								
								echo'<a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a>';
							}
						?>
					</li>
				  
					<li>
						<?php
							if(isset($_SESSION['admin']))
							{	
								//myFunction();
								
								//echo'<a href="insert-item.php"><span class="glyphicon glyphicon-list"></span> Modify</a>';
								
								



								echo'
									<ul class="nav navbar-nav navbar-right">
									<li>
										<a href="#"><span class="glyphicon glyphicon-list" data-target="#modifyModal" data-toggle="modal"> Modify</span></a>
										<div class="modal fade" data-keyboard="false" data-backdrop="static" id="modifyModal" tabindex="-1">
											<div class="modal-dialog modal-sm">
												<div class="modal-content">
													<div class="modal-body">
														<div class="modal-header">
															<button class="close" data-dismiss="modal">&times;</button>
															<h2 class="modal-title">	
																<b>Modify Data</b>
															</h2>
															
														</div>
														
														<form  method="POST">
															<table>
																<tr>
																	<td ><label for="inputUserName">To insert new item types</label></td>
																	<td> </td>
																	<td align="right"><button class="btn btn-primary" type="submit" name="submit" formaction="insert-item-list.php">item types </button></td>
																<tr>
																<tr>
																	<td><label for="inputUserName">To delete new item types</label></td>
																	<td> </td>
																	<td  align="right"><button class="btn btn-primary" type="submit" name="submit"> delete types </button></td>
																<tr>
																<tr>
																	<td><label for="inputUserName">To insert new item in menu</label></td>
																	<td> </td>
																	<td  align="right"><button class="btn btn-primary" type="submit" name="submit" formaction="insert-item.php">new item  </button></td>
																<tr>
																<tr>
																	<td><label for="inputUserName">To delete new item in menu</label></td>
																	<td> </td>
																	<td  align="right"><button class="btn btn-primary" type="submit" name="submit">delete item  </button></td>
																<tr>
															</table>
															

														

															
																	
														</form>
													</div>
												</div>
											</div>
										</div>'
								;
															
								
								
								
								
								
								
							}
						?>
					</li>
						
				</ul>
		 </div>
	</nav>
