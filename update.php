<?php
session_start();
		if(isset($_POST['submit'])){
			$db = mysqli_connect("localhost", "root", "","studinfo");
			$a=$_POST['cname'];
			$b=$_POST['fname'];
			//$c=$_POST['ds'];
			$d=$_POST['cet'];
			$e=$_POST['pcm'];
			$f=$_POST['city'];
			$h=$_SESSION['username'];
			echo $h;
			$pre1 = $_POST['pref1'];
			$pre2 = $_POST['pref2'];
			$pre3 = $_POST['pref3'];
			$myQuery = "UPDATE `logininfo` SET `Candidate_Name`='$a',`Father_Name`='$b',`CET_Score`='$d',`HSC_Percentage`='$e',`Address`='$f',`Preference1`='$pre1',`Preference2`='$pre2',`Preference3`='$pre3' WHERE Username='$h'";
			$myQuery1 = "UPDATE `new` SET `Candidate_Name`='$a',`Father_Name`='$b',`CET_Score`='$d',`HSC_Percentage`='$e',`Address`='$f',`Preference1`='$pre1',`Preference2`='$pre2',`Preference3`='$pre3' WHERE Username='$h'";
			mysqli_query($db,$myQuery);
			mysqli_query($db,$myQuery1);
			header("Location: ./formover.php");
		}
		?>