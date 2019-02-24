
<?php
	include_once 'header.php'
?>


<style>

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
</style>
<?php 

//session_start();
$connect = mysqli_connect("localhost", "root" , "", "project");

if(isset($_GET["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		$item_array_quantity = array_column($_SESSION["shopping_cart"], "item_quantity");
		
		if(in_array($_GET["hidden_id"], $item_array_id))
		{		
			
			$flag=0;
			
			foreach($_SESSION["shopping_cart"] as $keys => $values)
			{
				if(($values["item_id"] == $_GET["hidden_id"]) AND ($values["item_quantity"] != $_GET["qunatity"]))
				{
					$_SESSION["shopping_cart"][$keys]["item_quantity"] = $_GET["qunatity"];
					$flag=1;
					echo '<script>alert("Item updated")</script>';
				}
			}
		

			if($flag == 0)
			{
				echo '<script>alert("Item Already Added")</script>';
			//	echo '<script>window.location="cart.php"</script>';
			}
		}
		else
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'	=>	$_GET["hidden_id"],
				'item_name'	=>	$_GET["hidden_name"],
				'item_price'	=>	$_GET["hidden_price"],
				'item_quantity'	=>	$_GET["qunatity"],
				'item_photo'	=>	$_GET["hidden_photo"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
	}
	else
	{
		$item_array = array(
			'item_id'	=>	$_GET["hidden_id"],
			'item_name'	=>	$_GET["hidden_name"],
			'item_price'	=>	$_GET["hidden_price"],
			'item_quantity'	=>	$_GET["qunatity"],
			'item_photo'	=>	$_GET["hidden_photo"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

//for delete items
if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["i_id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
			//	echo '<script>window.location="cart.php"</script>';
			}
		}
	}
}

?>



<br>
<br>
<br>
<?php
	if(!empty($_SESSION["shopping_cart"]))
	{
		$total = 0;
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
?>
			<div class="container text-center">    
				<div class="row">
					<div class="col-sm-11">
					  <div class="row well">
						  <div class="row ">
							
							
									<div class="col-sm-2">
									  <div class="well">
									 <?php  $var = $values["item_photo"];?>
									   <img class="img-responsive img-rounded "	src="img/gallery/<?php echo $var ?>"	"alt="image" style="height:110px; width:125px;"> 
									  <br>
									  </div>
									  <label>Qty</label>
									   <input type="text" name="qty" value="<?php echo $values["item_quantity"]; ?>" size="3">
									</div>
									<div class="col-sm-9">
									  <div class="well" align="left">
									  <p><b><?php echo $values["item_name"]; ?></b></p>
										<p><?php echo $values["item_price"]; ?></p>
										<p><b>Total <b><?php echo number_format($values["item_quantity"] * $values["item_price"],2); ?></p>
									  </div>
									</div>
									<div class="col-sm-1 well">
										 <a href="cart.php?action=delete&i_id=<?php echo $values["item_id"]; ?>"><span class="text">Remove</span></a>
									</div>
								
							</div>
					  </div>
					</div>     
				</div>
			  </div>
			</div>
			<?php $total = $total + ($values["item_quantity"] * $values["item_price"]);
			}
		}
		else
		{
			$total=0;
		}
			?>
			
			<form method="GET" > 
				<div class="container text-center">    
					<div class="row">
						<div class="col-sm-11">
							<div class="row well">Grand Total <?php echo number_format($total, 2);?></td>
							<input name="hidden_total" type="hidden" value="<?php echo $total;?>">
							
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-sm-2">
								
						</div>
						<div class="col-sm-3">
							<input type="submit" value="More Shopping" class="btn" formaction="index.php">
						</div>
						<div class="col-sm-3">
						<?php
								if(isset($_SESSION['u_id']))
								{	
									echo'<input type="submit" value="Continue to checkout" class="btn"  formaction="checkout.php">';
								}
								else
								{
									echo'<input type="submit" value="Continue to checkout" class="btn"  onclick="checkFunction();">';
								}
						?>
						</div>
					</div>
				</div>
			</form>
			
			
			<script>
				function checkFunction() 
				{
					alert("Please login First!!");
				}
			</script>
   <?php
	include_once 'footer.php'
?>
