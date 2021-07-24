  <!-- CHANGELOG -->

  <!--1. added form validation javaScript using onsubmit attr in form tag-->

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
			
			<div class="fill">
			<form action="update.php" method="post" onsubmit="return valid();">
				<table >
					<tr>
						<td>Name</td>
						<td><input type="text" name="cname" id="1" placeholder="Enter candidate name"></td>
					</tr>
					<tr>
						<td>Father's Name</td>
						<td><input type="text" name="fname" id="2" placeholder="Enter father's name"></td>
					</tr>
					
					<tr>
						<td>CET Marks</td>
						<td><input type="number" min="" max="200" id="3" name="cet"></td>
					</tr>
					<tr>
						<td>PCM Aggregate</td>
						<td><input type="number" min="" max="100" id="4" name="pcm"></td>
					</tr>
					<tr>
						<td>City</td>
						<td><input type="text" name="city" id="5" placeholder="Enter your city"></td>
					</tr>
					<tr>
						<td>Preference1</td>
						<td>
							<select name='pref1' id="opt1">
								<option>VCET</option>
								<option>DJSANGHAVI</option>
								<option>Thadomal</option>
								<option>Thakur</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Preference2</td>
						<td>
							<select name='pref2' id="opt2">
								<option>VCET</option>
								<option>DJSANGHAVI</option>
								<option>Thadomal</option>
								<option>Thakur</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Preference3</td>
						<td>
							<select name='pref3' id="opt3">
								<option>VCET</option>
								<option>DJSANGHAVI</option>
								<option>Thadomal</option>
								<option>Thakur</option>
							</select>
						</td>
					</tr>
					<tr>
						<td></td>
						<td><button type="submit" name="submit" id="validation" style="margin-top:10px;" >REGISTER</button></td>
					</tr>
					
				</table>
			</form >
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
	
	<script type="text/javascript">
		function myEquals(x, y, z){
			if (x == y || x == z || y == z) {
				alert("Options can't be the same!")
				return true;
			}
		};
		
		//validation here
		function valid(){
			var canName = document.getElementById("1").value;
			var fName = document.getElementById("2").value;
			var cetMarks = document.getElementById("3").value;
			var pcmMarks = document.getElementById("4").value;
			var city = document.getElementById("5").value;
			var validBtn = document.getElementById("validation");
			var op1 = document.getElementById("opt1").value;
			var op2 = document.getElementById("opt2").value;
			var op3 = document.getElementById("opt3").value;
			
			if(canName.length === 0 || fName.length === 0 || cetMarks.length === 0 || pcmMarks.length === 0 || city.length === 0){
				myEquals(op1, op2, op3);
				alert("Please enter the fields correctly!");
				return false;
				
			}
			else if (myEquals(op1, op2, op3)) {
				return false;
			}
			
		};
		
		


	</script>
	
</html>