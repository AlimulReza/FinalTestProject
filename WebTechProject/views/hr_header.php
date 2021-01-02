<?php
    /*session_start();
    if(!isset($_SESSION["username"])){
		header("Location: hrlogin.php");
	}*/
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<title>HR Manager</title>
	<meta charset="UTF-8">
	<title>Hr Dashboard</title>
	<link rel="stylesheet" href="css/hr_headerstyle.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	</head>
	<body>
	      <div class="wrapper">
		     <div class="sidebar">
			     <h2>HR Manager</h2>
				 <ul>
				     <li><a href="hr_dashboard.php">Dashboard</a></li>
				     <li><a href="hr_profile.php">Profile</a></li>
					 <li><a href="add_employee.php">Add Employees</a></li>
					 <li><a href="all_employees.php">All Employees</a></li>
					 <li><a href="add_product.php">Add Products</a></li>
					 <li><a href="all_employees.php">All Products</a></li>
				     <li><a href="updatepassword.php">Change Password</a></li>
					 <li><a href="contact_with.php">Contact</a></li>
					 <li><a href="../php/logout.php">Log Out</a></li>
				 </ul>
		     </div>