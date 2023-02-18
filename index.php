<?php
	session_start();
  if(isset($_POST['login'])){
    include('includes/connection.php');
    $query = "select * from admin where email = '$_POST[email]' AND password = '$_POST[password]'";
  	$query_run = mysqli_query($connection,$query);
    if(mysqli_num_rows($query_run)){
			$_SESSION['email'] = $_POST['email'];
			while($row = mysqli_fetch_assoc($query_run)){
				$_SESSION['name'] = $row['name'];
			}
      echo "<script type='text/javascript'>
      	window.location.href = 'dashboard.php';
      </script>";
    }
    else{
      echo "<script type='text/javascript'>
      	alert('Please enter correct email and password.');
      	window.location.href = 'index.php';
      </script>";
    }
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Page</title>
		<!-- Bootsrap Files -->
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"></link>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
		<!-- CSS Files -->
		<link rel="stylesheet" href="css/styles.css">
  </head>
  <body style="background:url('images/school_img3.jpg');">
    <!-- Header code starts -->
		<section>
		  <div class="row" id="header">
		    <div class="col-md-12 m-auto block">
		      <h2><i>Vellore Institute of Techonlogy (S.L.A.SH.)</i></h2>
		    </div>
		  </div>
		</section>
    <!-- Header code ends -->
    <!-- Main section -->
    <section id="login_section">
      <div class="row">
        <div class="col-md-4 m-auto block" id="login_form">
          <center><h3>Login</h3></center>
          <form action="" method="post">
            <div class="form-group">
              <label for="email">Email:</label>
              <input class="form-control" type="text" name="email" placeholder="Your Email" required>
            </div>
            <div class="form-group">
              <label for="password">Password:</label>
              <input class="form-control" type="password" name="password" placeholder="Your Password" required>
            </div>
            <button class="btn btn-primary" type="submit" name="login">Login</button><br>
          </form>
        </div>
      </div>
    </section>
  </body>
</html>
