<?php
	$Firstname = $_POST['1name'];
	$Middlename = $_POST['2name'];
	$Lastname = $_POST['3name'];
	$Gender1 = $_POST['gender'];
	$Month1 = $_POST['month'];
	$Day1 = $_POST['day'];
	$Year1 = $_POST['year'];
	$Program1 = $_POST['program'];
	$StudentType1 = $_POST['student type'];
	$Address1 = $_POST['address'];

?>
<html>
Firstname: <strong><?php echo $Firstname; ?></strong><br />
Middlename: <strong><?php echo $Middlename; ?></strong><br />
Lastname: <strong><?php echo $Lastname; ?></strong><br />
Gender: <strong><?php echo $Gender1; ?></strong><br />
Month: <strong><?php echo $Month1; ?></strong><br />
Day:  <strong><?php echo $Day1; ?></strong><br />
Year:  <strong><?php echo $Year1; ?></strong><br />
Program:  <strong><?php echo $Program1; ?></strong><br />
StudentType:  <strong><?php echo $StudentType1; ?></strong><br />
Address:  <strong><?php echo $Address; ?></strong><br />