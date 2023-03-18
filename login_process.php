<!DOCTYPE HTML>
<html>
		<head>
		<title>TUNE OUT</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="main.css" />
	</head>
	<style>
		.h1{
			text-align: center;
		}
	</style>
	<body>
		<div class="page-wrap">

			<!-- Nav -->
				<nav id="nav">
					<ul>
						<li><a href="index.html" class="active"><img src="images/home.png" height="25" width="25"></a></li>
						<li><a href="music.html"><img src="images/video.png" height="25" width="25"></a></li>
						<li><a href="About us.html"><img src="images/message.png" height="25" width="25"></a></li>
					</ul>
				</nav>

			<!-- Main -->
				<section id="main">

					<!-- Banner -->
						<section id="banner">
							<div class="inner">
								<h1>TUNE OUT</h1>
<?php
$phoneno=$_POST["mhtxt1"];
$password=$_POST["ptxt1"];

$cn=mysqli_connect ("localhost","root");
mysqli_select_db ($cn,"reg");

$result=mysqli_query($cn,"select * from customer where phoneno = '".$phoneno."' and password = '".$password."'"); 

if(mysqli_num_rows($result)>0)
{	
while($row=mysqli_fetch_array($result))
	{
		echo "&nbsp;";
		echo "<h1>Welcome</h1>";
		//echo "<a href="2_items.html" class="button">Back to Home</a>";
	}
}
	else
	{  
		   echo "&nbsp;";
           echo "<h1>Invalid phone no or password</h1>"; 
		//echo "<a href="2_items.html" class="button">Back to Home</a>";
	}
	
?>
			</div>
			</section>
			
			<footer id="footer">
							<div id="copyright" class="container">
	<p style="font-weight: bold; padding-top: 10px;"> Copyright &copy; All the rights belongs to TUNE OUT.</p>
	<p style="font-weight: bold;">Contact No : 90909 - 90909</p>
	<p style="font-weight: bold;">Email Us : tune_out@gmail.com</p>
</div>
						</footer>
</body>
</html>