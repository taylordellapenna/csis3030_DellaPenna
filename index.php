<!doctype html>

<?php

include("global.php");
include("header.php");
?>

<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ecommerce</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css" media="screen and (max-width : 568px)">
	<script type="text/javascript" src="js/mobile.js"></script>
</head>
<body>
	<div id="header">
		<a href="index.html" class="logo">
		</a>
		<ul id="navigation">
			<li class="selected">
				<a href="category_list.php">Add a product!</a>
			</li>
		</ul>
	</div>
	<div id="body">
		<div id="featured">
			<img src="images/ecommerce.jpg" alt="">
			<div>
				<h2>Welcome to Ecommerce!</h2>
				<span>Please feel free to browse our products</span>
				<span>Add whatever inspires you to the cart!</span>
				<span>Click the add a product button to begin.</span>
				<a href="category_list.php" class="more">Add a product</a>
			</div>
		</div>
	</div>

<?php
include("footer.php");
?>
