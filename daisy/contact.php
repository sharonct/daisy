<?php
include("dbserena.php");
?>
<html>
	<head>	<title>Serena</title>
	<link href="style.css"rel="stylesheet"type="text/css">
	</head>
	<body>
	<?php if(isset($_POST['submit']))
{


		$sql="insert into contact(name,email,comment)values('".$_POST["name"]."','".$_POST["email"]."','".$_POST["comment"]."')";
         mysql_query($sql);

	}
	?> 
		<div class="container">
			<div class="logo"><img src="images/logo.jpg">
			</div>
				
			<div class="top-menu">
			
				<ul class=list-menu>
					<li><a href="Index.php">Home</a></li>
					<li><a href="about.php">About Us</a></li>
					<li><a href="gallery.php">Gallery</a></li>
					<li class=active><a href="contact.php">Contact Us</a></li>
				</ul>
				
			</div>
			<div><img src= "images/slide4.jpg">
			</div>
			<div style="margin-right:200px";>
			<p>How to reach us:</p>
			<p>Email address: info@serena.com</p>
			<p>Mobile :+25472156878</p>
			<p>Telephone: 0202547896</p>
			<p>fax:00254664553</p>
			<p>
							
			
			</div>
			<div style="margin-left:600px;">
			<h1>Contact us</h1>
		<form  name= form1 method="post">
			<label>Enter your name</label>
			<input type="text" name="name" /><br><br>
			<br>
			<br>
			<label> Enter your email</label>
			<input type="text" name="email" /><br><br>
			<br>
			<br>
			<label>Comment</label>
			<textarea name="comment" rows="10">
			</textarea>
			<br>
			<br>
			<button input type="submit" name="submit" value="Submit Form">
			submit</button></h1></div>
			</form>
			<div class="footer">Developed by Daisy Chepkorir</div>
		</div>
	</body>
</html>
