<?php 
	
	require_once("connections.php");
	require_once("session.php");
?>



<?php
	// print_r($_SESSION);
	if(!confirm_logged_in()) redirect_to("admin_login.php");
	$query = "Select * from student_details where status= 1";
	$result = mysqli_query($connection,$query);
?>

	


<!Doctype.html>
<html>
    <head>
        <title>Webd Project</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--<link href="https://fonts.googleapis.com/css?family=Acme|Coiny" rel="stylesheet">-->
        <link rel="stylesheet" href="css/admin_home.css"/>
        <link rel="stylesheet" href="css/student_regn.css"/>
        <link rel="stylesheet" href="css/home.css"/>
        <link rel="stylesheet" href="css/student_login.css"/>
    </head>
    <body>
	  <section>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
            <a class="navbar-brand" href="admin_home.php"><i class="fa fa-home"></i> Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav ml-auto">
					<li class="nav-item">
                        <a class="nav-link" href="about_admin.html">About</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" href="dept_admin.html">Departments</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" href="facilities_admin.html">Facilities</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" href="contact_admin.html">Contact</a>
                    </li>
					<li class="nav-item">

                        <a class="nav-link" href="admin_logout.php">Logout</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link"><i>Hello, <?php echo $_SESSION['username']; ?></i></a>
                    </li>
                </ul>
            </div>
            </div>
        </nav>
	  </section>
	  
	  <form action="admin_home.php" method="POST">
			<br><br><br><br><br>
				<table style="color: #CCCCCC" align="center" border="1px" bordercolor="white" >
	  <br>
	  <br>
	  
	  <section>
			<form action="admin_home.php" method="POST">
				<table align="left" style="color: white;">
				<tr><br/></tr>
				</table>
				<table style="color: #CCCCCC;" align="center" border="1px" bordercolor="white" cellpadding="10" >
					<tr>
						<th> <i> Name </i> </th>
						<th> <i> Email </i> </th>
						<th> <i> Registration No. </i> </th>
						<th> <i> Mobile No. </i></th>
						<th> <i> Age </i> </th>
					</tr>	

					
					
					<?php 
						{
						while($row=mysqli_fetch_assoc($result)){
					?>
						<tr>
							<td> <?php 	echo $row['f_name']; ?> <?php echo $row['l_name']; ?></td>
							<td> <?php 	echo $row['email']; ?> </td>
							<td> <?php 	echo $row['regn']; ?> </td>
							<td> <?php 	echo $row['m_no']; ?> </td>
							<?php
								$dateofbirth=$row['dob'];
								$today_date=date("Y-m-d");
								$date1=strtotime($dateofbirth);
								$date2=strtotime($today_date);
								$ageinsec=$date2-$date1;
								$age=$ageinsec/(60*60*24*365);
							?>
							<td> <?php echo (int)$age; ?> </td>
						</tr>	

					<?php } ?>
		
				</table>
			</form>
			
			<section>
						<?php	
						}	 ?>
				</table>
				
				
			</form>
	  </section>
	  
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

</html>

