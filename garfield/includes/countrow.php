
<?php
include_once "dbh-inc.php";

$sq3="select count(1) FROM item";
$result=mysqli_query($conn,$sq3);
$row=mysqli_fetch_array($result);

$total = $row[0];
echo "Total rows: " . $total;

//mysql_close($con);
?>