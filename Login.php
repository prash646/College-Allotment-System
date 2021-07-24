<!-- CHANGELOG 14/10/2017

1.	changed validation function a little
	added onsubmit attri in form tag which calls our func validuser()
	which will submit the form only if validation is successfull
	else the form won't submit. also removed the eventlistener

2.	fixed vulnerabilty if any username except EN101-250 or admin could login if their username and password
	existed in the database

 -->
<html>
<?php
	session_start();
?>
	<head>
	<link REL="STYLESHEET" TYPE="text/css" HREF="styless.css">
		<style>
			input{
				width:250;
				height:30px;
				//margin-top:0px;
			}
			.echotext{
				color:red;
				text-align:center;
			}
			#warningtext{
				padding:10px;
				margin-top:30px;
				background:red;
				color:white;
				font-family: "Times New Roman";
				border-radius :5px;
				text-align:center;
				font-weight:bold;
				width:500px;
			}
			button{
				width:100px;
				background:green;
				opacity:0.99;
				font-size:20px;
				border-radius:10px;
				margin-top:50px;
			}
			form{
				margin:0 auto;
				margin-top:50px;
				padding-left:30px;
				border:5px solid black;
				height:350px;
				width:400px;
			}
			.lf{
				font-size:30px;
				font-family:"Georgia";
				margin-bottom:5px;
			}
		</style>
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
					<a href="credit.html"><li>CREDIT</li></a>
				</ul>
			</div>
			
			<div class="loginForm">
				<form action="Login.php" method="post" onsubmit="return validuser();">
					<p>
					<p class="lf">Username</p>
					<input type="text" name="u" id="user" placeholder="Your ARC number" >
					<p class="lf">Password</p>
					<input type="password" name="p" id="pass" placeholder="Enter 5 digit password" ><br>
					<button type ="submit" id="validation" name="submit">Login</button>
					</p>
				</form>
				<p class="desctext">
					After you are logged in,you can fill out the form <br>
					which includes your personal information related to you<br>
					and your desired Engineering Colleges.
				</p>
			</div>
			
			
			
			<div class="footerother">
				<p style="text-align:center;color:white;word-spacing:300px;">
					<b>AUTHORS</b><br><br>
					AKHIL PRASHANT YASH<br>
				</p> 
				<p style="text-align:center;color:white;">
					Copyright &copy; 2017 DTE All Rights Reserved.
				</p> 
			</div>
	</body>
	
	<script language="javascript">
			function validuser(){
				var userCheck = document.getElementById("user").value;
				var passCheck = document.getElementById("pass").value;
				
				if(userCheck.length == 0 || passCheck.length == 0){
					alert("Please Do Enter Username or Password");
					return false;
				}
				else{
					var s = userCheck.substring(0, 2);
					if(s !== "EN" && userCheck !=="admin" ){
						console.log(s);
						alert("Please Checkyour Username again!");
						return false;
					}
				}
			};
				
				// var validButton = document.querySelector("#validation")
				// validButton.addEventListener("click", function(){
				// 		validuser();
				// });
			</script>
				
			<?php
	
			if(isset($_POST['submit'])){
				$db = mysqli_connect("localhost", "root", "","studinfo") or die("Could not connect to database");
	
				$myusername = $_POST['u'];
				$mypassword = $_POST['p'];
				$result = mysqli_query($db,"SELECT * FROM logininfo");
				$count=mysqli_num_rows($result);
				$row = mysqli_fetch_array($result);
				if($myusername =="admin" && $mypassword=="admin"){
					header("Location: ./admin.php");
					break;
				}
				else if(mysqli_query($db,"select * from logininfo where Username='$myusername';"))
				{
					$passCorrect =mysqli_num_rows(mysqli_query($db,"select * from logininfo where Username='$myusername' AND Password='$mypassword';"));
					if($passCorrect!=0){
						$_SESSION['username']=$_POST['u'];
						header("Location: ./fill_form.php");
					}
					else{
					?>
					<script>
						alert("Wrong password");
					</script>
					<?php
					}
				}
			}
				?>
			
</html>