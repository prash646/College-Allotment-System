<?php
session_start();
?>
<html>
<head>
	<link REL="STYLESHEET" TYPE="text/css" HREF="styless.css">
</head>
	<body>
			<div class="header">
				<img src="a.png">
				<span class="title" >Directorate of Technical Education, Maharashtra State</span>
				<ul class="navbar">
					<a href="Homepage.php"><li>HOME</li></a>
					<a href="About.html"><li>ABOUT US</li></a>
					<a href="Contact.html"><li>CONTACT</li></a>
					<a href="Guide.html"><li>GUIDE</li></a>
					<a href="homepage.php"><li><form action='logout.php' method='post'><button name='lout' style="width:264px;height:40px;margin-top:-10px;background:gray;padding-top:10px;color:white;font-size:20px;border:1px gray;font-family:Times New Roman";>LOGOUT</button></form></li></a>
				</ul>
			</div>
			
			<div class="guideinfo">
				<p class="headings">
					You have successfully filled the form.
				</p>
				<p class="desctextguide" style="text-align:center">
					The college allotment list will be displayed <br>
					after within 1 or 2 weeks<br>
					of form submission's last date.<br>
					Be Ready with your documents.<br><br>
					<u><b><i>Wish You Good luck <br>
					& <br>
					Happy Engineering Life!</u></b></i>
				</p>
			</div>
			
			<div class="footerother">
				<p style="text-align:center;color:white;word-spacing:300px;"><b>AUTHORS</b><br><br>
					AKHIL PRASHANT YASH<br>
				</p> 
				<p style="text-align:center;color:white;">
					Copyright &copy; 2017 DTE All Rights Reserved.
				</p> 
			</div>
	</body>
</html>