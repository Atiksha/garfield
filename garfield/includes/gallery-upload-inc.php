<?php
if(isset($_POST['submit']))
{
	$newFileName = $_POST['iname'];
	if(empty($newFileName))
	{
		$newFileName = "item";
	}
	else
	{
		$newFileName = strtolower(str_replace(" ","-",$newFileName));
	}
	$imageType = $_POST['itype'];
	$imageCatg = $_POST['icatg'];
	$imageName = $_POST['iname'];
	$imageDesc = $_POST['idesc'];
	$imagePrice = $_POST['iprice'];
	$imageRating = $_POST['irating'];
	$imageAvailable = $_POST['iavailable'];
	
	$file = $_FILES['iphoto'];
	
	$fileName = $file["name"];
	$fileType = $file["type"];
	$fileTempName = $file["tmp_name"];
	$fileError = $file["error"];
	$fileSize = $file["size"];
	
	$fileExt = explode('.',$fileName);
	$fileActualExt = strtolower(end($fileExt));
	
	$allowed = array('jpg','jpeg','png','pdf');
	
	if(in_array($fileActualExt, $allowed))
	{
		if($fileError === 0)
		{
			if($fileSize < 2000000)
			{
				$imageFullName = $newFileName.".".uniqid("",true).".".$fileActualExt;
				$fileDestination ="../img/gallery/".$imageFullName;
			
				include_once "dbh-inc.php";
				
				if(empty($imageName)||empty($imageDesc))
				{
					header("Location: ../gallery.php?upload=empty");
					exit();
				}
				else
				{
					
						
												
						$sq3="select count(1) FROM item";
						$result=mysqli_query($conn,$sq3);
						$row=mysqli_fetch_array($result);

						$rowCount = $row[0];
						//echo "Total rows: " . $total;

						//$rowCount = 150;
						$setImageOrder = $rowCount +1;
						
						
						$sql="INSERT INTO project.item (i_type,i_catg,i_name,i_desc,i_price, i_photo,i_rating, i_order,i_available) VALUES ('$imageType','$imageCatg','$imageName','$imageDesc','$imagePrice','$imageFullName','$imageRating','$setImageOrder','$imageAvailable')";
						$result=mysqli_query($conn,$sql);
						if(!$result)
						{
							echo"Error in sql!";
						}
							//echo"done in sql!";
							move_uploaded_file($fileTempName, $fileDestination);
							header("Location: ../insert-item.php?upload=success");
						
					
				}
			}
			else
			{
				echo" Your file is to big!";
			}
		}
		else
		{
			echo "There was an eror uploading your file";
		}
	}
	else
	{
		echo "You cannot upload files of this type!";
	}
	
}

?>