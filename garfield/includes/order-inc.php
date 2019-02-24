<?php
session_start();
	if(isset($_POST['submit']))
	{
		include_once "dbh-inc.php";	
		
		
		//echo $_SESSION['u_id'];
		//if(isset($_SESSION['u_id']))
	//							{echo"yes";
	//							}
	//							else{echo"no";}
	//	echo $_SESSION['u_id'];
		
		
		
		$uid = $_POST['hidden_uid'];//echo $uid;
		$ogtotal = $_POST['hidden_gtotal'];//echo $ogtotal;
		
		$ofullname = $_POST['fullname'];		
		$oemail = $_POST['email'];
		$oaddress = $_POST['address'];
		$ocity = $_POST['city'];
		$ostate = $_POST['state'];
		$opincode = $_POST['pincode'];
		
		$ocardname = $_POST['cardname'];
		$ocardnumber = $_POST['cardnumber'];
		//															echo $ocardnumber;
		$oexpmonth = $_POST['expmonth'];
		$oexpyear = $_POST['expyear'];
		$ocvv = $_POST['cvv'];
		
		
		//echo"-------------before empty condition";	
		
				
		
		if(empty($uid))
		{
			//header("Location: ../insert-item-list.php?upload=empty");
			exit();
			//echo"inside empty";
		}
		else
		{
			//echo"inside else";
			//to make an orderid
			$sql="INSERT INTO project.userOrderNo (user_id ) VALUES ('$uid')";
			$result=mysqli_query($conn,$sql);
			if(!$result)
			{
				echo"Error in sql!";
			}
			
				
			//echo"after user id and orderno";
			
			$sql2="select * from userOrderNo where order_id = (select max(order_id) from userOrderNo where user_id=$uid )";
		//	$sql2="select * from userOrderNo where order_id = 25";
		//	$sql2="select max(order_id) from userOrderNo user_id=$uid" ;
			$result = mysqli_query($conn,$sql2);
			$rowcount = mysqli_num_rows($result);
		//	echo"------------";
		//	echo $rowcount;
			//echo $result;
		//$o_id	= $result;
			//echo $o_id;echo"+++++++++++++";
			if($result->num_rows > 0)
			{
				while($row=mysqli_fetch_array($result))
				{
					$o_id= $row['order_id'];
					//echo $o_id;
					//echo"inside while======================";
				}
			}
			//echo"after user getting orderno";
			
			$sql3="INSERT INTO project.ordercreditdetails (u_id, o_id, g_tota, o_fullname, o_email, o_address, o_city, o_state, o_pincode, o_cardname, o_cardnumber, o_expmonth, o_expyear, o_cvv ) VALUES ('$uid', '$o_id', '$ogtotal', '$ofullname', '$oemail', '$oaddress', '$ocity', '$ostate', '$opincode', '$ocardname', '$ocardnumber', '$oexpmonth', '$oexpyear', '$ocvv')";
			$result=mysqli_query($conn,$sql3);
			if(!$result)
			{
				echo"Error in sql!";
			}
			
			//echo"after creditrcard details";
			
			
			//$_SESSION["shopping_cart"][$count]
			if(!empty($_SESSION["shopping_cart"]))
			{
				//echo"inside if======================";
				//echo"in all items";
				foreach($_SESSION["shopping_cart"] as $keys => $values)
				{
					//$uid user id is samein both tables 
					//$o_id order id to indicate the below details are under in one orderno
					
					$od_iid = $values["item_id"];
					$od_iname = $values["item_name"];
					$od_iprice = $values["item_price"];
					$od_iquantity= $values["item_quantity"];
					$od_total=$values["item_price"] * $values["item_quantity"];
			
					$sql2="INSERT INTO project.orderList (o_id, od_item_id, od_item_name, od_item_price, od_item_quantity, od_total) VALUES ('$o_id', '$od_iid', '$od_iname', '$od_iprice', '$od_iquantity', '$od_total')";
					$result=mysqli_query($conn,$sql2);
					if(!$result)
					{
						echo"Error in sql!";
					}
			
				}
			}
			unset($_SESSION["shopping_cart"]);
			//echo"after all items";
			//header("Location: ../gallery.php?upload=success");
			header("Location: ../index.php?upload=success");
			
		}
		
	}
		

?>