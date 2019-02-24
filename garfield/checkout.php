<?php
	include_once 'header.php'
?>

<script>
	function myFunction() {
		alert("payment Sucessful...     Your Order will be delivered with in 30 minutes!!   visit again :-)");
	}
</script>


  <style>    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
	
	
	.vl {
    border-left: 2px dotted black;
    height: 500px;
    position: absolute;
    //left: 50%;
    margin-left: -8px;
    top: 0;
}







.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}


input[type=text] {
  width: 100%;
  margin-bottom: 10px;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}






/* Add a for social media buttons */
		a {
			color: #2098D1;
			text-decoration: none;
		}
		a:hover {
			
			text-decoration: none;
		}
		
		.fa 
		{
			  padding: 1px;
			  font-size: 20px;
			  width: 30px;
			  text-align: center;
			  text-decoration: none;
			  margin: 3px 2px;
			  border-radius: 50%;
		}
	
		.fa:hover 
		{
			opacity: 0.7;
			text-decoration: none;
			color: aqua;
		}

		.fa	
		{
		  background: black;
		  color: white;
		}
		/*end of social media buttons */
		



  </style>
</head>
<body>




  <br>
  <br>
  <br>
<div class="container text-center ">    
  <div class="row ">
    
	 <div class="col-sm-1">

    </div>
	
	
	
    <div class="col-sm-7 well">
		<div class="row ">
			<form action="includes/order-inc.php?$recipt=ssss" onsubmit="myFunction()" method="POST">
			
			 <div class="col-sm-6 ">
			  <h3>Billing Address</h3>
			  
			  
				<TABLE border =0 width=98% cellpadding="0" > 
					
						<tr class="alert fade in">
							<td height=80%  width=50% align="left">
								
							</td>
						</tr>
						<tr>
							<td colspan=2>
								<label for="fname"><i class="fa fa-user"></i> Full Name</label>
								<input type="text" name="fullname" placeholder="Atiksha Pundir" pattern="[a-zA-Z0-9 ]+" required>
								
							</td>
						</tr>
						<tr>
							<td colspan=2>
							<label for="email"><i class="fa fa-envelope"></i> Email</label>
								<input type="text" name="email" placeholder="abc@example.com" pattern="[^@\s]+@[^@\s]+\.[^@\s]+"  required>
								
							</td>
						</tr>
						<tr >
							<td colspan=2>
								<label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
								<input type="text"  name="address" placeholder="shanti vihar dehradun" pattern="([a-zA-Z0-9]| |/|\\|@|#|\$|%|&)+" required>
							</td>
						</tr>
						<tr >
							<td colspan=2>
								<label for="city"><i class="fa fa-institution"></i> City</label>
								<input type="text" name="city" placeholder="Dehradun" pattern="^([a-zA-Z\u0080-\u024F]+(?:. |-| |'))*[a-zA-Z\u0080-\u024F]*$" required>
							</td>
						</tr>
						<tr >
							<td>
								<label for="state">State</label>
								<input type="text" name="state" placeholder="UK" pattern="^([a-zA-Z\u0080-\u024F]+(?:. |-| |'))*[a-zA-Z\u0080-\u024F]*$" required>
							</td>
							<td>
								<label for="zip">Pin Code</label>
								<input type="text"  name="pincode" placeholder="256325" pattern="[0-9]{6}" required>	
							</td>
						</tr>
						
						
						
							
				</TABLE>
			
			  
			  
			  
			  
				
				
				
				

			</div>
			 <div class="col-sm-6">
				  <h3>Payment</h3>
				<label for="fname">Accepted Cards</label>
				<div class="icon-container">
				  <i class="fa fa-cc-visa" style="color:navy;"></i>
				  <i class="fa fa-cc-amex" style="color:blue;"></i>
				  <i class="fa fa-cc-mastercard" style="color:red;"></i>
				  <i class="fa fa-cc-discover" style="color:orange;"></i>
				</div>
				<TABLE border =0 width=98% cellpadding="0" > 
					
						<tr class="alert fade in">
							<td height=80%  width=50% align="left">
								
							</td>
						</tr>
						<tr>
							<td colspan=2>
								<label for="cname">Name on Card</label>
								<input type="text" name="cardname" placeholder="Atiksha pundir" pattern="[a-zA-Z0-9 ]+" required>
							</td>
						</tr>
						<tr>
							<td colspan=2>
								<label for="ccnum">Credit card number</label>
								<input type="text" name="cardnumber" placeholder="1111-2222-3333-4444" pattern="[0-9]{13,16}" required>
							</td>
						</tr>
						<tr >
							<td colspan=2>
								<label for="expmonth">Exp Month</label>
								<input type="text" name="expmonth" placeholder="08" pattern="[0-9]{2}" required>
							</td>
						</tr>
						<tr>
							<td>
								<label for="expyear">Exp Year</label>
								<input type="text" name="expyear" placeholder="2024" pattern="^20[1-9]{2}$"required>
							</td>
							<td>
									<label for="cvv">CVV</label>
								<input type="text"  name="cvv" placeholder="132" pattern="^[0-9]{3}$" required>
							</td>
						</tr>
							
				</TABLE>
				
			
			</div>
			

		</div>
		  
		<div class="row ">
			<label>
			  <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
			</label>
			<input type="submit" name="submit" value="Continue to checkout" class="btn" >
		</div>
      
	
	
	   
    </div>
	

	
	<div class="col-sm-3">
		
		<div class="vl"></div><br>
			<div class="well" align="left">
				<?php

					$total=$_GET["hidden_total"];
					//$points=$_GET["hidden_points"];
					if($total==0)
					{
						//header("Location: ../insert-item-list.php?upload=success");
						//exit();
						//<script> alert("nothing in cart")</script>
					}
					if($total<500)
					{
						$shipping=50;
					}
					if($total<1000)
					{
						$shipping=20;
					}
					else
					{
						$shipping=0;
					}
					$points=20;
					$disscount=$points/5;
					$grand_total=$total + $shipping - $disscount;
				
				
				?>
				<input type="hidden"  name="hidden_uid" value="<?php echo number_format($_SESSION['u_id'], 0);?>">  						
<input type="hidden"  name="hidden_gtotal" value="<?php echo number_format($grand_total, 2);?>">  	
				 <h4>Order Summary <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>	</b></span></h4><br><br>
				  <p>Order Total<span class="price"> Rs <?php echo $total;?></span></p>
				  <p>Shipping<span class="price"> Rs +<?php echo $shipping;?></span></p>
				  <p>Disscount<span class="price"> Rs -<?php echo $disscount;?></span></p>
				  <hr>
				  <b><p>Grand Total <span class="price" style="color:black"><b>RS <?php echo $grand_total;?></b></span></p></b> 
			</div>
     </div>
	</form>
	
	
	
	
   
  </div>
</div>
<?php
	include_once 'footer.php'
?>


</body>
</html>
