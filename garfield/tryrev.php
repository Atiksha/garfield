<?php		

include_once "dbh-inc.php";	
		

			$sql2="select * from feedback where item_id = $id";
			$result = mysqli_query($conn,$sql2);
			$rowcount = mysqli_num_rows($result);
		
			if($result->num_rows > 0)
			{
				while($row=mysqli_fetch_array($result))
				{
					<li class="media">
							<hr>
							<div class="media-left">
								<a href="#">
									<img src="..\images\13.jpeg" height="60px" width="60px" class="media-object" alt="image"/> 
								</a>
							</div>
							<div class="media-body">
								<h4 class="media-heading">'.$row["user_first"].' '.$row["user_last"].'<small><i> '.$row["f_date"].'</i></small></h4>
								<p>'.$row["f_title"].'</p>
								<p>'.$row["f_star"].'</p>
								<p>'.$row["f_message"].' </p>
							</div>
					</li>
					
					
					
				}
			}
			
			
			
?>		
<hr>