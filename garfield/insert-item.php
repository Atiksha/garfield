<?php
	$_SESSION['username'] = 'admin';
?>
<!DOCTYPE html>

<head>
	<title>inserting New Items in DataBase</title>
</head>

<body>
	
		<?php
			//if(isset($_SESSION['username']))
			{
					echo'
					<form action="includes/gallery-upload-inc.php" method="post" enctype="multipart/form-data">
						
						<fieldset>	
							<TABLE border=0 >
								<TR>
									<TH>  Insert Items </TH>
								</TR>
								<TR>	
									<TD> Item Name:</TD>
									<TD><input type="text" name="iname" size=30  pattern="[A-Za-z_]+" placeholder="cheese burger" required > </TD>
								</TR>
								<TR>
									<TD> Item Price:</TD>
									<TD> <input type="text" name="iprice" placeholder="50" pattern="^[0-9]+" required> </TD>
								</TR>
								<TR>	
									<TD> Item Rating:</TD>
									<TD><input type="text" name="irating" size=30 pattern="^[0-5]{1,}$" placeholder="5" required > </TD>
								</TR>
								<TR>	
									<TD> Item Point:</TD>
									<TD><input type="text" name="ipoints" size=30 pattern="^[0-9]{1,}$" placeholder="10" required > </TD>
								</TR>
								<TR>
								<TR>
									<TD>Item Category: </TD>
									<TD>
										<select name="icatg">
											<option value="country" selected disabled> (Please select a Category  ) </option>
											<option value="meal"> meal </option>
											<option value="parathas"> parathas </option>
											<option value="bryani"> bryani </option>
											<option value="tandoori"> tandoori </option>
											<option value="burger"> burger </option>
											<option value="pizza"> pizza </option>
											<option value="sandwich"> sandwich </option>
											<option value="chowmein"> chowmein </option>
											<option value="passta"> passta </option>
											<option value="icecream"> icecream </option>
											<option value="indiansweets"> indiansweets </option>
											<option value="cake">  cake</option>
											<option value="molten"> molten </option>
											<option value="cupcake"> cupcake </option>
											<option value="jelly"> jelly </option>
											<option value="pie"> pie </option>
											<option value="halva"> halva </option>
											<option value="passdistilledta"> distilled </option>
											<option value="hardsoda"> hardsoda </option>
											<option value="wine"> wine </option>
											<option value="tea"> tea </option>
											<option value="coffee"> coffee </option>
											<option value="hotchocolate"> hotchocolate </option>
											<option value="fruitdrinks"> fruitdrinks </option>
											<option value="cocacola"> cocacola </option>
											<option value="energydrink"> energydrink </option>
											<option value="cappy"> cappy </option>
										</select>
									<TD>
								</TR>
								<TR>
									<TD> Item Available:</TD>
									<TD> <input type="radio" name="iavailable" value="Y" required> Yes
										<input type="radio" name="iavailable" value="N" required> No 
									</TD>
								</TR>
								<TR>
									<TD> Item Type:</TD>
									<TD> <input type="radio" name="itype" value="Veg" required> Veg
										<input type="radio" name="itype" value="Non-Veg" required> Non-Veg 
										<input type="radio" name="itype" value="Dessert" required> Dessert
										<input type="radio" name="itype" value="Beverages" required> Beverages
									</TD>
								</TR>
								<TR>
									<TD>Item Dersciption:</TD>
									<TD> <textarea rows="4" cols="50" name="idesc"> cheesy... </textarea </TD>
								</TR>
								<tr>
									<TD>Choose Item Photo:</TD>
									<td><input type="file" name="iphoto"></td>
								</tr>
									
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
