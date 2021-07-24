
<?php
	session_start();
	
	$db = mysqli_connect("localhost", "root", "","studinfo") or die("Could not connect to database");

	// Allocation for Preference1
	while(1){
		$count=mysqli_num_rows(mysqli_query($db,"select * from vartak;"));
		if($count<35){
			if(mysqli_num_rows(mysqli_query($db,"Select * from new where Preference1='VCET';"))){
				$max_stud=mysqli_query($db,"Select Candidate_Name,Username,CET_Score from new where Preference1='VCET' ORDER BY CET_Score DESC; ");
				$max_array=mysqli_fetch_array($max_stud);
				$name=$max_array['Username'];
				$cname=$max_array['Candidate_Name'];
				$cet=$max_array['CET_Score'];
			
				$bob=mysqli_query($db,"Insert into vartak values('{$name}','{$cname}',$cet);");
				if($bob)
				{
					mysqli_query($db,"Delete from new where Username='{$name}';");
				}
			}
			else{
				break;
			}
		}		
		else{
			BREAK;
		}			
	}
	
	while(1){
		$count=mysqli_num_rows(mysqli_query($db,"select * from dj;"));
		if($count<35){
			if(mysqli_num_rows(mysqli_query($db,"Select * from new where Preference1='DJSANGHAVI';"))){
				$max_stud=mysqli_query($db,"Select Candidate_Name,Username,CET_Score from new where Preference1='DJSANGHAVI' ORDER BY CET_Score DESC; ");
				$max_array=mysqli_fetch_array($max_stud);
				$name=$max_array['Username'];
				$cname=$max_array['Candidate_Name'];
				$cet=$max_array['CET_Score'];
			
				$bob=mysqli_query($db,"Insert into dj values('{$name}','{$cname}',$cet);");
				if($bob)
				{
					mysqli_query($db,"Delete from new where Username='{$name}';");
				}
			}
			else{
				break;
			}
		}
		else{
			BREAK;
		}	
	}
	
	while(1){
		$count=mysqli_num_rows(mysqli_query($db,"select * from thakur;"));
		if($count<35){
			if(mysqli_num_rows(mysqli_query($db,"Select * from new where Preference1='Thakur';"))){
				$max_stud=mysqli_query($db,"Select Candidate_Name,Username,CET_Score from new where Preference1='Thakur' ORDER BY CET_Score DESC; ");
				$max_array=mysqli_fetch_array($max_stud);
				$name=$max_array['Username'];
				$cname=$max_array['Candidate_Name'];
				$cet=$max_array['CET_Score'];
			
				$bob=mysqli_query($db,"Insert into thakur values('{$name}','{$cname}',$cet);");
				if($bob)
				{
					mysqli_query($db,"Delete from new where Username='{$name}';");
				}
			}
			else{
				break;
			}
		}
		else{
			BREAK;
		}
			
	}
		
	while(1){
		$count=mysqli_num_rows(mysqli_query($db,"select * from thado;"));
		if($count<35){
			if(mysqli_num_rows(mysqli_query($db,"Select * from new where Preference1='Thadomal';"))){
				$max_stud=mysqli_query($db,"Select Candidate_Name,Username,CET_Score from new where Preference1='Thadomal' ORDER BY CET_Score DESC; ");
				$max_array=mysqli_fetch_array($max_stud);
				$name=$max_array['Username'];
				$cname=$max_array['Candidate_Name'];
				$cet=$max_array['CET_Score'];
			
				$bob=mysqli_query($db,"Insert into thado values('{$name}','{$cname}',$cet);");
				if($bob)
				{
					mysqli_query($db,"Delete from new where Username='{$name}';");
				}
			}
			else{
				break;
			}
		}
		else{
			BREAK;
		}			
	}
		
		//Allocation for preference2
	while(1){
		$count=mysqli_num_rows(mysqli_query($db,"select * from vartak;"));
		if($count<35){
			if(mysqli_num_rows(mysqli_query($db,"Select * from new where Preference2='VCET';"))){
				$max_stud=mysqli_query($db,"Select Candidate_Name,Username,CET_Score from new where Preference2='VCET' ORDER BY CET_Score DESC; ");
				$max_array=mysqli_fetch_array($max_stud);
				$name=$max_array['Username'];
				$cname=$max_array['Candidate_Name'];
				$cet=$max_array['CET_Score'];
			
				$bob=mysqli_query($db,"Insert into vartak values('{$name}','{$cname}',$cet);");
				if($bob)
				{
					mysqli_query($db,"Delete from new where Username='{$name}';");
				}
			}
			else{
				break;
			}
		}
		else{
			BREAK;
		}
	}
	
	while(1){
		$count=mysqli_num_rows(mysqli_query($db,"select * from dj;"));
		if($count<35){
			if(mysqli_num_rows(mysqli_query($db,"Select * from new where Preference2='DJSANGHAVI';"))){
				$max_stud=mysqli_query($db,"Select Candidate_Name,Username,CET_Score from new where Preference2='DJSANGHAVI' ORDER BY CET_Score DESC; ");
				$max_array=mysqli_fetch_array($max_stud);
				$name=$max_array['Username'];
				$cname=$max_array['Candidate_Name'];
				$cet=$max_array['CET_Score'];
			
				$bob=mysqli_query($db,"Insert into dj values('{$name}','{$cname}',$cet);");
				if($bob)
				{
					mysqli_query($db,"Delete from new where Username='{$name}';");
				}
			}
			else{
				break;
			}
		}
		else{
			BREAK;
		}
	}
	
	while(1){
		$count=mysqli_num_rows(mysqli_query($db,"select * from thakur;"));
		if($count<35){
			if(mysqli_num_rows(mysqli_query($db,"Select * from new where Preference2='Thakur';"))){
				$max_stud=mysqli_query($db,"Select Candidate_Name,Username,CET_Score from new where Preference2='Thakur' ORDER BY CET_Score DESC; ");
				$max_array=mysqli_fetch_array($max_stud);
				$name=$max_array['Username'];
				$cname=$max_array['Candidate_Name'];
				$cet=$max_array['CET_Score'];
			
				$bob=mysqli_query($db,"Insert into thakur values('{$name}','{$cname}',$cet);");
				if($bob)
				{
					mysqli_query($db,"Delete from new where Username='{$name}';");
				}
			}
			else{
				break;
			}
		}
		else{
			BREAK;
		}
	}
		
	while(1){
		$count=mysqli_num_rows(mysqli_query($db,"select * from thado;"));
		if($count<35){
			if(mysqli_num_rows(mysqli_query($db,"Select * from new where Preference2='Thadomal';"))){
				$max_stud=mysqli_query($db,"Select Candidate_Name,Username,CET_Score from new where Preference2='Thadomal' ORDER BY CET_Score DESC; ");
				$max_array=mysqli_fetch_array($max_stud);
				$name=$max_array['Username'];
				$cname=$max_array['Candidate_Name'];
				$cet=$max_array['CET_Score'];
			
				$bob=mysqli_query($db,"Insert into thado values('{$name}','{$cname}',$cet);");
				if($bob)
				{
					mysqli_query($db,"Delete from new where Username='{$name}';");
				}
			}
			else{
				break;
			}
		}
		else{
			BREAK;
		}
	}
		
		//allocation for preference3
	while(1){
		$count=mysqli_num_rows(mysqli_query($db,"select * from vartak;"));
		if($count<35){
			if(mysqli_num_rows(mysqli_query($db,"Select * from new where Preference3='VCET';"))){
				$max_stud=mysqli_query($db,"Select Candidate_Name,Username,CET_Score from new where Preference3='VCET' ORDER BY CET_Score DESC; ");
				$max_array=mysqli_fetch_array($max_stud);
				$name=$max_array['Username'];
				$cname=$max_array['Candidate_Name'];
				$cet=$max_array['CET_Score'];
			
				$bob=mysqli_query($db,"Insert into vartak values('{$name}','{$cname}',$cet);");
				if($bob)
				{
					mysqli_query($db,"Delete from new where Username='{$name}';");
				}
			}
			else{
				break;
			}
		}
		else{
			BREAK;
		}
	}
	
	while(1){
		$count=mysqli_num_rows(mysqli_query($db,"select * from dj;"));
		if($count<35){
			if(mysqli_num_rows(mysqli_query($db,"Select * from new where Preference3='DJSANGHAVI';"))){
				$max_stud=mysqli_query($db,"Select Candidate_Name,Username,CET_Score from new where Preference3='DJSANGHAVI' ORDER BY CET_Score DESC; ");
				$max_array=mysqli_fetch_array($max_stud);
				$name=$max_array['Username'];
				$cname=$max_array['Candidate_Name'];
				$cet=$max_array['CET_Score'];
			
				$bob=mysqli_query($db,"Insert into dj values('{$name}','{$cname}',$cet);");
				if($bob)
				{
					mysqli_query($db,"Delete from new where Username='{$name}';");
				}
			}
			else{
				break;
			}
		}
		else{
			BREAK;
		}		
	}
	
	while(1){
		$count=mysqli_num_rows(mysqli_query($db,"select * from thakur;"));
		if($count<35){
			if(mysqli_num_rows(mysqli_query($db,"Select * from new where Preference3='Thakur';"))){
				$max_stud=mysqli_query($db,"Select Candidate_Name,Username,CET_Score from new where Preference3='Thakur' ORDER BY CET_Score DESC; ");
				$max_array=mysqli_fetch_array($max_stud);
				$name=$max_array['Username'];
				$cname=$max_array['Candidate_Name'];
				$cet=$max_array['CET_Score'];
			
				$bob=mysqli_query($db,"Insert into thakur values('{$name}','{$cname}',$cet);");
				if($bob)
				{
					mysqli_query($db,"Delete from new where Username='{$name}';");
				}
			}
			else{
				break;
			}
		}
		else{
			BREAK;
		}
	}
		
	while(1){
		$count=mysqli_num_rows(mysqli_query($db,"select * from thado;"));
		if($count<35){
			if(mysqli_num_rows(mysqli_query($db,"Select * from new where Preference1='Thadomal';"))){
				$max_stud=mysqli_query($db,"Select Candidate_Name,Username,CET_Score from new where Preference3='Thadomal' ORDER BY CET_Score DESC; ");
				$max_array=mysqli_fetch_array($max_stud);
				$name=$max_array['Username'];
				$cname=$max_array['Candidate_Name'];
				$cet=$max_array['CET_Score'];
			
				$bob=mysqli_query($db,"Insert into thado values('{$name}','{$cname}',$cet);");
				if($bob)
				{
					mysqli_query($db,"Delete from new where Username='{$name}';");
				}
			}
			else{
				break;
			}
		}
		else{
			BREAK;
		}
	}
	?>
	
<html>
<head>
	<link REL="STYLESHEET" TYPE="text/css" HREF="styless.css">
	<style>
	table{
		align:center;
	}
	td {
		border:1px solid black;
		font-family: Arial;
		font-size: 20px;
		text-align: center;   
		padding: 5px;
		width:200px;	
	}
	.head{
		background:orange;
	}
	.tableHead{
		font-size:30px;
		font-weight: 800;
	}
	div{
		margin-top:79px;
	}
	</style>
</head>
		
	<body>
		<div class="header" style="margin-top:0px;">
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
			

		<div>
			<table align="center" cellspacing="0px";>
				<caption class="tableHead">Vidyavardhini's College</caption>
			<tr>	
				<td class="head">Sr.No.</td>
				<td class="head">UserID</td>
				<td class="head">Name</td>
				<td class="head">Score</td>
			</tr>
			
			<tr>
			<?php 
			$sr =1;
			$sql = "SELECT * FROM vartak";
			$result =mysqli_query($db,$sql);
			while($row = mysqli_fetch_assoc($result)) {
			?>
			<tr>   
				<td><?php echo $sr++ ;?></td>
				<td><?php echo $row['CId']; ?></td>
				<td><?php echo $row['Cname']; ?></td>
				<td><?php echo $row['CET']; ?></td>
			</tr>
			<?php
			}
			?>
		</div>
			
			
		<div>
			<table align="center" cellspacing="0px";>
				<caption class="tableHead">DJ SANGHAVI</caption>
			<tr>	
				<td class="head">UserID</td>
				<td class="head">Sr.No.</td>
				<td class="head">Name</td>
				<td class="head">Score</td>
			</tr>
			
			<tr>
			<?php 
			$sr =1;
			$sql = "SELECT * FROM dj";
			$result =mysqli_query($db,$sql);
			while($row = mysqli_fetch_assoc($result)) {
			?>
			<tr> 
				<td><?php echo $sr++ ;?></td>
				<td><?php echo $row['CId']; ?></td>
				<td><?php echo $row['Cname']; ?></td>
				<td><?php echo $row['CET']; ?></td>
			</tr>
			<?php
			}
			?>
		</div>
			
		<div>
			<table align="center" cellspacing="0px";>
				<caption class="tableHead">Thadomal Sahani</caption>
			<tr>	
				<td class="head">Sr.No.</td>
				<td class="head">UserID</td>
				<td class="head">Name</td>
				<td class="head">Score</td>
			</tr>
			
			<tr>
			<?php 
			$sr =1;
			$sql = "SELECT * FROM thado";
			$result =mysqli_query($db,$sql);
			while($row = mysqli_fetch_assoc($result)) {
			?>
			<tr>   
				<td><?php echo $sr++ ;?></td>
				<td><?php echo $row['CId']; ?></td>
				<td><?php echo $row['Cname']; ?></td>
				<td><?php echo $row['CET']; ?></td>
			</tr>
			<?php
			}
			?>
		</div>
			
		<div>
			<table align="center" cellspacing="0px";>
				<caption class="tableHead">Thakur</caption>
			<tr>	
				<td class="head">Sr.No.</td>
				<td class="head">UserID</td>
				<td class="head">Name</td>
				<td class="head">Score</td>
			</tr>
			
			<tr>
			<?php 
			$sr =1;
			$sql = "SELECT * FROM thakur";
			$result =mysqli_query($db,$sql);
			while($row = mysqli_fetch_assoc($result)) {
			?>
			<tr> 
				<td><?php echo $sr++ ;?></td>
				<td><?php echo $row['CId']; ?></td>
				<td><?php echo $row['Cname']; ?></td>
				<td><?php echo $row['CET']; ?></td>
			</tr>
			<?php
			}
			?>
		</div>

		<div>
			<table align="center" cellspacing="0px">
				<caption class="tableHead">NOT ALLOTED STUDENTS</caption>
			<tr>
				<td class="head">Sr.No.</td>
				<td class="head">UserID</td>
				<td class="head">Name</td>
				<td class="head">Score</td>
			</tr>
			
			<tr>
			<?php 
			$sr =1;
			$sql = "SELECT * FROM new";
			$result =mysqli_query($db,$sql);
			while($row = mysqli_fetch_assoc($result)) {
			?>
			<tr> 
				<td><?php echo $sr++ ;?></td>
				<td><?php echo $row['Username']; ?></td>
				<td><?php echo $row['Candidate_Name']; ?></td>
				<td><?php echo $row['CET_Score']; ?></td>
			</tr>
			<?php
			}
			?>
			</tr>
			</table>
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