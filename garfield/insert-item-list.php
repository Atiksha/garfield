<?php
	$_SESSION['username'] = 'admin';
?>
<!DOCTYPE html>

<head>
	<title>inserting New Items types in DataBase</title>
</head>

<body>
	
		<?php
			//if(isset($_SESSION['username']))
			{
					echo'
					<form action="includes/gallery-upload-list-inc.php" method="post" >
						
						<fieldset>	
							<TABLE border=0 >
								<TR>
									<TH>  Insert Items list </TH>
								</TR>
								<TR>	
									<TD> Category Name:</TD>
									<TD><input type="text" name="icatg" size=30  pattern="[A-Za-z_ ]+" placeholder="pizza" required > </TD>
								</TR>
								
									<TR>
									<TD>Item Category: </TD>
									<TD>
										<select name="itype">
											<option value="country" selected disabled> (Please select a Type) </option>
											<option value="Veg"> Veg </option>
											<option value="Non-Veg"> Non-Veg </option>
											<option value="Dessert"> Dessert </option>
											<option value="Beverages"> Beverages </option>
										</select>
									<TD>
								</TR>
								
								<TR>
									<TD></TD>
									<TD> <button type="submit" name="submit">UPLOAD</button></TD>
								</TR>
							</TABLE>
						</fieldset>
					<form>';


				
			}
			
		
			?>
		
	
</body>
</html>
