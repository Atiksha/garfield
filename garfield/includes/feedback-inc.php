<?php

	if(isset($_POST['submit']))
	{
		
		include_once "dbh-inc.php";	
		
		$uid = $_POST['hidden_uid'];
		$iid = $_POST['hidden_iid'];
		
		$ftitle = $_POST['ftitle'];		
		$fmessage = $_POST['fmessage'];		
		$fstar = $_POST['fstar'];

		//date_default_timezone_set("Asia/Kolkata");
		//$f_date	=date("Y-m-d h:i:sa");
		
		echo"-------------before empty condition";	
		if(empty($uid))
		{
			//header("Location: ../page3.php?upload=empty");
			echo"empty";
			exit();
		}
		else
		{
			
			$sql="INSERT INTO project.feedback (user_id, item_id, f_title, f_message, f_star) VALUES ('$uid','$iid','$ftitle','$fmessage','$fstar')";
			$result=mysqli_query($conn,$sql);
			if(!$result)
			{
				echo"Error in sql!";
			}
			
			header("Location: ../index.php?review=success");
		}
	}
?>