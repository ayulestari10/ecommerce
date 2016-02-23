<!DOCTYPE html>

<?php
	include("function/functions.php");
 ?>

<head>
	<title>E-Commerce</title>
	<link rel="stylesheet" href="styles/style.css" media="all"/>
</head>
<body>
	<div class="big_wrapper">
	
		<div class="header_wrapper">
			<img id="bew" src="images/bew.jpg"/>
			<img id="index" src="images/index.jpg"/>
		</div>

		<div class="menubar">
			<ul id="menu">
				<li><a href="#">Home</a></li>
				<li><a href="#">All Products</a></li>
				<li><a href="#">Account</a></li>
				<li><a href="#">Sign Up</a></li>
				<li><a href="#">Shooping Cart</a></li>
				<li><a href="#">Contact Us</a></li>
			</ul>

			<div id="form">
				<form method="GET" action="result.php" enctype="multipart/form-data">
					<input type="text" name="user_query" placeholder="Search a Product" />
					<input type="submit" name="search" value="Search" />
				</form>
			</div>

		</div>
		
		<div class="content_wrapper">
			<div id="sidebar">
				<div id="sidebar_title">Categorizes</div>
					<ul id="cats">
						<?php getCats(); ?>
					</ul>

				<div id="sidebar_title">Brands</div>
					<ul id="cats">
						<?php getBrands(); ?>
					</ul>
			</div>
			<div id="content_area">This is content area</div>
		</div>

		<div id="footer">This is footer</div>

	</div>
</body>


</HTML>