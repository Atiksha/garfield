<?php
if(isset($_POST['submit']))
{
	$catg = $_POST['icatg'];
	$type = $_POST['itype'];

	include_once "dbh-inc.php";			
	if(empty($catg))
	{
		//header("Location: ../insert-item-list.php?upload=empty");
		exit();
	}
	else
	{
		$sql="INSERT INTO project.itemlistcatg (i_catg,i_type) VALUES ('$catg','$type')";
		$result=mysqli_query($conn,$sql);
		if(!$result)
		{
			echo"Error in sql!";
		}
		//header("Location: ../gallery.php?upload=success");
		header("Location: ../insert-item-list.php?upload=success");
		
	}
}
	

?>