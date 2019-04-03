<?php
	require_once("connections.php");
	if(isset($_POST["submit"]))
	{
		$f_name=$_POST["f_name"];
		$l_name=$_POST["l_name"];
		$dob=$_POST["dob"];
		$gender=$_POST["gender"];
		$m_no=$_POST["contact"];
		$p_adrr=$_POST["addr"];
		$pm_adrr=$_POST["address"];
		$city=$_POST["city"];
		$pin=$_POST["pin"];
		$state=$_POST["state"];
		$country=$_POST["country"];
				
		$ClassX_Board=$_POST["ClassX_Board"];
		$ClassX_Percentage=$_POST["ClassX_Percentage"];
		$ClassX_YrOfPassing=$_POST["ClassX_YrOfPassing"];
		
		$ClassXII_Board=$_POST["ClassXII_Board"];
		$ClassXII_Percentage=$_POST["ClassXII_Percentage"];
		$ClassXII_YrOfPassing=$_POST["ClassXII_YrOfPassing"];
		
		$ug_board=$_POST["ug_board"];
		$ug_cgpa=$_POST["ug_cgpa"];
		$ug_yrofpassing=$_POST["ug_yrofpassing"];
		
		$course=$_POST["btech"];
		$branch=$_POST["branch"];
		$regn=$_POST["regn"];
		$roll_no=$_POST["roll_no"];
		
		$email=$_POST["email"];
		$pwd=$_POST["password"];
		
		$dp=addslashes(file_get_contents($_FILES['dp']['tmp_name']));
		
		$query1="SELECT * FROM student_details WHERE regn='$regn'";
		$query2="SELECT * FROM student_details WHERE email='$email'";
		$check1=mysqli_query($connection,$query1);
		$checkrows1=mysqli_num_rows($check1);
		$check2=mysqli_query($connection,$query2);
		$checkrows2=mysqli_num_rows($check2);
		
				
		if($checkrows1>0 || $checkrows2>0) 
		{ ?>
			<!--$message = "<h2>User with same registration number already exists.Try again with a different registration number</h2>";
			die("<b><h2>User with same registration number already exists.Try again with a different registration number</h2></b>");-->
			
			<!Doctype.html>
			<html>
				<head>
					<title>Webd Project</title>
					<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
					<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
					<!--<link href="https://fonts.googleapis.com/css?family=Acme|Coiny" rel="stylesheet">-->
					<link rel="stylesheet" href="css/home.css"/>
					<link rel="stylesheet" href="css/student_regn.css"/>
				</head>
				<body>
				  <section>
					<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
						<div class="container">
						<a class="navbar-brand" href="home_signup.php"><i class="fa fa-home"></i> Home</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<i class="fa fa-bars"></i>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="nav navbar-nav ml-auto">
								<li class="nav-item">
									<a class="nav-link" href="about.html">About</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="dept.html">Departments</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="facilities.html">Facilities</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="contact.html">Contact</a>
								</li>
							</ul>
						</div>
						</div>
					</nav>
				  </section>
				  
				  <br>
				  <h2 style="color:white; margin:10%;">User with same registration number or email already exists. Try again with a different registration number or email. Go back to the home page to register again.</h2>
				  
				  <section>
					<footer>
						<div class="Wraper">
							<a class="fb-ic" href="https://www.facebook.com/nitdgp.unofficial">
							  <i class="fa fa-facebook"> </i>
							</a>
							<a class="tw-ic" href="mailto:director@admin.nitdgp.ac.in">
							  <i class="fa fa-envelope"> </i>
							</a>
						</div>
					</footer>
				  </section>
					
					<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
					<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
					<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
				</body>
			</html>
			
		<?php }
		else 
		{  
			$query = "INSERT INTO student_details(f_name,l_name,dob,gender,m_no,p_addr,pm_addr,city,pin,state,country,ClassX_Board,ClassX_Percentage,ClassX_YrOfPassing,ClassXII_Board,ClassXII_Percentage,ClassXII_YrOfPassing,ug_board,ug_cgpa,ug_yrofpassing,course,branch,regn,roll_no,email,pwd,status,dp) VALUES ('$f_name','$l_name','$dob','$gender','$m_no','$p_adrr','$pm_adrr','$city','$pin','$state','$country','$ClassX_Board','$ClassX_Percentage','$ClassX_YrOfPassing','$ClassXII_Board','$ClassXII_Percentage','$ClassXII_YrOfPassing','$ug_board','$ug_cgpa','$ug_yrofpassing','$course','$branch','$regn','$roll_no','$email','$pwd',0,'$dp')";
			echo $query;
			$result=NULL;
			$result = mysqli_query($connection,$query);
			
			echo $result;
			
			if(!$result)
			{
				//$message = 'Registeration failed';
				//die("<b><b>Registration Failed.</b></b>");
				?>
			<!--$message = "<h2>User with same registration number already exists.Try again with a different registration number</h2>";
			die("<b><h2>User with same registration number already exists.Try again with a different registration number</h2></b>");->
			
			<!Doctype.html>
			<html>
				<head>
					<title>Webd Project</title>
					<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
					<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
					<link href="https://fonts.googleapis.com/css?family=Acme|Coiny" rel="stylesheet">
					<link rel="stylesheet" href="css/home.css"/>
					<link rel="stylesheet" href="css/student_regn.css"/>
				</head>
				<body>
				  <section>
					<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
						<div class="container">
						<a class="navbar-brand" href="home_signup.php"><i class="fa fa-home"></i> Home</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<i class="fa fa-bars"></i>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="nav navbar-nav ml-auto">
								<li class="nav-item">
									<a class="nav-link" href="#">About</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Departments</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Facilities</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Contact</a>
								</li>
							</ul>
						</div>
						</div>
					</nav>
				  </section>
				  
				  <br>
				  <h2 style="color:white; margin:10%;">Registration Failed.</h2>
				  
				  <section>
					<footer>
						<div class="Wraper">
							<a class="fb-ic" href="https://www.facebook.com/nitdgp.unofficial">
							  <i class="fa fa-facebook"> </i>
							</a>
							<a class="tw-ic" href="mailto:director@admin.nitdgp.ac.in">
							  <i class="fa fa-envelope"> </i>
							</a>
						</div>
					</footer>
				  </section>
					
					<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
					<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
					<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
				</body>
			</html>-->
			
		<?php 
			}
			else
			{
				//$message = "Registration Successful";
				//echo $message;
				//die("<b><b>Registration Successful.</b></b>");
				header('Location: student_login.php');
			}
		}
		// Close the database connection
		mysqli_close($connection);
	}
?>