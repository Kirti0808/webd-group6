<?php 
	require_once("connections.php") ;
	require_once("session.php");
 ?>


<!Doctype.html>
<html>
    <head>
        <link rel="shortcut icon" href="SAE.ico" type="image/x-icon" />
        <title>Webd Project</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--<link href="https://fonts.googleapis.com/css?family=Acme|Coiny" rel="stylesheet">-->
        <link rel="stylesheet" href="css/student_home.css"/>
        <link rel="stylesheet" href="css/student_regn.css"/>
		<script type="text/javascript" src="js/validate.js"></script>
		<script>
			history.pushState(null, null, "student_home.php");
			window.onpopstate = function () 
			{
				history.go(1);
			};
		</script>
		
    </head>
    <body>
	  <section>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
            <a class="navbar-brand" href="student_home.php"><i class="fa fa-home"></i> Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav ml-auto">
					<li class="nav-item">
                        <a class="nav-link" href="about_student.html">About</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" href="dept_student.html">Departments</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" href="facilities_student.html">Facilities</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" href="contact_student.html">Contact</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" href="student_logout.php">Logout</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link"><i>Hello, <?php echo $_SESSION['fname']; ?></i> </a>
					</li>
                </ul>
            </div>
            </div>
        </nav>
	  </section>
	 
	  
	  <section>
		<div class="contact-us" class="section scrollspy">
			<img src="img/img1.jpg" alt="logo" width="250px" height="250px"></img>
			<div class="options">
				<button type="button"><a href="details.php"> Details </a></button>
				<button type="button"><a href="edit_personal.php"> Edit Personal Details </a></button>
				<button type="button"><a href="change_password.php"> Change Password </a></button>
				<!--<button type="button"> Results </button>
				<button type="button"><a href="results.php"> Show_Results </a></button>-->
			</div>
		</div>
	  </section>
	  
	  
	  
	  
	  
	  <!--<div class="cont">
		<ul class="nav_bar">
			<li><a href="user.php">Home</a></li>
			<li>
				<div class="dropdown">
					<button class="dropbtn">Details</button>
					<div class="dropdown-content">
						<a href="user_edit.php">Edit Details</a>
						<!-- <a href="admin_login.php">Administrator Login</a> 
					</div>
				</div>
			</li>
			<li>
				<div class="dropdown">
					<button class="dropbtn">Results</button>
					<div class="dropdown-content">
					    <a href="results.php">Results</a>
					    <a href="login2.html">Administration Signup</a> 
				  	</div>
				</div>
			</li>
			<!--<li><a href="student_logout.php">Logout</a></li> 
			</ul>
		
	</div>-->
	  
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
        
		<script type="text/javascript" src="js/validate.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    </body>
</html>