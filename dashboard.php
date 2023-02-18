<?php
  session_start();
  include('includes/header.php');
  if(isset($_SESSION['email'])){
    include('includes/connection.php');
    $query1 = "select * from students where status = 'Active'";
  	$query_run1 = mysqli_query($connection,$query1);
    $active_students = mysqli_num_rows($query_run1);
    $query2 = "select * from students where status = 'In-Active'";
  	$query_run2 = mysqli_query($connection,$query2);
    $inactive_students = mysqli_num_rows($query_run2);

    $query3 = "select * from teachers where status = 'Active'";
  	$query_run3 = mysqli_query($connection,$query3);
    $active_teachers = mysqli_num_rows($query_run3);
    $query4 = "select * from teachers where status = 'In-Active'";
  	$query_run4 = mysqli_query($connection,$query4);
    $inactive_teachers = mysqli_num_rows($query_run4);
    ?>
    <html lang="en" dir="ltr">
      <head>
        <title>Dashboard</title>
      </head>
      <body>
        <section id="card_section" style="margin:20px;">
          <div class="row">
            <div class="col-md-4">
              <div class="card">
                <div class="card-header">
                  Student's Record
                </div>
                <div class="card-body">
                  <h6 class="card-title">Active: <?php echo $active_students; ?></h6>
                  <h6 class="card-title">In-Active: <?php echo $inactive_students; ?></h6><hr>
                  <h6 class="card-title">Total: <?php echo $active_students+$inactive_students; ?></h6><hr>
                  <a href="viewAllStudents.php" target="_blank" class="btn btn-primary">View all Students</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <div class="card-header">
                  Teacher's Record
                </div>
                <div class="card-body">
                  <h6 class="card-title">Active: <?php echo $active_teachers; ?></h6>
                  <h6 class="card-title">In-Active: <?php echo $inactive_teachers; ?></h6><hr>
                  <h6 class="card-title">Total: <?php echo $active_teachers+$inactive_teachers; ?></h6><hr>
                  <a href="viewAllTeachers.php" target="_blank" class="btn btn-primary">View all Teachers</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <div class="card-header">
                  <center>Latest News</center>
                </div>
                <div class="card-body">
                  <ul>
                    <marquee direction="up" scrollamount="1">
                    <li><a href="#">1. New registration start from 01 Feb 2021</a></li>
                    <li><a href="#">2. Click Here to check fee status</a></li>
                    <li><a href="#">3. Know complete syllabus</a></li>
                    </marquee>
                  </ul>
                </div>
              </div>
            </div>
          </div><br>
          <div style="margin-left:20px;"class=""><br>
            <h4><u>Some Important links:-</u></h4>
              <ul>
                <li><a href="#">Click here to visit results</a></li>
                <li><a href="#">Click here to visit results</a></li>
                <li><a href="#">Click here to visit results</a></li>
                <li><a href="#">Click here to visit results</a></li>
                <li><a href="#">Click here to visit results</a></li>
              </ul>
          </div
        </section>
      </body>
    </html>
    <?php
  }
  else{
    echo "<script type='text/javascript'>
      window.location.href = 'index.php';
    </script>";
  }
?>
